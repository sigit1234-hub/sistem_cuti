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
    public function tampil_data_peminjaman($id = null)
    {
        $this->db->from('permintaan');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->order_by('id', 'DESC')->get();
        return $query;
    }
    public function hitung_peminjaman()
    {
        $waktu = date("d M Y");
        $this->db->count_all_results('permintaan');  // Produces an integer, like 25
        // $this->db->like('date_created', $waktu);
        $this->db->where('status', "1");
        $this->db->from('permintaan');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hitung_peminjaman_ini()
    {
        $waktu = date("Y-m-d");
        $this->db->count_all_results('permintaan');  // Produces an integer, like 25
        $this->db->where('tanggal', $waktu);
        $this->db->where('status', "2");
        $this->db->from('permintaan');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function data_peminjaman()
    {
        $this->db->where('status', 1);
        return $this->db->order_by('id', 'DESC')->get('permintaan')->result_array();
    }
    public function data_peminjaman2()
    {
        $date = date('Y-m-d');
        $this->db->where('tanggal', $date);
        $this->db->where('status', 2);
        return $this->db->order_by('id', 'DESC')->get('permintaan')->result_array();
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
    public function hitung_izin()
    {
        $waktu = date("d-M-Y");
        $this->db->count_all_results('izin');  // Produces an integer, like 25
        // $this->db->like('date_created', $waktu);
        $this->db->where('status', "1");
        $this->db->from('izin');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hitung_spl()
    {
        $waktu = date("d-M-Y");
        $this->db->count_all_results('spl');  // Produces an integer, like 25
        // $this->db->like('date_created', $waktu);
        $this->db->where('status', "1");
        $this->db->from('spl');
        $query = $this->db->count_all_results();
        return $query;
    }
    // hitung untuk user
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
    public function izin_hari_ini()
    {
        $waktu = date("Y-m-d");
        $this->db->count_all_results('izin');  // Produces an integer, like 25
        $this->db->where('tanggal', $waktu);
        $this->db->where('status', 2);
        $this->db->from('izin');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function pinjam_hari_ini()
    {
        $waktu = date("D dd-M-yyyy");
        $this->db->count_all_results('permintaan');  // Produces an integer, like 25
        $this->db->where('tanggal', $waktu);
        $this->db->where('status', "2");
        $this->db->from('permintaan');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function spl_hari_ini()
    {
        $waktu = date("Y-m-d");
        $this->db->count_all_results('spl');  // Produces an integer, like 25
        $this->db->like('tanggal', $waktu);
        $this->db->from('spl');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hitung_kasbon()
    {
        $waktu = date("Y-m-d");
        $this->db->count_all_results('kasbon');  // Produces an integer, like 25
        $this->db->where('date_created', $waktu);
        $this->db->where('status', "1");
        $this->db->from('kasbon');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hitung_mr()
    {
        $waktu = date("d M Y");
        $this->db->count_all_results('mr');  // Produces an integer, like 25
        // $this->db->like('date_created', $waktu);
        $this->db->where('status', "1");
        $this->db->from('mr');
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
