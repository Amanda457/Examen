<?php
require_once "Planta.php";
require_once "florece.php";
require_once "tipoplanta.php";
require_once "webPlantas.php";

$planta1 = new Planta("Monstera", florece::noFlorece, TipoPlanta::arbusto, 30, 45);
$planta2 = new Planta("Naranjo", florece::Florece, TipoPlanta::arbol, 50, 68);
$planta3 = new Planta("Herbacius", florece::noFlorece, TipoPlanta::herbacea, 12, 44);
$planta4 = new Planta("Almendro", florece::Florece, TipoPlanta::arbol, 53, 23);
$planta5 = new Planta("Arbustus", florece::noFlorece, TipoPlanta::arbusto, 16, 33);
$planta6 = new Planta("Lherbacul", florece::noFlorece, TipoPlanta::herbacea, 25, 56);
$tienda = new webPlanta("PlantStore");

$tienda->inventario = [$planta1, $planta2, $planta3, $planta4, $planta5, $planta6];
//var_dump($tienda->inventario);
$tienda->quePlantaTardaMasDiasEnBrotar();
$tipoBuscado = "Arbol";
$tienda->buscarPlantaPorTipo($tipoBuscado);

$tipoBuscado = "Herbacea";
$tienda->buscarPlantaPorTipo($tipoBuscado);
?>