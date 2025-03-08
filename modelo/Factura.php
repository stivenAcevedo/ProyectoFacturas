<?php
    class Factura
    {
        private DateTime $fecha;
        private int $numero;
        private float $total;

        public function __construct($fecha, $numero){
            $this-> fecha = $fecha;
            $this-> numero = $numero;
        }

        public function getFecha(){
            return $this-> fecha;
        }

        public function getNumero(){
            return $this-> numero;
        }

        public function getTotal(){
            return $this-> total;
        }

        public function setFecha($fecha){
            $this-> fecha = 
        }

        public function setNumero($numero){
            $this-> numero = $numero;
        }

        public function setTotal($total){
            $this-> total = $total;
        }

    }

?>