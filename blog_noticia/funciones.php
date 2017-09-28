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
                header("location:administrar_noticia.php");
            }else{
                header("location:login.php");
            }
        }else{
            header("location:login.php");
            //die("error : ".$conn->error);
        }       
    }

    function insertarNoticia(){
        $conn = conexion();
        $insertarNoticia =" 
            insert into noticias
            (titulo,extracto,detalle,fecha_publicacion,id_usuario)
            values
            ('".$_REQUEST["titulo"]."','".$_REQUEST["extracto"]."','".$_REQUEST["detalle"]."',now(),'".$_SESSION["id"]."')
         ";
        $resultQuery = mysqli_query($conn,$insertarNoticia); 
        if($resultQuery){
            header("location:administrar_noticia.php");
        }
    }

    function selecionarTodasNoticias(){
        $conn = conexion();
        $selectNoticia =" 
            select * from noticias
            ";
        $resultQuery = mysqli_query($conn,$selectNoticia); 
        return $resultQuery;
        
    }
    function selecionarUnaNoticiaPorID(){
        $conn = conexion();
        $selectNoticia =" 
            select * 
            from noticias
            where id = '".$_REQUEST["id_noticia"]."'
            ";
        $resultQuery = mysqli_query($conn,$selectNoticia);
        
        if( $datoNoticia = $resultQuery->fetch_array()){ 
          return  $datoNoticia;
        }else{
            die("error ");
        } 
        return $resultQuery;
        
    }

    function editarNoticia(){
        $conn = conexion();
        $insertarNoticia =" 
            update noticias set
            titulo = '".$_REQUEST["titulo"]."',
            extracto = '".$_REQUEST["extracto"]."' ,
            detalle ='".$_REQUEST["detalle"]."'
            where
            id =  '".$_REQUEST["id_noticia"]."'   
         ";
        // echo "<pre>$insertarNoticia</pre>";
        $resultQuery = mysqli_query($conn,$insertarNoticia); 
        if($resultQuery){
            header("location:administrar_noticia.php");
        }
    }

    function eliminarNoticia(){
        $conn = conexion();
        $insertarNoticia =" 
            delete
            from noticias 
            where
            id =  '".$_REQUEST["id_noticia"]."'   
         ";
        // echo "<pre>$insertarNoticia</pre>";
        $resultQuery = mysqli_query($conn,$insertarNoticia); 
        if($resultQuery){
            header("location:administrar_noticia.php");
        }
    }


?>