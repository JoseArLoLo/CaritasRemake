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
        if (!validarFormulario()) {
            e.preventDefault();
            return;
        } else {
            e.preventDefault();
            combinarNombres();
            var form = $('#card-form');
            Conekta.Token.create(form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
        }
    });
});

function jsPay() {
    let params = $('#card-form').serialize();
    let url = 'donar/pay.php';

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
function validarFormulario() {
    // Obtén el checkbox
    var checkbox = document.getElementById('terminos');

    // Verifica si está marcado
    if (!checkbox.checked) {
        alert("Debes aceptar los términos y condiciones para continuar");
        return false;
    }
    return true;
}
function combinarNombres() {
    // Obtén los valores de los campos de nombre
    var nombres = document.getElementById('nombres').value;
    var apellidoPaterno = document.getElementById('apellido_paterno').value;
    var apellidoMaterno = document.getElementById('apellido_materno').value;

    // Combina los nombres en un solo campo
    var nombreCompleto = nombres + ' ' + apellidoPaterno + ' ' + apellidoMaterno;

    // Asigna el valor combinado al campo oculto con data-conekta="card[name]"
    document.getElementById('name').value = nombreCompleto;
}