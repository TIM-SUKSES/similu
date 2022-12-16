<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data['title'] = 'Dashboard';
        $data['total_user'] = $this->db->get('user')->num_rows();
        $data['total_suara'] = $this->db->get('suara')->num_rows();
        $data['capres1'] = $this->db->get_where('suara', ['nama_kandidat' => 'CAPRES NO. 1'])->num_rows();
        $data['capres2'] = $this->db->get_where('suara', ['nama_kandidat' => 'CAPRES NO. 2'])->num_rows();
        
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin_footer');
    }
}

?>