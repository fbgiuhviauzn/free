<?php 
include("conexion.php");

if (isset($_POST["iniciar"])) {
    
    if (
        strlen($_POST["tel"]) >= 1 &&
        strlen($_POST["email"]) >= 1 &&
        strlen($_POST["contraseña"]) >= 1
    ) {
        $tel = trim($_POST["tel"]); 
        $email = trim($_POST["email"]);
        $contraseña = trim($_POST["contraseña"]);
        $fecha = date("d/m/y"); 

        $consulta = "INSERT INTO usuarios(tel,email,contraseña,fecha)
        VALUES('$tel','$email', '$contraseña','$fecha')";
    
        $resultados = mysqli_query($conex, $consulta);

        

    }
}


?>