<?php
require '../includes/app.php';
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
            <div class="menu-item active" data-content="salud">
                <picture>
                    <source srcset="/build/img/01_Salud.avif" type="image/avif">
                    <source srcset="/build/img/01_Salud.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/01_Salud.png" alt="Icono salud">
                </picture>
                <h3>Salud</h3>
            </div>
            <div class="menu-item" data-content="caritas-parroquial">
                <picture>
                    <source srcset="/build/img/02_Caritas_Parroquial.avif" type="image/avif">
                    <source srcset="/build/img/02_Caritas_Parroquial.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/02_Caritas_Parroquial.png" alt="Icono caritas parroquial">
                </picture>
                <h3>Cáritas parroquial</h3>
            </div>
            <div class="menu-item" data-content="alimentos">
                <picture>
                    <source srcset="/build/img/03_Alimentos.avif" type="image/avif">
                    <source srcset="/build/img/03_Alimentos.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/03_Alimentos.png" alt="Icono alimentos">
                </picture>
                <h3>Alimentos</h3>
            </div>
            <div class="menu-item" data-content="casos-especiales">
                <picture>
                    <source srcset="/build/img/04_Casos_Especiales.avif" type="image/avif">
                    <source srcset="/build/img/04_Casos_Especiales.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/04_Casos_Especiales.png" alt="Icono casos especiales">
                </picture>
                <h3>Casos especiales</h3>
            </div>
        </div>
        <div class="content active" id="salud">
            <div class="salud_item_1">
                <div class="item">
                    <h4>En el área de salud contamos con</h4>
                    <p>A estos consultorios así como a todos los programas de Cáritas puede asistir cualquier persona sin
                        importar su procedencia, credo o estatus socioeconómico. Las consultas son atendidas por médicos
                        certificados.</p>
                    <div class="item_container">
                        <div>
                            <picture>
                                <source srcset="/build/img/Dental.avif" type="image/avif">
                                <source srcset="/build/img/Dental.webp" type="image/webp">
                                <img loading="lazy" src="/build/img/Dental.png" alt="imagen diente">
                            </picture>
                            <p class="bold">Dos consultorios dentales</p>
                        </div>
                        <div>
                            <picture>
                                <source srcset="/build/img/Medicina-General.avif" type="image/avif">
                                <source srcset="/build/img/Medicina-General.webp" type="image/webp">
                                <img loading="lazy" src="/build/img/Medicina-General.png" alt="imagen medicina general">
                            </picture>
                            <p class="bold">Dos consultorios de <br class="jump"> medicina general</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/build/img/Imagen-Salud.avif" type="image/avif">
                        <source srcset="/build/img/Imagen-Salud.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/Imagen-Salud.png" alt="imagen dentista">
                    </picture>
                </div>
            </div>
            <div class="salud_item_2">
                <div class="item">
                    <h4>Farmacia</h4>
                    <p>Sabemos que la salud es un derecho básico por lo que nos propusimos que no haya personas sin posibilidad
                        de adquirir sus medicamentos por lo que en Cáritas hemos equipado una farmacia que suministra medicinas a un costo mínimo.</p>
                    <br>
                    <p>
                        La farmacia está ubicada en las oficinas centrales de Cáritas, además distribuimos medicamento a los dispensarios medicos ubicados en algunas parroquias de la diócesis.
                    </p>
                </div>
                <div class="item">
                    <h4>Apoyos especiales</h4>
                    <p>Existen en nuestra sociedad familias y personas que se ven limitadas por situaciones de salud o
                        transportación. </p>
                    <br>
                    <p>En Cáritas hemos destinado un presupuesto mensual para ayudar a aquellos en esta situación. Con un estudio previo y después de seleccionar a los más necesitados, apoyamos de manera profesional a personas que requieren asistencia médica o quirúrgica y a aquellos que desean llegar a su hogar.</p>
                </div>
            </div>
        </div>
        <div class="content" id="caritas-parroquial">
            <div class="caritas-parroquial_item_1">
                <div class="item">
                    <h4>¿Qué es un Caritas Parroquial?</h4>
                    <p>Las Cáritas Parroquiales, siendo parte de la Pastoral Social, están formadas por grupos de voluntarios de cada parroquia que, promovidos y animados por el Sacerdote y sensibilizados de la problemática de su comunidad, buscan ayudar a los más desprotegidos a través de programas permanentes que operan en las Parroquias como son: entrega de despensas. comedores comunitarios, consulta médica, dispensario médico, visita a los adultos mayores y enfermos, y, casos especiales.</p>
                    <p> Todo esto acompañado de una Evangelización integral con educación en valores y la familia. También promovemos la caridad, es decir somos un vínculo entre los que pueden ayudar y los que más lo necesitan, fomentando lo participación de las instituciones de asistencia, así como la vinculación a los diferentes programas de apoyo que existen en gobierno y otros instituciones.</p>
                </div>
                <div class="item">
                    <h4>Objetivo del programa</h4>
                    <p>Ofrecer una herramienta para el desarrollo del Plan de Pastoral Social en la Parroquias de lo Diócesis de Culiacán de San José. Mediante este modelo y apoyados con la formación y acompañamiento de Cáritas Diocesana buscamos desarrollar acciones organizadas y permanentes para atender a los más desprotegidos. </p>
                    <picture>
                        <source srcset="/build/img/frijojes.avif" type="image/avif">
                        <source srcset="/build/img/frijojes.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/frijojes.png" alt="imagen de plato de alimento">
                    </picture>
                </div>
            </div>
            <div class="parroquial_item_2">
                <div class="item">
                    <h4>Módulo de atención Caritas Parroquial</h4>
                    <p>Cáritas Parroquial es un modelo integral que pretende convertir a las comunidades en un motor de caridad cristiana, buscamos que las Córitas parroquiales sean la respuesta a una necesidad inmediata en una determinado situación: los hambrientos han de ser saciados, los desnudos vestidos, los enfermos atendidos para que se recuperen, los ancianos acompañados para que no vivan en soledad, etc. Cada una de las comunidades con conciencia caritativa ha de hacer lo posible para poner a disposición los medios necesarios para atenuar las necesidades existentes en sus propias comunidades.
                    </p>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/build/img/imagen-parroquial.avif" type="image/avif">
                        <source srcset="/build/img/imagen-parroquial.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/imagen-parroquial.png" alt="imagen caritas parroquial">
                    </picture>
                </div>
            </div>
        </div>

        <div class="content" id="alimentos">
            <h2>¿Qué es un banco de alimentos?</h2>
            <p>En México se desperdicia un 1/3 de los alimentos que se producen, que equivale a 20 millones de toneladas
                al año, mientras que por otro lado 1 de cada 4 mexicanos no tiene lo suficiente para comer, esto nos
                indica que el problema no radica en la escasez de alimentos, sino en su distribución.</p>
            <img src="/mnt/data/corte-3.png" alt="Banco de alimentos">
            <h3>Objetivo del programa</h3>
            <p>Atender la necesidad básica de alimento en personas que viven en situación de vulnerabilidad o en
                pobreza, redistribuyendo el alimento que se desperdicia en la sociedad, acompañado de acciones
                orientadas a mejorar el estado nutricional de la población atendida.</p>
            <p>A través del banco de alimentos, Cáritas otorga alrededor de 3,200 despensas al mes, en beneficio de las
                personas de menores recursos.</p>
            <p>Tenemos un comedor en Los Mochis que proporciona despensas y comida caliente a las personas de su área de
                influencia.</p>
        </div>

        <div class="content" id="casos-especiales">
            <h2>¿Cuáles son los casos especiales?</h2>
            <p>El programa de Casos Especiales, ofrece atención personalizada a personas de bajos recursos con
                necesidades específicas relacionadas con su salud personal, hospitalización de familiares, asesoría y
                acompañamiento en trámites para el bienestar, necesidad de equipo de rehabilitación y apoyo en consulta
                médica especializada.</p>
            <img src="/mnt/data/corte-4.png" alt="Casos especiales">
            <h3>¿Cuál es el procedimiento que se le da a un Caso Especial?</h3>
            <ul>
                <li>Entrevista inicial al solicitante.</li>
                <li>Aplicación de estudio socioeconómico.</li>
                <li>Integración de expediente.</li>
                <li>Solicitud de ayuda para medicamentos.</li>
                <li>Valoración del médico tratante o del trabajador social.</li>
                <li>Gestión de apoyo interno económico en especie.</li>
                <li>Enlace con otras instituciones.</li>
                <li>Llenado de expediente con apoyo otorgado.</li>
            </ul>
        </div>
    </section>
</main>
<?php
incluirTemplate("footer", $pagina = "que-hacemos");
?>