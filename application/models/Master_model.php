<?php

class Master_model extends CI_Model {
    public function getAllDataKaryawan() 
    {
        return $this->db->get('data_karyawan')->result_array();
    }
    public function getAllDataPosisi() 
    {
        return $this->db->get('data_posisi')->result_array();
    }
    public function getAllSoalKuesioner() 
    {
        return $this->db->get('soal_kuesioner')->result_array();
    }
}