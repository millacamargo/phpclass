<!--Implemente a classe Porta que possua:
    - atributos: isOpen(boolean), numAberturas(int);
    - metodos: abrir(): abre a porta e conta 1 na contagem de aberturas
    - fechar(): fecha a porta. 
    OBS. O atributo numAberturas deve contar o total de aberturas de todas as portas possíveis-->
    
<?php
    class Porta{
        public $isOpen=0;
        public static $numAberturas=0;
        
        public function abrir(){
            if (!$this->isOpen){
                $this->isOpen = true; 
                self::$numAberturas++;
                echo "A porta foi aberta!<br>";
            } else {
                echo "A porta ja esta aberta!<br>";
            }    
            echo "Total de aberturas: ".self::$numAberturas."<br>";
        }
        public function fechar(){
            if ($this->isOpen){
            echo "A porta foi fechada!<br>";
            }else{
                echo "A porta ja estava fechada!<br>"; 
            } 
            $this->isOpen = false;                
        }  
    }
    $p1 = new Porta();
    $p2 = new Porta();
    $p1->abrir();
    $p1->abrir();
    $p2->abrir();
    $p2->fechar();


?>