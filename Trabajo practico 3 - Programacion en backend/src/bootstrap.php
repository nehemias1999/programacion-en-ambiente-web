<?php

require __DIR__ . "/../vendor/autoload.php";

use Paw\Core\Router; 

$router = new Router();

// Home
$router->get("/home", "PageController@home");
$router->get("/home/noticia", "PageController@homeNoticia");

// Institucional
$router->get("/institucional", "PageController@institucional");
$router->get("/institucional/valores", "PageController@institucionalValores");
$router->get("/institucional/galeria-de-fotos", "PageController@institucionalGaleriaDeFotos");
$router->get("/institucional/directorio", "PageController@institucionalDirectorio");

// Portal del paciente 

// Obras sociales
$router->get("/obras-sociales", "PageController@obrasSociales");

// Profesionales
$router->get("/profesionales", "PageController@profesionales");

// Contacto
$router->get("/contacto", "PageController@contacto");

$router->get("not_found", "ErrorController@notFound");
$router->get("internal_error", "ErrorController@internalError");

?>