<?php
    class Empresa
    {

        private string $codigo;
        private string $nombre;
        
        public function __construct(string $codigo, string $nombre){
            $this-> codigo = $codigo;
            $this-> nombre = $nombre;
        }

        public function getCodigo(){
            return $this-> codigo;
        }

        public function getNombre(){
            return $this-> nombre;
        }

        public function setCodigo(string $codigo){
            $this-> codigo = $codigo;
        }

        public function setNombre(string $nombre){
            $this-> nombre = $nombre;
        }

    }
?>