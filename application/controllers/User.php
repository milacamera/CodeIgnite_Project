<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Camila_Camera
 */
class User extends CI_Controller{
    //put your code here
    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('userLogin');
        } elseif($this->session->userdata('logado')->access!='admin'){
            redirect('Home');
        }
        $this->load->model('UserModel','user'); //criando um apelido da classe User_model para 'user'
    }
    
    public function index() {
        $this->load->view('template/header');
        $lista['users'] = $this->user->listar();
        $this->load->view('userCadastro', $lista);
        $this->load->view('template/footer');
    }
    
    public function inserir() {
        //nome no vetor (array) deve ser o mesmo do campo na tabela
        $dados['username'] = $this->input->post('username');
        $dados['access'] = $this->input->post('access');
        $dados['pas'] = md5(mb_convert_case($this->input->post('pas'), MB_CASE_LOWER));
        $result = $this->user->inserir($dados);
        if($result==true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('user');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('user');
        }
    }
    
    public function deletar($id) {
        $result = $this->user->deletar($id);
        if($result==true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('user');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('user');
        }
    }
    
    public function editar($id) {
        $data['user'] = $this->user->editar($id);
        $this->load->view('userEditar', $data);
    }
    
    public function atualizar() {
        $dados['id_user'] = $this->input->post('id_user');
        $dados['username'] = $this->input->post('username');
        $dados['access'] = $this->input->post('access');
        $dados['pas'] = $this->input->post('pas');
        if($this->user->atualizar($dados) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('user');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('user');
        }
    }
}
