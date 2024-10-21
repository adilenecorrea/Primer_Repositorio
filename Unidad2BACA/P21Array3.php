<?php
/* CBTIS 89
   Programa que almacena los nombres de 6 personas en un areglo y posteriormnete los imprime 
   3°A Programacion Matutino 
*/

$nombre1 = "Anna";
$nombre2 = "Sebastian";
$nombre3 = "Sofía";
$nombre4 = "Eva";
$nombre5 = "Daniela";
$nombre6 = "Daniel";
$array = array($nombre1. " " .$nombre2. " " .$nombre3. " " .$nombre4. " " .$nombre5. " " .$nombre6);
//Se obtiene el número de elementos 
$longitud = count($array);

//Recorte todos los elemntos
for($i=0; $i<$longitud; $i++)
   {//Se obtiene el valor de cada elemento
      echo $array [$i];
      echo "<br>";
  }
  ?>