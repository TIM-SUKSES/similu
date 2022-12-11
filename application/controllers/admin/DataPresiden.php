<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataPresiden extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('PresidenModel');
        if ($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data['title'] = 'Data Presiden';
        $data['tabel'] = $this->db->get('capres')->result();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/data-presiden', $data);
        $this->load->view('templates/admin_footer');
    }

    #Function Data Masyarakat


    public function edit($id_calon){
        $data['title'] = 'Edit Data Presiden';
        $data['row'] = $this->db->get_where('capres', ['id_calon' => $id_calon])->row();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/edit-presiden', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update(){
        $this->PresidenModel->update();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah diupdate! </h4>
            </div>');
            redirect('admin/datapresiden');
        }
    }


}

?>