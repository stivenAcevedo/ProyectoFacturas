<?php
    class Vendedor
    {
        private int $carnet;
        private string $direccion;
    
        public function __construct($carnet, $direccion){
            $this-> carnet = $carnet;
            $this-> direccion = $direccion;
        }

        public function getCarnet(){
            return $this-> carnet;
        }

        public function getDireccion(){
            return $this-> direccion;
        }

        public function setCarnet($carnet){
            $this-> carnet = $carnet;
        }

        public function setDireccion($direccion){
            $this-> direccion = $direccion;
        }

    }

?>