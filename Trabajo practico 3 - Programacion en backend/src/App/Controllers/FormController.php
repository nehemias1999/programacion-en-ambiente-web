<?php

namespace Paw\App\Controllers;

use Paw\Core\Validations\FormValidations;
use Paw\App\Models\DataBaseAdministrator;

class FormController 
{
    private string $viewsDir;
    private FormValidations $formValidation;
    private DataBaseAdministrator $dataBaseAdministrator;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
        $this->formValidation = new FormValidations();
        $this->dataBaseAdministrator = new DataBaseAdministrator();
    }

    // PORTAL DEL PACIENTE

    public function ingresar() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormIngresar($form);
        
        require $this->viewsDir . 'portal-del-paciente.ingresar.view.php';
    }

    public function recuperarContrasena() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormRecuperarContrasena($form);
        
        require $this->viewsDir . 'portal-del-paciente.recuperar-contrasena.view.php'; 
    }

    // INICIO

    public function solicitarTurno() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormSolicitarTurno($form);
        
        require $this->viewsDir . 'portal-del-paciente.inicio.solicitar-turno.view.php'; 
    }

    public function vinculaciones() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormVinculaciones($form);
        
        require $this->viewsDir . 'portal-del-paciente.inicio.vinculaciones.view.php'; 
    }

    // CREAR CUENTA

    public function datosPersonales() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormDatosPersonales($form);
        
        if(!empty($formState)) {
            require $this->viewsDir . 'portal-del-paciente.crear-cuenta.datos-personales.view.php'; 
        } else {
            header('Location: /portal-del-paciente/crear-cuenta/domicilio');
            exit();
        }   
    }

    public function domicilio() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormDomicilio($form);
        
        if(!empty($formState)) {
            require $this->viewsDir . 'portal-del-paciente.crear-cuenta.domicilio.view.php'; 
        } else {
            header('Location: /portal-del-paciente/crear-cuenta/datos-de-la-cuenta');
            exit();
        }
    }

    public function datosDeLaCuenta() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormDatosDeLaCuenta($form);

        if(!empty($formState)) {
            require $this->viewsDir . 'portal-del-paciente.crear-cuenta.datos-de-la-cuenta.view.php'; 
        } else {
            header('Location: /portal-del-paciente/inicio/turnos-pendientes'); // HARDCODEADO
            exit();
        }
    }
    
    // MIS DATOS

    public function cambiarContrasena() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormCambiarContrasena($form);
        
        require $this->viewsDir . 'portal-del-paciente.mis-datos.cambiar-contrasena.view.php';
    }

    public function editarDatos() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormEditarDatos($form);
        
        require $this->viewsDir . 'portal-del-paciente.mis-datos.editar-datos.view.php';
    }

    // CONTACTO

    public function contacto() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormContacto($form);
        
        require $this->viewsDir . 'contacto.view.php';
    }
}