<?php

require __DIR__ . "/../vendor/autoload.php";

use Dotenv\Dotenv;

use Paw\Core\Request;
use Paw\Core\Router; 

$request = new Request();

$router = new Router();

// doctor view
$router->get("/tabla-turnos-medico", "PageController@doctorShiftTable");
$router->post("/tabla-turnos-medico", "PageController@doctorShiftTablePOST");

// waiting room view
$router->get("/tabla-turnos-sala-de-espera", "PageController@waitingRoomShiftTable");
$router->post("/tabla-turnos-sala-de-espera", "PageController@waitingRoomShiftTablePOST");

?>