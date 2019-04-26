<!--EXERCICIO2: Implemente uma classe chamada Circulo que possua
um atributo chamado raio e métodos para calcular área e
perímetro.
Faça um formulário para digitar o raio e mostrar em 
outra página área e perímetro.-->

<?php 

    class Circulo{
        public $raio;
        
        public function Circulo($raio){
            $this->raio = $raio;
    }

        public function area(){
            return M_PI*pow($this->raio,2);
        }
        
        public function perimetro(){
            return 2 * M_PI * $this->raio;
    }

    }
    
 $raio = $_POST["Raio"];
    $k = new Circulo($raio);
    $a = $k->area();
    $p = $k->perimetro();
    echo "<h1> A area do circulo EH: $a </h1>";
    echo "<h1> O perimetro do circulo EH: $p </h1>";

?>