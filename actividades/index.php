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
    <div class="actividades">
        <div class="actividad">
            <div class="actividad-imagen"></div>
            <div class="actividad-content">
                <h3>Con gran emoción nos recibieron 300 niños para la llegada de los Reyes magos.</h3>    
                <p class="actividad-fecha">7 de enero de 2024</p>
                <p>Con gran emoción nos recibieron 300 niños de las comunidades Las Puentes, Batauto, Penjamo y Campo Pia de Navolato, a quienes les llevamos Los Reyes Magos.</p>
                <p>Iniciamos el día con oración grupal y adoración al Niño Jesús, para después recibir alimentos y entretenimiento.</p>
                <div class="extra-content">
                    <p>Tercer párrafo de la sección 1.</p>
                    <p>Cuarto párrafo de la sección 1.</p>
                </div>
                <p class="toggle-link show-more-link">Leer más</p>
                <p class="toggle-link show-less-link" style="display: none;">Leer menos</p>
            </div>
        </div>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "actividades");
?>