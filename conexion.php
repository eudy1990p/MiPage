<?php 


$con = mysqli_connect('localhost','root','','usuarios');



//$insertarDatos = "INSERT INTO usuario(nombre,apellido,usuario,pass,ROLL) VALUES ('Gabriel','Velez','gvelez','1234','administrador')";
$insertar = "INSERT INTO usuario (nombre, apellido, usuario, pass, ROLL) VALUES ('Yerily','Gutierrez','ygutierrez','5678','administrador')";
//$borrarDatos ="DELETE FROM usuario WHERE id_usuario = '1' ";
$editar = "UPDATE usuario SET nombre = 'Eddy' WHERE id_usuario = '2'";
$mostrar ="select * from usuario";

//mysqli_query($con,$insertarDatos);

//mysqli_query($con,$insertar);
//mysqli_query($con,$editar);
$mostrar2 = mysqli_query($con,$mostrar);
$data = mysqli_fetch_assoc($mostrar2);
$n=0;
//echo "NOMBRE  PASSWORD", "<br>";

foreach($mostrar2 as $key => $value) {$n++;
echo $value['usuario']." ".$value['pass'], "<br>" ;

}



?>