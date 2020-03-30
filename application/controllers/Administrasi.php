<?php

class Administrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->model('MAdministrasi');
        $this->model = $this->MAdministrasi;
        $this->load->database();
    }

    public function index()
    {
        $this->read();
    }

    public function read()
    {
        $this->load->view('administrasi/index');
    }

    public function admin_page()
    {
        $this->load->view('administrasi/admin_page');
    }

    public function admin()
    {
        $this->load->view('administrasi/admin');
    }

    public function mahasiswa()
    {
        $this->load->view('administrasi/mahasiswa');
    }

    public function menu()
    {
        $this->session->unset_userdata(array('nim' => ''));
        redirect('administrasi/index');
    }
    
}