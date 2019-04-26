<?php

abstract class Quadrilatero{
    private $lado1;
    
    public function Quadrilatero($lado1){
        $this->lado1 = $lado1;
    }
    
    public abstract function calcularArea();
    
    public abstract function calcularPerimetro();
    
    public function getLado(){
        return $this->lado1;
    }
}

class Quadrado extends Quadrilatero{
    
    public function Quadrado($lado1){
        parent::Quadrilatero($lado1);
    }
    
    public function calcularArea(){
        return $this->getLado()*$this->getLado();    
    }
    
    public function calcularPerimetro(){
        return 4*$this->getLado();
    }
}

class Retangulo extends Quadrilatero{
    
    private $lado2;
    
    public function Retangulo($lado1,$lado2){
        parent::Quadrilatero($lado1);
        $this->lado2 = $lado2;
    }
    
    public function calcularArea(){
        return $this->getLado()*$this->getLado2();    
    }
    
    public function calcularPerimetro(){
        return 2*($this->getLado() + $this->getLado2());
    }
    
    public function getLado2(){
        return $this->lado2;
    }
}


class Pagina{
    //static desacopla um membro (metodo/atributo) da instancia.
    //Um membro estatico eh dito: membro de classe.
    
    //Polimorfismo de subtipos ocorre aqui. Quadrilatero aceitará
    //tanto quadrado quanto retangulo.
    public static function resultado(Quadrilatero $q){
        $area = $q->calcularArea();
        $perimtero = $q->calcularPerimetro();
        echo "<h1> $area </h1>";
        echo "<h1> $perimetro </h1>";
    }
    
    public static function principal(){
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $figura = $_POST["figura"];
        $objFigura = null;
        if($figura === "retangulo"){
            $objFigura = new Retangulo($lado1,$lado2);
        }
        if($figura === "quadrado"){
            $objFigura = new Quadrado($lado1);
        }
        Pagina::resultado($objFigura);
    }    
}


Pagina::principal();

?>

