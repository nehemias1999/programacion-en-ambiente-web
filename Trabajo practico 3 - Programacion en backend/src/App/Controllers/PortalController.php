<?php

namespace Paw\App\Controllers;

use Paw\App\Models\DataBaseAdministrator;

class PortalController
{
    private string $viewsDir;
    private DataBaseAdministrator $dataBaseAdministrator;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
        $this->dataBaseAdministrator = new DataBaseAdministrator();
    }

    // Ingresar

    public function ingresar() 
    {
        require $this->viewsDir . 'portal-del-paciente.ingresar.view.php';
    }

    public function recuperarContrasena() 
    {
        require $this->viewsDir . 'portal-del-paciente.recuperar-contrasena.view.php';
    }

    // Crear cuenta

    public function crearCuentaDatosPersonales() 
    {
        require $this->viewsDir . 'portal-del-paciente.crear-cuenta.datos-personales.view.php';
    }

    public function crearCuentaDomicilio() 
    {
        require $this->viewsDir . 'portal-del-paciente.crear-cuenta.domicilio.view.php';
    }

    public function crearCuentaDatosDeLaCuenta() 
    {
        require $this->viewsDir . 'portal-del-paciente.crear-cuenta.datos-de-la-cuenta.view.php';
    }

    // Inicio

    public function inicioTurnosPendientes() 
    {
        require $this->viewsDir . 'portal-del-paciente.inicio.turnos-pendientes.view.php';
    }

    public function inicioSolicitarTurno() 
    {
        $especialidades = $this->dataBaseAdministrator->getAllSpecialities('tbl_specialities'); 

        require $this->viewsDir . 'portal-del-paciente.inicio.solicitar-turno.view.php';
    } 

    public function inicioVinculaciones() 
    {
        require $this->viewsDir . 'portal-del-paciente.inicio.vinculaciones.view.php';
    }

    public function inicioResultados() 
    {
        require $this->viewsDir . 'portal-del-paciente.inicio.resultados.view.php';
    }

    // Mis datos

    public function inicioMisDatos() 
    {
        require $this->viewsDir . 'portal-del-paciente.inicio.mis-datos.view.php';
    }

    public function misDatosCambiarContrasena() 
    {
        require $this->viewsDir . 'portal-del-paciente.mis-datos.cambiar-contrasena.view.php';
    }

    public function misDatosEditarDatos() 
    {
        require $this->viewsDir . 'portal-del-paciente.mis-datos.editar-datos.view.php';
    } 
}

?>