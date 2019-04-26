<?php
    class Contador{
    public $qtde;
    
        public function zerar(){
        $this->qtde = 0;
        }
        
        public function incrementar(){
        $this->qtde = $this->qtde + 1;
        }
        
         public function mostrar(){
        echo "<h1> Atual: $this->qtde </h1>";
        }

    }
    
       
    $k = new Contador();
    $k->zerar();
    $k->incrementar();
    $k->incrementar();
    $k->mostrar();
    
?>