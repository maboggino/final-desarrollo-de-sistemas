<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once "modelo/Auto.php";

$marca = new Marca;

$marca->nombre = "Ford";

$auto1 = new Auto;

$auto1->modelo = "Fiesta";
$auto1->marca = $marca;

$auto2 = new Auto;

$auto2->modelo = "Ka";
$auto2->marca = $marca;

$auto3 = new Auto;

$auto3->modelo = "Focus";
$auto3->marca = $marca;

$auto4 = new Auto;

$auto4->modelo = "Eco Sport";
$auto4->marca = $marca;

$autos=array();
$autos[]=$auto1;
$autos[]=$auto2;
$autos[]=$auto3;
$autos[]=$auto4;

echo json_encode($autos);