<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataUser extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
        if ($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data['title'] = 'Data User';
        $data['tabel'] = $this->db->get('user')->result();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/data-user', $data);
        $this->load->view('templates/admin_footer');
    }

    #Function Data Masyarakat
    public function tambah(){
            $data['title'] = 'Tambah Data User';
            $data['roles'] = $this->UserModel->getRoles()->result_array();
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_topbar');
            $this->load->view('templates/admin_sidebar');
            $this->load->view('admin/tambah-user', $data);
            $this->load->view('templates/admin_footer');
    }

    public function edit($id_masyarakat){
        $data['title'] = 'Edit Data User';
        $data['row'] = $this->db->get_where('user', ['id_masyarakat' => $id_masyarakat])->row();
        $data['roles'] = $this->UserModel->getRoles()->result_array();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/edit-user', $data);
        $this->load->view('templates/admin_footer');
    }

    public function simpanMasyarakat(){
        $this->UserModel->simpanMasyarakat();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah disimpan! </h4>
            </div>');
            redirect('admin/DataUser');
        }
    }

    public function update(){
        $this->UserModel->update();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah diupdate! </h4>
            </div>');
            redirect('admin/DataUser');
        }
    }

    public function hapus($id_masyarakat){
        $this->db->delete('user', ['id_masyarakat' => $id_masyarakat]);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah Terhapus! </h4>
            </div>');
            redirect('admin/DataUser');
        }
    }
}

?>