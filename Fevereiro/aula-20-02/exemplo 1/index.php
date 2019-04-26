<?php
    class Cachorro{
        public $nome, $raca;
        
        public function latir(){
            echo "<h1> $this->nome : AUAU </h1>";
            //sempre que me referir a um atributo, colocar this na frente, pois se colocar só $nome este não vai existir.
        }
        
        public function mostrarRaca(){
            echo "<p> $this->raca </p>";
        }
    }

    $c = new Cachorro();
    $c->nome = "BIDU";
    $c->raca = "SRD";
    $c->latir();
    $c->mostrarRaca();
    $d = new Cachorro();
    $d->nome = "SNOOPY";
    $d->raca = "Dalmata";
    $d->latir();
    $d->mostrarRaca();
    
?>