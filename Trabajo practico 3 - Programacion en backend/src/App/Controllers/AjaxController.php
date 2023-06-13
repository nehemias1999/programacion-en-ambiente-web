<?php

namespace Paw\App\Controllers;

use Paw\App\Models\DataBaseAdministrator;

class AjaxController 
{
    private string $viewsDir;
    private DataBaseAdministrator $dataBaseAdministrator;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/"; 
        $this->dataBaseAdministrator = new DataBaseAdministrator();
    }

    // SOLICITAR TURNO

    public function getAllSpecialities() 
    {
        $allSpecialities = $this->dataBaseAdministrator->getAllSpecialities();

        header('Content-Type: application/json');
        echo json_encode($allSpecialities);
    }

    public function getAllDoctorsThatMatch() 
    {
        $speciality = $_POST['speciality'];

        $doctors = $this->dataBaseAdministrator->getAllDoctorsThatMatch($speciality);

        header('Content-Type: application/json');
        echo json_encode($doctors);
    }
}
?>