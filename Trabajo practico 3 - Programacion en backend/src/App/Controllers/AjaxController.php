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

    public function getAllProfessionalsThatMatch() 
    {
        $speciality = $_POST['speciality'];

        $professionals = $this->dataBaseAdministrator->getAllProfessionalsThatMatch($speciality);

        header('Content-Type: application/json');
        echo json_encode($professionals);
    }

    public function isProfessionalExists() 
    {
        $professional_id = $_POST['speciality'];

        $doctors = $this->dataBaseAdministrator->isProfessionalExists($speciality);

        header('Content-Type: application/json');
        echo json_encode($doctors);
    }

    public function getAllProfessionalData() 
    {
        $professional_id = $_POST['professional_id'];

        $professional_data = $this->dataBaseAdministrator->getAllProfessionalsData($professional_id);

        header('Content-Type: application/json');
        echo $professional_data;
    }
}
?>