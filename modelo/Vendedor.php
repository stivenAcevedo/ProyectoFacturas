<?php
    class Vendedor extends Persona
    {
        private int $carnet;
        private string $direccion;
    
        //Constructor
        public function __construct(string $codigo, string $email, string $nombre, string $telefono, int $carne, string $direccion) {
            parent::__construct($codigo, $email, $nombre, $telefono); //parent:: se usa para llamar métodos de la clase padre, en este caso Persona
            $this->carne = $carne;
            $this->direccion = $direccion;
        }

        //Métodos get
        public function getCarnet(){
            return $this-> carnet;
        }

        public function getDireccion(){
            return $this-> direccion;
        }

        //Métodos set
        public function setCarnet(int $carnet){
            $this-> carnet = $carnet;
        }

        public function setDireccion(string $direccion){
            $this-> direccion = $direccion;
        }
    }
?>