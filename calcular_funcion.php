<?php
    function suma($v1,$v2){
        return ($v1+$v2);
    }
    function resta($v1,$v2){
        return ($v1-$v2);
    }
    function mostrar($valor){
        echo "<h4>$valor</h4>";
    }
    function mostrar1($valor){
        for($i = 1 ; $i <= $valor ; $i++){
            echo "valor ".$i;
            echo "<br/>";
        }
    }
    function mostrar2($valor){
        ?>
        <h1>hay que comer</h1>
        <p>jpo oj oijapoj oj poiaj psodjf opajsdofjoasj dfoj sdapojf opsdja fpoj sapdojf poasdj fpoj <a href="#">leer mas</a> </p>
        <?php
    }
    
    function funcionReturnArray(){
        
        return array("array2"=>array(56,66,77,88),66,78);
    }
    function functArray2(){
        $persona["nombre"] = "eudy";
        $persona["apellido"] = "arias";
        $persona["edad"] = 10;
        
        return $persona;
    }
    $conn =mysqli_connect("localhost","root","","db_eudy");

    mysqli_query($conn,"select * from persona");
mysqli_query($conn,"insert into persona (campo1,campo2) values ('valor1','valor2') ");
    mysqli_query($conn,"update persona set campo = 'nuevo valor' where campo= '3' ");
mysqli_query($conn,"delete from persona where campo= '3' ");


    //mostrar(suma(3,4));
    //mostrar1(s
uma(3,4));
    //mostrar2("mensaje tienes un mensaje nuevo");
    //$catch = funcionReturnArray();
    //echo $catch["array2"][3];

 $persona = functArray2();
print_r($persona);
//echo $persona;
?>




