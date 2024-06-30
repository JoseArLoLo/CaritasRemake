<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina web oficial de caritas lomita I.A.P">
    <title>Cáritas Diocesana de Culiacán</title>
    <link rel="preload" href="/build/css/app.css" as="style">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="shortcut icon" href="/build/img/logo caritas.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="header_nav">
            <a href="/" class="header_nav_logo">
                <center>
                    <picture>
                        <source srcset="/build/img/logo.avif" type="image/avif">
                        <source srcset="/build/img/logo.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/logo.png" alt="Caritas, Ayuda a los mas necesitados">
                    </picture>
                </center>
            </a>
            <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="Icono Responsive">
            </div>
            <ul class="header_nav_opciones">
                <li><a <?php echo $pagina === "que-hacemos" ? 'class="active"' : '';?> href="/que-hacemos?id=1">¿Qué hacemos?</a></li>
                <li><a <?php echo $pagina === "caritas-diocesana" ? 'class="active"' : '';?> href="/caritas-diocesana">Cáritas Diocesana</a></li>
                <li><a <?php echo $pagina === "como-ayudar" ? 'class="active"' : '';?> href="/como-ayudar">¿Cómo ayudar?</a></li>
                <li><a href="">Actividades</a></li>
                <li class="header_nav_donar">
                    <center>
                        <a href="/donar">
                            <picture>
                                <source srcset="/build/img/donar.avif" type="image/avif">
                                <source srcset="/build/img/donar.webp" type="image/webp">
                                <img loading="lazy" src="/build/img/donar.png" alt="Boton de donación">
                            </picture>
                        </a>
                    </center>
                </li>
            </ul>
        </nav>
    </header>