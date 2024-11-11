<?php
/* CBTIS 89
   Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera:
   en el $Arreglo1 van los números pares, en el $Arregalo2 van los números impares, en el $Arreglo3 va la suma de los números corrrespondientes al mismo índice
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/
$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();

for ($i = 150; $i <=202; $i++)
{$resi=$i % 2;

if ($resi==0){
array_push($Arreglo1, $i);
}

else{
array_push($Arreglo2, $i);
}
}
for($i=0; $i<count($Arreglo1) && $i<count($Arreglo2); $i++){
$Arreglo3[$i] = $Arreglo1[$i] + $Arreglo2[$i];}


echo "Arreglo1, Arreglo2, Arreglo3";
echo "<br>";
for($i=0; $i<26; $i++)
{echo $Arreglo1[$i],"----------", $Arreglo2[$i],"---------", $Arreglo3[$i];
echo "<br>";
}
?>