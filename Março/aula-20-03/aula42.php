<?php
//array exemplo
class Disciplina{
    private $nome, $alunos;
    
    public function Disciplina($nome){
        $this->nome = $nome;
        $this->alunos = array();
    }
    //COLOCA UM ALUNO NA POSICAO EQUIVALENTE
    //AO TAMANHO.
    public function matricular(Aluno $aluno){
        $this->alunos[] = $aluno;
    }
    
    public function listarAlunos(){
        foreach($this->alunos as $aluno){
            $aluno->mostrarInfo();
        }
    }
    
    public function quantidadeMatriculados(){
        return count($this->alunos);
    }
}

class Aluno{
    private $nome, $ra;
    
    public function Aluno($nome, $ra){
        $this->nome = $nome;
        $this->ra = $ra;
    }
    
    public function mostrarInfo(){
        echo "<h1> NOME: $this->nome </h1>";
        echo "<h1> RA: $this->ra </h1>";
    }
}

$a1 = new Aluno("Zitei","0050831621007");
$a2 = new Aluno("Allan","0050831721001");
$a3 = new Aluno("Nathan","0050831621034");
$a4 = new Aluno("Rebeca","0050831621037");
$d = new Disciplina("PHP");
$d->matricular($a3);
$d->matricular($a2);
$d->matricular($a4);
$d->matricular($a1);
$d->listarAlunos();
$qtd = $d->quantidadeMatriculados();
echo "<h1>Matriculados: $qtd</h1>";
?>