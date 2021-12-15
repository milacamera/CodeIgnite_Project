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
        } elseif($this->session->userdata('logado')->perfilAcesso!='admin'){
            redirect('home');
        }
        $this->load->model('User_model','user'); //criando um apelido da classe User_model para 'user'
    }
    
    public function index() {
        $lista['users'] = $this->user->listar();
        $this->load->view('userCadastro', $lista);
    }
    
    public function inserir() {
        //nome no vetor (array) deve ser o mesmo do campo na tabela
        $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = $this->input->post('user');
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');
        $dados['senha'] = md5(mb_convert_case($this->input->post('senha'), MB_CASE_LOWER));
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
        $dados['idusuario'] = $this->input->post('idusuario');
        $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = $this->input->post('user');
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');
        $dados['senha'] = $this->input->post('senha');
        if($this->user->atualizar($dados) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('user');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('user');
        }
    }
}
