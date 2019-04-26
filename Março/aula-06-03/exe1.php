<!--EXERCICIO: Implemente uma classe chamada IMC que 
possua peso e altura como atributos, um método
de cálculo e um método para classificar.
Um usuário com imc abaixo de 18 é ABAIXO DO PESO
Entre 18 e 25 (não incluso) é SAUDÁVEL
Acima de 25 é ACIMA DO PESO.

Faça um formulário para digitar peso e altura, em
outra página mostre o cálculo e sua classificação.-->

<?php
    class IMC{
        public $peso,$altura;
        
        public function IMC($peso,$altura){
            $this->peso = $peso;
            $this->altura = $altura;
        }
        
        public function dividir(){
            return $this->peso/pow($this->altura,2);
        }
    }

     $peso = $_POST["Peso"];
    $altura = $_POST["Altura"];
    $k = new IMC($peso,$altura);
    $d = $k->dividir();
    echo "<h1> Seu IMC EH: $d </h1>";
?>