<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
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
            <li><a href="#">Alojamiento</a></li>
            <li><a href="galeria.html">Galería</a></li>
            <li><a href="signup.php">Iniciar Sesión</a></li>
          </ul>
        </nav>
        <div class="search-bar">
          <input type="text" placeholder="Buscar...">
          <i class="fa-sharp fa-solid fa-magnifying-glass fa-beat"></i>
        </div>
      </header>
      <div class="contenedor">
        <form class="formulario" method="post">
        <?php
        include ("conexion.php");
        include ("registrar.php");
        ("conexion.php");
        ?>
        <h1>Registrate</h1>
        
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre Completo" name="nombre">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electrónico" name="correo">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="contrasena">
            </div>

            <input type="submit" value="registrar" class="button" name="enviar">
            <p> Al registrarte, aceptas nuestras condiciones de uso y Política de privacidad</p>
            <p> ¿Ya tienes una cuenta? <a class="link" href="login2.html">Iniciar Sesión</a></p>

        </div>
  
    </form>
</body>
</html>