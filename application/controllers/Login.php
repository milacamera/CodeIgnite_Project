<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Camila_Camera
 */
class Login extends CI_Controller {
    //put your code here

    function __construct(){
        parent::__construct();
    }
        
    
    public function index() {
        if ($this->session->userdata('estou_logado')) {
            redirect('Home');
        } else {
            $this->load->view('template/header');
            $this->load->view('userLogin');
            $this->load->view('template/footer');
        }
    }
    
    public function autenticar() {
        $usuario = mb_convert_case($this->input->post('username'), MB_CASE_LOWER);
        $senha = md5(mb_convert_case($this->input->post('pas'), MB_CASE_LOWER));
        $this->db->where('username', $usuario);
        $this->db->where('pas', $senha);
        $usuario_logado = $this->db->get('user')->result();
        if (count($usuario_logado) == 1) {
            $this->db->where('username', $usuario);
            $usuario_logado1 = $this->db->get('user')->result();
            $dados['logado'] = $usuario_logado1[0];
            $dados['estou_logado'] = TRUE;
            $this->session->set_userdata($dados);
            redirect('Home');
        } else {
            $dados['logado'] = NULL;
            $dados['estou_logado'] = FALSE;
            $this->session->set_flashdata('erroLogin', 'msg');
            redirect('Login');
        }
    }

    public function sair() {
        $dados['logado'] = NULL;
        $dados['estou_logado'] = FALSE;
        $this->session->set_userdata($dados);
        redirect('Login');
    }
}
