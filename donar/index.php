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
                <select class="element">
                    <option value="20">$20 pesos</option>
                    <option value="50">$50 pesos</option>
                    <option value="100">$100 pesos</option>
                    <option selected value="200">$200 pesos</option>
                    <option value="500">$500 pesos</option>
                </select>
                <input class="element" type="text" placeholder="Nombre">
                <input class="element" type="text" placeholder="Apellido paterno">
                <input class="element" type="text" placeholder="Apellido materno">
            </div>
            <div class="row">
                <select class="element">
                    <option>México</option>
                </select>
                <select class="element">
                    <option>CDMX</option>
                </select>
                <input class="element" type="text" data-conekta="card[number]" name="card" id="card" maxlength="16" placeholder="No. de tarjeta">
                <div class="subrow element">
                    <div class="innerrow element">
                        <input class="element" type="text" placeholder="mm">
                        <span class="element bold">/</span>
                        <input class="element" type="text" placeholder="aa">
                    </div>
                    <input class="element" type="text" placeholder="CVV">
                </div>
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
                </div>
            </div>
        </form>
        <div class="inferior">
            <h3>Oraremos para que cada donación a esta causa se convierta en miles de bendiciones para ti y tu familia, Gracias</h3>
        </div>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "donar");
?>