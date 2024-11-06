<?php
/* CBTIS 89
   Programa que convierte los datos en un arreglo en una cadena de texto, y de forma contrario es decir convierte una cadena de texto a elementos dentro de un arreglo
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/

$datos=array (array(10,20,30),array(40,50,60),array(70,80,90));

echo "NORMAL";
echo "<br>";
for($i=0;$i<3;$i++)
{for($j=0;$j<3;$j++)
{echo "  " . $datos[$i][$j];}
echo "<br>";}

echo "<br>";
echo "FILAS A COLUMNAS";
echo "<br>";
for($i=0;$i<3;$i++)
{for($j=0;$j<3;$j++)
{echo "  " . $datos[$j][$i];}
echo "<br>";}

echo "<br>";
echo "COLUMNAS INVERSAS";
echo "<br>";
for($j=2;$j>=0;$j--)
{for($i=0;$i<3;$i++)
{echo "  " . $datos[$j][$i] ;
}
echo "<br>";}

echo "<br>";
echo "FILAS INVERSAS";
echo "<br>";
for($j=2;$j>=0;$j--)
{for($i=0;$i<3;$i++)
{echo "  " . $datos[$i][$j] ;
}
echo "<br>";}

echo "<br>";
echo "FILA ESPEJO";
echo "<br>";
for($i=2;$i>=0;$i--)
{for($j=2;$j>=0;$j--)
{echo "  " . $datos[$i][$j] ;
}
echo "<br>";}

?>