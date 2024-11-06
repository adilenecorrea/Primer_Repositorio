<?php
/* CBTIS 89
   Programa que convierte los datos en un arreglo en una cadena de texto, y de forma contrario es decir convierte una cadena de texto a elementos dentro de un arreglo
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/

$arraynumeros = array(-1,-5,7,-9,5,8,-24,56,-46,90,-65,33,44,-23,-10);
$arraypositivos = array();
$arraynegativos = array();
$sumapositiva = 0;
$sumanegativos = 0;

foreach($arraynumeros as $numero){
	if($numero >= 0){
		$arraypositivos[] = $numero;
		$sumapositiva += $numero;
	}
	else{
		$arraynegativos[] = $numero;
		$sumanegativos += $numero;
	}
}

echo "Numeros positivos: ";
echo implode(", ", $arraypositivos) . "<br>"; 

echo "Numeros negativos: ";
echo implode(", ", $arraynegativos) . "<br>"; 

echo "La suma de los numeros positivos es: " . $sumapositiva . "<br>";
echo "La suma de los numeros negativos es: " . $sumanegativos . "<br>";
?>