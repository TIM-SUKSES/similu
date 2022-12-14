
<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('HomeModel');
    if ($this->session->userdata('level') != 'masyarakat'){
      redirect('auth');
    }
  }

  public function index()
  {
    $data['title'] = 'Home';
    $data['capres'] = $this->db->get('capres')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('home', $data);
    $this->load->view('templates/footer', $data);
  }
  
  public function visimisi($id_kandidat)
  {
    $data['title'] = 'Visi & Misi';
    $data['capres'] = $this->db->get_where('capres', ['id_calon' => $id_kandidat])->row();
    $data['visimisi'] = $this->db->get_where('visimisi', ['id_kandidat' => $id_kandidat])->row();
    $this->load->view('templates/header', $data);
    $this->load->view('visimisi', $data);
    $this->load->view('templates/footer', $data);
  }
}


?>
