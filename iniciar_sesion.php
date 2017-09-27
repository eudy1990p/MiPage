<?php session_start();

/*
$producto["arroz"] = array("1libras"=>10,"2libras"=>20,"3libras"=>30,"8libras"=>80);
$producto["azucar"] = 90;

//print_r($producto);

$monto=0;
$monto = ($monto +=$monto +=($monto += $producto["arroz"]["2libras"]) ) ;
echo $monto;*/



$_SESSION["usuario"]="eudylapara";
print_r($_SESSION);

?>
<a href="saludo_usuario.php">ir a saludo</a>
<a href="salir_usuario.php">salir usuario</a>