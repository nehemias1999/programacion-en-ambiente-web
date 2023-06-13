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

    public function getAllProfessionalsThatMatch($speciality) 
    {
        $query = "SELECT * FROM tbl_professionals WHERE speciality_id = :speciality_id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":speciality_id", $speciality);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    private function getProfessionalFullName($professional_id) 
    {
        $query = "SELECT first_name, last_name FROM tbl_professionals WHERE professional_id = :professional_id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":professional_id", $professional_id);
        $stmt->execute();
        $professionalFullName = $stmt->fetch(PDO::FETCH_ASSOC);

        return $professionalFullName;
    }

    private function getProfessionalAttentionDays($professional_id) 
    {
        $query = "SELECT ad.week_day, ad.start_hour, ad.start_minute, ad.end_hour, ad.end_minute, ad.shift_duration
                  FROM tbl_professionals p 
                  INNER JOIN tbl_attention_days ad 
                  ON p.professional_id = ad.professional_id 
                  WHERE p.professional_id = :professional_id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":professional_id", $professional_id);
        $stmt->execute();
        $professionalAttentionDays = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $professionalAttentionDays;
    }

    private function getProfessionalReservedShifts($professional_id) 
    {
        $query = "SELECT s.week_day, s.start_hour, s.start_minute
                  FROM tbl_professionals p 
                  INNER JOIN tbl_shifts s 
                  ON p.professional_id = s.professional_id 
                  WHERE s.patient_id IS NOT NULL 
                  AND p.professional_id = :professional_id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":professional_id", $professional_id);
        $stmt->execute();
        $professionalReservedShifts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $professionalReservedShifts;
    }    

    public function getAllProfessionalData($professional_id) 
    {
        $professionalFullName = $this->getProfessionalFullName($professional_id);

        $professionalAttentionDays = $this->getProfessionalAttentionDays($professional_id);

        $professionalReservedShifts = $this->getProfessionalReservedShifts($professional_id);

        var_dump(
            $professionalFullName,
            $professionalAttentionDays,
            $professionalReservedShifts
        );

        $turnosTomados = array();
        foreach ($professionalReservedShifts as $reservedShift) {
            $turnoTomado = array(
                "dia" => $reservedShift['week_day'],
                "horas" => $reservedShift['start_hour'],
                "minutos" => $reservedShift['start_minute']
            );
            $turnosTomados[] = $turnoTomado;
        }

        $professionalData = array(
            "matricula" => $professional_id,
            "nombre" => $professionalFullName['first_name'],
            "apellido" => $professionalFullName['last_name'],
            "horarioInicio" => array("horas" => $professionalAttentionDays[0]['start_hour'], "minutos" => $professionalAttentionDays[0]['start_minute']),
            "horarioFinalizacion" => array("horas" => $professionalAttentionDays[0]['end_hour'], "minutos" => $professionalAttentionDays[0]['end_minute']),
            "duracionTurno" => $professionalAttentionDays[0]['shift_duration'],
            "turnosTomados" => $turnosTomados
        );

        $jsonData = json_encode($professionalData);

        return $jsonData;
    }
}

?>