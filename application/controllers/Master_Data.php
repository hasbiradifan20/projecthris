<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');

    }

    public function index()
    {
        $data['title'] = "Data Karyawan";
        $data['datakaryawan'] = $this->Master_model->getAllDataKaryawan();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('master/index',$data);
        $this->load->view('templates/footer');
    }

    public function posisi()
    {
        $data['title'] = "Data Posisi";
        $data['datakaryawan'] = $this->Master_model->getAllDataKaryawan();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('master/posisi');
        $this->load->view('templates/footer');
    }
}