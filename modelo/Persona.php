<?php
    class Persona
    {
        private string $codigo;
        private string $email;
        private string $nombre;
        private string $telefono;

        public function __construct($codigo, $email, $nombre, $telefono){
            $this-> codigo = $codigo;
            $this-> email = $email;
            $this-> nombre = $nombre;
            $this-> telefono = $telefono;
        }

        public function getCodigo(){
            return $this-> codigo;
        }
        
        public function getEmail(){
            return $this-> email;
        }

        public function getNombre(){
            return $this-> nombre;
        }

        public function getTelefono(){
            return $this-> telefono;
        }

        public function setCodigo($codigo){
            $this-> codigo = $codigo;
        }
        
        public function setEmail($email){
            $this-> stock = $stock;
        }
        
        public function setNombre($nombre){
            $this-> nombre = $nombre;
        }
        
        public function setTelefono($telefono){
            $this-> telefono = $telefono;
        }
    }

?>