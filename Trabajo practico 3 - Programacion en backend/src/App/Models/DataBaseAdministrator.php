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

    public function getAllData($table) 
    {
        $query = "SELECT * FROM $table;";
        $stmt = $this->pdo->query($query);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function getDataById($column_id, $table) 
    {
        $query = "SELECT * FROM $table WHERE speciality_id = $column_id;";
        $stmt = $this->pdo->query($query);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}

// $dataBaseAdministrator = new dataBaseAdministrator();

// $resultados = $dataBaseAdministrator->getAllData();

// foreach($resultados as $resultado) {
//     print($resultado['speciality_id'] . ' ' . $resultado['speciality_name'] . "\n");
// }

?>