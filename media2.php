<?php 
$rango = $_POST['rango'];
$xi = $_POST['xi'];
$fi = $_POST['fi'];
$sfi = array_sum($fi);

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
$media = round($casimedia/$sumaf,2);
echo "<p>Las media aritmetica es = ".$media."</p>";


$semivar = 0;
for ($i=0; $i < $cantidad; $i++) { 
	$semivar = $semivar+(pow($xi[$i], 2)*$fi[$i]);
}

$varianza = ($semivar/$sfi)-pow($media, 2);
echo "<p>La varianza es = ". $semivar ."/". $sfi ."-" . pow($media, 2). " = " . round($varianza,2) ."</p>";


echo "<a href='index.html'>Volver</a>";
