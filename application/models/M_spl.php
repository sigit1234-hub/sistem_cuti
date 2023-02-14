<?php

defined('BASEPATH') or exit('No direct script access allowed');



class M_spl extends CI_Model
{
    public function tampil_data($id = null)
    {
        $query = $this->db->order_by('id', 'Desc')->get('spl');
        return $query;
    }
    public function tampil_data_divisi()
    {
        $id = $this->session->userdata('id');
        $divisi = $this->session->userdata('divisi');
        if ($id == 115) {
            //yuli
            $this->db->where('divisi', $divisi);
            $this->db->where('aksi' == '1');
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } elseif ($id == 105) {
            //rizky
            $this->db->where('anggota', 17); //jacky
            $this->db->or_where('anggota', 19); //angga
            $this->db->or_where('anggota', 27); //ilvan
            $this->db->or_where('anggota', 50); //manda
            $this->db->or_where('anggota', 54); //rivaldi
            $this->db->or_where('anggota', 11); //alfons
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } elseif ($id == 31) {
            //tia
            $this->db->where('anggota', 20); //dita
            $this->db->or_where('anggota', 21); //triana
            $this->db->or_where('anggota', 25); //felix
            $this->db->or_where('anggota', 49); //metah
            $this->db->or_where('anggota', 108); //grace 
            $this->db->or_where('anggota', 117); //harun 
            $this->db->or_where('anggota', 105); //rizky
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } elseif ($id == 2) {
            //bunga
            $this->db->where('anggota', 31); //tia
            $this->db->or_where('anggota', 2); //bunga
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } elseif ($id == 25) {
            //felix
            $this->db->where('anggota', 9); //aceng
            $this->db->or_where('anggota', 12); //nyoto
            $this->db->or_where('anggota', 29); //darkim
            $this->db->or_where('anggota', 38); //pandi
            $this->db->or_where('anggota', 42); //heri
            $this->db->or_where('anggota', 107); //riyanto
            $this->db->or_where('anggota', 109); //nana
            $this->db->or_where('anggota', 110); //rusmanto
            $this->db->or_where('anggota', 113); //ahmad nur
            $this->db->or_where('anggota', 116); //bayu riyanto
            $this->db->or_where('anggota', 118); //fira
            $this->db->or_where('anggota', 23); //kefi
            $this->db->or_where('anggota', 122); //sukron
            $this->db->or_where('anggota', 123); //selly
            $this->db->or_where('anggota', 124); //jusuf
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } elseif ($id == 121) {
            //aldi
            $this->db->where('anggota', 1); //lasmidi
            $this->db->or_where('anggota', 6); //gustian
            $this->db->or_where('anggota', 28); //yogi
            $this->db->or_where('anggota', 37); //uus
            $this->db->or_where('anggota', 39); //urbanus
            $this->db->or_where('anggota', 48); //surya
            $this->db->or_where('anggota', 51); //yudi
            $this->db->or_where('anggota', 52); //vina
            $this->db->or_where('anggota', 55); //shinta
            $this->db->or_where('anggota', 119); //aji
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } elseif ($id == 32) {
            //inggrid0813-6717-5225
            $this->db->where('anggota', 35); //sigit
            $this->db->or_where('anggota', 32); //inggrid
            $this->db->or_where('anggota', 7); //meilisa
            $this->db->or_where('anggota', 121); //aldi
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } elseif ($id == 7) {
            //meilissa
            $this->db->where('divisi', '13');
            $this->db->where('aksi', '0');
            // $this->db->where('anggota', 4); //toto
            // $this->db->or_where('anggota', 10); //amax
            // $this->db->or_where('anggota', 13); //iwan
            // $this->db->or_where('anggota', 14); //eko
            // $this->db->or_where('anggota', 15); //huda
            // $this->db->or_where('anggota', 24); //sabri
            // $this->db->or_where('anggota', 30); //albert
            // $this->db->or_where('anggota', 34); //risman
            // $this->db->or_where('anggota', 34); //risman
            // $this->db->or_where('anggota', 41); //alex
            // $this->db->or_where('anggota', 43); //gibran
            // $this->db->or_where('anggota', 45); //dony
            // $this->db->or_where('anggota', 111); //debi
            // $this->db->or_where('anggota', 112); //cahyadi
            // $this->db->or_where('anggota', 120); //puji
            // $this->db->or_where('anggota', 114); //Markus
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        } else {
            $this->db->where('anggota', 0); //sigit
            return $this->db->order_by('id', 'Desc')->get('input_spl')->result_array();
        }
    }
    public function tampil_data2()
    {
        $tahun1 = date('Y');
        $jan = date('Jan');
        $bulanawal = date('m') - 1;
        $bulanakhir = date('m');
        $query = $this->db->query("SELECT * FROM spl WHERE YEAR(tanggal) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal DESC");
        return $query;
    }
    public function data_email_head($id)
    {
        $this->db->where('id', $id);
        $jab =  $this->db->get('devisi');
        foreach ($jab->result_array() as $row) {
            // echo  "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
            echo  "<option >" . $row['email_head'] . "</option>";
        }
    }
    public function tambah_spl()
    {
        $table = "spl";
        $field = "kode_spl";
        $lastcode = $this->Kodespl_model->getMax($table, $field);
        //mengambil 4 nomor urut dari belakang
        $noUrut = (int)substr($lastcode, -4, 4); //substr =sub string mengambil string yang ada dalam db (int) agar berubah jadi int,-4 mengambil nomor urut dari belakang sebanyak 4
        $noUrut++;
        $today = date('y');
        //ubah kembali jadi string
        $str = "SPL-GMI";
        $newCode = $str . "-" . $today . "-" . sprintf('%04s', $noUrut); //%04s = merubah dari 1 digit jadi 4 ext 1 = 0001
        $data = [
            'kode_spl' => $newCode,
            'date_created' => htmlspecialchars($this->input->post('date_created', true)),
            'status' => 1,
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'date_end' => htmlspecialchars($this->input->post('tgl', true)),
            'divisi' => htmlspecialchars($this->input->post('divisi', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('deskripsi', true)),
            'mengetahui' => '',
            'emailhead' => htmlspecialchars($this->input->post('email', true)),
            'note' => '',
            'jam' => htmlspecialchars($this->input->post('jam', true)),
            'kembali' => htmlspecialchars($this->input->post('estimasi', true)),
            'foto' => htmlspecialchars($this->input->post('foto', true)),
        ];
        $this->db->insert('spl', $data);
    }
    public function del($id)
    {
        $this->db->where('kode_spl', $id);
        $query =  $this->db->delete('spl');
        if ($query) {
            $this->db->where('kode_input_spl', $id);
            $query =  $this->db->delete('input_spl');
        }
    }

    public function edit($post)
    {
        $id = $this->input->post('id', true);
        $data = [
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'date_end' => htmlspecialchars($this->input->post('sampai', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'jam' => htmlspecialchars($this->input->post('jam', true)),
            'kembali' => htmlspecialchars($this->input->post('kembali', true)),
            'note' => htmlspecialchars($this->input->post('note', true)),
        ];
        $this->db->update('spl', $data, ['id' => $id]);
    }
    public function edit_spl($post)
    {
        $id = $this->input->post('id', true);
        $data = [
            'catatan' => htmlspecialchars($this->input->post('catatan', true)),
            'aksi' => '1',
        ];
        $this->db->update('input_spl', $data, ['id' => $id]);
    }

    public function divisi_data()
    {
        return $this->db->order_by('nama_divisi', 'ASC')->get('devisi')->result_array();
    }
    public function kode_spl()
    {
        $table = "spl";
        $field = "kode_spl";
        $lastcode = $this->Kodespl_model->getMaxMR($table, $field);
        //mengambil 4 nomor urut dari belakang
        $noUrut = (int)substr($lastcode, -4, 4); //substr =sub string mengambil string yang ada dalam db (int) agar berubah jadi int,-4 mengambil nomor urut dari belakang sebanyak 4
        $noUrut++;
        $today = date('y');
        //ubah kembali jadi string
        $str = "SPL-GMI";
        $newCode = $str . "-" . $today . "-" . sprintf('%04s', $noUrut); //%04s = merubah dari 1 digit jadi 4 ext 1 = 0001
        return $newCode;
    }
    function data_spl($kode_spl)
    {
        $this->db->where('kode_input_spl', $kode_spl);
        $query = $this->db->order_by('id', 'DESC')->get('input_spl')->result_array();
        return $query;
    }
    function tampil_data_spl($kode_spl)
    {
        $this->db->where('kode_spl', $kode_spl);
        $query =  $this->db->get('spl')->result_array();
        return $query;
    }
    public function total_spl()
    {
        $this->db->count_all_results('spl');  // Produces an integer, like 25
        $this->db->from('spl');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function spl()
    {
        $this->db->count_all_results('spl');  // Produces an integer, like 25
        $this->db->where('tanggal', date('Y-m-d'));
        $this->db->from('spl');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hitung_detail_spl($id)
    {
        $this->db->count_all_results('input_spl');  // Produces an integer, like 25
        $this->db->where('kode_input_spl', $id);
        $this->db->from('input_spl');
        return $this->db->count_all_results();
    }
    public function hitung_detail_byid($id)
    {
        $this->db->where('aksi', '1');
        $this->db->where('kode_input_spl', $id);
        $this->db->from('input_spl');
        return $this->db->count_all_results();
    }
}
