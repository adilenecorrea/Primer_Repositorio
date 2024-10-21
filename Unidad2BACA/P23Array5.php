<?php
/* CBTIS 89
   Programa que almacena la posicion de los jugadores y los imprime 
   3°A Programacion Matutino 
*/

$frutas= array("25"=>"Manzana","40"=>"Mango","35"=>"limón","20"=>"Naranja");

echo "** FRUTERÍA DEL SUR **",  "<br>" ,  "<br>";

foreach($frutas as $precio=>$kilo)
{ echo "El kilo " . $kilo . " cuesta " . $precio;
  echo  "<br>" ,  "<br>";
  }
 ?>