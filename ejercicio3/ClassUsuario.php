<?php

    class Usuario{

        public $strNombre;
        public $strEmail;
        public $strTipo;
        protected $strFechaRegistro;
        private $strClave;
        static $strEstado = "Activo";

        function __construct(string $nombre, string $email, string $tipo){

            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
            $this->strFechaRegistro = date('Y-m-d H:m:s');

        }

        public function getNombre():string{
            return $this->strNombre;
        }

        public function getEmail():string{
            return $this->strEmail;
        }

        public function getTipo():string{
            return $this->strTipo;
        }

        public function getFechaRegistro():string{
            return $this->strFechaRegistro;
        }

        public function getClave():string{
            return $this->strClave;
        }

        public function getEstado():string{
            return $this->strEstado;
        }

        public function getPerfil(){

            echo "Datos del usuario <br>";

            echo "Nombre: ". $this->strNombre."<br>";

            echo "Email: ". $this->strEmail."<br>";

            echo "Tipo: ". $this->strTipo."<br>";

            echo "Clave: ". $this->strClave."<br>";

            echo "Fecha de rergistro: ". $this->strFechaRegistro;
        }

        public function setCambiarClave(string $pass){
            $this->strClave = $pass;
        }

    }

?>