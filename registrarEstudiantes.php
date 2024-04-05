<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);


if (isset($_POST['guardar'])) {
    require_once("config.php");

    $congiguration = new Config();

    $congiguration-> setNombres($_POST['nombres']);
    $congiguration-> setDireccion($_POST['direccion']);
    $congiguration-> setLogros($_POST['logros']);

    $congiguration-> insertData();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente'); 
    document.location='estudiantes.php'
    </script>";
}

?>