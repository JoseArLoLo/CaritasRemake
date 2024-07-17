<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
$db = conectarBD();

$query = "SELECT * FROM actividades ORDER BY id DESC";
$actividades = mysqli_query($db, $query);

// Funcionamiento del boton eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $table = "actividades";
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $carpetaImagenes = '../uploads/actividades/';
    unlink($carpetaImagenes . $_POST['imagen']);
    // Eliminar Entidad
    $query = "DELETE FROM $table WHERE id = $id";
    $resultado = mysqli_query($db, $query);
    if ($resultado) {
        header('location: /admin');
    }
}

incluirTemplate("header", $pagina = "admin");
?>
<main>
    <div class="tablero-admin">
        <h3>Tablero de administración</h3>
        <div class="menu">
            <a class="boton" href="/close-sesion.php">Cerrar Sesion</a>
            <a class="boton" href="/actividades/crear.php">Crear actividad</a>
            <a class="boton" href="/admin/banner.php">Cambiar banner</a>
            <a class="boton" href="/admin/donadores.php">Donadores</a>
        </div>
    </div>
    <div class="contenedor-tabla">
        <table class="tabla">
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Imagen</th>
                <th>Contenido</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php while ($actividad = mysqli_fetch_assoc($actividades)) : ?>
                    <tr>
                        <td><?php echo $actividad['id']; ?></td>
                        <td><?php echo $actividad['titulo']; ?></td>
                        <td><?php echo $actividad['fecha']; ?></td>
                        <td><img src="/uploads/actividades/<?php echo $actividad['imagen']; ?>" class="imagen-tabla"></td>
                        <td><?php echo $actividad['contenido']; ?></td>
                        <td class="edicion">
                            <form method="post" class="w-100">
                                <input type="hidden" name="id" value="<?php echo $actividad['id']; ?>">
                                <input type="hidden" name="imagen" value="<?php echo $actividad['imagen']; ?>">
                                <input type="submit" class="boton negro" value="Eliminar">
                            </form>
                            <a href="/actividades/actualizar.php?id=<?php echo $actividad['id']; ?>" class="boton rojo">Actualizar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "admin");
?>