<?php
require '../includes/app.php';
incluirTemplate("header", $pagina = "agradecimiento");
?>
<main id="agradecimiento">
    <!-- <h3>MUCHAS GRACIAS POR TU DONACION</h3> -->
    <picture>
        <source srcset="/build/img/agradecimiento.avif" type="image/avif">
        <source srcset="/build/img/agradecimiento.webp" type="image/webp">
        <img loading="eager" src="/build/img/agradecimiento.png" alt="Imagen de agradecimiento">
    </picture>
</main>
<?php
incluirTemplate("footer", $pagina = "agradecimiento");
?>