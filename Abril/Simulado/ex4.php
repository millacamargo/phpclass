<?php
//array exemplo
class Clube{
    private $nome;
    private $jogadores = array();
    
    public function Clube($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function addJogador($jogador){
         array_push($this->jogadores,$jogador);
    }
    public function removeJogador($jogador){
        $posicao = array_search($jogador,$this->jogadores);
        unset($this->jogadores[$posicao]);
    }
    
    public function getJogadores(){
        return $this->jogadores;
    }
    
    public function mostraJogadores(){
        echo "<h2>Todos os Jogadores do Clube $this->nome</h2><hr>";
         foreach ($this->jogadores as $jogador){
             $jogador->mostraJogador();
         }
     }
     
     public function gastoTotal(){
         $folhatotal = 0;
          foreach ($this->jogadores as $jogador){
              $folhatotal = $folhatotal + $jogador->getSalario();
          }
          
          echo "<h2>Gasto total de salario do clube $this->nome : $folhatotal </h2><hr>";
     }
    
}

class Jogador{
    private $nome,$numero,$salario,$clube;
    
    public function Jogador($nome,$numero,$salario,$clube){
        $this->nome = $nome;
        $this->numero = $numero;
        $this->salario = $salario;
        $this->clube = $clube;
        $clube->addJogador($this);
    }
    
    public function getNome(){return $this->nome;}
    public function getNumero(){return $this->numero;}
    public function getSalario(){return $this->salario;}
    public function getClube(){return $this->clube;}
    
    public function mostraJogador(){
      
        echo "<h3>Nome: $this->nome</h3>";
        echo "<h3>Numero: $this->numero</h3>";
        echo "<h3>Salario: $this->salario</h3>";
        echo "<h3>Clube que joga: ".$this->clube->getNome()."</h3><hr>";
    }
    
    public function trocarTime($novo_clube){
        $this->clube->removeJogador($this);
        $novo_clube->addJogador($this);
    }
    
}

$clube1 = new Clube("Santos");
$clube2 = new Clube("Palmeiras");

$jogador1 = new Jogador("Gabriel",10,150000,$clube1);
$jogador2 = new Jogador("Eduardo",9,200000,$clube1);
$jogador3 = new Jogador("Lucas Lima",20,300000,$clube1);

$jogador4 = new Jogador("Dudu",10,350000,$clube2);

$clube1->mostraJogadores();
$clube1->gastoTotal();

$jogador3->trocarTime($clube2);

$clube1->mostraJogadores();
$clube1->gastoTotal();

$clube2->mostraJogadores();
$clube2->gastoTotal();
?>