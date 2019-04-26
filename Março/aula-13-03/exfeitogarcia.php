<?php
    
    class Bateria{
        public $carga;
        
        public function Bateria($carga){
            $this->carga = $carga;
        }
        
        public function recarregar(){
            if($this->carga <= 90)
                $this->carga = $this->carga + 10;
        }
        
        public function descarregar(){
            if($this->carga >= 5)
                $this->carga = $this->carga - 5;
        }
        
        public function isSuficienteDesliga(){
            return $this->carga > 10;
        }
        
        public function isSuficienteLiga(){
            return $this->carga > 5;
        }
        
        public function verStatus(){
            echo "<h1> $this->carga </h1>";
        }
        
    }
    
    class Celular{
        public $nome, $status, $bateria;
        
        public function Celular($nome,Bateria $bateria){
            $this->nome = $nome;
            $this->bateria = $bateria;
            $this->status = false;
        }
        
        public function isLigado(){
            return $this->status;
        }
        //SERIA PRIVADO
        public function click(){
            $this->status = !$this->status;
        }
        
        public function hello(){
            echo "<h1> Ola $this->nome </h1>";
        }
        
        public function fim(){
            echo "<h1> Fim... </h1>";
        }
        
        public function ligar(){
            if(!$this->isLigado() && $this->bateria->isSuficienteLiga()){
                $this->click();
                $this->bateria->descarregar();                
                $this->hello();
                $this->bateria->verStatus();
            }
        }
        
        public function desligar(){
            if($this->isLigado() && $this->bateria->isSuficienteDesliga()){
                $this->click();
                $this->fim();
            }
        }
    }
    
    $bat = new Bateria(50);
    $cel = new Celular("Danilo",$bat);
    $cel->ligar();
    $cel->desligar();
    $cel->ligar();
    
?>