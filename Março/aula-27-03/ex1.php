<!--UM QUADRILATERO EH UMA FORMA GERAL PARA QUADRADOS
E RETANGULOS. UM QUADRADO POSSUI UM LADO APENAS,
SUA AREA EH DADA PELO QUADRADO DO LADO E SEU PERÍMETRO
POR 4 VEZES SEU LADO. UM RETANGULO POSSUI DOIS LADOS
DIFERENTES, SUA AREA EH A MULTIPLICAÇÃO DAS DUAS E 
SEU PERÍMETRO 2 VEZES A SOMA DOS DOIS LADOS.
USANDO HERANÇA E SOB, IMPLEMENTE A SITUAÇÃO ACIMA E
DESENHE SEU DIAGRAMA DE CLASSES. -->

<?php
    class Quadrilatero{
        private $lado1,$lado2;
        
        public function Quadrilatero($lado1,$lado2){
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
        }
        
         public function Area(){
            return 0;
        }
        
        public function Perimetro(){
             return 0;
        }
        
        public function getLado1(){
             return $this->lado1;
        }
        
        public function getLado2(){
             return $this->lado2;
        }

    }
    
    class Quadrado extends Quadrilatero{
        
        public function Quadrado($lado1){
                parent::Quadrilatero($lado1);
        }
        
        public function Area(){
               return $this->getLado1()*$this->getLado1();
        }
            
        public function Perimetro(){
                return 4*$this->getLado1();
        }
    }
    
    class Retangulo extends Quadrilatero{
        
        public function Retangulo($lado1,$lado2){
                parent::Quadrilatero($lado1,$lado2);
        }
    
        public function Area(){
                return $this->getLado1()*$this->getLado2(); 
        }
            
        public function Perimetro(){
                return 2*($this->getLado1() + $this->getLado2());
        }
    }

?>