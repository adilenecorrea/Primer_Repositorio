<?php
/* CBTIS 89
   Programa que almacena datos y posteriormente los imprime
   3°A Programacion Matutino 
*/

$nombre = "Anna";
$array = array(1, 2, 3, "casa", $nombre);
//Se obtiene el número de elementos 
$longitud = count($array);

//Recorte todos los elemntos
for($i=0; $i<$longitud; $i++)
   {//Se obtiene el valor de cada elemento
      echo $array [$i];
      echo "<br>";
  }
  ?>