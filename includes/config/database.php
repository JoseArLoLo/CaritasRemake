<?php

function conectarBD(): mysqli
{
    # Server, User, Pass, DataBase
    // $db = mysqli_connect( 'localhost', 'root', 'root', 'caritas_rebuild' );
    $db = mysqli_connect('104.236.24.119', 'caritas', 'h3-j(W(9x97ZKYEgb9', 'caritas_db');
    if (!$db) {
        echo "Error no se pudo conectar";
        exit;
    }
    // Establecer la codificación de caracteres a utf8mb4
    if (!mysqli_set_charset($db, "utf8mb4")) {
        printf("Error cargando el conjunto de caracteres utf8mb4: %s\n", mysqli_error($db));
        exit();
    }

    return $db;
}
