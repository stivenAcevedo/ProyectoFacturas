<?php
    class Cliente extends Persosa
    {
        private string $credito;

        //Constructor 
        public function __construct(string $codigo, string $email, string $nombre, string $telefono, float $credito) {
            parent::__construct($codigo, $email, $nombre, $telefono); //parent:: se usa para llamar métodos de la clase padre, en este caso Persona
            $this->credito = $credito;
        }

        //Método get
        public function getCliente(){
            return $this-> cliente;
        }

        //Método set
        public function setCliente(string $cliente){
            $this-> cliente = $cliente;
        }
    }
?>