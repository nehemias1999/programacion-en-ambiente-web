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

    public function contacto() 
    {
        $formContacto = $_POST;

        $formState = $this->formValidation->validarFormContacto($formContacto);
        
        require $this->viewsDir . 'contacto.view.php';
    }
}