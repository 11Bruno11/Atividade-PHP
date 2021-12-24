<?php
    class Carro{
        private $Marca;
        private $Modelo;
        private $Ano;

        public function getMarca(){
            return $this->Marca;
        }

        public function setMarca($Marca){
            $this->Marca = $Marca;
        }

        public function getModelo(){
            return $this->Modelo;
        }

        public function setModelo($Modelo){
            $this->Modelo = $Modelo;
        }

        public function getAno(){
            return $this->Ano;
        }

        public function __construct(){
            $this->Ano = 2015;
        }

        public function __destruct(){
            echo "Conexão encerrada";
        }
    }
?>