<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
$db = conectarBD();

$query = "SELECT * FROM actividades";
$actividades = mysqli_query($db, $query);

incluirTemplate("header", $pagina = "admin");
?>
<main>
    <div class="tablero-admin">
        <h3>Tablero de administración</h3>
        <div class="menu">
            <a class="boton" href="/close-sesion.php">Cerrar Sesion</a>
            <a class="boton" href="/actividades/crear.php">Crear actividad</a>
            <a class="boton" href="#">Donadores</a>
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
            </thead>
            <tbody>
                <?php while ($actividad = mysqli_fetch_assoc($actividades)) : ?>
                    <tr>
                        <td><?php echo $actividad['id']; ?></td>
                        <td><?php echo $actividad['titulo']; ?></td>
                        <td><?php echo $actividad['fecha']; ?></td>
                        <td><?php echo $actividad['imagen']; ?></td>
                        <td><?php echo $actividad['contenido']; ?></td>
                        <td>
                            <form method="post" class="w-100">
                                <input type="hidden" name="id" value="<?php echo $actividad['id']; ?>">
                                <input type="hidden" name="data" value="actividades">
                                <input type="hidden" name="image" value="<?php echo $actividad['imagen']; ?>">
                                <input type="submit" class="boton-negro-block" value="Eliminar">
                            </form>
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