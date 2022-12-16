<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Suara extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('SuaraModel');
        if ($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data['title'] = 'Suara';
        $data['tabel'] = $this->SuaraModel->getSuara()->result();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/suara', $data);
        $this->load->view('templates/admin_footer');
    }

    #Function Data Masyarakat
    public function hapus($id_suara){
        $this->db->delete('suara', ['id_suara' => $id_suara]);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah Terhapus! </h4>
            </div>');
            redirect('admin/Suara');
        }
    }
}

?>