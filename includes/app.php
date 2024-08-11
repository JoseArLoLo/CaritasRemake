<?php
require 'config/database.php';

define('TEMPLATES_URL', __DIR__ . '/templates');

function incluirTemplate(string $nombre, string $pagina = "")
{
    include TEMPLATES_URL . "/$nombre.php";
}
function estaAutenticado()
{
    session_start();
    if ($_SESSION['login']) {
        return true;
    }
    return false;
}
function logueado()
{
    session_start();
    if (!$_SESSION['login']) {
        header('Location: /');
    }
}
//Escapa / Sanitizar el HTML
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}
function debuguear($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function fecha($fecha, $year = true)
{
    // Extraer componentes de la fecha
    $componentes_fecha = explode("-", $fecha);
    $dia = $componentes_fecha[2];
    $mes = $componentes_fecha[1];
    $anio = $componentes_fecha[0];

    // Array con los nombres de los meses en español
    $meses_espanol = array(
        "01" => "enero",
        "02" => "febrero",
        "03" => "marzo",
        "04" => "abril",
        "05" => "mayo",
        "06" => "junio",
        "07" => "julio",
        "08" => "agosto",
        "09" => "septiembre",
        "10" => "octubre",
        "11" => "noviembre",
        "12" => "diciembre"
    );

    // Obtener el nombre del mes en español
    $mes_nombre = $meses_espanol[$mes];

    // Formatear la fecha
    $fecha_formateada = $dia . " de " . $mes_nombre;
    if ($year === true) {
        $fecha_formateada .= " de " . $anio;
    }
    return $fecha_formateada;
}
function indexar($contenido, $parrafos = 2)
{
    $pattern = '/(<p[^>]*>.*?<\/p>)/s';
    preg_match_all($pattern, $contenido, $matches);
    if (count($matches[0]) > $parrafos) {
        $first_three = implode('', array_slice($matches[0], 0, $parrafos));
        $remaining = implode('', array_slice($matches[0], $parrafos));
        $remaining_wrapped = '<div class="extra-content">' . $remaining . '</div>
                    <span class="toggle-link show-more-link">Leer más</span>
                    <span class="toggle-link show-less-link" style="display: none;">Leer menos</span>';
        $new_content = $first_three . $remaining_wrapped;
    } else {
        $new_content = $contenido;
    }

    return $new_content;
}
