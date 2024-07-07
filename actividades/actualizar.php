<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
// Validar que sea un id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: /admin');
}

// Importar la conexion para cargar datos de tablero
$db = conectarBD();

// Obtener la variable en caso de existir
$consulta = "SELECT * FROM actividades WHERE id = $id ";
$resultado = mysqli_query($db, $consulta);
$variable = mysqli_fetch_assoc($resultado);

//Arreglo con mensaje de errores
$errores = [];

$titulo = $variable["titulo"];
$fecha = $variable["fecha"];
$imagenActual = $variable["imagen"];
$contenido = $variable["contenido"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = mysqli_real_escape_string($db, s($_POST['titulo']));
    $fecha = mysqli_real_escape_string($db, s($_POST['fecha']));
    $imagen = $_FILES['imagen'];
    $contenido = mysqli_real_escape_string($db, s($_POST['contenido']));

    if (!$titulo || empty(trim($titulo))) {
        $errores[] = "Debes añadir un titulo valido";
        $titulo = '';
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
        $nombreImagen = $imagenActual; // Usar la imagen actual por defecto

        if ($imagen['name']) {
            // Si hay una nueva imagen cargada
            $nombreImagen = md5(uniqid(rand(), true)) . ".png";
            // Eliminar la imagen antigua
            if (file_exists($carpeta . $imagenActual)) {
                unlink($carpeta . $imagenActual);
            }
            // Mover la nueva imagen
            move_uploaded_file($imagen['tmp_name'], $carpeta . $nombreImagen);
        }

        $query = "UPDATE actividades SET titulo = '$titulo', fecha = '$fecha', imagen = '$nombreImagen', contenido = '$contenido' WHERE `actividades`.`id` = '$id'";
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=2');
        }
    }
}

incluirTemplate("header", $pagina = "actualizar");
?>
<main>
    <section class="edicion-actividad">
        <div class="informacion">
            <h3>Actualizar Actividad</h3>
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
                <img src="/uploads/actividades/<?php echo $imagenActual; ?>" class="imagen-small">

                <label for="contenido">Contenido:</label>
                <textarea id="contenido" name="contenido" placeholder="Contenido de la actividad"><?php echo $contenido; ?></textarea>
            </fieldset>

            <input type="submit" value="Actualizar actividad" class="boton">
        </form>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "actualizar");
?>
