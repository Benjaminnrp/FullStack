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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>Registrarse</title>
</head>
<body>


    <header>
        <img src="img/escudo.png" height="50px">
        <h1>Cordoba Capital</h1>
        <nav>
          <ul>
            <li><a href="index.html">inicio</a></li>
            <li><a href="#">Visitar</a></li>
            <li><a href="alojamiento.html">Alojamiento</a></li>
            <li><a href="galeria.html">Galería</a></li>
            <li><a href="login.html">Iniciar Sesión</a></li>
          </ul>
        </nav>
        <div class="search-bar">
          <input type="text" placeholder="Buscar...">
          <i class="fa-sharp fa-solid fa-magnifying-glass fa-beat"></i>
        </div>
      </header>

      <form class="formulario" action="#" name="turismo_bd" method="post">
            <h1>Registrate</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                </div>
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" name="correo" placeholder="Correo Electrónico">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="contraseña" placeholder="Contraseña">
            </div>
            <input type="submit" name="registro" class="button">
            <p> Al registrarte, aceptas nuestras condiciones de uso y Política de privacidad</p>
            <p> ¿Ya tienes una cuenta? <a class="link" href="login2.html">Iniciar Sesión</a></p>
        </div>
    </form>

    
</body>
</html>



<?php

    if(isset($_POST['registro'])){

        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];

        $insertarDatos="INSERT INTO usuario2 VALUES('','$correo','$contraseña','$nombre')";
        
        $ejecutarInsertar=mysqli_query ($enlace, $insertarDatos);
    }

?>  