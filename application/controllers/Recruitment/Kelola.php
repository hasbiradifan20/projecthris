<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelola_model');
    }

    public function index()
    {
        $data['title'] = "Kelola Pekerjaan";
        $data['kelolapekerjaan'] = $this->Kelola_model->getAllKelolapekerjaan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('recruitment/kelola', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->Kelola_model->hapus($id)) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Data gagal dihapus');
        }
        redirect('recruitment/kelola');
    }
    public function tambah()
    {
        $nama = $this->input->post('namaPekerjaan');
        $kualifikasi = $this->input->post('kualifikasi');
        $tanggalberakhir = $this->input->post('tanggalberakhir');
        $img = $this->input->post('img');

        // Validasi data
        $this->form_validation->set_rules('namaPekerjaan', 'Nama Pekerjaan', 'required');
        $this->form_validation->set_rules('kualifikasi', 'Kualifikasi', 'required');
        $this->form_validation->set_rules('tanggalberakhir', 'Tanggal Berakhir', 'required');
        $this->form_validation->set_rules('img', 'img', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan pesan error
            echo validation_errors();
        } else {
            // Validasi berhasil, simpan data ke database
            $data = array(
                'nama_pekerjaan' => $nama,
                'kualifikasi' => $kualifikasi,
                'tanggal_berakhir' => $tanggalberakhir,
                'img' => $img
            );
            $this->db->insert('kelola', $data);
            echo 'Data berhasil disimpan';
        }
    }
}
