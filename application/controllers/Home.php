<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['capres'] = $this->db->get('capres')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function visimisi($id_calon)
    {
        $data['title'] = 'Visi & Misi';
        $data['capres'] = $this->db->get_where('capres', ['id_calon' => $id_calon])->row();
        $data['visimisi'] = $this->db->get_where('visimisi', ['id_calon' => $id_calon])->row();
        $this->load->view('templates/header', $data);
        $this->load->view('visimisi', $data);
        $this->load->view('templates/footer');
    }
}