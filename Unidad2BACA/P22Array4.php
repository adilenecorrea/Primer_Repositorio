<?php
/* CBTIS 89
   Programa que almacena los nombres de los jugadores e indica su posicion 
   3°A Programacion Matutino 
*/

$equipo= array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");

echo "** SELECCIÓN NACIONAL **",  "<br>" ,  "<br>";

foreach($equipo as $posicion=>$jugador)
{ echo "El jugador " . $jugador . " es el " . $posicion;
  echo  "<br>" ,  "<br>";
  }
 ?>