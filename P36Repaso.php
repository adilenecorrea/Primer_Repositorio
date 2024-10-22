<?php
/* CBTIS 89
   Programa que convierte los datos en un arreglo en una cadena de texto, y de forma contrario es decir convierte una cadena de texto a elementos dentro de un arreglo
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/

echo "** MINI SUPER DE ABARROTES **",  "<br>" ,  "<br>";
echo "<br>";

$array= array ("Litro de leche "," Pluma","Kilo de limones","Perfume","Bloqueador facial","Pan");
$arraypre = array ("30","5","45","392","346","25");
$arraysub = array();
$arraydes = array();
$arraytot = array();

$longitud=count($arrayArray);
for($i=0; $i<$longitud; $i++)
echo $arrayArray [$i];
echo "<br>";

array_push($array,"Pan", "Perfume","Bloqueador facial","Litro de leche");

foreach($array as $arrayArray) {

if($arraypre==$array) {

for($j=0; $j<$longitud; $j++)
  { $arraysub[$j]=$array[$j]+$arraypre[$j];
echo $array[$j], " + ", $arraypre[$j], " = ", $arraysub[$j];
    echo "<br>";
  }
} 

}




?>