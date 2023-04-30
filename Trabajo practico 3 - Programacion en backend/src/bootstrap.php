<?php

require __DIR__ . "/../vendor/autoload.php";

use Paw\Core\Request;
use Paw\Core\Router; 

$request = new Request();

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
$router->get("/portal-del-paciente/ingresar", "PortalController@ingresar");
$router->get("/portal-del-paciente/recuperar-contrasena", "PortalController@recuperarContrasena");

// Crear cuenta
$router->get("/portal-del-paciente/crear-cuenta/datos-personales", "PortalController@crearCuentaDatosPersonales");
$router->get("/portal-del-paciente/crear-cuenta/domicilio", "PortalController@crearCuentaDomicilio");
$router->get("/portal-del-paciente/crear-cuenta/datos-de-la-cuenta", "PortalController@crearCuentaDatosDeLaCuenta");

// Inicio
$router->get("/portal-del-paciente/inicio/turnos-pendientes", "PortalController@inicioTurnosPendientes");
$router->get("/portal-del-paciente/inicio/solicitar-turno", "PortalController@inicioSolicitarTurno");
$router->get("/portal-del-paciente/inicio/vinculaciones", "PortalController@inicioVinculaciones");
$router->get("/portal-del-paciente/inicio/resultados", "PortalController@inicioResultados");

// Mis datos
$router->get("/portal-del-paciente/inicio/mis-datos", "PortalController@inicioMisDatos");
$router->get("/portal-del-paciente/inicio/mis-datos/cambiar-contrasena", "PortalController@misDatosCambiarContrasena");
$router->get("/portal-del-paciente/inicio/mis-datos/editar-datos", "PortalController@misDatosEditarDatos");

// Obras sociales
$router->get("/obras-sociales", "PageController@obrasSociales");

// Profesionales
$router->get("/profesionales", "PageController@profesionales");

// Contacto
$router->get("/contacto", "PageController@contacto");

?>