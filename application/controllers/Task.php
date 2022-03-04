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
class Task extends CI_Controller{
    //put your code here
    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('userLogin');
        } elseif($this->session->userdata('logado')->access!='admin'){
            redirect('Home');
        }
        $this->load->model('TaskModel','task'); //criando um apelido da classe User_model para 'user'
    }

    public function index() {
        $this->load->view('template/header');
        $lista['tasks'] = $this->task->listar();
        $this->load->view('taskCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome no vetor (array) deve ser o mesmo do campo na tabela
        $dados['task_name'] = $this->input->post('task_name');
        $dados['open_date'] = $this->input->post('open_date');
        $dados['close_date'] = $this->input->post('close_date');
        $result = $this->task->inserir($dados);
        if($result==true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('task');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('task');
        }
    }

    public function deletar($id) {
        $result = $this->task->deletar($id);
        if($result==true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('task');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('task');
        }
    }

    public function editar($id) {
        $data['task'] = $this->task->editar($id);
        $this->load->view('taskEditar', $data);
    }

    public function atualizar() {
        $dados['id'] = $this->input->post('id');
        $dados['task_name'] = $this->input->post('task_name');
        $dados['open_date'] = $this->input->post('open_date');
        $dados['close_date'] = $this->input->post('close_date');
        if($this->task->atualizar($dados) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('task');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('task');
        }
    }

    public function concluir($id) {
        $dados['id'] = $id;
        $dados['close_date'] = date('Y-m-d');
        if($this->task->concluir($dados) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('task');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('task');
        }
    }

}