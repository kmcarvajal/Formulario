<?php
    header('Content-Type: text/html; charset=utf-8');
    // Datos de la base de datos
    $usuario = 'root' ;
    $contraseña = 'usbw' ;
    $servidor = 'localhost' ;
    $basededatos = 'formulario' ;
    // Creación de la conexión a la base de datos
    $conexion = new mysqli($servidor, $usuario, $contraseña, $basededatos);
    if ($conexion->connect_error) {
        die("Problemas con la conexión: " . $conexion->connect_error);
    }
    $conexion->set_charset("utf8");
?>