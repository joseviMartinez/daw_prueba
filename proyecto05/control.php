<?php
//vemos si el usuario y contraseña es váildo
if ($_POST["usuario"]=="josevi" && $_POST["contrasena"]=="jose"){
    //usuario y contraseña válidos
    //defino una sesion y guardo datos
    session_start();
    $_SESSION["autentificado"]= "SI";
    header ("Location:index.php");
}else {
    //si no existe le mando otra vez a la portada
    header("Location:index.php?errorusuario=si");
}
?> 