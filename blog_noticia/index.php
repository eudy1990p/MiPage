<?php require_once("menu.php"); 
     $resultQuery = selecionarTodasNoticias();
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
    </table>


    
</html>




