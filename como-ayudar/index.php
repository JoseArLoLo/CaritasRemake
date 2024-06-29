<?php
require '../includes/app.php';
incluirTemplate("header", $pagina = "como-ayudar");
?>
<main>
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_4.avif" type="image/avif">
            <source srcset="/build/img/banner_4.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_4.png" alt="Banner como ayudar">
        </picture>
    </div>
    <section class="separador-doble esp">
        <div class="item item-info">
            <picture>
                <source srcset="/build/img/01_Dona-tu-tiempo.avif" type="image/avif">
                <source srcset="/build/img/01_Dona-tu-tiempo.webp" type="image/webp">
                <img loading="lazy" src="/build/img/01_Dona-tu-tiempo.png" alt="Dona tu tiempo">
            </picture>
            <div class="contenedor">
                <h4>Dona tu tiempo</h4>
                <p>Realiza tu servicio social o voluntario en cualquiera de nuestras instalaciones de programas asistenciales, pregunta cómo.</p>
            </div>
        </div>
        <div class="item item-info">
            <picture>
                <source srcset="/build/img/02_Dona-Recursos-Económicos.avif" type="image/avif">
                <source srcset="/build/img/02_Dona-Recursos-Económicos.webp" type="image/webp">
                <img loading="lazy" src="/build/img/02_Dona-Recursos-Económicos.png" alt="Dona recursos económicos">
            </picture>
            <div class="contenedor">
                <h4>Dona recursos conómicos</h4>
                <p>Conviértete en un donante permanente o eventual aportando un importe económico, que se aprovechará para el buen funcionamiento de nuestra Institución y sus programas.</p>
            </div>
        </div>
        <div class="item item-info">
            <picture>
                <source srcset="/build/img/03_Dona-en-Especie.avif" type="image/avif">
                <source srcset="/build/img/03_Dona-en-Especie.webp" type="image/webp">
                <img loading="lazy" src="/build/img/03_Dona-en-Especie.png" alt="Dona en especie">
            </picture>
            <div class="contenedor">
                <h4>Dona en especie</h4>
                <p>Aporta alimentos no perecederos, médicamentos, ropa o enseres domésticos para brindarles un mejor nivel de vida a nuestros beneficiarios.</p>
            </div>
        </div>
        <div class="item item-info">
            <picture>
                <source srcset="/build/img/04_Apoya-como-empresa.avif" type="image/avif">
                <source srcset="/build/img/04_Apoya-como-empresa.webp" type="image/webp">
                <img loading="lazy" src="/build/img/04_Apoya-como-empresa.png" alt="Apoya como empresa">
            </picture>
            <div class="contenedor">
                <h4>Apoya como empresa</h4>
                <p>Aporta económicamente, aporta tu donativo en especie, apoya con mantenimiento en instalaciones, integra tu equipo de voluntariado corporativo.</p>
            </div>
        </div>
        <div class="item">
            <picture>
                <source srcset="/build/img/05_Apoya-como-profesionista.avif" type="image/avif">
                <source srcset="/build/img/05_Apoya-como-profesionista.webp" type="image/webp">
                <img loading="lazy" src="/build/img/05_Apoya-como-profesionista.png" alt="Imagen apoya como profesionista">
            </picture>
        </div>
        <div class="item item-text">
            <div class="contenedor">
                <h4>Ayuda como profesionistas</h4>
                <p>Dona tus conocimientos, dona tu talento, dona tus habilidades.</p>
            </div>
        </div>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "como-ayudar");
?>