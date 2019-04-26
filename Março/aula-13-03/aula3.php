<?php
class Endereco{
    public $logradouro,$cep,$cidade,$estado;
    
    public function Endereco($logradouro,$cep,$cidade,$estado){
        $this->logradouro = $logradouro;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }
    
    public function mostrarDados(){
        echo "<h1> $this->logradouro </h1>";
        echo "<h1> $this->cep </h1>";
        echo "<h1> $this->cidade </h1>";
        echo "<h1> $this->estado </h1>";
    }
}

class Aluno{
    public $nome, $curso, $endereco;
    
    public function Aluno($nome, $curso, $endereco){
        $this->nome = $nome;
        $this->curso = $curso;
        $this->endereco = $endereco;
    }
    
    public function mostrar(){
        echo "<h1> $this->nome </h1>";
        echo "<h1> $this->curso </h1>";
        $this->endereco->mostrarDados();
    }
}

//------------- TESTE -----------------
$end = new Endereco($_POST["logradouro"]
                   ,$_POST["cep"]
                   ,$_POST["cidade"]
                   ,$_POST["estado"]);
$aluno = new Aluno($_POST["nome"],$_POST["curso"],$end);
$aluno->mostrar();
?>


