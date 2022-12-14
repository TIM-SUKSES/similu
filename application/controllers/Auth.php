<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{


    public function index(){
        $data['title'] = 'SIMILU';
        $this->load->view('templates/header-auth', $data);
        $this->load->view('auth', $data);
        $this->load->view('templates/footer', $data);
    }

    public function login(){
        $cek_nik = $this->db->get_where('user', ['nik' => $this->input->post('nik', true)])->row();
        if ($cek_nik){
            if(password_verify($this->input->post('password'), $cek_nik->password)){
                if ($cek_nik->level == 'admin'){
                    $data_session = [
                         'id_masyarakat' => $cek_nik->id_masyarakat,
                         'nama' => $cek_nik->nama,
                         'tanggal_input' => $cek_nik->tanggal_input,
                         'level' => $cek_nik->level,
                     ];
                    $this->session->set_userdata($data_session);
                    redirect("admin/dashboard");
                } else {
                    $data_session = [
                         'id_masyarakat' => $cek_nik->id_masyarakat,
                         'nama' => $cek_nik->nama,
                         'tanggal_input' => $cek_nik->tanggal_input,
                         'level' => $cek_nik->level,
                    ];
                    $this->session->set_userdata($data_session);
                    redirect("home");
                }

            }else { 
                echo "<script>
                alert('password anda salah!');
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