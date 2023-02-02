<?php

class Kelola_model extends CI_Model
{
    public function getAllKelolaPekerjaan()
    {
        return $this->db->get('kelola_pekerjaan')->result_array();
    }
}
