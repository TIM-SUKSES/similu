<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function index(){
        $data['title'] = 'Dashboard';
        $this->load->view('templates/admin_header' , $data);
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/admin_footer');
    }
}

?>