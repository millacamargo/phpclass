<?php
class Produto{
    
    private $nome, $desc, $preco, $id;
    
    public function Produto($nome, $desc, $preco, $id=0){
        $this->nome = $nome;
        $this->desc = $desc;
        $this->preco = $preco;
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getDesc(){
        return $this->desc;
    }
    
    public function getPreco(){
        return $this->preco;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function isValido(){
        return $this->nome != "" 
            && $this->desc != ""
            && $this->preco > 0;
    }
    
    public function toArray(){
        $aux = array();
        $aux["nome"] = $this->nome;
        $aux["desc"] = $this->desc;
        $aux["preco"] = $this->preco;
        return $aux;
    }
    
    public function getClassName(){
        return "Produto";
    }
    
}
?>