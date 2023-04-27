<?php

namespace Paw\App\Controllers;

class PageController
{
    private string $viewsDir;
    public array $menu;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
        $this->menu = [

            [
                'href' => '/',
                'name' => 'Home'
            ],
            [
                'href' => '/institucional',
                'name' => 'Quienes somos'
            ],
            // Portal del paciente
            [
                'href' => '/obras sociales',
                'name' => 'Contactos'
            ],
            [
                'href' => '/profesionales',
                'name' => 'Servicios'
            ],
            [
                'href' => '/contacto',
                'name' => 'Contactos'
            ]
    
        ];
    }

    // Home

    public function home() 
    {
        require $this->viewsDir . 'home/home.view.php';
    }

    public function homeNoticia() 
    {
        require $this->viewsDir . 'home/noticia.view.php';
    }

    // Institucional

    public function institucional() 
    {
        require $this->viewsDir . 'institucional/institucional.view.php';
    }

    public function institucionalValores() 
    {
        require $this->viewsDir . 'institucional/valores.view.php';
    }

    public function institucionalGaleriaDeFotos() 
    {
        require $this->viewsDir . 'institucional/galeria-de-fotos.view.php';
    }

    public function institucionalDirectorio() 
    {
        require $this->viewsDir . 'institucional/directorio.view.php';
    }

    // Portal del paciente

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