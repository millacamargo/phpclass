<?php

class Foo{
    public $a;
    private $b, $c, $d;
    
    public function Foo($b, $c, $d){
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
    }
    
    public function metodo1(){
        echo "<h1>METODO 1</h1>";
    }
    
    private function metodo2(){
        echo "<h1>METODO 2</h1>";
    }
    
    public function getB(){
        return $this->b;
    }
    
    public function setB($b){
        $this->b = $b;
    }
    
    public function get($atributo){
        return $this->$atributo;
    }
    
    public function set($valor,$atributo){
        $this->$atributo = $valor;
    }
}
//VARIAVEL VARIAVEL: PODEMOS USAR VARIAVEIS
//PARA MANIPULAR NOMES DE VARIAVEIS, OBJETOS E ETC...
$aux = "Foo";
$f = new $aux(1,2,3);
$f->set(8,"d");
$x = $f->get("d");
echo "<h1> $x </h1>";
//$str = "a";
//$f->$str = 25;
//$x = $f->$str;
//echo "<h1> $x </h1>"

?>