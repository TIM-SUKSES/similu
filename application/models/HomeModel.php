<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model
{

    public function pilih_kandidat()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'nama_kandidat' => $this->input->post('nama_kandidat'),
        ];
        $this->db->insert('suara', $data);
    }
    public function update_status_user()
    {
        $data = ['status' => 1];
        $this->db->where('id_masyarakat', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

  
}
