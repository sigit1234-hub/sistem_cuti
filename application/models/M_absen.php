<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_absen extends CI_Model
{
    public function tampil_data($id = null)
    {
        $this->db->from('absen');
        if ($id != null) {
            $this->db->where('id_absen', $id);
        }
        return $this->db->order_by('id_absen', 'DESC')->get()->result_array();
    }
    public function data_karyawan()
    {
        return $this->db->order_by('nama', 'ASC')->get('karyawan')->result_array();
    }
    public function data_divisi()
    {
        return $this->db->order_by('nama_divisi', 'ASC')->get('devisi')->result_array();
    }
    public function tambah_data()
    {
        $data = [
            'date_created' => htmlspecialchars($this->input->post('date_created', true)),
            'nama' =>  $this->input->post('nama_absen', true),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];
        $this->db->insert('absen', $data);
    }
    public function edit_data($post)
    {
        $id = $this->input->post('id', true);
        $data = [
            'nama' => $this->input->post('nama', true),
            'tanggal' => $this->input->post('tanggal', true),
            'keterangan' => $this->input->post('keterangan', true),
        ];
        $this->db->where('id_absen', $id);
        $this->db->update('absen', $data);
    }
    public function data_div($id_div)
    {
        $jab =  $this->db->get_where('karyawan', array('id' => $id_div));
        foreach ($jab->result_array() as $row) {
            // echo  "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
            echo  "<option >" . $row['divisi'] . "</option>";
        }
    }
}
