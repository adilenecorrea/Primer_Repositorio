.<?php
/* CBTIS 89
   Programa que almacena la posicion de los jugadores y los imprime 
   3°A Programacion Matutino 
*/

$datos= array("Programacion"=>"Sebastian","Contabilidad"=>"Dylan","Electronica"=>"Manuel","Programacion"=>"Vanessa","ARH"=>"Eva");

echo "** DATOS DE ALUMNOS DEL CBTIS 89 **",  "<br>" ,  "<br>";

foreach($datos as $especialidad=>$nombre)
{ echo "El/La alumn@ " . $nombre . " esta en la especialidad de " . $especialidad;
  echo  "<br>" ,  "<br>";
  }
 ?>