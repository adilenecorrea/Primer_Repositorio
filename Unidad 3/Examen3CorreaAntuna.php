<?php
/*
CBTIS 89
Programa que almacena el nombre de cuatro personas En un arreglo $Alumnos y en otro areglo multidimensional llamado $Calificaciones almacena las calificaciones de cada uno de ellos por medio de filas y columnas 
Brenda Adilene Correa Antuna 
3°A Programacion Matutino
*/

$Alumnos = array("Luz", "Fer", "Ian", "Ale");
$Calificaciones = array1(array(6, 4, 5),array2(7, 9, 8),array3(7, 9, 5),array4(5, 4, 6));
$Promedio = array();
$Status = array();
$Arraycali = array();
$longitud = count($Calificaciones);

for($i=0; $i<$longitud; $i++)

foreach($Calificaciones[$i] as $cali1)
{ $Arraycali = $cali1 + $cali1 + $cali1;
  $Promedio = $Arraycali / 3; }

foreach($Calificaciones[$i] as $cali2)
{ $Arraycali = $cali2 + $cali2 + $cali2;
  $Promedio = $Arraycali / 3; }

foreach($Calificaciones[$i] as $cali3)
{ $Arraycali = $cali3 + $cali3 + $cali3;
  $Promedio = $Arraycali / 3; }

foreach($Calificaciones[$i] as $cali4)
{ $Arraycali = $cali4 + $cali4 + $cali4;
  $Promedio = $Arraycali / 3; }

for ($i=0; $i<longitud; $i++) 

{ if ($Promedio<=5)
{array_push($Status, Reprobo);}  

else
{array_push($Status, Aprobo);}	
}


echo "Alumnos, Calificaciones, Promedio, Status";
echo "<br>";
for($i=0; $i<4; $i++)
{echo $Alumnos[$i]," ---------- ", $Calificaciones[$i]," --------- ", $Promedio[$i]," --------- ", $Status[$i];
echo "<br>";
}
?>