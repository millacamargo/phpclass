<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// HA UMA SOBRESCRITA DE ROTA DE usuariocontroller/cadastro para
// usuario/cadastro
class UsuarioController extends CI_Controller {
    
    public function cadastro(){
        $this->load->view("usuariocadastro");
    }
    
    public function login(){
        $data["msgErro"] = $this->session->userdata("msgErro");
        $this->load->view("usuariologin",$data);
        $this->session->unset_userdata("msgErro");
    }
    
    public function inserir(){
        // COLOCAR NO CONSTRUTOR DESSA CLASSE TB FUNCIONA
        require_once APPPATH."/models/Usuario.php";
        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $usuario = new Usuario($nome,$email,$senha);
        if($usuario->isValido()){
            $this->load->model("insertdao");
            $this->insertdao->insertObject($usuario);
            redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/usuario/cadastro',true);
        }else{
            $this->load->view("erro");
        }
    }
    
    public function autenticar(){
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $this->load->model("logindao");
        $usuario = $this->logindao->getUser($email,$senha);
        if(isset($usuario)){
            $this->session->set_userdata("nome",$usuario->getNome());
            redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/usuario/dashboard',true);
        }else{
            //DEU PROBLEMA COM EMAIL/SENHA
            $this->session->set_userdata("msgErro","Login ou senha inválidos");
            redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/usuario/login',true);
        }
    }
    
    public function dashboard(){
        $data["nome"] = $this->session->userdata("nome");
        if(isset($data["nome"])){
            $this->load->view("dashboard",$data);
        }else{
            $this->session->set_userdata("msgErro","Você precisa estar logado");
            redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/usuario/login',true);
        }
    }
    
    public function logout(){
        $this->session->unset_userdata("nome");
        redirect('https://php-lfvasconcellos.c9users.io/ci/index.php/usuario/login',true);
    }
}