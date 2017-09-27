<?php require_once("funciones.php"); 
    echo "Saludo amigo , saludo amiga ".$_SESSION["id"]." ".$_SESSION["nombre"]." ".$_SESSION["usuario"];
?>

<a href="salir.php" >Salir sesion</a>