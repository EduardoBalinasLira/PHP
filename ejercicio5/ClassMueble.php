<?php

    require_once ("ClassProducto.php");

    class Mueble extends Producto{

        public $strColor;
        public $strMaterial;
        public $strStatus = "Agotado";

        public function __construct(string $descipcion, float $precio, string $marca, string $color, string $material){

            parent::__construct($descipcion, $precio);
            $this->strMaterial = $material;
            $this->strColor = $color;
        }

        public function getInfoProducto(){

            $arrProducto = array(
                            'producto' => $this->strDescripcion,
                            'precio' => $this->fltPrecio,
                            'stock_minimo' => $this->intStockMinimo,
                            'estado' => $this->strStatus,
                            'color' => $this->strColor,
                            'Material' => $this->strMaterial
            );
            
            return $arrProducto;
        }

    }

?>