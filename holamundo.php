<?php
    /*echo ("<h1>hola mundo"." otro texto"." oh yeah</h1>");
    print("<h1>hola mundo"." otro texto"." oh yeah</h1>");
    $x = 5;
    $a = "mensaje";
    $z = 50.89;
    $c = 'c';
    $n = null;
    $array = array();
    $o = mysqli_connect();
    $b = true;
    
    var_dump($x);
var_dump($a);
var_dump($z);var_dump($c);var_dump($n);
var_dump($array);var_dump($b);
    echo  "<br/>";echo  "<br/>";
var_dump($o);*/
    /*$variable = 56;
    echo $variable;
    echo  "<br/>";
    echo "".$variable."";
    echo  "<br/>";
    echo "$variable";
    echo  "<br/>";
    echo '$variable';*/
    $comida1 = array(1=>"arroz",0=>"carne",2=>"pizza");
    $comida2 = array("cena"=>"arroz","almuerzo"=>"carne","comida"=>"pizza");
    //print_r($comida2);
    //echo $comida2["comida"];
    
    /*if(){
        
    }

    if(){
        
    }else{
        
    }

    if(){
        
        
    }elseif(){
        
        
    }else{
        
    }

    switch($variable){
        case "":
            break;
        case "":
            break;
            
        default:
            break;
    }

    for($v = 0 ; $v < 500 ; $v+= 100){
        
    }
    while(true){
        
    }
    do{
        
    }while(true);*/

    //print_r($comida);
    print_r($comida1);
    echo "<ul>";
    for($i = 0 ; $i < count($comida1) ; $i++){
        echo $comida1[$i];
    }
    foreach($comida1 as $index => $value){
        echo "<li> $index => $value"."</li>";
    }
    echo "</ul>";


?>
