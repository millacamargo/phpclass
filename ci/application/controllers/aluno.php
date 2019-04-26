<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// HA UMA SOBRESCRITA DE ROTA DE alunocontroller/inserir para
// aluno/inserir
class AlunoController extends CI_Controller {
    
    public function listar(){
        $this->load->model("listdao");
        $data["alunos"] = $this->listdao->listObject("Aluno");
        $this->load->view('listaaluno',$data);
    }
    // /aluno/form
    public function form(){
        $this->load->view("aluno");
    }
    
    // /aluno/inserir
    public function inserir(){
        $nome = $this->input->post("nome");
        $ra = $this->input->post("ra");
        $cpf = $this->input->post("cpf");
        //MONTAR O OBJETO ALUNO
        require_once APPPATH."/models/Aluno.php";
        $aluno = new Aluno($nome,$ra,$cpf);
        if($aluno->isValido()){
            $this->load->model("insertdao");
            $this->insertdao->insertObject($aluno);
            redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/aluno/form',true);
        }else{
            $this->load->view("erro");
        }
    }    
}