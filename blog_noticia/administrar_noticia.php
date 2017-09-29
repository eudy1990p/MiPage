<?php require_once("menu.php"); 
     $resultQuery = selecionarTodasNoticias();
?>

<form action="pro_noticias.php" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="mandato" value="agregar_noticia" />
        <input  required type="text" name="titulo" placeholder="Nombre Noticia" />
            <br/>
        <textarea required name="extracto" id="" cols="50" rows="3" placeholder="Extracto" ></textarea>
        
        <br/>   
        <textarea required name="detalle" id="" cols="30" rows="10" placeholder="Detalle de la noticias" ></textarea>
        
        
        <br/> 
         Imagen:
    <input type='file' name='imagen' />
          <br/>   <button type="submit">Agregar</button>
   
</form>

<table border="1"> 
    <tr>
        <th>
            ID
        </th>
        <th>
            TITULO
        </th>
        <th>
            EXTRACTO
        </th>
        <th>
            IMAGEN
        </th>
        <th>
            OPCIONES
        </th>
    </tr>
    <?php 
        while($registroNoticia = $resultQuery->fetch_array()){
    ?>
    <tr>
        <td>
            <?php echo $registroNoticia["id"]; ?>
        </td>
        <td>
             <?php echo $registroNoticia["titulo"]; ?>
        </td>
        <td>
            <?php echo $registroNoticia["extracto"]; ?>
        </td>
        <td>
            <img src='upload/<?php echo $registroNoticia["img"] ?>' width='30'/>
        </td>
        <td>
            <a href="editar_noticia.php?id_noticia=<?php echo $registroNoticia["id"]; ?>">
            Editar 
            </a><br/>
            <a href="pro_noticias.php?id_noticia=<?php echo $registroNoticia["id"]; ?>&mandato=eliminar_noticia">
            Eliminar
            </a> 
        </td>
    </tr>
    <?php } ?>
</table>




