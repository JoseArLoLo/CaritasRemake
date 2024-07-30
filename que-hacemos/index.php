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
            <div class="menu-item <?php echo $id === 2 ? "active" : "" ?>" data-content="alimentos">
                <picture>
                    <source srcset="/build/img/03_Alimentos.avif" type="image/avif">
                    <source srcset="/build/img/03_Alimentos.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/03_Alimentos.png" alt="Icono alimentos">
                </picture>
                <h3>Alimentación</h3>
            </div>
            <div class="menu-item  <?php echo $id === 3 ? "active" : "" ?>" data-content="casos-especiales">
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
                            <source srcset="/build/img/01_Orientación médica.avif" type="image/avif">
                            <source srcset="/build/img/01_Orientación médica.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/01_Orientación médica.png" alt="Imagen 1">
                        </picture>
                        <picture>
                            <source srcset="/build/img/02_Consultorio dental.avif" type="image/avif">
                            <source srcset="/build/img/02_Consultorio dental.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/02_Consultorio dental.png" alt="Imagen 2">
                        </picture>
                        <picture>
                            <source srcset="/build/img/03_Farmacia.avif" type="image/avif">
                            <source srcset="/build/img/03_Farmacia.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/03_Farmacia.png" alt="Imagen 3">
                        </picture>
                        <picture>
                            <source srcset="/build/img/04_Programa familia.avif" type="image/avif">
                            <source srcset="/build/img/04_Programa familia.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/04_Programa familia.png" alt="Imagen 4">
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
            <div class="salud_item_3"></div>
        </div>
        <div class="content <?php echo $id === 2 ? "active" : "" ?>" id="alimentos">
            <div class="alimentos_item_1">
                <div class="item">
                    <h4>¿Qué es un banco de alimentos?</h4>
                    <p>En México se desperdicia un 1/3 de los alimentos que se producen, que equivale a 20 millones de toneladas
                        al año, mientras que por otro lado 1 de cada 4 mexicanos no tiene lo suficiente para comer, esto nos
                        indica que el problema no radica en la existencia de alimentos, si no en su distribución.</p>
                    <br>
                    <p>Es aquí cuando intervienen los Bancos de Alimentos, quienes se encargan de captar y rescatar este excedente de alimentos y hacerlos llegar a las personas que más lo necesitan para así combatir el hambre y mejorar la alimentación de miles de familias.</p>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/build/img/Imagen-Almentos.avif" type="image/avif">
                        <source srcset="/build/img/Imagen-Almentos.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Imagen-Almentos.png" alt="imagen alimentos">
                    </picture>
                </div>
            </div>
            <div class="alimentos_item_2">
                <div class="item">
                    <h4>Objetivo del programa</h4>
                    <p>Atender la necesidad básica de alimento en personas que viven en situación de vulnerabilidad a través del rescate y distribución de alimento de manera oportuna y profesional, acompañado de acciones de orientación nutricional, combatiendo el hambre y mejorando asi el estado nutricional de la población atendida.</p>
                </div>
                <div class="item">
                    <br class="jump">
                    <br class="jump">
                    <p>A través del banco de alimentos, Cáritas otorga alrededor de 3,200 despensas al mes, en beneficio de más de 10,000
                        personas de escasos recursos.</p>
                    <br>
                    <p class="color-red">Tenemos un comedor en Los Mochis que proporciona despensas y comida caliente a las personas de su área de
                        influencia.</p>
                </div>
            </div>
            <div class="alimentos_item_3">
                <div class="item">
                    <picture>
                        <source srcset="/build/img/Objetivo_del_programa.avif" type="image/avif">
                        <source srcset="/build/img/Objetivo_del_programa.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Objetivo_del_programa.png" alt="imagen objetivos del programa">
                    </picture>
                </div>
                <div class="item">
                    <p>Las empresas donan a Cáritas.</p>
                    <p>Cáritas va por el alimento, lo procesa, selecciona, clasifica y entrega a sus beneficiarios.</p>
                    <p>Gracias a tu donativo mejora la nutrición de muchos.</p>
                </div>
            </div>
            <div class="alimentos_item_4">
                <div class="item">
                    <h4>Nuestros Proyectos</h4>
                    <p><span class="bold">Despensas:</span> Entrega de paquetes alimenticios cada catorce dias o familias que viven en situación de carencia alimentaria.</p>
                    <br class="jump">
                    <p><span class="bold">Nutrición de la primera infancia:</span><br> intervención y monitoreo del estado nutricional de niños menores de 6 años que viven en situación de inseguridad alimentaria para disminuir los índices de mal nutrición y anemia en comunidades agrícolas del valle de Culiacán y Navolato.</p>
                    <br class="jump">
                    <p><span class="bold">Comedores comunitarios:</span><br> Entrega de comido preparada por grupos de voluntarios en comedores comunitarios instalados en parroquias a lo largo de la Diócesis de Culiacán.</p>
                </div>
                <div class="item">
                    <br class="jump"><br class="jump">
                    <p>
                        <span class="bold">Ubicaciones:</span><br>
                    <ul>
                        <li><span>San Bartolomé (Aguaruto. Culiacán)</span></li>
                        <li><span>Santisimo Sacramento (Culiacán)</span></li>
                        <li><span>Divina Misericordia (Culiacán)</span></li>
                        <li><span>Nuestra Señora del Carmen (Culiacán)</span></li>
                        <li><span>San Francisco de Asís (Navolato)</span></li>
                    </ul>
                    </p>
                    <br class="jump">
                    <p><span class="bold">Apoyos institucionales:</span><br> Entrega de alimento a instituciones que brindan servicios de alimentación, tales como: casas hogares, asilos para personas de la 3ra edad, comedores comunitarios, centros comunitarios de ayuda, clínicas de rehabilitación, entre otros.</p>
                </div>
            </div>
        </div>
        <div class="content <?php echo $id === 3 ? "active" : "" ?>" id="casos-especiales">
            <div class="casos-especiales_item_1">
                <div class="item">
                    <h4>¿Cuáles son los casos especiales?</h4>
                    <p>El programa de Casos Especiales, ofrece atención personalizada a personas de bajos recursos con
                        necesidades específicas relacionadas con su salud personal, hospitalización de familiares, asesoría y
                        acompañamiento en trámites para el bienestar, necesidad de equipo de rehabilitación y apoyo en consulta
                        médica especializada.</p>
                    <br class="jump">
                    <p class="bold">Este programa es el más abierto de nuestra organización.</p>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/build/img/Imagenes_Casos_Especiales.avif" type="image/avif">
                        <source srcset="/build/img/Imagenes_Casos_Especiales.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Imagenes_Casos_Especiales.png" alt="imagen casos especiales">
                    </picture>
                </div>
            </div>
            <div class="casos-especiales_item_2">
                <div class="item">
                    <h4>¿Cuál es el procedimiento que se le da a un Caso Especial?</h4>
                    <ul>
                        <li><span>Entrevista inicial al solicitante.</span></li>
                        <li><span>Aplicación de estudio socioeconómico.</span></li>
                        <li><span>Integración de expediente.</span></li>
                        <li><span>Solicitud de ayuda para medicamentos.</span></li>
                        <li><span>Valoración del médico tratante o del trabajador social.</span></li>
                        <li><span>Gestión de apoyo interno económico en especie.</span></li>
                        <li><span>Enlace con otras instituciones.</span></li>
                        <li><span>Llenado de expediente con apoyo otorgado.</span></li>
                    </ul>
                </div>
                <div class="item">
                    <h4>¿Qué se le ofrece a un Caso Especial?</h4>
                    <ul>
                        <li><span>Consultas de médico general y dental.</span></li>
                        <li><span>Estudios de laboratorio y gabinete.</span></li>
                        <li><span>Tratamiento farmacológico a los pacientes que lo requieran con previa evaluación.</span></li>
                        <li><span>Equipo de ortopedia de rehabilitación (sillas de ruedas, bastones, andaderas, etc.)</span></li>
                        <li><span>Atención médica domiciliaria a pacientes con enfermedades crónicas degenerativas con discapacidad fisica.</span></li>
                        <li><span>Acompañamiento espiritual con una celebración eucarística el primer sábado de cada mes.</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "que-hacemos");
?>