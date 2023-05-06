<?php

namespace Paw\Core\Validations;

class FormValidations
{

  public function __construct()
  {
      
  }

  // GENERICS VALIDATIONS

  private function validateNatural($natural) {
    return preg_match("/^[1-9][0-9]*$/", $natural);
  }

  private function validateInteger($integer) {
    return preg_match("/^[0-9]+$/", $integer);
  }

  private function validateText($Text) {
    return preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s\d\.,;:!¡¿?\-\_\*\&\%\$\#\@\(\)\[\]\{\}\"\'\<\>\+\=\/\\\|\n\r]+$/u", $Text);
  }

  private function validateDate($date) {
    return preg_match("/^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date);
  }

  private function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

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

  private function validateDepartment($department) {
    return preg_match("/^[1-9]\d{1,2}[a-zA-Z]{1,2}$/", $department);
  }

  private function validateCellphone($cellphone) {
    return preg_match("/^\d{6,14}$/", $cellphone);
  }

  private function validateAffiliateNumber($affiliateNumber) {
    return preg_match("/^[0-9\-\/]+$/", $affiliateNumber);
  }

  // PORTAL DEL PACIENTE

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

  // CREAR CUENTA

  public function validateFormDatosPersonales($form) 
  {
    $errorMessages = array();

    if(!$this->validateText($form["input-nombre"])) { 
      array_push($errorMessages, "- Nombre erroneo " . $form["input-nombre"]);
    }

    if(!$this->validateText($form["input-apellido"])) { 
      array_push($errorMessages, "- Apellido erroneo " . $form["input-apellido"]);
    }

    if(!$this->validateDocument($form["select-tipo-documento"], $form["input-documento"])) { // TRIVIAL
      array_push($errorMessages, "- Documentos erroneo");
    }

    if(!$this->validateDate($form["input-fecha-nacimiento"])) {
      array_push($errorMessages, "- Fecha de nacimiento erronea");
    }

    if(!$this->validateInteger($form["input-caracteristica"])) {
      array_push($errorMessages, "- Caracteristica erronea");
    }

    if(!$this->validateCellphone($form["input-celular"])) {
      array_push($errorMessages, "- Celular erroneo");
    }

    if(!$this->validateText($form["select-obra-social"])) { // TRIVIAL
      array_push($errorMessages, "- Obra social erronea");
    }

    if(!$this->validateAffiliateNumber($form["input-numero-afiliado"])) {
      array_push($errorMessages, "- Numero de afiliado erroneo");
    }

    return $errorMessages;
  }

  public function validateFormDomicilio($form) 
  {
    $errorMessages = array();

    if(!$this->validateText($form["select-provincia"])) { // TRIVIAL
      array_push($errorMessages, "- Provincia erronea"); 
    }

    if(!$this->validateText($form["select-localidad"])) { // TRIVIAL
      array_push($errorMessages, "- Localidad erronea");
    }

    if(!$this->validateText($form["input-calle"])) {
      array_push($errorMessages, "- Calle erronea ");
    }

    if(!$this->validateNatural($form["input-numero"])) {
      array_push($errorMessages, "- Numero erroneo");
    }

    if((!empty($form["input-departamento"])) && (!$this->validateNatural($form["input-departamento"]))) { // OPCIONAL
      array_push($errorMessages, "- Departamento erroneo");
    }

    if((!empty($form["input-piso"])) && (!$this->validateNatural($form["input-piso"]))) { // OPCIONAL
      array_push($errorMessages, "- piso erroneo");
    }

    return $errorMessages; 
  }

  public function validateFormDatosDeLaCuenta($form) 
  {
    $errorMessages = array();

    if(!$this->validateEmail($form["input-email"])) {
      array_push($errorMessages, "- Email erroneo");
    }

    if((!$this->validatePassword($form["input-contrasena"])) || (!$this->validatePassword($form["input-repetir-contrasena"]))) {
      array_push($errorMessages, "- Contrasena erronea");
    }

    if($form["input-contrasena"] != $form["input-repetir-contrasena"]) {
      array_push($errorMessages, "- Las contrasenas no coinciden");
    }

    return $errorMessages;
  }

  // INICIO

  public function validateFormVinculaciones($form) 
  {
    $errorMessages = array();

    if(!$this->validateText($form["select-obra-social"])) { // TRIVIAL
      array_push($errorMessages, "- Obra social erroneo");
    }

    if(!$this->validateAffiliateNumber($form["input-numero-afiliado"])) { 
      array_push($errorMessages, "- Numero de afiliado erroneo");
    }

    if(!$this->validateText($form["select-vinculo"])) { // TRIVIAL
      array_push($errorMessages, "- Vinculo erroneo");
    }

    if(!$this->validateText($form["input-nombre"])) {
      array_push($errorMessages, "- Nombre erroneo");
    }

    if(!$this->validateText($form["input-apellido"])) {
      array_push($errorMessages, "- Apellido erroneo");
    }

    if(!$this->validateDate($form["input-fecha-nacimiento"])) { 
      array_push($errorMessages, "- fecha de nacimiento erronea");
    }

    if(!$this->validateText($form["select-provincia"])) { // TRIVIAL
      array_push($errorMessages, "- Provincia erronea");
    }

    if(!$this->validateText($form["select-localidad"])) { // TRIVIAL
      array_push($errorMessages, "- Localidad erronea");
    }

    if(!$this->validateText($form["input-calle"])) {
      array_push($errorMessages, "- Calle erronea");
    }

    if(!$this->validateNatural($form["input-numero"])) {
      array_push($errorMessages, "- Numero erroneo");
    }

    if(!$this->validateDepartment($form["input-departamento"])) {
      array_push($errorMessages, "- Departamento erroneo");
    }

    if(!$this->validateNatural($form["input-piso"])) { 
      array_push($errorMessages, "- Piso erroneo");
    }

    return $errorMessages;
  }

  public function validateFormSolicitarTurno($form) // VER
  {
    $errorMessages = array();

    if(!$this->validateText($form["select-vinculo"])) {
      array_push($errorMessages, "- vinculo erroneo");
    }

    if(!$this->validateText($form["select-especialidad"])) {
      array_push($errorMessages, "- especialidad erronea");
    }

    if(!$this->validateText($form["select-profesional"])) {
      array_push($errorMessages, "- profesional erroneo");
    }

    return $errorMessages;
  }

  // MIS DATOS

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

    if(!$this->validateText($form["select-provincia"])) { // TRIVIAL
      array_push($errorMessages, "- Provincia erronea"); 
    }

    if(!$this->validateText($form["select-localidad"])) { // TRIVIAL
      array_push($errorMessages, "- Localidad erronea");
    }

    if(!$this->validateText($form["input-calle"])) {
      array_push($errorMessages, "- Calle erronea ");
    }

    if(!$this->validateNatural($form["input-numero"])) {
      array_push($errorMessages, "- Numero erroneo");
    }

    if((!empty($form["input-departamento"])) && (!$this->validateNatural($form["input-departamento"]))) { // OPCIONAL
      array_push($errorMessages, "- Departamento erroneo");
    }

    if((!empty($form["input-piso"])) && (!$this->validateNatural($form["input-piso"]))) { // OPCIONAL
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

  // CONTACTO

  public function validateFormContacto($form)  // VER
  {
    $errorMessages = array();

    if(!$this->validateText($form["input-nombre-apellido"])) {
      array_push($errorMessages, "- Nombre y apellido erroneos");
    }

    if(!$this->validateEmail($form["input-email"])) {
      array_push($errorMessages, "- Email erroneo");
    }

    if(!$this->validateInteger($form["input-caracteristica"])) { // VER
      array_push($errorMessages, "- Caracteristica erronea ");
    }

    if(!$this->validateCellphone($form["input-celular"])) { // VER
      array_push($errorMessages, "- Celular erroneo ");
    }

    if(!$this->validateText($form["input-asunto"])) {
      array_push($errorMessages, "- Asunto erroneo");
    }

    if(!$this->validateText($form["textarea-mensaje"])) {
      array_push($errorMessages, "- Mensaje erroneo");
    }

    $image = $_FILES['input-imagen'];
    if(isset($image) && (($image['error'] !== UPLOAD_ERR_OK) || (!getimagesize($image['tmp_name'])))) {
      array_push($errorMessages, "- Imagen cargada erronea");
    }
    
    return $errorMessages;
  }

}

?>