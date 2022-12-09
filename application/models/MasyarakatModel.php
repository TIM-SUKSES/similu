<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MasyarakatModel extends CI_Model{
  public function simpan()
  {
    $user = $this->input->post('nama', true);
    $data = [];
    foreach ($user as $key => $value) {
      $data[] = [
        'nama' => $user[$key]
      ];
    }

    $this->db->insert_batch('user', $data);
  }   
}

?>