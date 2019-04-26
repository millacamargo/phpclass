<?php
class Usuario{
    
    private $nome, $email, $senha, $id;
    
    public function Usuario($nome, $email, $senha, $id=0){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function isValido(){
        return $this->nome != "" 
            && $this->email != ""
            && $this->senha != "";
    }
    
    public function toArray(){
        $aux = array();
        $aux["nome"] = $this->nome;
        $aux["email"] = $this->email;
        $aux["senha"] = $this->senha;
        $aux["id"] = $this->id;
        return $aux;
    }
    //NOME DA TABELA
    public function getClassName(){
        return "Usuario";
    }
    
}
?>