<?php require_once("menu.php"); 
     $datoNoticia = selecionarUnaNoticiaPorID();
?>

<h1><?php echo $datoNoticia["titulo"]; ?></h1>
<h3><?php echo $datoNoticia["fecha_publicacion"]; ?></h3>
<img src='upload/<?php echo $datoNoticia["img"]; ?>' width='250'/>
<p>
<?php echo $datoNoticia["detalle"]; ?>
</p>