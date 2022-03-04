<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_model
 *
 * @author Camila_Camera
 */
class UserModel extends CI_Model{
    //put your code here
    function __construct() {
    parent::__construct();
  }
  
  function inserir($user) {
      return $this->db->insert('user', $user); //usuario é o nome da tabela no db
  }

  function listar() { //método que retorna lista de usuarios
    $this->db->select('*');
    $this->db->from('user');
    $this->db->order_by('username','ASC');
    $query = $this->db->get();
    
    return $query->result();
  }

  function deletar($id) {
      $this->db->where('id_user', $id);
      return $this->db->delete('user');
  } 
  
  function editar($id) {
      $this->db->where('id_user', $id);
      $result = $this->db->get('user');
      return $result->result();
  }
  
  function atualizar($data) {
      $this->db->where('id_user', $data['id_user']);
      $this->db->set($data);
      return $this->db->update('user');
  }
}
