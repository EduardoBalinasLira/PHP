<?php

    trait Carrito{

        public $stProducto;
        public $intCantidad;

        public function setCarrito(string $producto, int $cantidad){
            $this->strProducto = $producto;
            $this->intCantidad = $cantidad;
        }

        abstract function getCarrito();

    }

?>