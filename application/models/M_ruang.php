<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_ruang extends CI_Model
{
    public function tampil_data($id = null)
    {
        $query = "SELECT * FROM permintaan ORDER BY id DESC";
        $hasil = $this->db->query($query)->result_array();
        return json_encode($hasil);
    }
}
