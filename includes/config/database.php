<?php

// Conectando a la base de datos bienesraices_crud
function conectarDB() {
    $db = mysqli_connect('localhost', 'root', 'santimanuclau', 'bienesraices_crud');

    if (!$db) {
        echo "Error, no se pudo conectar";
        exit;
    }
    
}