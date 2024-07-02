<?php
require '../includes/app.php';
incluirTemplate("header", $pagina = "actividades");
?>
<main>
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_5.avif" type="image/avif">
            <source srcset="/build/img/banner_5.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_5.png" alt="Banner actividades">
        </picture>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "actividades");
?>