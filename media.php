<?php 
// Obtenemos los datos mediante POST
$data = $_POST['valor'];
echo "<p> Los datos Son: </p>";

//Incializamos una variable suma
$suma = 0; 

//Contamos los datos
$cantidad = count($data);
//Recorremos los datos
for ($i=0; $i < $cantidad; $i++) { 
	echo 'El dato '.($i+1).' es = '.$data[$i].'</br>';
	//Mientras se va sumando
	$suma = $suma + $data[$i];
}
// Mostramos la suma
echo "<p>La suma es: ".$suma."</p>";

// Obtenemos la media 
$media = $suma/$cantidad;
// Mostramos la media
echo "<p>La media es: ".$suma."/".$cantidad." = ".$media."</p>";

$semivarianza = 0;
for ($i=0; $i < count($data); $i++) { 
	$semivarianza = $semivarianza + (pow($data[$i]-$media, 2));
}
$varianza = $semivarianza/$cantidad;
echo '<p>La varianza  es : ' .$semivarianza . '/' . $cantidad . ' = ' .$varianza.'</p>';

echo "<a href='index.html'>Volver</a>";