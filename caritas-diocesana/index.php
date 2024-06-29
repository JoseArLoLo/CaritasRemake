<?php
require '../includes/app.php';
incluirTemplate("header", $pagina = "caritas-diocesana");
?>
<main>
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_3.avif" type="image/avif">
            <source srcset="/build/img/banner_3.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_3.png" alt="Banner caritas diocesana">
        </picture>
    </div>
    <section class="separador-doble">
        <div class="item">
            <p>Cáritas es una institución de asistencia privada fundada en el año de 1989, que trabaja en promover la Caridad en nuestra Diócesis de Culiacán, a través de diversos programas de asistencia social y desarrollo humano, enfocados a los grupos más vulnerables de nuestra comunidad.</p>
            <p>En la Diócesis de Culiacán, Cáritas tiene <?php echo (intval(date('Y')) - 1989); ?> años ayudando a los más necesitados del centro y norte del estado.</p>
            <p>Desde 1989 se consolidó además civilmente como una institución de asistencia privada</p>
        </div>
        <div class="item item-image">
            <picture>
                <source srcset="/build/img/Imagen-CD_01.avif" type="image/avif">
                <source srcset="/build/img/Imagen-CD_01.webp" type="image/webp">
                <img loading="lazy" src="/build/img/Imagen-CD_01.png" alt="imagen caritas diocesana 1">
            </picture>
        </div>
    </section>
    <section class="separador-doble">
        <div class="item">
            <p>Atendemos a personas necesitadas de once municipios del estado de Sinaloa que abarca nuestra Diócesis de Culiacán, sin importar su procedencia, credo o nivel socioeconómico apoyándonos con programas de alimentación, salud, vestido y apoyos en casos especiales.</p>
            <p>Somos un vínculo entre quienes tienen algo que dar y los más necesitados a través de la donación de nuestros bienhechores, programas efectivos de apoyo a los desprotegidos, planes de voluntariado y acción social por medio de las parroquias de la Diócesis.</p>
        </div>
        <div class="item item-image">
            <picture>
                <source srcset="/build/img/Imagen-CD_02.avif" type="image/avif">
                <source srcset="/build/img/Imagen-CD_02.webp" type="image/webp">
                <img loading="lazy" src="/build/img/Imagen-CD_02.png" alt="imagen caritas diocesana 1">
            </picture>
        </div>
    </section>
    <section class="promocional">
        <div class="contenedor">
            <img src="/build/img/logo caritas.svg" alt="logo de la institucion">
            <div>
                <p class="bold">Animar, coordinar y organizar la pastoral de la caridad de la Diócesis de Culiacán, a través de la cristiana comunicación de bienes, principalmente con servicios de asistencia social.</p>
            </div>
            <img src="/build/img/logo caritas.svg" alt="logo de la institucion">
        </div>
    </section>
    <section class="mision-vision">
        <div class="item">
            <h4>Nuestra misión</h4>
            <p>Consolidarnos como una organización de la Iglesia Cátolica que en comunión con las parroquias y otras organizaciones de la sociedad civil promovemos de manera profesional y transparente la ayuda humanitaria.</p>
        </div>
        <div class="item">
            <h4>Nuestra visión</h4>
            <p>Es tu oportunidad de ayudar.</p>
        </div>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "caritas-diocesana");
?>