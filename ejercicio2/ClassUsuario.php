<?php

    class Usuario{

        public $strNombre;
        public $strEMail;
        public $strTipo;
        protected $strFechaRegistro;
        private $strClave;
        static $strEstado = "Activo";

        function __construct(string $nombre, string $email, string $tipo){

            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();

        }




    }

?>