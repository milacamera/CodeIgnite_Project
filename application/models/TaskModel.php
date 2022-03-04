<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TaskModel
 *
 * @author Camila_Camera
 */
class TaskModel extends CI_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }

    function inserir($task) {
        return $this->db->insert('task', $task); //usuario é o nome da tabela no db
    }

    function listar() { //método que retorna lista de usuarios
        $this->db->select('*');
        $this->db->from('task');
        $this->db->order_by('task_name','ASC');
        $query = $this->db->get();
        
        return $query->result();
    }

    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('task');
    } 

    function editar($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('task');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        return $this->db->update('task');
    }

    function concluir($data) {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        return $this->db->update('task');
    }

}