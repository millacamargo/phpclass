<?php
    class Animal{
        protected $nome;
        
        public function Animal($nome){
            $this->nome = $nome;
        }
        
        public function dormir(){
            echo "<h1> $this->nome: ZZZZzzzzzZ </h1>";
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function emitirSom(){
            echo "<h1> SOM GENERICO </h1>";
        }
    }
    
    class Cachorro extends Animal{
        public function emitirSom(){
            echo "<h1> $this->nome: AUAU </h1>";
        }
    }
    
    class Gato extends Animal{
        public function emitirSom(){
            echo "<h1> $this->nome: MIAU </h1>";
        }
    }
    
    //O emitirSom esta definido em Animal, porém
    //Gato e Cachorro emitem som de formas diferentes.
    //A sobrescrita nos permite usar o mesmo nome de metodo
    //nesse caso, emitirSom, para descrever os comportamentos
    //de latido e miado.
    // sempre que eu tiver um animal novo, crio uma nova classe;
    
    $c = new Cachorro("BIDU");
    $g = new Gato("BRANCO");
    $a = new Animal("GENERICO");
    $g->dormir();
    $c->dormir();
    //EM TEMPO DE EXECUCAO, SABER-SE-A QUAL METODO
    //SERA EXECUTADO.
    $g->emitirSom();
    $c->emitirSom();
    $a->emitirSom();
    
    //vantagens do acima
     //a) REDUZ-SE A NECESSIDADE DE MODIFICACAO
    //CONTINUA DE UMA MESMA CLASSE.
    //b) TROCA-SE UM ERRO DE "LOGICA" POR UM ERRO
    //DE INTERPRETACAO DO PHP.
    
// versao ruim

//class AnimalRuim{
      //  private $nome, $tipo;
        
      //  public function AnimalRuim($nome,$tipo){
        //    $this->nome = $nome;
       //     $this->tipo = $tipo;
      //  }
        
       // public function emitirSom(){
       //     if($this->tipo === "Cachorro" ){
               // echo "<h1> $this->nome: AUAU </h1>";
       //     }
         //   if($this->tipo === "Gato" ){
         //       echo "<h1> $this->nome: MIAU </h1>";
        //    }
      //  }
//    }
    
  //  $ar = new AnimalRuim("REX","Gato");
  //  $ar->emitirSom();
    
    
?>