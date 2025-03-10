<?php
    class Persona
    {
        private string $codigo;
        private string $email;
        private string $nombre;
        private string $telefono;

        //Constructor
        public function __construct(string $codigo, string $email, string $nombre, string $telefono){
            $this-> codigo = $codigo;
            $this-> email = $email;
            $this-> nombre = $nombre;
            $this-> telefono = $telefono;
        }

        //Métodos get
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

        //Métodos set
        public function setCodigo(string $codigo){
            $this-> codigo = $codigo;
        }
        
        public function setEmail(string $email){
            $this-> stock = $stock;
        }
        
        public function setNombre(string $nombre){
            $this-> nombre = $nombre;
        }
        
        public function setTelefono(string $telefono){
            $this-> telefono = $telefono;
        }
    }
?>