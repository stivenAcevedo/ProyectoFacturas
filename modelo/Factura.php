<?php
    class Factura
    {
        private DateTime $fecha;
        private int $numero;
        private float $total;

        //Constructor
        public function __construct(DateTime $fecha, int $numero){
            $this-> fecha = $fecha;
            $this-> numero = $numero;
        }

        //Métodos get
        public function getFecha(){
            return $this-> fecha;
        }

        public function getNumero(){
            return $this-> numero;
        }

        public function getTotal(){
            return $this-> total;
        }

        //Métodos set
        public function setFecha(DateTime $fecha){
            $this-> fecha = 
        }

        public function setNumero(int $numero){
            $this-> numero = $numero;
        }

        public function setTotal(float $total){
            $this-> total = $total;
        }
        
    }
?>