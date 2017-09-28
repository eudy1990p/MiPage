<?php require_once("menu.php"); 
     $datoNoticia = selecionarUnaNoticiaPorID();
?>

<form action="pro_noticias.php" method="post">
        <input type="hidden" name="mandato" value="editar_noticia" />
        <input type="hidden" name="id_noticia" value="<?php echo $datoNoticia["id"]; ?>" />
        <input  required type="text" name="titulo" value="<?php echo $datoNoticia["titulo"]; ?>" placeholder="Nombre Noticia" />
            <br/>
        <textarea required name="extracto" id="" cols="50" rows="3" placeholder="Extracto"  ><?php echo $datoNoticia["extracto"]; ?></textarea>
        
        <br/>   
        <textarea required name="detalle" id="" cols="30" rows="10" placeholder="Detalle de la noticias" ><?php echo $datoNoticia["detalle"]; ?></textarea>
        <br/>   <br/>   <button type="submit">Editar</button>

</form>