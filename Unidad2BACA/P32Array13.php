<?php
/* CBTIS 89
   Programa que asgrega dos productos utulizando el array_push 
   3°A Programacion Matutino 
*/
echo "Array original";
echo "<br>";

$array=array("camisa "," pantalon ", "cinturon");

foreach($array as $prenda)
{echo $prenda. "<br>";}

$arraynumerico= array("camisa "," pantalon ", "cinturon");

sort($arraynumerico);
var_export($arraynumerico);
echo "<p>";

echo "Array después de agregar productos ";
echo "<br>";

 
 

 foreach($array as $prenda)
 	{echo $prenda. "<br>";}

 $arraynumerico1=array("Gorra ", " Calcetines");

rsort($arraynumerico1);
var_export($arraynumerico1);
?>