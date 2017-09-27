<?php
/*    echo "<select>";
    for($i = 1990 ; $i < 2018 ; $i++){
        echo "<option>$i</option>";
    }
    echo "</select>";
*/
?>
<!doctype html>
<html>
    <head>
        <title>html learn</title>
    </head>
    <body>
        <select>
            <?php
            $i = 1990;
            while($i <= 2017){ ?>
              <option>
                  <?php echo $i; $i++; ?>
            </option>
           <?php }
            ?>
        </select>
    </body>
</html>