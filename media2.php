<?php 
$rango = $_POST['rango'];
$xi = $_POST['xi'];
$fi = $_POST['fi'];


$cantidad = count($xi);

$casimedia = 0;
echo "<p> Los datos Son: </p>";
for ($i=0; $i < $cantidad; $i++) { 
	$casimedia = $casimedia + ($xi[$i] * $fi[$i]);
}

echo "<p>Las sumas de x<sub>i</sub> * f<sub>i</sub> = ".$casimedia."</p>";

$sumaf = 0;
for ($i=0; $i < $cantidad; $i++) { 
	$sumaf = $sumaf + $fi[$i];
}
echo "<p>Las sumas de f<sub>i</sub> = ".$sumaf."</p>";

echo "<p>Las media aritmetica es = ".round($casimedia/$sumaf,2)."</p>";

echo "<a href='index.html'>Volver</a>";