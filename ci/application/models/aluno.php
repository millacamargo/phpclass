<?php
class Aluno{
    
    private $nome, $ra, $cpf, $id;
    
    public function Aluno($nome, $ra, $cpf, $id=0){
        $this->nome = $nome;
        $this->ra = $ra;
        $this->cpf = $cpf;
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getRA(){
        return $this->ra;
    }
    
    public function getCpf(){
        return $this->nome;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function isValido(){
        return $this->nome != "" 
            && $this->cpf != ""
            && $this->ra > 1000;
    }
    
    public function toArray(){
        $aux = array();
        $aux["nome"] = $this->nome;
        $aux["ra"] = $this->ra;
        $aux["cpf"] = $this->cpf;
        return $aux;
    }
    
    public function getClassName(){
        return "Aluno";
    }
    
}
?>