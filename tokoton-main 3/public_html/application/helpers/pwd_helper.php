<?php
	function makePassword($length){
		
		// 乱数表のシードを決定
		srand((double)microtime() * 54234853);

		// パスワード文字列の配列を作成
		$pwelemstr = "abcdefghkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ2345679";
		$pwelem = preg_split("//", $pwelemstr, 0, PREG_SPLIT_NO_EMPTY);
		
		$password = "";
		
		for($i=0;$i<$length;$i++){
			// パスワード文字列を生成
			$password .= $pwelem[array_rand($pwelem, 1)];
		}
		return $password;
	}
	
	
	
?>