<?php
/* CBTIS 89
   Programa que convierte los datos en un arreglo en una cadena de texto, y de forma contrario es decir convierte una cadena de texto a elementos dentro de un arreglo
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/

echo "** RESULTADOS DE SUMA  **",  "<br>" ,  "<br>";

$arraynum = array (10,20,30,40,50);
$arraynums= array (3,7,6,15,18);
$arraysum = array();
$arrayres = array();
$arraymulti = array();
$arraydivi = array();
$longitud = count($arraynum);

for($i=0; $i<$longitud; $i++)
  { $arraysum[$i]=$arraynum[$i]+$arraynums[$i];
echo $arraynum[$i], " + ", $arraynums[$i], " = ", $arraysum[$i];
	  echo "<br>";
  }
 
 echo "<br>";
 echo "** RESULTADOS DE RESTA  **",  "<br>" ,  "<br>";


for($i=0; $i<$longitud; $i++)
  { $arrayres[$i]=$arraynum[$i]-$arraynums[$i];
echo $arraynum[$i], " - ", $arraynums[$i], " = ", $arrayres[$i];
	  echo "<br>";
  }

  echo "<br>";
 echo "** RESULTADOS DE MULTIPLICACIÓN  **",  "<br>" ,  "<br>";


for($i=0; $i<$longitud; $i++)
  { $arraymulti[$i]=$arraynum[$i]*$arraynums[$i];
echo $arraynum[$i], " * ", $arraynums[$i], " = ", $arraymulti[$i];
	  echo "<br>";
  }

  echo "<br>";
 echo "** RESULTADOS DE DIVISIÓN  **",  "<br>" ,  "<br>";


for($i=0; $i<$longitud; $i++)
  { $arraymulti[$i]=$arraynum[$i]/$arraynums[$i];
echo $arraynum[$i], " / ", $arraynums[$i], " = ", $arraymulti[$i];
	  echo "<br>";
  }
  ?>