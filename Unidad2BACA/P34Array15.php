<?php
/* CBTIS 89
   Programa que convierte los datos en un arreglo en una cadena de texto,
   3°A Programacion Matutino 
*/

//Almacena datos en un arreglo
$arrraydatos = ["Karina" , "Rosales" , "Orozco"];

//Convierte un array en una cadena de texto
$string = implode(" ", $arrraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>" , "<br";

//Cadena de texto a separar 
$cadena = "tercero de progarmación matutino";

//Convierte una cadenna de texto en un array
$array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Implime los elemntos del arreglo
for($i=0; $i<$longitud; $i++)
{// Se obtiene el valor de cada elemento
 echo $array[$i];
 echo "<br>";
}
?>