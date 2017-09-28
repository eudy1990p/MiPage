<?php require_once("funciones.php"); ?>
<ul>
        <?php if(isset($_SESSION["id"])){ ?>
        <li>    
            <a href="">
                INICIO       
            </a>

        </li>
        <li>    
            <a href="administrar_noticia.php">
             ADMINISTRAR NOTICIAS       
            </a>
        </li>
        
        <li>    
            <a href="salir.php">
             SALIR       
            </a>
        </li>
        <?php }else{ ?>
        <li>    
            <a href="login.php">
             LOGIN       
            </a>
        </li>
        <?php } ?>
    </ul>