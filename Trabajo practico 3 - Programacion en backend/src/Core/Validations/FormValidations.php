<?php

namespace Paw\Core\Validations;

class FormValidations
{

  public function __construct()
  {
      
  }

  private function validarNombreApellido($nombreApellido) {
    return preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/", $nombreApellido);
  }

  private function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  private function validarCelular($celular) {
    return preg_match("/^(\+?54)?(9)?0?(11|[2368]\d)(\d{8})$/", $celular);
  }

  private function validarTexto($texto) {
    return preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s\d\.,;:!¡¿?\-\_\*\&\%\$\#\@\(\)\[\]\{\}\"\'\<\>\+\=\/\\\|\n\r]+$/u", $texto);
  }

  public function validarFormContacto($formContacto) 
  {
    $mensajeError = array();

    if(!$this->validarNombreApellido($formContacto["nombre-apellido"])) {
      array_push($mensajeError, "- Nombre y apellido erroneos");
    }

    if(!$this->validarEmail($formContacto["email"])) {
      array_push($mensajeError, "Email erroneo");
    }

    if(!$this->validarCelular($formContacto["celular"])) {
      array_push($mensajeError, "Celular erroneo ");
    }

    if(!$this->validarTexto($formContacto["asunto"])) {
      array_push($mensajeError, "Asunto erroneo");
    }

    if(!$this->validarTexto($formContacto["mensaje"])) {
      array_push($mensajeError, "Mensaje erroneo");
    }
    
    return $mensajeError;
  }

  function validarNombre($nombre) {
    return preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/", $nombre);
  }

  function validarApellido($apellido) {
    return preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/", $apellido);
  }

}

?>
  
  
  
  
  
  
  










?>