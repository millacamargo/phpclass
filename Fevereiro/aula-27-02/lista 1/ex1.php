<!--Dada a classe Pessoa, que possui os atributos: String
nome, String sexo, int idade, boolean vegetariana. Faça agora uma
classe Churrasco que possua:
Atributos: qtdCarne(double);
Método: verificarConsumo(): Recebe via parâmetro uma Pessoa, e com
isto define a consumação média de carne(quantidade de carne consumida),
pessoas de 0 a 3 anos não consomem, vegetarianos também não.
Pessoas de 4 a 12 anos consomem 1 kilo de carne e de 13 anos em diante
2 kilos de carne.-->

<?php 

    class Pessoa{
        public $nome;
        public $sexo; 
        public $idade;
        public $vegetariana;
        
        //Construtor
        public function __construct ($nome, $sexo, $idade, $vegetariana){
            $this->nome=$nome;
            $this->sexo=$sexo;
            $this->idade=$idade;
            $this->vegetariana=$vegetariana;
        }
        
    }
    
    class Churrasco{
        public $qtdCarne=0;
        
        public function verificarConsumo(Pessoa $p){
       
        if($p->idade<4 || $p->vegetariana){
            $this->qtdCarne +=0; 
            //Se tiver até 3 anos ou for vegetariana
        } elseif ($p->idade > 3 &&  $p->idade < 12){
            $this->qtdCarne += 1; 
            // De 4 a 12 anos
        } else {
            $this->qtdCarne = $this->qtdCarne+2; 
            //Acima dos 12 anos
            }
        }
    }

$m = new Pessoa("Maurilio","m",22,false);
$r = new Pessoa("Renan","m",23,false);
$s = new Pessoa("Simone","f",21,true);
$j = new Pessoa("Julinho","m",2,false);
$churras = new Churrasco();
$churras->verificarConsumo($m);
$churras->verificarConsumo($r);
$churras->verificarConsumo($s);
$churras->verificarConsumo($j);
echo("Quantidade de carne do churras: ".$churras->qtdCarne);
?>