<?php
    class Producto
    {
        private string $codigo;
        private string $nombre;
        private int $stock;
        private float $valorUnitario;

        public function __construct($codigo, $nombre, $stock, $valorUnitario){
            $this-> codigo = $codigo;
            $this-> nombre = $nombre;
            $this-> stock = $stock;
            $this-> valorUnitario = $valorUnitario;
        }

        //Metodos gets y sets
        public function getCodigo(){
            return $this-> codigo;
        }

        public function getNombre(){
            return $this-> nombre;
        }

        public function getStock(){
            return $this-> stock;
        }
        
        public function getValorUnitario(){
            return $this-> valorUnitario;
        }

        public function setCodigo($codigo){
            $this-> codigo = $codigo;
        }
        
        public function setNombre($nombre){
            $this-> nombre = $nombre;
        }
        
        public function setStock($stock){
            $this-> stock = $stock;
        }
        
        public function setValorUnitario($valorUnitario){
            $this-> valorUnitario = $valorUnitario;
        }
    
    }
    