<?php    
    require '../includes/funciones.php';    
    // include './includes/templates/header.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <a href="/bienesraices/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
    </main>
    
<?php
    incluirTemplate('footer');
?>