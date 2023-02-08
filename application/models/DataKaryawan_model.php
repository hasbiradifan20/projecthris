<?php

class DataKaryawan_model extends CI_Model {
    public function getAllDataKaryawan() 
    {
        return $this->db->get('data_karyawan')->result_array();
    }
}