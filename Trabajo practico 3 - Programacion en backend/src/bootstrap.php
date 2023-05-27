<?php

require __DIR__ . "/../vendor/autoload.php";

use Dotenv\Dotenv;

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
$router->post("/portal-del-paciente/ingresar", "FormController@ingresar");
$router->get("/portal-del-paciente/recuperar-contrasena", "PortalController@recuperarContrasena");
$router->post("/portal-del-paciente/recuperar-contrasena", "FormController@recuperarContrasena"); 

// Crear cuenta
$router->get("/portal-del-paciente/crear-cuenta/datos-personales", "PortalController@crearCuentaDatosPersonales");
$router->post("/portal-del-paciente/crear-cuenta/datos-personales", "FormController@datosPersonales"); // VER
$router->get("/portal-del-paciente/crear-cuenta/domicilio", "PortalController@crearCuentaDomicilio");
$router->post("/portal-del-paciente/crear-cuenta/domicilio", "FormController@domicilio"); // VER
$router->get("/portal-del-paciente/crear-cuenta/datos-de-la-cuenta", "PortalController@crearCuentaDatosDeLaCuenta");
$router->post("/portal-del-paciente/crear-cuenta/datos-de-la-cuenta", "FormController@datosDeLaCuenta"); // VER

// Inicio
$router->get("/portal-del-paciente/inicio/turnos-pendientes", "PortalController@inicioTurnosPendientes");
$router->get("/portal-del-paciente/inicio/solicitar-turno", "PortalController@inicioSolicitarTurno");
$router->post("/portal-del-paciente/inicio/solicitar-turno", "FormController@solicitarTurno"); // ARREGLAR CSS
$router->get("/portal-del-paciente/inicio/vinculaciones", "PortalController@inicioVinculaciones");
$router->post("/portal-del-paciente/inicio/vinculaciones", "FormController@vinculaciones"); // VER
$router->get("/portal-del-paciente/inicio/resultados", "PortalController@inicioResultados");

// Mis datos
$router->get("/portal-del-paciente/inicio/mis-datos", "PortalController@inicioMisDatos");
$router->get("/portal-del-paciente/inicio/mis-datos/cambiar-contrasena", "PortalController@misDatosCambiarContrasena");
$router->post("/portal-del-paciente/inicio/mis-datos/cambiar-contrasena", "FormController@cambiarContrasena");
$router->get("/portal-del-paciente/inicio/mis-datos/editar-datos", "PortalController@misDatosEditarDatos");
$router->post("/portal-del-paciente/inicio/mis-datos/editar-datos", "FormController@editarDatos");

// Obras sociales
$router->get("/obras-sociales", "PageController@obrasSociales");

// Profesionales
$router->get("/profesionales", "PageController@profesionales");

// Contacto
$router->get("/contacto", "PageController@contacto");
$router->post("/contacto", "FormController@contacto"); 

$router->get("/turnero-medico", "TurneroController@turneroMedico");
$router->post("/turnero-medico", "TurneroController@turneroMedicoPost");

?>