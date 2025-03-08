<?php
    class ProductosPorFactura
    {

        private int $cantidad;
        private float $subTotal;
        
        public function __construct($cantidad, $subTotal){
            $this-> cantidad = $cantidad;
            $this-> subTotal = $subTotal;
        }

        public function getCantidad(){
            return $this-> cantidad;
        }

        public function getSubTotal(){
            return $this-> subTotal;
        }

        public function setCantidad($cantidad){
            $this-> cantidad = $cantidad;
        }

        public function setSubTotal($subTotal){
            $this-> subTotal = $subTotal;
        }

    }
?>