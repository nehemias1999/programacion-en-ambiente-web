<?php

namespace Paw\App\Controllers;

class ErrorController
{
    private string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
    } 

    public function notFound() 
    {
        http_response_code(404);

        require $this->viewsDir . 'not-found.view.php';
    }

    public function internalError() 
    {
        http_response_code(500);

        require $this->viewsDir . 'internal-error.view.php';
    }
}