<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
$db = conectarBD();

$query = "SELECT * FROM payment ORDER BY id DESC";
$donadores = mysqli_query($db, $query);
incluirTemplate("header", $pagina = "donadores");
?>
<main>
    <div class="tablero-admin">
        <h3>Tablero de donadores</h3>
        <div class="menu">
            <a class="boton" href="/admin">Volver</a>
        </div>
    </div>
    <div class="contenedor-tabla">
        <table class="tabla">
            <thead>
                <th>ID</th>
                <th>Donante</th>
                <th>Cantidad</th>
                <th>Fecha donacion</th>
                <th>Facturación</th>
                <th>Clave unica</th>
            </thead>
            <tbody>
                <?php while ($donante = mysqli_fetch_assoc($donadores)) : ?>
                    <tr>
                        <td><?php echo $donante['id']; ?></td>
                        <td><?php echo $donante['name']; ?></td>
                        <td><?php echo $donante['total']; ?></td>
                        <td><?php echo $donante['date_created']; ?></td>
                        <td><?php 
                            if ($donante['email'] === 'null@correo.com' || $donante['email'] === 'correo@correo.com') { echo "No solicitada";  }else { echo $donante['email']; }
                        ?></td>
                        <td><?php echo $donante['order_id']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "donadores");
?>