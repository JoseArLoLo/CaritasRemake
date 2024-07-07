<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}

// Importar la conexion para cargar datos de tablero
$db = conectarBD();

//Arreglo con mensaje de errores
$errores = [];

$titulo = '';
$fecha = '';
$imagen = '';
$contenido = '';
$creador = 'admin';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = mysqli_real_escape_string($db, s($_POST['titulo']));
    $fecha = mysqli_real_escape_string($db, s($_POST['fecha']));
    $imagen = $_FILES['imagen'];
    $contenido = mysqli_real_escape_string($db, s($_POST['contenido']));
    $creador = 'admin';

    if (!$titulo || empty(trim($titulo))) {
        $errores[] = "Debes añadir un titulo valido";
        $titulo = '';
    }
    if (!$imagen) {
        $errores[] = "Debes añadir una imagen";
        $imagen = null;
    }
    if (!$fecha || empty(trim($fecha))) {
        $errores[] = "Debes añadir una fecha para esta actividad";
        $fecha = '';
    }
    if (!$contenido || empty(trim($contenido))) {
        $errores[] = "Debes añadir contenido para esta actividad";
        $contenido = '';
    }

    if (empty($errores)) {
        //Crear carpeta en caso de no existir
        $carpeta = "../uploads/actividades/";
        if (!is_dir($carpeta)) {
            mkdir($carpeta);
        }
        $nombreImagen = '';
        if ($imagen['name']) {
            $nombreImagen = md5(uniqid(rand(), true)) . ".png";
            move_uploaded_file($image['tmp_name'], $carpetaImagenes . $nombreImagen);
        }
        $query = "INSERT INTO `actividades` (`id`, `titulo`, `fecha`, `imagen`, `contenido`, `publicador`) VALUES (NULL, '$titulo', '$fecha', '$nombreImagen', '$contenido', '$creador')";
        $resultado = mysqli_query($db, $query);
    }
}

incluirTemplate("header", $pagina = "crear");
?>
<main>
    <section class="edicion-actividad">
        <div class="informacion">
            <h3>Crear Actividad</h3>
            <a href="/admin">Volver</a>
            <?php foreach ($errores as $error) : ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion necesaria</legend>

                <label for="title">Titulo:</label>
                <input maxlength="45" type="text" id="title" name="title" placeholder="Titulo del evento" value="<?php echo $title; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="description">Descripcion:</label>
                <textarea maxlength="250" id="description" name="description" placeholder="Descripcion del evento"><?php echo $description; ?></textarea>

                <label for="content">Contenido:</label>
                <textarea id="content" name="content" placeholder="Contenido de la vista"><?php echo $content; ?></textarea>

                <label for="due">Fecha:</label>
                <input type="date" id="due" name="due" placeholder="Fecha tentativa del evento" value="<?php echo $due; ?>">
            </fieldset>

            <input type="submit" value="Crear evento" class="boton-rojo">
        </form>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "crear");
?>