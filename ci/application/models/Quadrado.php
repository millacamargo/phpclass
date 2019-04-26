<?php

class Quadrado{
    private $lado;

    public function Quadrado($lado){
            $this->lado = $lado;
    }
    
    public function calcArea(){
         return $this->lado*$this->lado;
    }
    
}  


?>