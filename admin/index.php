<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
incluirTemplate("header", $pagina = "admin");
?>
<main>
    <div class="tablero-admin">
        <h3>Tablero de administración</h3>
        <div class="menu">
            <a class="boton" href="/close-sesion.php">Cerrar Sesion</a>
        </div>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "admin");
?>