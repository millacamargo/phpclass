<!--Para aparecer o resultado deve colocar echo. --> 
<?php
    class Calculadora{
        public $n1,$n2;
        
        public function Calculadora($n1,$n2){
            $this->n1 = $n1;
            $this->n2 = $n2;
        }
        
        public function somar(){
            return $this->n1 + $this->n2;
        }
    }

     $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $k = new Calculadora($num1,$num2);
    $s = $k->somar();
    echo "<h1> A SOMA EH: $s </h1>";
?>