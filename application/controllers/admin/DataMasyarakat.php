<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Datamasyarakat extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('MasyarakatModel');
        if ($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data['title'] = 'Data Masyarakat';
        $data['tabel'] = $this->db->get('user')->result();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/data-masyarakat', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah(){
        $data['title'] = 'Tambah Data Masyarakat';
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/tambah-masyarakat', $data);
        $this->load->view('templates/admin_footer');
    }

    public function hapus($id_masyarakat){
        $this->db->delete('user', ['id_masyarakat' => $id_masyarakat]);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah Terhapus! </h4>
              </div>');
            redirect('admin/datamasyarakat');
        }
    }
}

?>