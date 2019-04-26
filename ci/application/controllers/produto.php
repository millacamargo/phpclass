<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// HA UMA SOBRESCRITA DE ROTA DE alunocontroller/inserir para
// aluno/inserir
class ProdutoController extends CI_Controller {
    
    public function listar(){
        $this->load->model("listdao");
        $data["produtos"] = $this->listdao->listObject("Produto");
        $this->load->view('listaproduto',$data);
    }
    // /aluno/form
    public function form(){
        $sess = $this->session->userdata("nome");
        if(isset($sess)){
            $this->load->view("produto");
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado");
            redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/usuario/login',true);
        }
    }
    
    // /aluno/inserir
    public function inserir(){
        $sess = $this->session->userdata("nome");
        if(isset($sess)){
            $nome = $this->input->post("nome");
            $desc = $this->input->post("desc");
            $preco = $this->input->post("preco");
            //MONTAR O OBJETO ALUNO
            require_once APPPATH."/models/Produto.php";
            $produto = new Produto($nome,$desc,$preco);
            if($produto->isValido()){
                $this->load->model("insertdao");
                $this->insertdao->insertObject($produto);
                redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/produto/form',true);
            }else{
                $this->load->view("erro");
            }
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado");
            redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/usuario/login',true);
        }
    }    
}