<?php

    function MiPrimeraFuncion($nombre){
        echo "Saludo ".$nombre;
    }

    //MiPrimeraFuncion("Juan Querendon");

    function SegundaFuncion($nombre=" Gabriel"){
        echo $nombre." klk ";
    }
    //SegundaFuncion("Eudy");
    
    function RetornaValor(){
        return "Juan,Paco,Pedro,De,La,mar";
    }
    
    function Suma($valor1,$valor2){
        $resultado = $valor1 + $valor2;
      
        return $resultado;
    }

    $resultadoFuncion = Suma(5,5);
    echo "El resultado de 5 + 5 = ".$resultadoFuncion;
//   $texto = RetornaValor();
//    print($texto);
?>