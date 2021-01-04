<?php

    class Conexion {

        private $conect;

        public function __construct() { 

            $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            try {
                $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(\Throwable $e) {
                $this->conect = "error conexion";
                echo "Error".$e->getMessage();
            }

            return $this->conect;
        }

        public function connect(){
            return $this->conect;
        }

    }

?>