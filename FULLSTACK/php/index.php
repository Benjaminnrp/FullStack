<?php

$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="turismo";

$enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

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

  <section id="inises">
      <form action="#" name="turismo" method="post" class="formulario">
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
                <input type="text" name="contraseña" placeholder="Contraseña">
            </div>

            <input type="submit" name="registro" value="Registrarse" class="button">
            <p> Al registrarte, aceptas nuestras condiciones de uso y Política de privacidad</p>
            <p> ¿Ya tienes una cuenta? <a class="link" href="login2.php">Iniciar Sesión</a></p>

        </div>
  
    </form>
</section>
</body>
</html>

<?php

     if (isset($_POST['registro'])){
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];

        $insertarDatos="INSERT INTO usuario VALUES (' ', '$nombre', '$contraseña', '$correo')";

        $resultado=mysqli_query($enlace,$insertarDatos);
    }


?> 

