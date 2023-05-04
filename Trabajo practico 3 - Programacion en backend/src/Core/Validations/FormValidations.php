<?php

namespace Paw\Core\Validations;

class FormValidations
{

  public function __construct()
  {
      
  }

  // GENERICS VALIDATIONS

  private function validateDocument($type, $number) {
    $validations = [
      "documento-nacional-de-identidad" => "/^\d{8}$/",
      "cedula-de-identidad" => "/^\d{7-8}$/",
      "cuit-cuil" => "/^\d{11}$/",
      "libreta-civica" => "/^\d{8}$/",
      "pasaporte" => "/^[a-zA-Z]{3}[0-9]{6}$/"
    ];

    return preg_match($validations["{$type}"], $number);
  }

  private function validatePassword($password) {
    return preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,20}$/", $password);
  }

  private function validateNatural($natural) {
    return preg_match("/^[1-9][0-9]*$/", $natural);
  }

  private function validateDepartment($department) {
    return preg_match("/^[1-9]\d{1,2}[a-zA-Z]{1,2}$/", $department);
  }

  private function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  private function validateCellphone($cellphone) {
    return preg_match("/^(\+?54)?(9)?0?(11|[2368]\d)(\d{8})$/", $cellphone);
  }

  private function validateFullName($fullName) {
    return preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/", $fullName);
  }

  private function validateGenericText($genericText) {
    return preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s\d\.,;:!¡¿?\-\_\*\&\%\$\#\@\(\)\[\]\{\}\"\'\<\>\+\=\/\\\|\n\r]+$/u", $genericText);
  }

  // FORMS VALIDATIONS

  public function validateFormIngresar($form)
  {
    $errorMessages = array();

    if(!$this->validateDocument($form["select-tipo-documento"], $form["input-documento"])) {
      array_push($errorMessages, "- Documento erroneo");
    }

    if(!$this->validatePassword($form["input-contrasena"])) {
      array_push($errorMessages, "- Contrasena erronea");
    }

    return $errorMessages;
  }

  public function validateFormRecuperarContrasena($form)
  {
    $errorMessages = array();

    if(!$this->validateDocument($form["select-tipo-documento"], $form["input-documento"])) {
      array_push($errorMessages, "- Documento erroneo");
    }

    if(!$this->validateEmail($form["input-email-recuperacion"])) {
      array_push($errorMessages, "- Email erroneo");
    }

    return $errorMessages;
  }

  // ...

  public function validateFormCambiarContrasena($form)
  {
    $errorMessages = array();

    if(!$this->validatePassword($form["input-contrasena-actual"])) {
      array_push($errorMessages, "- Contrasena actual erronea");
    }

    if((!$this->validatePassword($form["input-nueva-contrasena"])) || (!$this->validatePassword($form["input-confirmacion-contrasena"]))) {
      array_push($errorMessages, "- Contrasena nueva erronea");
    }

    if($form["input-nueva-contrasena"] != $form["input-confirmacion-contrasena"]) {
      array_push($errorMessages, "- Las contrasenas no son iguales");
    }

    return $errorMessages;
  }

  public function validateFormEditarDatos($form)
  {
    $errorMessages = array();

    if(!$this->validateGenericText($form["select-provincia"])) {
      array_push($errorMessages, "- Provincia erronea"); 
    }

    if(!$this->validateGenericText($form["select-localidad"])) { 
      array_push($errorMessages, "- Localidad erronea");
    }

    if(!$this->validateGenericText($form["input-calle"])) {
      array_push($errorMessages, "- Calle erronea " . $form["input-calle"]);
    }

    if(!$this->validateNatural($form["input-numero"])) {
      array_push($errorMessages, "- Numero erroneo");
    }

    if((!empty($form["input-departamento"])) && (!$this->validateNatural($form["input-departamento"]))) { 
      array_push($errorMessages, "- Departamento erroneo");
    }

    if((!empty($form["input-piso"])) && (!$this->validateNatural($form["input-piso"]))) {
      array_push($errorMessages, "- piso erroneo");
    }

    if(!$this->validateEmail($form["input-email"])) {
      array_push($errorMessages, "- Email erroneo");
    }

    if(!$this->validateCellphone($form["input-celular"])) {
      array_push($errorMessages, "- Celular erroneo");
    }

    return $errorMessages;
  }

  public function validateFormContacto($form) 
  {
    $errorMessages = array();

    if(!$this->validateFullName($form["input-nombre-apellido"])) {
      array_push($errorMessages, "- Nombre y apellido erroneos");
    }

    if(!$this->validateEmail($form["input-email"])) {
      array_push($errorMessages, "- Email erroneo");
    }

    if(!$this->validateCellphone($form["input-celular"])) {
      array_push($errorMessages, "- Celular erroneo ");
    }

    if(!$this->validateGenericText($form["input-asunto"])) {
      array_push($errorMessages, "- Asunto erroneo");
    }

    if(!$this->validateGenericText($form["textarea-mensaje"])) {
      array_push($errorMessages, "- Mensaje erroneo");
    }
    
    return $errorMessages;
  }

}

?>