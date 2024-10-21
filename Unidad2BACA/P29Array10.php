<?php
/* CBTIS 89
   Programa que almacena nombres en un arreglo e indica si el nombre aparece
   3°A Programacion Matutino 
*/

$nombre= array ("Ana","Miriam","Wendy","Adilene", "Juan","Dylan","Arath","Vanessa");

$nom = "Ana";

foreach($nombre as $nombreArray) {

if($nom==$nombreArray) {
echo "Este nombre está en el Array";
break;
}	

}
?>