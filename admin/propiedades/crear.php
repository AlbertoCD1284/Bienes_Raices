<?php    
    
    // Base de Datos
    require '../../includes/config/database.php';

    conectarDB();
    
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    
    require '../../includes/funciones.php';    
    // include './includes/templates/header.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/bienesraices/admin/index.php" class="boton boton-verde">Volver</a>

        <form action="/bienesraices/admin/propiedades/crear.php" class="formulario" method="POST">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" >

                <label for="descripcion">Descripcion</label>
                <textarea name="" id="descripcion" cols="30" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9" >

                <label for="wc">Baños</label>
                <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9" >

                <label for="estacionamientos">Estacionamientos</label>
                <input type="number" id="estacionamientos" placeholder="Ej: 3" min="1" max="9" >
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="" id="">
                    <option value="1">Alberto</option>
                    <option value="2">Claudia</option>
                </select>
                    
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    
<?php
    incluirTemplate('footer');
?>