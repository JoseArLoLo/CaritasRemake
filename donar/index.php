<?php
require '../includes/app.php';
incluirTemplate("header", $pagina = "donar");
?>
<main>
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_6.avif" type="image/avif">
            <source srcset="/build/img/banner_6.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_6.png" alt="Banner donativos">
        </picture>
    </div>
    <div class="donativo">
        <div class="superior">
            <h3>¿Cuánto puedes donar?</h3>
            <p>Todas las donaciones impactan en nuestra organización.</p>
            <p class="leyenda">¿Quién es el donante? <span>Nunca compartiremos esta información.</span></p>
        </div>
        <form action="#" method="post" class="donacion" id="card-form">
            <input type="hidden" name="conektaTokenId" id="conektaTokenId" value="">
            <div class="row">
                <div class="element">
                    <select class="" name="amountSelect" id="amountSelect" required>
                        <option value="50">$50 pesos</option>
                        <option value="100">$100 pesos</option>
                        <option selected value="200">$200 pesos</option>
                        <option value="500">$500 pesos</option>
                        <option value="1000">$1000 pesos</option>
                        <option value="0">Otra cantidad</option>
                    </select>
                    <input class="inner_input" type="number" name="otherAmount" id="otherAmount" min="25">
                </div>
                <input type="hidden" data-conekta="card[name]" type="text" id="name" name="name">
                <input class="element" id="nombres" type="text" placeholder="Nombre" required>
                <input class="element" id="apellido_paterno" type="text" placeholder="Apellido paterno" required>
                <input class="element" id="apellido_materno" type="text" placeholder="Apellido materno">
            </div>
            <div class="row">
                <input class="element" type="text" data-conekta="card[number]" name="card" id="card" maxlength="16" placeholder="No. de tarjeta" required>
                <div class="subrow element">
                    <div class="innerrow element">
                        <input class="element" data-conekta="card[exp_month]" id="exp_month" type="text" placeholder="mm" required>
                        <span class="element bold">/</span>
                        <input class="element" data-conekta="card[exp_year]" id="exp_year" type="text" placeholder="aa" required>
                    </div>
                    <input class="element" type="text" maxlength="4" data-conekta="card[cvc]" id="cvc" placeholder="CVV" required>
                </div>
                <input type="email" name="email" id="email" maxlength="200" placeholder="Correo electronico" hidden>
                <!-- <select class="element" hidden required>
                    <option>México</option>
                </select>
                <select class="element" hidden required>
                    <option>CDMX</option>
                </select> -->
                <input type="text" hidden name="description" id="description" value="Donativo" required>
                <input type="number" hidden name="total" id="total" min="0" max="1000000">
            </div>
            <p>Tu donativo es deducible de impuestos.</p>
            <div class="foot-row">
                <div class="element"> <!--I'm not a robot button-->
                </div>
                <div class="element">
                    <button type="submit">
                        <picture>
                            <source srcset="/build/img/Boton_Donar_Ahora.avif" type="image/avif">
                            <source srcset="/build/img/Boton_Donar_Ahora.webp" type="image/webp">
                            <img loading="eager" src="/build/img/Boton_Donar_Ahora.png" alt="Boton donar ahora">
                        </picture>
                    </button>
                    <div class="terms">
                        <input type="checkbox" name="terminos" id="terminos">
                        <label for="terminos">He leído y acepto los <a href="#">Términos y políticas de privacidad</a></label>
                    </div>
                    <div class="invoice">
                        <input type="checkbox" name="factura" id="factura">
                        <label for="factura">Solititar factura</label>
                    </div>
                </div>
            </div>
        </form>
        <div id="overlay" class="all"></div>
        <div class="inferior">
            <h3>Oraremos para que cada donación a esta causa se convierta en miles de bendiciones para ti y tu familia, Gracias</h3>
        </div>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "donar");
?>