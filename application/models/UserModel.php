<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

  public function getRoles()
  {
    return $this->db->get('roles');
  }

  public function simpanMasyarakat($data = null)
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'nik' => $this->input->post('nik', true),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'level' => $this->input->post('level', true)
    ];
    $this->db->insert('user', $data);
  }
  
  public function update()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'nik' => $this->input->post('nik', true),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'level' => $this->input->post('level', true)
    ];
    $this->db->where('id_masyarakat', $this->input->post('id_masyarakat'));
    $this->db->update('user', $data);
  }

}

?>