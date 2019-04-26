<?php
    class Animal{
        protected $nome;
        
        public function Animal($nome){
            $this->nome = $nome;
        }
        
        public function dormir(){
            echo "<h1> $this->nome: ZZZZzzzzzZ </h1>";
        }
        
        public function getNome(){
            return $this->nome;
        }
    }
    
    class Cachorro extends Animal{
        
        public function Cachorro($nome){
            //super(nome);
            parent::Animal($nome);
        }
        
        public function latir(){
            echo "<h1> $this->nome AUAUAUA </h1>";
        }
    }
    
    $c = new Cachorro("BIDU");
    $c->latir();
    $c->dormir();
    $nome = $c->getNome();
    echo "<h2> $nome </h2>";
    $a = new Animal("Generico");
    $a->dormir();
    
    if(null instanceof Cachorro)
        echo "<h1> SIM </h1>";
    else 
        echo "<h1> NAO </h1>";
    
?>