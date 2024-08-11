<?php
require '../includes/app.php';
$db = conectarBD();
$query = "SELECT * FROM actividades ORDER BY id DESC";
$actividades = mysqli_query($db, $query);
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
        <?php while ($actividad = mysqli_fetch_assoc($actividades)) : ?>
            <div class="actividad" id="<?php echo $actividad["id"] ?>">
                <div class="actividad-imagen">
                    <picture>
                        <img loading="lazy" src="/uploads/actividades/<?php echo $actividad["imagen"] ?>" alt="Imagen de actividad">
                    </picture>
                </div>
                <div class="actividad-content">
                    <h3><?php echo $actividad["titulo"] ?></h3>
                    <p class="actividad-fecha"><?php echo fecha($actividad["fecha"], $year = true); ?></p>
                    <?php
                        echo indexar($actividad['contenido'], 2);
                    ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "actividades");
?>