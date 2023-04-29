<?php

namespace Paw\App\Controllers;

class PageController
{
    private string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
    }

    // Home

    public function home() 
    {
        require $this->viewsDir . 'home.view.php';
    }

    public function homeNoticia() 
    {
        require $this->viewsDir . 'home.noticia.view.php';
    }

    // Institucional

    public function institucional() 
    {
        require $this->viewsDir . 'institucional.view.php';
    }

    public function institucionalValores() 
    {
        require $this->viewsDir . 'institucional.valores.view.php';
    }

    public function institucionalGaleriaDeFotos() 
    {
        require $this->viewsDir . 'institucional.galeria-de-fotos.view.php';
    }

    public function institucionalDirectorio() 
    {
        require $this->viewsDir . 'institucional.directorio.view.php';
    }

    // Obras sociales

    public function obrasSociales() 
    {
        require $this->viewsDir . 'obras-sociales.view.php';
    }

    // Profesionales

    public function profesionales() 
    {
        require $this->viewsDir . 'profesionales.view.php';
    }

    // Contacto

    public function contacto() 
    {
        require $this->viewsDir . 'contacto.view.php';
    }
}

?>