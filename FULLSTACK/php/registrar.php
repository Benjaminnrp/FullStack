<?php
include ("conexion.php");

if(isset($_POST['enviar'])) {
    die("A");
    if (strlen($_POST['nombre'])>= 1 && strlen($_POST['correo'])>= 1 && strlen($_POST['contrasena'])>= 1)
    {
        $nombre =  trim($_POST['nombre']);
        $correo =  trim($_POST['correo']);
        $contrasena =  trim($_POST['contrasena']);
        $consulta = "INSERT INTO usuario (nombre, contraseña, correo_electrónico) VALUES('$nombre', '$correo', '$contrasena')";
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado)
        {
            die("si");
            ?>
            <h3 class="success">Excelente</h3>
            <?php
            
        }

        else 
        {
            ?>
            <h3 class="error">Error</h3>
            <?php
        }
       /*  else 
        {
            ?>
            <h3 class="error">Llenar todos los campos</h3>
            <?php
        }
 */



    }
}
?>