<?php
require '../includes/app.php';
incluirTemplate("header", $pagina = "como-ayudar");
?>
<main class="fondo-gris">
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_4.avif" type="image/avif">
            <source srcset="/build/img/banner_4.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_4.png" alt="Banner como ayudar">
        </picture>
    </div>
    <section class="como-ayudar-section">
        <div class="como-ayudar_item" id="1">
            <div class="container">
                <picture>
                    <source srcset="/build/img/01_Dona-tu-tiempo.avif" type="image/avif">
                    <source srcset="/build/img/01_Dona-tu-tiempo.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/01_Dona-tu-tiempo.png" alt="Dona tu tiempo">
                </picture>
            </div>
            <div class="container">
                <h3>Dona tu tiempo</h3>
                <p>Realiza tu servicio social o voluntario en cualquiera de nuestras instalaciones de programas asistenciales, pregunta cómo.</p>
                <a class="informacion-dona-tiempo">Más información</a>
            </div>
        </div>
        <div class="como-ayudar_item" id="2">
            <div class="container">
                <picture>
                    <source srcset="/build/img/02_Dona-Recursos-Económicos.avif" type="image/avif">
                    <source srcset="/build/img/02_Dona-Recursos-Económicos.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/02_Dona-Recursos-Económicos.png" alt="Dona recursos económicos">
                </picture>
            </div>
            <div class="container">
                <h3>Dona recursos conómicos</h3>
                <p>Conviértete en un donante permanente o eventual aportando un importe económico, que se aprovechará para el buen funcionamiento de nuestra Institución y sus programas.</p>
                <a class="informacion-dona-recursos">Más información</a>
            </div>
        </div>
        <div class="como-ayudar_item" id="3">
            <div class="container">
                <picture>
                    <source srcset="/build/img/03_Dona-en-Especie.avif" type="image/avif">
                    <source srcset="/build/img/03_Dona-en-Especie.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/03_Dona-en-Especie.png" alt="Dona en especie">
                </picture>
            </div>
            <div class="container">
                <h3>Dona en especie</h3>
                <p>Aporta alimentos no perecederos, médicamentos, ropa o enseres domésticos para brindarles un mejor nivel de vida a nuestros beneficiarios.</p>
                <a class="informacion-dona-especie">Más información</a>
            </div>
        </div>
        <div class="como-ayudar_item" id="4">
            <div class="container">
                <picture>
                    <source srcset="/build/img/04_Apoya-como-empresa.avif" type="image/avif">
                    <source srcset="/build/img/04_Apoya-como-empresa.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/04_Apoya-como-empresa.png" alt="Apoya como empresa">
                </picture>
            </div>
            <div class="container">
                <h3>Apoya como empresa</h3>
                <p>Aporta económicamente, aporta tu donativo en especie, apoya con mantenimiento en instalaciones, integra tu equipo de voluntariado corporativo.</p>
                <a class="informacion-dona-empresa">Más información</a>
            </div>
        </div>
        <div class="como-ayudar_item" id="5">
            <div class="container esp">
                <picture>
                    <source srcset="/build/img/05_Apoya-como-profesionista.avif" type="image/avif">
                    <source srcset="/build/img/05_Apoya-como-profesionista.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/05_Apoya-como-profesionista.png" alt="Imagen apoya como profesionista">
                </picture>
            </div>
        </div>
        <div class="como-ayudar_item">
            <div class="container esp">
                <h3>Ayuda como profesionistas</h3>
                <p>Dona tus conocimientos, dona tu talento, dona tus habilidades.</p>
                <a class="informacion-dona-profesionista">Más información</a>
            </div>
        </div>
    </section>
    <div id="overlay"></div>
    <div class="informacion-ayudar dona-tu-tiempo">
        <picture>
            <source srcset="/build/img/01_PopUp_DonaTiempo.avif" type="image/avif">
            <source srcset="/build/img/01_PopUp_DonaTiempo.webp" type="image/webp">
            <img loading="eager" src="/build/img/01_PopUp_DonaTiempo.png" alt="Panel informativo 1">
        </picture>
        <a class="close-btn"></a>
    </div>
    <div class="informacion-ayudar dona-tus-recursos">
        <picture>
            <source srcset="/build/img/02_PopUp_DonaRecursos.avif" type="image/avif">
            <source srcset="/build/img/02_PopUp_DonaRecursos.webp" type="image/webp">
            <img loading="eager" src="/build/img/02_PopUp_DonaRecursos.png" alt="Panel informativo 2">
        </picture>
        <a class="close-btn"></a>
    </div>
    <div class="informacion-ayudar dona-en-especie">
        <picture>
            <source srcset="/build/img/03_PopUp_DonaEspecie.avif" type="image/avif">
            <source srcset="/build/img/03_PopUp_DonaEspecie.webp" type="image/webp">
            <img loading="eager" src="/build/img/03_PopUp_DonaEspecie.png" alt="Panel informativo 3">
        </picture>
        <a class="close-btn"></a>
    </div>
    <div class="informacion-ayudar apoya-como-empresa">
        <picture>
            <source srcset="/build/img/04_PopUp_ApoyoEmpresa.avif" type="image/avif">
            <source srcset="/build/img/04_PopUp_ApoyoEmpresa.webp" type="image/webp">
            <img loading="eager" src="/build/img/04_PopUp_ApoyoEmpresa.png" alt="Panel informativo 4">
        </picture>
        <a class="close-btn"></a>
    </div>
    <div class="informacion-ayudar apoya-como-profesionista">
        <picture>
            <source srcset="/build/img/05_PopUp_ApoyoProfesionista.avif" type="image/avif">
            <source srcset="/build/img/05_PopUp_ApoyoProfesionista.webp" type="image/webp">
            <img loading="eager" src="/build/img/05_PopUp_ApoyoProfesionista.png" alt="Panel informativo 5">
        </picture>
        <a class="close-btn"></a>
    </div>
</main>
<?php
incluirTemplate("footer", $pagina = "como-ayudar");
?>