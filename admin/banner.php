<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}

//Arreglo con mensaje de errores
$errores = [];

$imagen = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imagen = $_FILES['imagen'];
    if (!$imagen) {
        $errores[] = "Debes añadir una imagen";
        $imagen = null;
    }

    if (empty($errores)) {
        //Crear carpeta en caso de no existir
        $carpeta = "../uploads/banner/";
        $subido = false;
        if (!is_dir($carpeta)) {
            mkdir($carpeta);
        }
        $nombreImagen = '';
        if ($imagen['name']) {
            $nombreImagen = "banner.png";
            move_uploaded_file($imagen['tmp_name'], $carpeta . $nombreImagen);
            $subido = true;
        }
        if ($subido) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=3');
        }
    }
}

incluirTemplate("header", $pagina = "crear");
?>
<main>
    <section class="edicion-actividad">
        <div class="informacion">
            <h3>Cambiar banner</h3>
            <div style="display: inline-block; ">
                <a href="/admin">Volver</a>
                <a href="/admin/reset_banner.php">Resetear banner</a>
            </div>
            <?php foreach ($errores as $error) : ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Banner a cargar</legend>
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
            </fieldset>

            <input type="submit" value="Cargar banner" class="boton">
        </form>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "crear");
?>