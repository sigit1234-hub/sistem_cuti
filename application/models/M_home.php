<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_home extends CI_Model
{
    public function salam()
    {
        //ubah timezone menjadi jakarta
        date_default_timezone_set("Asia/Jakarta");
        //ambil jam dan menit
        $jam = date('H:i');
        //atur salam menggunakan IF
        if ($jam > '05:30' && $jam < '10:00') {
            $salam = 'pagi';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            $salam = 'siang';
        } elseif ($jam < '18:00') {
            $salam = 'sore';
        } else {
            $salam = 'malam';
        }
        //tampilkan pesan
        $tampil =  'Selamat ' . $salam;
        return $tampil;
    }

    public function hitung_cuti()
    {
        $waktu = date("d M Y");
        $this->db->count_all_results('cuti');  // Produces an integer, like 25
        // $this->db->where('date_created', $waktu);
        $this->db->where('status', "1");
        $this->db->from('cuti');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hitung_cuti_acc()
    {
        $waktu = date("d-M-Y");
        $this->db->count_all_results('cuti');  // Produces an integer, like 25
        // $this->db->like('date_created', $waktu);
        $this->db->where('status', "2");
        $this->db->where('status1', "1");
        $this->db->from('cuti');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function cuti_hari_ini()
    {
        $waktu = date("Y-m-d");
        $this->db->count_all_results('cuti');  // Produces an integer, like 25
        $this->db->where('tanggal', $waktu);
        $this->db->where('status', 2);
        $this->db->from('cuti');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function status_kendaraan()
    {
        $query = $this->db->get('kendaraan')->result_array();
        return $query;
    }
    public function hitung_lembur()
    {
        $this->db->count_all_results('input_spl');  // Produces an integer, like 25
        // $this->db->like('date_created', $waktu);
        $this->db->where('aksi', '0');
        $this->db->where('divisi', $this->session->userdata('divisi'));
        $this->db->from('input_spl');
        $query = $this->db->count_all_results();
        return $query;
    }
}
