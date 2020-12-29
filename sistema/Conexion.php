<?php

    class Conexion{

        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "db_sistema";
        private $connect;

        public function __construct(){

            $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";

            try {

                $this->connect = new PDO($connectionString,$this->user, $this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexion exitosa";

            } catch (\Throwable $th) {

                $this->connect = "Error de conexion";
                echo "ERROR: ".$th->getMessage();
                die();
            }

            return $this->connect;
        }

        public function connect(){

            if($this->connect instanceof PDO){
                return $this->connect;
            }
            
        }

    }

?>