<?php
/* CBTIS 89
   Programa que guarda datos en un array_push
   3°A Programacion Matutino 
*/

   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <br>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <br>";
   }
?>
