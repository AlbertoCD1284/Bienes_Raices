<?php    
    require 'includes/funciones.php';    
    // include './includes/templates/header.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>Iste perspiciatis voluptatem magnam alias inventore doloremque, esse a, aliquid possimus? Veniam, blanditiis magni, error distinctio quod at quaerat, aut iure quas ut et possimus facilis perspiciatis? Architecto quo debitis quis error inventore maxime, voluptate pariatur aspernatur tempore modi rerum aliquam iure nisi obcaecati provident adipisci maiores harum, praesentium iste illo voluptas molestias dolorum delectus? Suscipit minus omnis ipsam nostrum dolor sed in.
                
                <p>Magnam molestiae debitis porro similique officia maxime placeat culpa consequatur qui, suscipit dolorum eaque impedit quisquam temporibus sequi illum harum. Ex deleniti architecto fugit ea doloribus accusantium corporis dolores! Iste sunt sit ullam.

            </div>
        </div>
    </main>

    <section class="seccion contenedor">
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
    </section>
    
<?php
    include './includes/templates/footer.php';
?>    