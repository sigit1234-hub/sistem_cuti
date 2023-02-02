<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{
    public function hapus_member($id)
    {
        $this->db->where('id' == $id);
        $this->db->delete('user');
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function edit_data_izin($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function edit_data_cuti($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function edit_data_spl($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function update_data_spl($table, $where)
    {
        $this->db->where($where);
    }

    public function tampil_data()
    {
        return $this->db->get('permintaan');
    }

    public function tampil_data_izin()
    {
        return $this->db->get('izin');
    }

    public function tampil_data_cuti()
    {
        return $this->db->get('cuti');
    }

    public function tampil_data_spl()
    {
        return $this->db->get('spl');
    }

    public function tampil_data_devisi()
    {
        return $this->db->get('devisi');
    }
}
