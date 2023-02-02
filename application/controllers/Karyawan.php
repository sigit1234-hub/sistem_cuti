<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function tampildata($parameter_1)
    {
        $data['query'] = $this->db->get_where('karyawan', ['id' => $parameter_1])->result_array();
        $this->load->view('karyawan/profile', $data);
    }
}
