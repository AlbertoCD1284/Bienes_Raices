<?php

  
    // Importar la base de datos
    // Importar la coneccion
    require '../includes/config/database.php';
    $db = conectarDB();

    // Escribir el query
    $query = "SELECT * FROM propiedades";

    // Consultar la BD
    $resultadoConsulta = mysqli_query($db, $query);

    
    // Muestra un mensaje condicional
    $resultado = $_GET['resultado'] ?? null;
   

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        // validar si es un numero entero
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if ($id) {

            // Eliminar el archivo de imagen
            $query = "SELECT imagen FROM propiedades WHERE id = '$id' ";
            
            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);
       
            unlink('../imagenes/' . $propiedad['imagen']);

            // Eliminar la propiedad
            $query = "DELETE FROM propiedades WHERE id = '$id' ";
            echo $query;

            $resultado = mysqli_query($db, $query);
            if ($resultado) {
                header('location: /bienesraices/admin/index.php?resultado=3');    
            }
            
        }
    }

    // Incluye un template
    require '../includes/funciones.php';

    
    
?>

<?php incluirTemplate('header');  ?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        
        <?php if(intval( $resultado ) === 1): ?>
            <p class="alerta exito"> Anuncio creado correctamente</p>
        <?php elseif(intval( $resultado ) === 2): ?>
            <p class="alerta exito"> Anuncio Actualizado Correctamente</p>
        <?php elseif(intval( $resultado ) === 3): ?>
            <p class="alerta exito"> Anuncio Eliminado Correctamente</p>
        <?php endif; ?>

        <a href="/bienesraices/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            
            <tbody><!-- Mostrar los resultados -->
                <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)):?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <!-- <td> <img src="../../bienesraices/src/img/anuncio1.jpg" class="imagen-tabla"></td> -->
                    <td> <img src="../imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"></td>
                    <td> $ <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/bienesraices/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
<?php 

// Cerra la coneccion
mysqli_close($db);

incluirTemplate('footer'); 
?>
