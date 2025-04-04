<?php
    class Usuario{
        public $usuario;
        public $clave;
        public $estado;
        public $persona;

        public function getUsuario(){
            return $this->usuario;
        }
        public function getClave(){
            return $this->clave;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function getPersona(){
            return $this->persona;
        }

        public function setUsuario($usuario): void{
            $this->usuario = $usuario;
        }
        public function setClave($clave): void{
            $this->clave = $clave;
        }
        public function setEstado($estado): void{
            $this->estado = $estado;
        }
        public function setPersona($persona): void{
            $this->persona = $persona;
        }
    }
?>