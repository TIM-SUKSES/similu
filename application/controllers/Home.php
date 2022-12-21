
<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('HomeModel');
    if ($this->session->userdata('level') != 'pemilih'){
      redirect('auth');
    }
  }

  public function index()
  {
    $data['title'] = 'SIMILU';
    $data['capres'] = $this->db->get('capres')->result();
    $data['capres1'] = $this->db->get_where('suara', ['nama_kandidat' => 'CAPRES NO. 1'])->num_rows();
    $data['capres2'] = $this->db->get_where('suara', ['nama_kandidat' => 'CAPRES NO. 2'])->num_rows();
    $data['user'] = $this->db->get_where('user',['id_masyarakat' => $this->session->userdata('id_masyarakat')])->row();
    $this->load->view('templates/header', $data);
    $this->load->view('home', $data);
    $this->load->view('templates/footer', $data);
  }
  
  public function visimisi($id_kandidat)
  {
    $data['title'] = 'Visi & Misi | SIMILU';
    $data['capres'] = $this->db->get_where('capres', ['id_calon' => $id_kandidat])->row();
    $data['visimisi'] = $this->db->get_where('visimisi', ['id_kandidat' => $id_kandidat])->row();
    $this->load->view('templates/header-visimisi', $data);
    $this->load->view('visimisi', $data);
    $this->load->view('templates/footer', $data);
  }


  public function pilih_kandidat()
  {
    $this->HomeModel->pilih_kandidat();
    $this->HomeModel->update_status_user();
    if ($this->db->affected_rows() > 0) {
      $result = ['success' => true];
    }else {
      $result = ['success' => false];
    }

    echo json_encode($result);
  }

  public function UbahPassword()
  {
    // $this->HomeModel->ubahPassword();
    $data['title'] = 'Ubah Password | SIMILU';
    $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

    $this->form_validation->set_rules('password', 'Password Lama', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[3]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Konfirmasi Password', 'required|trim|min_length[3]|matches[new_password1]');

    if($this->form_validation->run() == false){
      $this->load->view('templates/header-ubahpassword', $data);
      $this->load->view('ubahpassword', $data);
      $this->load->view('templates/footer', $data);

    } else{

      $current_password = $this->input->post('password');
      $new_password = $this->input->post('new_password1');

      if (password_verify($current_password, $data['user']['password'])){
        $this->session->set_flashdata('message', '<div class="alert alert-danger"
        role="alert"> Password Lama Salah! </div>');
        redirect('home/Ubahpassword');

      }else {
        if ($current_password == $new_password){

          $this->session->set_flashdata('message', '<div class="alert alert-danger"
          role="alert"> Password Baru  Tidak Boleh Sama! </div>');
          redirect('home/ubahpassword');

        } else {

          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
          
          $this->db->set('password', $password_hash);
          $this->db->where('id_masyarakat', $this->session->userdata('id_masyarakat'));
          $this->db->update('user');
  
          $this->session->set_flashdata('message', '<div class="alert alert-success"
          role="alert"> Password Berhasil di perbarui ! </div>');
          redirect('home/ubahpassword');
        }
      }
    }  
  }
}