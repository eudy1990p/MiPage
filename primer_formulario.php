<html>
    
    
    <body>
        <?php print_r($_POST);
        if(isset($_POST["nombre_campo"])){    
        echo "Saludo SR. ",$_POST["nombre_campo"]," ",$_POST["apellido_campo"];
        }else{
            echo "no has enviado el formulario";
        }
        ?>
        <form action="" method="post">
            <label>
                Nombre 
            </label><br/>
            <input type="text" name="nombre_campo" value="" placeholder="Nombre" />
            <br/><br/>
            <label>
                Apellido
            </label><br/>
            <input type="text" name="apellido_campo" placeholder="Apellido" />
            <br/><br/>
            <button type="submit">Enviar form</button>
        </form>
    </body>

</html>