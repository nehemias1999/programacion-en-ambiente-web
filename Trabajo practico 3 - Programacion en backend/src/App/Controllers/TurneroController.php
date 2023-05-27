<?php

namespace Paw\App\Controllers;

class TurneroController
{
    private string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
    }

    // Turnero medico
    public function turneroMedico() 
    {
        require $this->viewsDir . 'turnero-medico.view.php';
    }
}