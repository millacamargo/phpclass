<?php

public interface Brincavel{
    function brincar();
}

public interface Pulavel{
    function pular();
}

abstract class Animal{
    private $nome;
    
    public function Animal($nome){
        $this->nome = $nome
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public abstract function emitirSom();
}

class Cachorro extends Animal implements Brincavel, Pulavel{
    public function emitirSom(){
        echo "<h1> AUAUAUAU </h1>";
    }
    
    public function cavar(){
        echo "<h1> CAVOU </h1>";
    }
    
    public function brincar(){
        echo "<h1> BRINCOU COM O OSSO </h1>";
    }
    
    public function pular(){
        echo "<h1> PULOU MEDIO </h1>";
    }
}

class Gato extends Animal implements Pulavel{
    public function emitirSom(){
        echo "<h1> MIAU </h1>";
    }
    
    public function arranhar(){
        echo "<h1> ARRANHOU </h1>";
    }
    
    public function pular(){
        echo "<h1> PULOU ALTO </h1>";
    }
}

class Urso extends Animal{
    public function emitirSom(){
        echo "<h1> UUUUUURRRRRR </h1>";
    }
    
    public function hibernar(){
        echo "<h1> ZZZzzzzzZZZzz </h1>";
    }
}

abstract class Robo{
    
    public function ligar(){
        echo "<h1> ON! </h1>";
    }
    
    public function desligar(){
        echo "<h1> OFF! </h1>";
    }
    
    public abstract function cumprimentar();
}

class IDog extends Robo implements Brincavel{
    public function cumprimentar(){
        echo "<h1> SOU UM IDOG </h1>";
    }
    
    public function brincar(){
        echo "<h1> BRINCOU COMO UM IDOG </h1>";
    }
}

class Transformer extends Robo implements Pulavel{
    public function cumprimentar(){
        echo "<h1> TAH LASCADO! </h1>";
    }
    
    public function pular(){
        echo "<h1> QUASE VOA </h1>";
    }
}

$c = new Cachorro();
$c->emitirSom(); //EH UM ANIMAL
$c->brincar(); //EH UM BRINCAVEL
$c->pular(); //EH UM PULAVEL
$c->cavar(); //EH UM CACHORRO

$g = new Gato();
$g->pular();
$g->emitirSom();
$g->arranhar();

?>