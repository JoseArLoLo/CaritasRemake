<?php
require '../includes/app.php';
incluirTemplate("header", $pagina = "nosotros");
?>
<main>
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_3.avif" type="image/avif">
            <source srcset="/build/img/banner_3.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_3.png" alt="Banner caritas diocesana">
        </picture>
    </div>
    <section class="nosotros">
        <div class="nosotros_item">
            <div class="container">
                <p>Cáritas es una institución de asistencia privada, fundada en 1989 para promover la Caridad a nuestros hermanos más necesitados en la Diócesis de Culiacán, a través de programas en el área de Salud, Alimentación y Formación de valores.</p>
                <p>Son <?php echo (intval(date('Y')) - 1989); ?> años de amor al prójimo reflejado en acciones concretadas que representan más de <span class="bold">150,000</span> apoyos asistenciales al año, en diversas comunidades que componen nuestro Estado, sin importar su credo o procedencia.</p>
            </div>
            <div class="container">
                <picture>
                    <source srcset="/build/img/actividad_1.avif" type="image/avif">
                    <source srcset="/build/img/actividad_1.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/actividad_1.png" alt="Imagen nosotros 1">
                </picture>
            </div>
        </div>
        <div class="nosotros_item">
            <div class="container">
                <picture>
                    <source srcset="/build/img/actividad_5.avif" type="image/avif">
                    <source srcset="/build/img/actividad_5.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/actividad_5.png" alt="Imagen nosotros 2">
                </picture>
            </div>
            <div class="container">
                <p>Con el pasar de los años, hemos logrado la operación de programas de asistencia profesional, con alta rendición de cuentas y transparencia, que logra la confianza de bienhechores y voluntarios, que ponen su fe en nosotros para ayudar a los más desprotegidos.</p>
                <p class="bold">Somos un vínculo entre quienes tienen algo que dar y los más necesitados.</p>
            </div>
        </div>
        <div class="nosotros_item">
            <div class="container">
                <h3>Nuestra misión</h3>
                <p>Animar, coordinar y organizar la pastoral de la caridad de la Diócesis de Culiacán, a través de la cristiana comunicación de bienes, principalmente con servicios de asistencia social.</p>
            </div>
            <div class="container">
                <h3>Nuestra visión</h3>
                <p>Consolidarnos como una organización de la Iglesia Católica que en comunión con las parroquias y otras organizaciones de la sociedad civil promovemos de manera profesional y transparente la ayuda humanitaria.</p>
            </div>
        </div>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "nosotros");
?>