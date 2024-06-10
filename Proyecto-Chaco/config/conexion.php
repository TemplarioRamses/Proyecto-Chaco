<?php
require 'autoload.php';

use Dotenv\Dotenv;
use mysqli;
use Exception;

// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Database {
    private $conn;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $servername = $_ENV['DB_HOST'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];
        $dbname = $_ENV['DB_NAME'];

        // Crear la conexión
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            throw new Exception("Conexión fallida: " . $this->conn->connect_error);
        }

        // Establecer el conjunto de caracteres a UTF-8
        if (!$this->conn->set_charset("utf8")) {
            throw new Exception("Error al cargar el conjunto de caracteres utf8: " . $this->conn->error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

// Uso de la clase Database para obtener una conexión
try {
    $db = new Database();
    $conn = $db->getConnection();
    echo "Conexión exitosa a la base de datos";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
