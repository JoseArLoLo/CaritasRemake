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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = mysqli_real_escape_string($db, s($_POST['titulo']));
    $fecha = mysqli_real_escape_string($db, s($_POST['fecha']));
    $imagen = $_FILES['imagen'];
    $contenido = mysqli_real_escape_string($db, s($_POST['contenido']));

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
            move_uploaded_file($imagen['tmp_name'], $carpeta . $nombreImagen);
        }
        $query = "INSERT INTO `actividades` (`id`, `titulo`, `fecha`, `imagen`, `contenido`) VALUES (NULL, '$titulo', '$fecha', '$nombreImagen', '$contenido')";
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=1');
        }
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

                <label for="titulo">Titulo:</label>
                <input maxlength="400" type="text" id="titulo" name="titulo" placeholder="Titulo de la actividad" value="<?php echo $titulo; ?>">

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" placeholder="Fecha de la actividad" value="<?php echo $fecha; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="contenido">Contenido:</label>
                <textarea id="contenido" name="contenido" placeholder="Contenido de la actividad"><?php echo $contenido; ?></textarea>
            </fieldset>

            <input type="submit" value="Crear actividad" class="boton">
        </form>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "crear");
?>