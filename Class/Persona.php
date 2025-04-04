<?php
    class Persona{
        public $nombre;
        public $apePaterno;
        public $apeMaterno;
        public $fecNac;

        public function getNombre(){
            return $this->nombre;
        }
        public function getApePaterno(){
            return $this->apePaterno;
        }
        public function getApeMaterno(){
            return $this->apeMaterno;
        }
        public function getFecNac(){
            return $this->fecNac;
        }

        public function setNombre($nombre): void{
            $this->nombre = $nombre;
        }
        public function setApePaterno($apePaterno): void{
            $this->apePaterno = $apePaterno;
        }
        public function setApeMaterno($apeMaterno): void{
            $this->apeMaterno = $apeMaterno;
        }
        public function setFecNac($fecNac): void{
            $this->fecNac= $fecNac;
        }
    }
?>