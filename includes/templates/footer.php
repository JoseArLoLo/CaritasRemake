<div class="footer_donar">
    <div class="content">
        <h1>Tu donativo AYUDA MÁS que 1,000 likes</h1>
        <a href="/donar">
            <picture>
                <source srcset="/build/img/donar_blanco.avif" type="image/avif">
                <source srcset="/build/img/donar_blanco.webp" type="image/webp">
                <img loading="lazy" src="/build/img/donar_blanco.png" alt="boton de donativo">
            </picture>
        </a>
    </div>
</div>
<footer>
    <div class="contenedor footer_container">
        <div class="footer_item">
            <h1>Contacto</h1>
            <a href="https://maps.app.goo.gl/gLqmjcNNTVppipHQ9">
                <p>Benito Juarez S/N Col. Centro</p>
                <p>C.P. 80000, Culiacan, Sinaloa, Mexico</p>
            </a>
        </div>
        <div class="footer_item">
            <div></div>
            <div>
                <a href="tel:6677157301">
                    <picture>
                        <source srcset="/build/img/Tel_Icon-05.avif" type="image/avif">
                        <source srcset="/build/img/Tel_Icon-05.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Tel_Icon-05.png" alt="Icono telefono">
                    </picture>
                    (667) 715 7301
                </a>
                <a href="tel:6677157242">
                    <picture>
                        <source srcset="/build/img/Tel_Icon-05.avif" type="image/avif">
                        <source srcset="/build/img/Tel_Icon-05.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Tel_Icon-05.png" alt="Icono telefono">
                    </picture>
                    (667) 715 7242
                </a>
            </div>
        </div>
        <div class="footer_item">
            <div class="icons">
                <a href="">
                    <picture>
                        <source srcset="/build/img/Facebook.avif" type="image/avif">
                        <source srcset="/build/img/Facebook.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Facebook.png" alt="Enlace hacia facebook">
                    </picture>
                </a>
                <a href="">
                    <picture>
                        <source srcset="/build/img/Instagram.avif" type="image/avif">
                        <source srcset="/build/img/Instagram.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Instagram.png" alt="Enlace hacia instagram">
                    </picture>
                </a>
                <a href="">
                    <picture>
                        <source srcset="/build/img/Twitter.avif" type="image/avif">
                        <source srcset="/build/img/Twitter.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Twitter.png" alt="Enlace hacia twitter ó x">
                    </picture>
                </a>
            </div>
            <div>
                <p>&#174;<?php echo date('Y'); ?>. Caritas Diocesana de Culiacan Todos los derechos reservados.</p>
                <p>Aviso de Privacidad.</p>
            </div>
        </div>
    </div>
</footer>
<script src="/build/js/header.js"></script>
<script src="/build/js/modernizr.js"></script>
<?php echo $pagina === "principal" ? '<script src="/build/js/nuestro-pan.js"></script>' : ''; ?>
<?php echo $pagina === "que-hacemos" ? '<script src="/build/js/que-hacemos.js"></script>' : ''; ?>
</body>

</html>