<?php
    class Cliente
    {
        private string $credito;

        public function __construct($credito){
            $this-> credito = $credito;
        }

        public function getCliente(){
            return $this-> cliente;
        }

        public function setCliente($cliente){
            $this-> cliente = $cliente;
        }

    }

?>