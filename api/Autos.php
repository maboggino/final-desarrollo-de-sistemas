<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once "modelo/Auto.php";

$marca = new Marca;

$marca->Nombre = "Ford";

$auto1 = new Auto;

$auto1->Modelo = "Fiesta";
$auto1->Marca = $marca;

$auto2 = new Auto;

$auto2->Modelo = "Ka";
$auto2->Marca = $marca;

$auto3 = new Auto;

$auto3->Modelo = "Focus";
$auto3->Marca = $marca;

$auto4 = new Auto;

$auto4->Modelo = "Eco Sport";
$auto4->Marca = $marca;

$autos=array();
$autos[]=$auto1;
$autos[]=$auto2;
$autos[]=$auto3;
$autos[]=$auto4;

echo json_encode($autos);