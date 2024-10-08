Conekta.setPublicKey("key_Mj1QTbILuGHuZqm70znFahZ"); // Llave publica de conekta
const overlay = document.getElementById("overlay");
const placeholder = '';
var invoiceCheck = document.getElementById('factura');
var mail = document.getElementById('email');
var otherAmount = document.getElementById('otherAmount');
var selectAmount = document.getElementById('amountSelect');
var totalInvoicement = document.getElementById('total');

selectAmount.addEventListener('change', function() { //Hacer esta wea de seleccionar otros
    if (selectAmount.value === '0') {
        otherAmount.setAttribute('required', '');
        otherAmount.classList.add('active');
        otherAmount.focus();

        selectAmount.removeAttribute('required');
        selectAmount.value = '';
    } else {
        otherAmount.removeAttribute('required');
        otherAmount.classList.remove('active');
        otherAmount.value = '';
        
        selectAmount.setAttribute('required', '');
        totalInvoicement.value = selectAmount.value;
    }
});

otherAmount.addEventListener('change', function() {
    totalInvoicement.value = otherAmount.value;
});

invoiceCheck.addEventListener('click', function() {
    if (invoiceCheck.checked) {
        mail.removeAttribute('hidden');
        mail.value = '';
    } else {
        mail.setAttribute('hidden', '');
        mail.value = '';
    }
});

var conektaSuccessResponseHandler = function (token) {
    $('#conektaTokenId').val(token.id);
    console.log(token.id);
    jsPay();
}

var conektaErrorResponseHandler = function (response) {
    var form = $('#card-form');
    alert('Hubo un error en los datos de la tarjeta');
    overlay.classList.remove("active");
}

$(document).ready(function () {
    $('#card-form').submit(function (e) {
        overlay.classList.add("active");
        if (!validarFormulario()) {
            e.preventDefault();
            overlay.classList.remove("active");
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
    let updatedParams = params.split('&').filter(param => !param.startsWith('amountSelect=') && !param.startsWith('otherAmount=')).join('&');
    let url = placeholder + 'pay.php';

    $.ajax({
        type: 'POST',
        url: url,
        data: updatedParams,
        success: function (data) {
            if (data == 1) {
                jsClean();
                alert('Tu pago se realizó con éxito');
                overlay.classList.remove("active");
                window.location.href = placeholder + 'agradecimiento.php';
                //Redirigir a la pantalla de agradecimiento
            } else {
                alert(data);
                overlay.classList.remove("active");
            }
        }
    });
}

function jsClean() {
    document.getElementById('name').value = '';
    document.getElementById('nombres').value = '';
    document.getElementById('apellido_paterno').value = '';
    document.getElementById('apellido_materno').value = '';
    document.getElementById('card').value = '';
    document.getElementById('exp_month').value = '';
    document.getElementById('exp_year').value = '';
    document.getElementById('cvc').value = '';
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