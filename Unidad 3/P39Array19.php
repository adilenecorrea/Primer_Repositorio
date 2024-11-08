<?php
/* CBTIS 89
P39Array19
Programa que guarde los nombres y la edad de 6 personas, e indica a que grupo de edad pertenece, esto guardando los dstos en un arreglo
Brenda Adilene Correa Antuna 
3-A Programación Matutino */

$Nombre = array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$Edad = array(17,30,71,8,12,58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();
$Longitud = count($Edad);

for($i=0; $i<$Longitud; $i++)
{if ($Edad[$i]<=18)
{array_push($Grupo1, 1);
array_push($Grupo2, 0);
array_push($Grupo3, 0);}

if ($Edad[$i]>=18&&$Edad[$i]<=49)
{array_push($Grupo1, 0);
array_push($Grupo2, 1);
array_push($Grupo3, 0);}

if ($Edad[$i]>=50)
{array_push($Grupo1, 0);
array_push($Grupo2, 0);
array_push($Grupo3, 1);}}

echo "Nombre, Edad, Grupo1, Grupo2, Grupo3";
echo "<br>";
for($i=0; $i<$Longitud; $i++)
{echo $Nombre[$i],"-----", $Edad[$i],"-----", $Grupo1[$i],"-----", $Grupo2[$i],"-----",  $Grupo3[$i],"-----";
echo "<br>";
}
?>