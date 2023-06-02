<?php

class DataBaseAdministrator {
    
    private $servername = "localhost";
    private $username = "root";
    private $password = "password";
    private $database = "listadoDeTurnos";
    
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error)
            die("Error al conectar a la base de datos: " . $this->conn->connect_error);
    }

    public function createShift($doctor_id, $datehour) {
        $query = "INSERT INTO tbl_shifts (doctor_id, datehour) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $doctor_id, $datehour);

        if (!$stmt->execute())
            echo "Error al crear el turno: " . $stmt->error;
    }

    public function getShifts($doctor_id) {
        $query = "SELECT * FROM tbl_shifts WHERE doctor_id = $doctor_id;";
        $result = $this->conn->query($query);

        $data_row = array();

        while ($row = $result->fetch_assoc())
            $data_row[] = $row;

        return $data_row;
    }

    public function updateShift($id, $nombre, $email, $telefono) {
        $query = "UPDATE tabla_turnos SET nombre=?, email=?, telefono=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssi", $nombre, $email, $telefono, $id);

        if ($stmt->execute()) {
            echo "Turno actualizado exitosamente.";
        } else {
            echo "Error al actualizar el turno: " . $stmt->error;
        }
    }

    public function deleteShift($id) {
        $query = "DELETE FROM tabla_turnos WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Turno eliminado exitosamente.";
        } else {
            echo "Error al eliminar el turno: " . $stmt->error;
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}

$dataBaseAdministrator = new dataBaseAdministrator($servername, $username, $password, $database);

// Ejemplos de uso
// $turno->crearTurno("Juan", "juan@example.com", "123456789");
$resultados = $dataBaseAdministrator->getShifts(166727);

// $turno->actualizarTurno(1, "Pedro", "pedro@example.com", "987654321");
// $turno->eliminarTurno(1);

?>