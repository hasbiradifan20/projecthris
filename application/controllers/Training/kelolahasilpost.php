<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelolapre_model');
    }

    public function index()
    {
        $data['title'] = "Kelola HasilPreTest";
        $data['kelolaHasilPreTest'] = $this->Kelola_model->getAllKelolaHasilPreTest();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('Training/kelolapre', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id)
    {
        if ($this->Kelola_model->hapus($id)) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Data gagal dihapus');
        }
        redirect('Training/kelolapre');
    }
}
