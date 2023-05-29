<?php

namespace Paw\App\Controllers;

class PageController
{
    private string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
    }

    // doctor view

    public function doctorShiftTable() 
    {
        require $this->viewsDir . "medical-shift-table.doctor.view.php";
    }

    public function doctorShiftTablePOST() 
    {
        require $this->viewsDir . "medical-shift-table.doctor.view.php";
    }

    // waiting room view

    public function waitingRoomShiftTable() 
    {
        require $this->viewsDir . "medical-shift-table.waiting-room.view.php";
    }

    public function waitingRoomShiftTablePOST() 
    {
        require $this->viewsDir . "medical-shift-table.waiting-room.view.php";
    }
}

?>