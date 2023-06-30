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
    <title>Iniciar Sesión</title>
</head>
<body>

  <section id="inises">
      <form action="#" name="turismo" method="post" class="formulario">
        <h1>Iniciar Sesión</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" name="correo" placeholder="Correo Electrónico">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="text" name="contraseña" placeholder="Contraseña">
            </div>

            <input type="submit" name="iniciosesion" value="Login" class="button">
            <p> ¿No tienes una cuenta? <a class="link" href="index.php">Registrarse</a></p>

        </div>
  
    </form>
</section>
</body>
</html>

<?php

    if(isset($_POST['iniciosesion'])){

        $query=mysqli_query($enlace, "SELECT * FROM turismo WHERE usuario = '$nombre' AND contraseña= '$password' ");
        $nr=mysqli_num_rows($query);

        if($nr==1)
        {
            echo "<script> alert ('Bienvenido $nombre'); window.location='index.html' </script>";
        }else{
            echo "<script> alert ('Hola $nombre'); window.location='index.html' </script>";
        }

        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];

        $insertarDatos="INSERT INTO usuario VALUES ('', '$nombre', '$contraseña', '$correo')";

        $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
    }

?>