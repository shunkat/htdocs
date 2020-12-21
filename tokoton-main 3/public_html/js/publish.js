/*送信後の挙動を制御*/
$(function () {
    $('#form').submit(function () {
        $.ajax({
            url: $('#form').attr('action'),
            data: $('#form').serialize(),
            type: 'POST',
            dataType: 'xml',
            statusCode: {
                0: function () {
                    $('#form').hide();
                    $('body').find('#suc').show();
                },
                200: function () {
                    alert("失敗");
                }
            }
        });
    return false;
    });
});

$(function () {
    $('.about').change(function () {
        var r = $('option:selected').val();
        $('.about_hid').val(r);
    })
});

/*郵便番号の入力チェック*/
$(function () {
    $('.yubin').on('input', function () {
        var halfVal = $(this).val().replace(/[！-～]/g,
            function (tmpStr) {
                return String.fromCharCode(tmpStr.charCodeAt(0) - 0xFEE0);
            }
        );
        $(this).val(halfVal.replace(/[^0-9]/g, ''));
    })
});

/*電話番号の入力チェック*/
$(function () {
    $('.denwa').on('input', function () {
        var halfVal = $(this).val().replace(/[！-～]/g,
            function (tmpStr) {
                return String.fromCharCode(tmpStr.charCodeAt(0) - 0xFEE0);
            }
        );
        $(this).val(halfVal.replace(/[^-0-9]/g, ''));
    })
});

/*FAX番号の入力チェック*/
$(function () {
    $('.fax').on('input', function () {
        var halfVal = $(this).val().replace(/[！-～]/g,
            function (tmpStr) {
                return String.fromCharCode(tmpStr.charCodeAt(0) - 0xFEE0);
            }
        );
        $(this).val(halfVal.replace(/[^-0-9]/g, ''));
    })
});
