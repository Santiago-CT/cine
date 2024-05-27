<?php
    class ConexionBD {
        private $host = "localhost";
        private $db_name = "cine";
        private $port = "5432";
        private $username = "postgres";
        private $password = "Cardona3234";
        private $conn;

        public function __construct() {
            $this->conn = null;
        }

        public function getConnection() {
            if ($this->conn === null) {
                try {
                    $conn_string = "pgsql:host={$this->host};port={$this->port};dbname={$this->db_name};user={$this->username};password={$this->password}";
                    $this->conn = new PDO($conn_string);
                 
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "CONEXION EXITOSA";
                    
                } catch(PDOException $exception) {
                    error_log("Connection error: " . $exception->getMessage());
                    throw $exception;
                }
            }

            return $this->conn;
        }
    }

    

