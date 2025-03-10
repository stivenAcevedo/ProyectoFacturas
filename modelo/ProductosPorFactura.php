<?php
    class ProductosPorFactura
    {
        private int $cantidad;
        private float $subTotal;
        
        //Constructor
        public function __construct(int $cantidad, float $subTotal){
            $this-> cantidad = $cantidad;
            $this-> subTotal = $subTotal;
        }

        //Métodos get
        public function getCantidad(){
            return $this-> cantidad;
        }

        public function getSubTotal(){
            return $this-> subTotal;
        }

        //Métodos set
        public function setCantidad(int $cantidad){
            $this-> cantidad = $cantidad;
        }

        public function setSubTotal(float $subTotal){
            $this-> subTotal = $subTotal;
        }
    }
?>