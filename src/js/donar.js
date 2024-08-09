Conekta.setPublicKey("key_Mj1QTbILuGHuZqm70znFahZ"); // Llave publica de conekta

var conektaSuccessResponseHandler = function (token) {
    $('#conektaTokenId').val(token.id);
    console.log(token.id);
    jsPay();
    
}
var conektaErrorResponseHandler = function (response) {
    var form = $('#card-form');
    alert(response.message_to_purchaser);
}
$(document).ready(function () {
    $('#card-form').submit(function (e) {
        e.preventDefault();
        var form = $('#card-form');
        Conekta.Token.create(form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
    });
});

function jsPay() {
    let params = $('#card-form').serialize();
    let url = 'pay.php';

    $.ajax({
        type: 'POST',
        url: url,
        data: params,
        success: function (data) {
            if (data == 1) {
                alert('Tu pago se realizó con éxito');
                jsClean();
            } else {
                alert(data);
            }
        }
    });
}

function jsClean() {
    $('.form-control').prop('value', '');
    $('#conektaTokenId').prop('value', '');
}