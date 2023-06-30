<?php

include("conexion.php");

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

//Login

if(isset($_POST["inicio_sesion"])){

    $query=mysqli_query($enlace,"SELECT * FROM usuario2 WHERE nombre= '$nombre' AND correo='$correo' AND contraseña='$contraseña'");
    $nr=mysqli_num_rows($query);

    if($nr==1){
        echo "<script> alert('Bienvenido $nombre'); window.location='alojamiento.html' </script>";
    }else{
        echo "<script> alert('Usuario no existe'); window.location='login2.html' </script>";
    }
}

//Registrarse

if(isset($_POST["registro"])){

    $sqlgrabar="INSERT INTO usuario2 (correo, contraseña, nombre) values ('$correo', '$contraseña', '$nombre')";

    if(mysqli_query($enlace, $sqlgrabar)){
        echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='alojamiento.html' </script>";
    }else{
        echo"Error: ".$sql. "<br>" .mysql_error($enlace);
    }
    
}
?>