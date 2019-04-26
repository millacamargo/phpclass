<!-- Implemente uma classe que modele um jogo de advinhacao de numeros de 0 a 99.
    - atributos: um numero inteiro sorteado.
    - metodos: sortear(), advinhar().
    OSB: O objeto para gerar numero aleatorio no PHP é a funcao rand($min,$max), 
    sendo que queremos um minimo 0 e o maximo 100 -->

<?php
    class jogo{
        private $num;
        
        public function sortear($num){
            $this->num = $num;
            $num = rand(0,100);
        }

        
        public function adivinhar(){
            if($num == $_POST['value']){
            echo 'Acertou, meu guerreirinho!';
            }else{
            echo "Achou que ia acertar esse numero? ACHOU ERRADO OTARIO! O numero certo era: $num ";
            } 
            }
        }
        
    $joguinho = new jogo();
    $joguinho->sortear($num);
    $joguinho->adivinhar();
?>