<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_mr extends CI_Model
{
    public function tambah_mr($post)
    {
        $table = "mr";
        $field = "kode_mr";
        $lastcode = $this->Kodespl_model->getMaxMR($table, $field);

        //mengambil 4 nomor urut dari belakang

        $noUrut = (int)substr($lastcode, -4, 4); //substr =sub string mengambil string yang ada dalam db (int) agar berubah jadi int,-4 mengambil nomor urut dari belakang sebanyak 4
        $noUrut++;

        $today = date('y');

        //ubah kembali jadi string

        $str = "MR-A-GMi";

        $newCode = $str . "-" . $today . "-" . sprintf('%04s', $noUrut); //%04s = merubah dari 1 digit jadi 4 ext 1 = 0001

        $data = [
            'kode_mr' => $newCode,
            'status' => "1",
            'nama' => htmlspecialchars($this->input->post('nama')),
            'divisi' => htmlspecialchars($this->input->post('divisi')),
            'date_created' => date('d M Y')
        ];
        $this->db->insert('mr', $data);
    }
    public function kode_mr()
    {
        $table = "mr";
        $field = "kode_mr";
        $lastcode = $this->Kodespl_model->getMaxMR($table, $field);
        //mengambil 4 nomor urut dari belakang
        $noUrut = (int)substr($lastcode, -4, 4); //substr =sub string mengambil string yang ada dalam db (int) agar berubah jadi int,-4 mengambil nomor urut dari belakang sebanyak 4
        $noUrut++;
        $today = date('y');

        //ubah kembali jadi string

        $str = "MR-A-GMI";

        $newCode = $str . "-" . $today . "-" . sprintf('%04s', $noUrut); //%04s = merubah dari 1 digit jadi 4 ext 1 = 0001
        return $newCode;
    }
    public function tampil_data($id = null)
    {
        $this->db->from('mr');
        if ($id != null) {
            $this->db->where('kode_mr', $id);
        }
        $query = $this->db->order_by('id', 'DESC')->get()->result_array();
        return $query;
    }
    public function tampil_input($id)
    {
        return $this->db->order_by('id', 'DESC')->get_where('input_mr', ['kode_mr' => $id])->result_array();
    }

    public function update_input_mr($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function jumlah_mr($id = null)
    {
        $this->db->count_all_results('input_mr');  // Produces an integer, like 25
        $this->db->like('kode_mr', $id);
        $this->db->from('input_mr');
        return $this->db->count_all_results();
    }
    public function update_status_mr()
    {
        $kode = $this->input->post('kode_mr', true);
        $this->db->select('status');
        $this->db->where('kode_mr', $kode);
        $query = $this->db->get('input_mr');
        return $query;
    }
    public function hitung_mr($id)
    {
        $this->db->like('status_mr', 1);
        $this->db->where('kode_mr', $id);
        $this->db->from('input_mr');
        return $this->db->count_all_results();
    }
    public function hitung_mr_home()
    {
        $this->db->where('status', 1);
        $this->db->from('mr');
        return $this->db->count_all_results();
    }
    public function tambil_data()
    {
        $this->db->select('*');
        $this->db->from('input_mr');
        $this->db->join('mr', 'input_mr.kode_mr = mr.kode_mr');
        $query = $this->db->get();
        return $query;
    }
    public function del_barang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('input_mr');
    }
}
