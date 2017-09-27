<?php
    session_start();
    function conexion(){
        $server="localhost";
        $usuario = "root";
        $clave = "";
        $db = "usuarios";
        $con = mysqli_connect($server,$usuario,$clave,$db);
        if($con){
            return $con;
        }else{
            die("error : ".$con->error);
        }
    }

    function validarUsuario($usuario,$clave){
        $conn = conexion();
        $mostrar ="select * from usuario where usuario = '".$usuario."' and pass = '".$clave."'  ";
        $resultQuery = mysqli_query($conn,$mostrar); 
        if($resultQuery){
            if($datoUsuario = $resultQuery->fetch_array()){
                $_SESSION["id"] = $datoUsuario["id_usuario"];
                $_SESSION["nombre"] = $datoUsuario["nombre"];
                $_SESSION["usuario"] = $datoUsuario["usuario"];
                header("location:saludo_usuario.php");
            }else{
                header("location:login.php");
            }
        }else{
            header("location:login.php");
            //die("error : ".$conn->error);
        }       
    }

?>