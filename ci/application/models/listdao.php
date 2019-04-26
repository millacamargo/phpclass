<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ListDAO extends CI_Model {
    // VAI INSERIR UM REGISTRO AO BANCO
    
    //ESSE $obj REPRESENTARÁ CLASSES QUE POSSUAM OS METODOS
    // getClassName() => DUCK TYPING
    public function listObject($tabela){
        $res = $this->db->query("Select * From " . $tabela);
        return $res->result();
    }    
}