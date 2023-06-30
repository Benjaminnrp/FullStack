<?php

    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="turismo_bd";
    
    $enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace){
        die("Conexión fallida");
    }

?>   
