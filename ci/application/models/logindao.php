<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginDAO extends CI_Model {
    public function getUser($email,$senha){
            //SELECT * FROM Usuario WHERE
            //email = $email AND senha = $senha 
            $this->db->where('email',$email);
		    $this->db->where('senha',$senha);
		    $usr = $this->db->get('Usuario');
		    require_once APPPATH."models/Usuario.php";
		    if ($usr->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $usuario = $usr->result()[0];
		        $id = $usuario->id;
		        $nome = $usuario->nome;
		        $emailUsu = $usuario->email;
		        $senhaUsu = $usuario->senha;
		        return new Usuario($nome,$emailUsu,$senhaUsu,$id);
            }else{
                return null;
            }
    }
}