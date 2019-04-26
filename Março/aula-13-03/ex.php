<!--UMA BATERIA POSSUI UM INTEIRO (0 A 100) QUE REPRESENTA SUA CARGA ATUAL. UMA BATERIA PODE CARREGAR 10 PONTOS POR VEZ E DESCARREGAR 5.
UM CELULAR EH COMPOSTO POR NOME DO DONO E UMA BATERIA. AO LIGAR, O NOME DO DONO APARECE NO VISOR E, COM ISSO,
PERDE 5 PONTOS DE BATERIA. ELE SÓ LIGA SE A BATERIA TIVER MAIS QUE 5 PONTOS. PARA DESLIGAR NADA É GASTO,
PORÉM, É NECESSÁRIO 10 PONTOS DE BATERIA. UM CELULAR SÓ LIGA SE ESTIVER DESLIGADO E SÓ DESLIGA SE ESTIVER LIGADO. -->

<?php 
    
    class Bateria{
        public $cargaAtual;
        
        public function __construct(){
            $this->cargaAtual = 100;
        }
        
        public function carregar() {
            $this->cargaAtual += 10;
        }

        public function desarregar() {
            $this->cargaAtual -= 5;
        }
        
         public function getCarga() {
            return $this->cargaAtual;
        }
        
    }
    
    class Celular{
        public $dono, $bateria;
        
        public function __construct($nome){
            $this->dono = $nome;
        }
        
        public function ligar(){
            $this->bateria = new Bateria;
            $this->bateria->desarregar();
            echo $this->bateria->getCarga();
            echo $this->dono;
        }
    }

    $aparelho = new Celular('Milla');
    $aparelho->ligar();
?>