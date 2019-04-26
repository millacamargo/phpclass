<!-- inicializa logo de cara esse é o beneficio de usar construtor. O this é o c -->
<?php
//exemplo de construtor
    class Cachorro{
        
        public $nome, $raca;
        
        public function Cachorro($nome,$raca){
            $this->nome = $nome;
            $this->raca = $raca;
        }
        
        public function latir(){
            echo "<h1> $this->nome : AUAU </h1>";
        }
        
    }
    $c = new Cachorro("BIDU","SRD");
    $c->latir();
?> 
