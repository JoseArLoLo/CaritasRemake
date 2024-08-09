<?php
require '../includes/app.php';
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    $id = 1;
}
incluirTemplate("header", $pagina = "que-hacemos");
?>
<main class="fondo-que-hacemos">
    <div class="banner">
        <picture>
            <source srcset="/build/img/banner_2.avif" type="image/avif">
            <source srcset="/build/img/banner_2.webp" type="image/webp">
            <img loading="lazy" src="/build/img/banner_2.png" alt="Banner que hacemos">
        </picture>
    </div>
    <section class="que-hacemos-acciones">
        <div class="menu">
            <div class="menu-item <?php echo $id === 1 ? "active" : "" ?>" data-content="salud">
                <picture>
                    <source srcset="/build/img/01_Salud.avif" type="image/avif">
                    <source srcset="/build/img/01_Salud.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/01_Salud.png" alt="Icono salud">
                </picture>
                <h3>Salud</h3>
            </div>
            <div class="menu-item <?php echo $id === 2 ? "active" : "" ?>" data-content="alimentacion">
                <picture>
                    <source srcset="/build/img/03_Alimentos.avif" type="image/avif">
                    <source srcset="/build/img/03_Alimentos.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/03_Alimentos.png" alt="Icono alimentos">
                </picture>
                <h3>Alimentación</h3>
            </div>
            <div class="menu-item  <?php echo $id === 3 ? "active" : "" ?>" data-content="formacion-valores">
                <picture>
                    <source srcset="/build/img/04_Casos_Especiales.avif" type="image/avif">
                    <source srcset="/build/img/04_Casos_Especiales.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/04_Casos_Especiales.png" alt="Icono casos especiales">
                </picture>
                <h3>Formación de valores</h3>
            </div>
        </div>
        <div class="content <?php echo $id === 1 ? "active" : "" ?>" id="salud">
            <div class="salud_item_1">
                <h3>Salud</h3>
                <div class="container">
                    <div class="salud_element_1">
                        <p>La salud es un derecho de vida fundamental de todos los seres humanos, que implica el acceso a servicios de cuidado médico y prevención de enfermedades.</p>
                        <p>En nuestra comunidad, la salud es una necesidad de nuestros hermanos muy palpable por nuestra institución, ya que dia a dia acuden a nosotros en busca de una respuesta a ese sufrimiento y angustia que sienten por si mismos o por su familiar.</p>
                        <p>Por lo que en Cáritas nos propusimos ofrecerles orientación médica, consulta dental, farmacia y el programa familia, que da atención especial por medio de trabajo social a situaciones de alta vulnerabilidad.</p>
                    </div>
                    <div class="salud_element_2">
                        <picture>
                            <source srcset="/build/img/01_Orientación-médica.avif" type="image/avif">
                            <source srcset="/build/img/01_Orientación-médica.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/01_Orientación-médica.png" alt="Imagen 1">
                        </picture>
                        <picture>
                            <source srcset="/build/img/02_Consultorio-dental.avif" type="image/avif">
                            <source srcset="/build/img/02_Consultorio-dental.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/02_Consultorio-dental.png" alt="Imagen 2">
                        </picture>
                        <picture>
                            <source srcset="/build/img/03_Farmacia.avif" type="image/avif">
                            <source srcset="/build/img/03_Farmacia.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/03_Farmacia.png" alt="Imagen 3">
                        </picture>
                        <picture>
                            <source srcset="/build/img/04_Programa-familia.avif" type="image/avif">
                            <source srcset="/build/img/04_Programa-familia.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/04_Programa-familia.png" alt="Imagen 4">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="salud_item_2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7243.224297941442!2d-107.39400603173823!3d24.808731071987815!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd0afe08ece95%3A0x36fa513a70a04c57!2sC%C3%A1ritas%20Diocesana%20de%20Culiac%C3%A1n!5e0!3m2!1ses-419!2smx!4v1722372257767!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="color-red">Dirección</p>
                <div class="container">
                    <div class="salud_element_1">
                        <a href="https://maps.app.goo.gl/gLqmjcNNTVppipHQ9">Benito Juárez S/N Col. Centro C.P 80000, Culiacán, Sinaloa, México</a>
                    </div>
                    <div class="salud_element_2">
                        <picture>
                            <source srcset="/build/img/Tel_Icon-05.avif" type="image/avif">
                            <source srcset="/build/img/Tel_Icon-05.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/Tel_Icon-05.png" alt="Icono telefono">
                        </picture>
                        <a href="tel:6677157301">(667) 715 7301</a>
                    </div>
                </div>
            </div>
            <div class="salud_item_3">
                <div class="container">
                    <div class="salud_element_1">
                        <h3>Programa Familia, apoyos especiales</h3>
                        <p>Existen en nuestra sociedad familias y personas con necesidad de mejorar su bienestar social y calidad de vida, prioritariamente en salud.</p>
                        <p>En Cáritas hemos destinado un presupuesto mensual para ayudar a aquellos en esta situación.</p>
                    </div>
                    <div class="salud_element_1">
                        <p>Con una evaluación previa y después de seleccionar a los más necesitados, apoyamos de manera profesional a personas que requieren asistencia médica, quirúrgica, emocional, defensa de sus derechos y alimentación.</p>
                        <p>Estos programas se ofrecen a cualquier persona sin importar su credo o procedencia, y es gracias a bienhechores que depositan su confianza en la misión de Cáritas y transparencia que hemos tenido año con año, que hemos logrado beneficiar a mas de 2,500 familias año con año.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content <?php echo $id === 2 ? "active" : "" ?>" id="alimentacion">
            <div class="alimentos_item_1">
                <div class="container">
                    <div class="alimentacion_element_1">
                        <p>En Sinaloa más de 600 mil personas viven en situación de pobreza y más de 500 mil de ellas carecen de acceso a una buena alimentación, por lo que sentimos el llamado de nuestras familias vulnerables.</p>
                        <p>En Cáritas somos sensibles a esta situación y entendemos la urgencia de este derecho fundamental de vida, cómo la necesidad básica de contar con Alimento de los hogares.</p>
                        <p>Por ello dimos vida a nuestro propio Banco de Alimentos, que tiene la tarea del rescate y distribución de alimento de manera oportuna y profesional, acompañado de acciones de orientación nutricional, combatiendo el hambre y mejorando asi el estado nutricional de nuestra comunidad.</p>
                    </div>
                    <div class="alimentacion_element_2">
                        <picture>
                            <source srcset="/build/img/01_Alimentacion-Imagen.avif" type="image/avif">
                            <source srcset="/build/img/01_Alimentacion-Imagen.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/01_Alimentacion-Imagen.png" alt="imagen alimentos">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="alimentos_item_2">
                <div class="container">
                    <div class="alimentacion_element_1">
                        <h3 class="center">Cómo lo hacemos</h3>
                    </div>
                    <div class="alimentacion_element_2">
                        <div class="container">
                            <picture>
                                <source srcset="/build/img/Objetivo_del_programa.avif" type="image/avif">
                                <source srcset="/build/img/Objetivo_del_programa.webp" type="image/webp">
                                <img loading="lazy" src="/build/img/Objetivo_del_programa.png" alt="imagen objetivos del programa">
                            </picture>
                            <div class="item">
                                <p>Rescatamos alimentos, Recibimos donaciones en especie.</p>
                                <p>Seleccionamos y clasificamos.</p>
                                <p>Entregamos al alimento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alimentos_item_3">
                <h3>Como apoyamos</h3>
                <div class="container">
                    <div class="alimentacion_element_1">
                        <p><span class="bold">Despensas:</span> Entregamos paquetes alimenticios cada catorce días a familias que viven en situación de carencia alimentaria.</p>
                        <p><span class="bold">Nutrición de la primera infancia:</span><br class="jump"> Intervenimos y monitoreamos el estado nutricional de niños menores de 6 años que viven en situación de inseguridad alimentaria para disminuir los índices de mal nutrición.</p>
                        <p><span class="bold">Apoyos institucionales:</span><br class="jump"> Entregamos alimento a instituciones que brindan servicios de alimentación, tales como: casas hogares, asilos para personas de la 3ra edad, centros comunitarios de ayuda, clínicas de rehabilitación, entre otros.</p>
                        <p><span class="bold">Comedores comunitarios:</span><br class="jump"> Entregamos alimento a comedores comunitarios para hacer posible el servicio que ofrecen a quienes carecen del alimento diario, algunos de ellos son:</p>
                        <ul>
                            <li><span>San Bartolomé (Aguaruto, Culiacán)</span></li>
                            <li><span>Santisimo Sacramento (Culiacán)</span></li>
                            <li><span>Divina Misericordia (Culiacán)</span></li>
                            <li><span>Nuestra Señora del Carmen (Culiacán)</span></li>
                            <li><span>San Francisco de Asis (Navolato)</span></li>
                        </ul>
                    </div>
                    <div class="alimentacion_element_2">
                        <p><span class="bold">Apoyos institucionales:</span><br class="jump"> Entregamos alimento a instituciones que brindan servicios de alimentación, tales como: casas hogares, asilos para personas de la 3ra edad, centros comunitarios de ayuda, clínicas de rehabilitación, entre otros.</p>
                        <picture>
                            <source srcset="/build/img/02_Alimentacion-Imagen.avif" type="image/avif">
                            <source srcset="/build/img/02_Alimentacion-Imagen.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/02_Alimentacion-Imagen.png" alt="imagen como apoyamos">
                        </picture>
                        <p class="color-red">A través del banco de alimentos, Cáritas otorga alrededor de 3,200 despensas mes con mes, en beneficio de más de 10,000 personas de escasos recursos.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content <?php echo $id === 3 ? "active" : "" ?>" id="formacion-valores">
            <div class="formacion-valores_item_1">
                <div class="container">
                    <div class="formacion-valores_element_1">
                        <p class="color-red">¿Qué es la formación de valores?</p>
                        <p>A medida que las familias buscan enriquecer la vida de sus hijos y fortalecer los vínculos familiares, la promoción de valores ofrece una oportunidad invaluable. Estos programas, al ofrecer una variedad de talleres diseñados para cultivar virtudes como la empatía, crear un entorno social y fomentar el trabajo en equipo, además de mejorar considerablemente el crecimiento personal de los niños, y asi promover una mayor unión familiar.</p>
                    </div>
                    <div class="formacion-valores_element_2">
                        <picture>
                            <source srcset="/build/img/01_FV_Imagen.avif" type="image/avif">
                            <source srcset="/build/img/01_FV_Imagen.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/01_FV_Imagen.png" alt="Formacion de valores imagen 1">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="formacion-valores_item_2">
                <div class="container">
                    <div class="formacion-valores_element_1">
                        <picture>
                            <source srcset="/build/img/02_FV_Imagen.avif" type="image/avif">
                            <source srcset="/build/img/02_FV_Imagen.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/02_FV_Imagen.png" alt="Formacion de valores imagen 1">
                        </picture>
                    </div>
                    <div class="formacion-valores_element_2">
                        <h3>¡Únete a nuestras actividades!</h3>
                        <p>Descubre la magia de aprender juntos en nuestros emocionantes talleres diseñados para madres y niños. Desde actividades que fortalecerán tu creatividad hasta emocionantes desafíos y mentales; nuestra programación ofrece una experiencia enriquecedora para toda la familia.</p>
                    </div>
                </div>
            </div>
            <div class="formacion-valores_item_3">
                <div class="container">
                    <div class="formacion-valores_element_1">
                        <h3>Conoce nuestros talleres</h3>
                        <p>En Cáritas contamos con diferentes tipos y variedad de talleres enfocados para niños, madres y familiar donde también pueden convivir con más personas y pasar un momento agradable.</p>
                        <picture>
                            <source srcset="/build/img/Iconos_Talleres.avif" type="image/avif">
                            <source srcset="/build/img/Iconos_Talleres.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/Iconos_Talleres.png" alt="Talleres disponibles">
                        </picture>
                    </div>
                    <div class="formacion-valores_element_2">
                        <h3>¿Deseas ser parte de algún taller?</h3>
                        <p>En Cáritas contamos con diferentes tipos y Si estas interesado(a) en inscribirte en alguno de ellos, dirígete al taller que deseas, revisa toda la información disponible para conocer nuestros horarios y disponibilidad, y contáctarnos por teléfono o acude a nuestras oficinas.</p>
                        <p>Únete a nosotros mientras exploramos, creamos recuerdos inolvidables y cultivamos conexiones duraderas.</p>
                        <p class="bold">IMPORTANTE: La disponibilidad de cada taller puede variar dependiendo de la demanda del mismo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "que-hacemos");
?>