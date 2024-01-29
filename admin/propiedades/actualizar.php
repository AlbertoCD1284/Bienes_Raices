<?php

    // Validar la URL por ID valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /bienesraices/admin/index.php');
    }

   

    // Base de Datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Obtener los datos de la propiedad

    $consulta = "SELECT * FROM propiedades WHERE id = '$id'";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);

    //Consulta para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores  
    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedores_id = $propiedad['vendedores_id'];
    $imagenPropiedad = $propiedad['imagen'];
    
    // Con el if podemos ver si REQUEST_METHOD es POST o GET
    //Ejecutar el codigo despues q el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";        

        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";
       
       
        $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );
        $precio = mysqli_real_escape_string( $db, $_POST['precio'] );
        $descripcion = mysqli_real_escape_string( $db,  $_POST['descripcion'] );
        $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones'] );
        $wc = mysqli_real_escape_string( $db, $_POST['wc'] );
        $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento'] );
        $vendedores_id = mysqli_real_escape_string( $db, $_POST['vendedores_id'] );
        $creado = date('Y/m/d');

        // Asignar files "archivos" hacia una variable
        $imagen = $_FILES['imagen'];        
        

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

        
        // Validar por tamaño (1 mb maximo)
        $medida = 100000 * 100000;
        if ($imagen['size'] > $medida) {
            $errores[] = 'La imagen es muy pesada';
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        

        // revisar q el arreglo de errores este vacio
        if (empty($errores)) {

            // // SUBIDA DE ARCHIVOS 

            // // Crear Carpeta
            $carpetaImagenes = '../../imagenes/';

            if (!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            // if para ver si hay una nueva imagen o no
            if ($imagen['name']) {
                // Eliminar la imagen previa
                unlink($carpetaImagenes . $propiedad['imagen']);

                // Generar un nombre unico
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                // Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            }else {
                $nombreImagen = $propiedad['imagen'];
            }

            

            // Insertar en la base de datos
            $query = " UPDATE propiedades SET titulo = '$titulo', precio =  '$precio', imagen = '$nombreImagen', descripcion =  '$descripcion', habitaciones =  $habitaciones, wc =  $wc, estacionamiento =  $estacionamiento, vendedores_id =  $vendedores_id WHERE id = '$id' ";;
            

            $resultado = mysqli_query( $db, $query);
            
            if ($resultado) {
                // Redireccionar al usuario
                header('Location: /bienesraices/admin/index.php?resultado=2');
            }
        }        
    }    
    
    require '../../includes/funciones.php';
    
?>

<!-- FIN DE PHP -->

<?php incluirTemplate('header'); ?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/bienesraices/admin/index.php" class="boton boton-verde">Volver</a>
        

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        
        <form class="formulario" method="POST" enctype="multipart/form-data">
            
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input 
                    type="text" 
                    id="titulo" 
                    name="titulo" 
                    placeholder="Titulo Propiedad" 
                    value="<?php echo $titulo; ?>"
                >
                
                <label for="precio">Precio</label>
                <input 
                    type="number" 
                    id="precio" 
                    name="precio" 
                    placeholder="Precio Propiedad" 
                    value="<?php echo $precio; ?>"
                >
                
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                
                <img   src="../../imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input 
                    type="number" 
                    id="habitaciones" 
                    name="habitaciones" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $habitaciones; ?>" 
                >

                <label for="wc">Baños</label>
                <input 
                    type="number" 
                    id="wc" 
                    name="wc" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $wc; ?>" 
                >

                <label for="estacionamiento">Estacionamientos</label>
                <input 
                    type="number" 
                    id="estacionamiento" 
                    name="estacionamiento" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $estacionamiento; ?>" 
                >
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedores_id" id="">
                    <option value="">---Selecciona---</option>
                    <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                        <?php echo $vendedores_id; ?>
                        <?php echo 'esto es row' . $row['id']; ?>
                        <?php echo $vendedores_id === $row['id'] ?>
                        <option <?php echo $vendedores_id == $row['id'] ? 'selected' : ''; ?>  value=" <?php echo $row['id']; ?> "> <?php echo $row['nombre'] . " " . $row['apellido']; ?> </option>
                        
                    <?php endwhile; ?>
                </select>
                    
            </fieldset>

            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>
    
<?php incluirTemplate('footer'); ?>