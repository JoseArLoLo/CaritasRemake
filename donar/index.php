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
            <div class="row">
                <select class="element">
                    <option>$200 pesos</option>
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
                <input class="element" type="text" placeholder="No. de tarjeta">
                <div class="subrow element">
                    <input class="element" type="text" placeholder="mm/aa">
                    <input class="element" type="text" placeholder="CVV">
                </div>
            </div>
            <p>Tu donativo es deducible de impuestos.</p>
            <div class="foot-row">
                <div class="element">
                    <input type="checkbox">
                    <label for="not-a-robot">I'm not a robot</label>
                </div>
                <div class="element">
                    <button type="submit">Donar ahora</button>
                    <div class="row terms">
                        <input type="checkbox">
                        <label for="terms">He leído y acepto los <a href="#">Términos y políticas de privacidad</a></label>
                    </div>
                </div>
            </div>
            <!--Monto-->
            <!--Nombre(s)-->
            <!--Apellido paterno-->
            <!--Apellido materno-->
            <!--Pais-->
            <!--Estado-->
            <!--No. de tarjeta-->
            <!--mm/aa-->
            <!--CVV-->
            <!--Leyenda de "Tu donativo es deducible de impuestos."-->
            <!--Boton de no soy un robot-->
            <!--Boton de donar ahora-->
            <!--Checkbox con he leido y acepto los terminos y politicas de privacidad-->
        </form>
        <div class="inferior">
            <h3>Oraremos para que cada donación a esta causa se convierta en miles de bendiciones para ti y tu familia, Gracias</h3>
        </div>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "donar");
?>