<html>
    
  
    
    <body>
        <?php print_r($_REQUEST);
        if(isset($_REQUEST["accion"])){    
            echo "Sumar ",$_REQUEST["valor1"]," + ",$_REQUEST["valor2"],
            " = ",($_REQUEST["valor1"]+$_REQUEST["valor2"]);
            echo "<hr>";
             echo "Restar ",$_REQUEST["valor1"]," - ",$_REQUEST["valor2"],
            " = ",($_REQUEST["valor1"]-$_REQUEST["valor2"]);
            echo "<hr>";
             echo "Multiplicar ",$_REQUEST["valor1"]," x ",$_REQUEST["valor2"],
            " = ",($_REQUEST["valor1"]*$_REQUEST["valor2"]);
            echo "<hr>";
             echo "Dividir ",$_REQUEST["valor1"]," / ",$_REQUEST["valor2"],
            " = ",($_REQUEST["valor1"]/$_REQUEST["valor2"]);
            echo "<hr>";
             echo "El resto de la division es ",$_REQUEST["valor1"]," / ",$_REQUEST["valor2"],
            " = ",($_REQUEST["valor1"]%$_REQUEST["valor2"]);
        }else{
            echo "Eddy es la para en PHP";
        }
        /*if(isset($_POST["sumar"])){    
            echo "Sumar ",$_POST["valor1"]," + ",$_POST["valor2"],
            " = ",($_POST["valor1"]+$_POST["valor2"]);
        }else if(isset($_POST["restar"])){
            echo "Restar ",$_POST["valor1"]," - ",$_POST["valor2"],
            " = ",($_POST["valor1"]-$_POST["valor2"]);
        }else if(isset($_POST["multiplicar"])){
            echo "Multiplicar ",$_POST["valor1"]," x ",$_POST["valor2"],
            " = ",($_POST["valor1"]*$_POST["valor2"]);
        }else if(isset($_POST["dividir"])){
            echo "Dividir ",$_POST["valor1"]," / ",$_POST["valor2"],
            " = ",($_POST["valor1"]/$_POST["valor2"]);
        }else if(isset($_POST["modulo"])){
            echo "El resto de la division es ",$_POST["valor1"]," / ",$_POST["valor2"],
            " = ",($_POST["valor1"]%$_POST["valor2"]);
        }else{
            echo "Eudy es la para en PHP";
        }*/
        ?>
        <form action="" method="get">
            <input type="hidden" name="accion" value="operaciones"/>
            <label>
                Primer valor 
            </label><br/>
            <input type="text" name="valor1" value="" placeholder="Valor 1" />
            <br/><br/>
            <label>
                Segundo valor
            </label><br/>
            <input type="text" name="valor2" placeholder="Valor 2"
                   style="border:1px solid #FF6600;"/>
            <br/><br/>
            <button type="submit" >Enviar</button>
            <!--
<button type="submit" name="sumar">Sumar</button>
<button type="submit" name="restar">Restar</button>
            <button type="submit" name="multiplicar">Multiplicar</button>
            <button type="submit" name="dividir">Dividir</button>
            <button type="submit" name="modulo">Residuo</button>-->
        </form>
    </body>

</html>