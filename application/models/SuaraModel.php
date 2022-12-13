<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SuaraModel extends CI_Model{

  public function getSuara()
  {
    $this->db->select('*, suara.id_suara as id_suara, user.nama as nama_user');
    $this->db->from('suara');
    $this->db->join('user', 'user.id_masyarakat = suara.id_user');
    return $this->db->get();
  }
}

?>