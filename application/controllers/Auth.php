<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = 'Auth';
        $this->load->view('templates/header', $data);
        $this->load->view('auth', $data);
        $this->load->view('templates/footer', $data);
    }

    public function login(){
        $cek_nik = $this->db->get_where('user', ['nik' => $this->input->post('nik', true)])->row();

        if ($cek_nik){
            if(password_verify($this->input->post('nik'), $cek_nik->nik)){
                if ($cek_nik->level == 'admin'){
                    
                    $data_session = [
                         'id_masyarakat' => $cek_nik->id_masyarakat,
                         'level' => $cek_nik->level,
                     ];
                     $this->session->set_userdata($data_session);
                     echo $this->session->userdata('level');
                     echo "admin";
                } else {
                    echo "masyarakat";
                }

            }else { 
                echo "<script>
                alert('NIK anda tidak terdaftar!');
                window.location.href = `" . site_url('auth') . "`;
                </script>";
               }

        } else {
            echo "<script>
                alert('NIK anda tidak terdaftar!');
                window.location.href = `" . site_url('auth') . "`;
             </script>";
        }
    }

    public function logout(){

        $this->session->sess_destroy();
        redirect('auth');
    }
}
?>