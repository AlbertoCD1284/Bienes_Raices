<?php    
    require 'includes/funciones.php';    
    // include './includes/templates/header.php';
    incluirTemplate('header', $inicio = true); 
?>

    <main class="contenedor">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, libero doloribus ipsum officia sunt laboriosam. Natus, quibusdam nostrum cum ea minima fugit debitis eaque facilis. Eaque soluta dicta dolore saepe corporis quam, tempore laudantium eum, officia labore fugiat! Non, doloribus.
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi asperiores, enim ad iure aliquam ratione, nobis cum aliquid, eum deserunt ipsa beatae est rem tempora voluptas consequatur mollitia ullam tempore minus? Molestiae deserunt vitae doloribus id aspernatur minima aperiam porro.
                </p>
            </div>
        
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus mollitia consequuntur porro ad qui quia voluptatem, maiores eaque eligendi, accusantium saepe sint fuga molestias voluptas, voluptatibus suscipit ducimus recusandae eum neque assumenda! Amet suscipit unde veniam esse officiis rem? Iure?
                </p>
                
            </div>        
            
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp" >
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg" >
                    <img src="build/img/anuncio1.jpg" alt="Anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Dolor sit amet consectetur adipisicing elit. Nulla saepe beatae tenetur nemo sunt.</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristica">
                        
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncios.html" class="boton boton-amarillo">
                        Ver Propiedad
                    </a>
                </div> <!-- .contenido-anuncio-->
            </div> <!-- .anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp" >
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg" >
                    <img src="build/img/anuncio2.jpg" alt="Anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Dolor sit amet consectetur adipisicing elit. Nulla saepe beatae tenetur nemo sunt.</p>
                    <p class="precio">$2,000,000</p>

                    <ul class="iconos-caracteristica">
                        
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncios.html" class="boton boton-amarillo">
                        Ver Propiedad
                    </a>
                </div> <!-- .contenido-anuncio-->
            </div> <!-- .anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp" >
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg" >
                    <img src="build/img/anuncio3.jpg" alt="Anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Piscina</h3>
                    <p>Dolor sit amet consectetur adipisicing elit. Nulla saepe beatae tenetur nemo sunt.</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristica">
                        
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncios.html" class="boton boton-amarillo">
                        Ver Propiedad
                    </a>
                </div> <!-- .contenido-anuncio-->
            </div> <!-- .anuncio-->
        </div> <!-- .contenedor-anuncios-->
        
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la Casa de Tus Sueños</h2>
        <p>
            Ipsum dolor sit amet consectetur adipisicing elit. Numquam, porro.
        </p>
        <div>
            <a href="contacto.html" class="boton-amarillo">Contactanos</a>
        </div>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blor">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="testo-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el Techo de tu Casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="testo-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.                
                </blockquote>
                <p>- Alberto Collazos</p>
            </div>
        </section>
    </div>
    
<?php
    incluirTemplate('footer');
?>    