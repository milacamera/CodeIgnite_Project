<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('estou_logado')){
           redirect('Login');
        }
        //contatos é um alias para o Contatos_model 
    }
    public function index() {
        $this->load->view('template/header');
        //$dados['acronico'] = "MPF";
        //$dados['completo'] = "Meu Projeto Framework";
        //$this->load->view('vHome', $dados);
		$this->load->view('vHome');
        $this->load->view('template/footer');
    } 
}

