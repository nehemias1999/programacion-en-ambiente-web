<?php

namespace Paw\App\Controllers;

use Paw\Core\Validations\FormValidations;

class FormController 
{
    private string $viewsDir;
    private FormValidations $formValidation;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
        $this->formValidation = new FormValidations();
    }

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

    // ...

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

    public function contacto() 
    {
        $form = $_POST;

        $formState = $this->formValidation->validateFormContacto($form);
        
        require $this->viewsDir . 'contacto.view.php';
    }
}