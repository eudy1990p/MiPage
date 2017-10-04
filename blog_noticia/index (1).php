<?php require_once("menu.php"); 
     
     $nfilas=0;
     $inicio=0;
     $n_registros = 4;

     if(isset($_GET["inicio"]))
     {
         $inicio = ($_GET["inicio"]-1) * $n_registros;
     }
    
   
     $resultQuery = selecionarTodasNoticias($inicio,$n_registros,$nfilas);
     $paginas = round($nfilas / $n_registros);
    
     
?>

<html>
        
<?php 
        while($registroNoticia = $resultQuery->fetch_array()){
    ?>
    <div style="width:300px; border:solid 1px black;">
    <h1><?php echo $registroNoticia["titulo"] ?> </h1>
    <h2><?php echo $registroNoticia["fecha_publicacion"] ?> </h2>
    <p><?php echo $registroNoticia["extracto"] ?> </p>
    <img src='upload/<?php echo $registroNoticia["img"] ?>' width='100'/>
    <br/>
    <a href="leer_mas.php?id_noticia=<?php echo $registroNoticia['id'] ?>"> Leer Más</a>
    </div>
    <?php } ?>
    
<?php

for ($e=1;$e<=$paginas;$e++)
{
?>
    <a href="index.php?inicio=<?php echo $e?>"><?php echo $e ?></a>
<?php
} 


?>

    
</html>