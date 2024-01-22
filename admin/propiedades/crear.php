<?php    
    
    // Base de Datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Arreglo con mensajes de errores  
    $errores = [];
    
    // Con el if podemos ver si REQUEST_METHOD es POST o GET
    //Ejecutar el codigo despues q el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedores_id = $_POST['vendedores_id'];

        if (!$titulo) {
            $errores[] = "Debes añadir titulo";
        }
        if (!$precio) {
            $errores[] = "Ingresa un precio";
        }
        if ( strlen($descripcion) < 10) {
            $errores[] = "Debes describirlo y por lo menos debe tener 10 caracteres";
        }
        if (!$habitaciones) {
            $errores[] = "Debes añadir el numero de habitaciones";
        }
        if (!$wc) {
            $errores[] = "Debes añadir el numero de baños";
        }
        if (!$estacionamiento) {
            $errores[] = "Debes añadir el numero de estacionamiento";
        }
        if (!$vendedores_id) {
            $errores[] = "Elige un vendedor";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        

        // revisar q el arreglo de errores este vacio
        if (empty($errores)) {
            // Insertar en la base de datos
            $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id' ) ";
    
            // echo $query;
            $resultado = mysqli_query( $db, $query);
    
            if ($resultado) {
                echo "Insertado Correctamente";
            }
            
        }


        
    }
    
    
    require '../../includes/funciones.php';


    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/bienesraices/admin/index.php" class="boton boton-verde">Volver</a>
        

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        
        <form action="/bienesraices/admin/propiedades/crear.php" class="formulario" method="POST">
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" >

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion" cols="30" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" >

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" >

                <label for="estacionamiento">Estacionamientos</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" >
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedores_id" id="">
                    <option value="">---Selecciona---</option>
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