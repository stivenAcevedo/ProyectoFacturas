<?php
    class Producto
    {
        private string $codigo;
        private string $nombre;
        private int $stock;
        private float $valorUnitario;

        //Constructor
        public function __construct(string $codigo,string  $nombre, int $stock, float $valorUnitario){
            $this-> codigo = $codigo;
            $this-> nombre = $nombre;
            $this-> stock = $stock;
            $this-> valorUnitario = $valorUnitario;
        }

        //Métodos get
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

        //Métodos set
        public function setCodigo(string $codigo){
            $this-> codigo = $codigo;
        }
        
        public function setNombre(string $nombre){
            $this-> nombre = $nombre;
        }
        
        public function setStock(int $stock){
            $this-> stock = $stock;
        }
        
        public function setValorUnitario(float $valorUnitario){
            $this-> valorUnitario = $valorUnitario;
        }
    }
?>  