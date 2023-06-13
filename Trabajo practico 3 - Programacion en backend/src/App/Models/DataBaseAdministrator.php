<?php

namespace Paw\App\Models;

use PDO;

class DataBaseAdministrator 
{
    private $host = 'localhost';
    private $dbName = 'listadoDeTurnos';
    private $username = 'root';
    private $password = 'password';
    private $pdo;

    public function __construct() 
    {
        $this->connect();
    }

    private function connect() 
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName;charset=utf8", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function getAllSpecialities() 
    {
        $query = "SELECT * FROM tbl_specialities;";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function getAllDoctorsThatMatch($speciality) 
    {
        $query = "SELECT * FROM tbl_professionals WHERE speciality_id = :speciality_id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":speciality_id", $speciality);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function getAllShiftsThatMatch() 
    {
        $speciality = $_POST['select-especialidad'];
        $doctor = $_POST['select-profesional'];

        $query = "SELECT * FROM tbl_doctors WHERE speciality_id = :speciality_id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":speciality_id", $speciality_id);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}

?>