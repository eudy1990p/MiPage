<?php
$text = " HoLa Chicos ";
/*

echo "<pre>".$text."</pre>";
echo "<pre>total caracteres: ".strlen($text)."</pre>";
echo "<pre>minuscula: ".strtolower($text)."</pre>";
echo "<pre>mayuscula: ".strtoupper($text)."</pre>";
echo "<pre>parte del texto: ".substr($text,10,30)."</pre>";
echo "<pre>coloca alreverso un string: ".strrev($text)."</pre>";
echo "<pre>cuenta palabra: ".str_word_count($text)."</pre>";
echo "<pre>eliminar espacio derecha: ".rtrim($text)."</pre>";
echo "<pre>eliminar espacio izquierda:".ltrim($text)."</pre>";
echo "<pre>eliminar espacio :".trim($text)."</pre>";
echo "<pre>remplaza texto :".str_replace("HoLa","klk ok",$text)."</pre>";
echo "<pre>remplaza texto :".str_ireplace("hola","klk",$text)."</pre>";*
$text1 = htmlspecialchars($text);
echo " :".htmlspecialchars("<br/>".$text."<br/><br/>a")."<br/>";*
echo " :".htmlspecialchars_decode(" :&lt;br/&gt; HoLa Chicos &lt;br/&gt;&lt;br/&gt;a<br/>
")."";*/
echo " :".md5("123456")."<br/>";
echo " :me dices\n o no?<br/>";
echo " :".nl2br("me dices\n o no?")."<br/>";
$parrafo = "a;b;c;d;e;f";
//$parrafo = "a b c|d| e;f";
$ArrayLetra = explode(";",$parrafo);
print_r($ArrayLetra);

$parrafo1 = implode("|",$ArrayLetra);

echo "<br/>".$parrafo1."<br/>";
define("CONSTANTE",3.1416);
echo "<br/>".CONSTANTE."<br/>";








/*

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
*/


?>


