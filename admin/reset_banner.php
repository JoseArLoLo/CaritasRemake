<?php
require '../includes/app.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
// Definir la ruta del archivo del banner
$bannerPath = '../uploads/banner/banner.png';

// Verificar si el archivo existe
if (file_exists($bannerPath)) {
    // Eliminar el archivo
    unlink($bannerPath);
    // Redirigir a index.php
    header("Location: /admin");
} else {
    // Redirigir a dindex.php
    header("Location: /admin");
}

// Asegurarse de que no se ejecute ningún código adicional después de la redirección
exit();
?>