<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PresidenModel extends CI_Model{

  public function update()
  {
    $partai = $_FILES['partai']['name'];
    if ($partai) {
      $config['upload_path']          = './assets/img/';
        $config['allowed_types']      = 'gif|jpg|png|jpeg|svg';
        $config['max_size']           = 2048; //2mb

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('partai')){
          echo $this->upload->display_errors();
        } else{
          $CekPartaiLama = $this->db->get_where('capres', ['id_calon' => $this->input->post('id_calon')])->row(); 
          if ($CekPartaiLama->partai != 'default.png') {
            unlink('assets/img/'.$CekPartaiLama->partai);
          }

          $PartaiBaru = $this->upload->data('file_name');
          $capres['partai'] = $PartaiBaru; 
        }
    }
    
    $foto_presiden = $_FILES['foto_presiden']['name'];
    if ($foto_presiden) {
      $config['upload_path']          = './assets/img/';
        $config['allowed_types']      = 'gif|jpg|png|jpeg|svg';
        $config['max_size']           = 2048; //2mb

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_presiden')){
          echo $this->upload->display_errors();
        } else{
          $CekFotoLama = $this->db->get_where('capres', ['id_calon' => $this->input->post('id_calon')])->row(); 
          if ($CekFotoLama->foto_presiden != 'default.png') {
            unlink('assets/img/'.$CekFotoLama->foto_presiden);
          }

          $FotoBaru = $this->upload->data('file_name');
          $capres['foto_presiden'] = $FotoBaru; 
        }
    }

    $capres['nama_kandidat'] = $this->input->post('nama_kandidat', true);
    $capres['nama_calon'] = $this->input->post('nama_calon', true);
    $this->db->where('id_calon', $this->input->post('id_calon'));
    $this->db->update('capres', $capres);
  }
}

?>