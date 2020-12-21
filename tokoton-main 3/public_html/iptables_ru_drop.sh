#!/bin/sh

#----------------------------------------------------------#
# 変数                                                     #
#----------------------------------------------------------#


#フィルタ定義出力ファイル名
WK_FILE="/var/www/access_deny/df_iptables`date "+%Y%m%d%H%M%S"`"
#WK_FILE="/var/www/access_deny/df_iptables"

# ダウンロードしたIPリストの保存先ディレクトリ
CACHE_DIR="/var/www/access_deny/iplist/"

# 拒否 ロシア
DROP_COUNTRY_CODE="RU"

IPTABLES=/sbin/iptables

#----------------------------------------------------------#
# 処理開始 -デフォルトフィルタ-
#----------------------------------------------------------#

cat <<EOT >$WK_FILE
#
# ロシア不正アタック対応iptables 処理開始 `date "+%Y/%m/%d %T"`
#

*filter
:INPUT ACCEPT [0:0]
:FORWARD ACCEPT [0:0]
:OUTPUT ACCEPT [0:0]
:DROP_FILTER - [0:0]

#--(外からの)受信：全許可
-P INPUT ACCEPT
#--(中からの)送信：全許可
-P OUTPUT ACCEPT
#--通過(転送?)：必要かわからないけど一応全許可
-P FORWARD ACCEPT
# 接続中のパケットを切断しない
-A INPUT -m state --state ESTABLISHED,RELATED -j ACCEPT
-A OUTPUT -m state --state NEW,ESTABLISHED -j ACCEPT
-A FORWARD -m state --state ESTABLISHED,RELATED -j ACCEPT


EOT

#----------------------------------------------------------#
# ファイルダウンロード
#----------------------------------------------------------#

NOW_DATE=`date "+#%Y/%m/%d %T"`
echo "# ダウンロード開始 `date "+#%Y/%m/%d %T"` " >>$WK_FILE

WGET="/usr/bin/wget -N --retr-symlinks -P ${CACHE_DIR}"

#アジア
#$WGET ftp://ftp.apnic.net/pub/stats/apnic/delegated-apnic-extended-latest
#北中南米
#$WGET ftp://ftp.arin.net/pub/stats/arin/delegated-arin-extended-latest
#ヨーロッパ?
$WGET ftp://ftp.ripe.net/pub/stats/ripencc/delegated-ripencc-extended-latest
#ラテンアメリカ、カリブ海
#$WGET ftp://ftp.lacnic.net/pub/stats/lacnic/delegated-lacnic-extended-latest
#アフリカ
#$WGET ftp://ftp.afrinic.net/pub/stats/afrinic/delegated-afrinic-extended-latest

echo "# ダウンロード終了 `date "+#%Y/%m/%d %T"` " >>$WK_FILE


#----------------------------------------------------------#
# 関数:国別フィルタ作成
#----------------------------------------------------------#


cat <<EOT >>$WK_FILE
# DROP定義
-A INPUT -j DROP_FILTER
-A FORWARD -j DROP_FILTER
-A OUTPUT -j DROP_FILTER

EOT

BUILD_COUNTRY(){
  if [ ! -s $CACHE_DIR$1 ] || [ ! $2 ];then return;fi
  echo "LOAD:	$1"
  for line in `cat $CACHE_DIR$1 | grep -E "\|($2)\|ipv4\|"`
  do
    #[CN]
    CODE=`echo $line | cut -d "|" -f 2`
    #[1.1.1.1]
    ADDR=`echo $line | cut -d "|" -f 4`
    #[512,2048・・・]
    TEMP=`echo $line | cut -d "|" -f 5`
    CIDR=32
    #ネットマスクの計算
    while [ $TEMP -ne 1 ]; do
      TEMP=`expr "$TEMP" / 2`
      CIDR=`expr "$CIDR" - 1`
    done

cat <<EOT >>$WK_FILE
# $CODE
-A DROP_FILTER -s $ADDR/$CIDR -j DROP
EOT
      echo $CODE $ADDR
  done

}

#関数呼び出し
BUILD_COUNTRY "delegated-ripencc-extended-latest" $DROP_COUNTRY_CODE

echo "COMMIT" >>$WK_FILE

#フィルタ全削除
#/sbin/iptables -F

#作ったファイルでiptableを更新
/sbin/iptables-restore <$WK_FILE

#設定したフィルタを表示
/sbin/iptables -L -n

#後からだけどファイルに終了行を追加
cat <<EOT >>$WK_FILE
#iptables-restore実施完了

#
# ロシア不正アタック対応iptables 処理終了 `date "+%Y/%m/%d %T"`
#
EOT

