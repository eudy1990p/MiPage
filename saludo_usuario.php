<?php session_start();

    if(isset($_SESSION["usuario"])){
    echo "hola querido usuario : ".$_SESSION["usuario"];
    }else{
        echo "cerro sesion";
    }
?>