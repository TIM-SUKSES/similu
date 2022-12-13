<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class VisiMisi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('VisimisiModel');
        if ($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data['title'] = 'Visi & Misi';
        $data['tabel'] = $this->VisimisiModel->getVisimisi()->result();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/visi-misi', $data);
        $this->load->view('templates/admin_footer');
    }

    #Function Data Masyarakat
    public function tambah(){
        $data['title'] = 'Tambah Visi & Misi';
        $data['capres'] = $this->db->get('capres')->result();
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/tambah-visimisi', $data);
        $this->load->view('templates/admin_footer');
    }

    public function edit($id_visimisi){
        $data['title'] = 'Edit Data Visi & Misi';
        $data['capres'] = $this->db->get('capres')->result();
        $data['row'] = $this->db->get_where('visimisi', ['id_visimisi' => $id_visimisi])->row();

        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/edit-visimisi', $data);
        $this->load->view('templates/admin_footer');
    }

    public function simpan(){
        $this->VisimisiModel->simpan();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah disimpan! </h4>
            </div>');
            redirect('admin/visimisi');
        }
    }

    public function update(){
        $this->VisimisiModel->update();
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah diupdate! </h4>
            </div>');
            redirect('admin/visimisi');
        }
    }

    public function hapus($id_visimisi){
        $this->db->delete('visimisi', ['id_visimisi' => $id_visimisi]);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Data Telah Terhapus! </h4>
            </div>');
            redirect('admin/visimisi');
        }
    }
}

?>