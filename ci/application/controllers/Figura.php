<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Figura extends CI_Controller {

	public function form(){
	    //O INDICE DO ARRAY N ASSOCIATIVO data
	    //SERA USADO COMO VARIAVEL NO FORM. EM NOSSO
	    //CASO, res ($res).
	    $data["res"] = 0;
		$this->load->view('quadrado',$data);
	}
	
	//após o clique
	public function calculo(){
	    require_once APPPATH."/models/Quadrado.php";
	    //lado eh indicado no name do form em
	    //quadrado.php
	    $ladoDigitado = $this->input->post("lado");
	    $q = new Quadrado($ladoDigitado);
	    //FAZER A CONTA
	    $data["res"] = $q->calcArea();
		$this->load->view('quadrado',$data);
	}
}
?>