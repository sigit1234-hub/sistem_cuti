<?php

defined('BASEPATH') or exit('No direct script access allowed');



class M_kasbon extends CI_Model

{

    public function tambah_kasbon($post)

    {

        $data = [

            'nama' => htmlspecialchars($this->input->post('nama', true)),

            'nama_id' => htmlspecialchars($this->input->post('nama_id', true)),

            'date_created' => htmlspecialchars($this->input->post('date_created', true)),

            'email' => htmlspecialchars($this->input->post('email', true)),

            'durasi_angsuran' => htmlspecialchars($this->input->post('durasikasbon', true)),

            'kasbon' => $this->input->post('kasbon', true),

            'jumlah_angsuran' => htmlspecialchars($this->input->post('jumlah_bayar', true)),

            'lainnya' => htmlspecialchars($this->input->post('jumlah_bayar_lain', true)),

            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),

            'status' => 1,

            'note' => '',

            'bayar' => 'Berlangsung',

            'foto' => htmlspecialchars($this->input->post('foto', true)),

        ];

        $this->db->insert('kasbon', $data);
    }

    public function tampil_data($id = null)

    {

        $this->db->from('kasbon');

        if ($id != null) {

            $this->db->where('id', $id);
        }

        return $this->db->order_by('id', 'DESC')->get()->result_array();
    }

    public function edit_kasbon($post)

    {

        $id = $this->input->post('nama_id', true);

        $data = [

            'nama' => htmlspecialchars($this->input->post('nama', true)),

            'durasi_angsuran' => htmlspecialchars($this->input->post('durasikasbon', true)),

            'kasbon' => $this->input->post('kasbon', true),

            'lainnya' => htmlspecialchars($this->input->post('lainnya', true)),

            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),

            'status' => htmlspecialchars($this->input->post('status', true)),

            'note' => htmlspecialchars($this->input->post('note', true)),

            'bayar' => 'Berlangsung'

        ];

        $this->db->where('id', $id);

        $this->db->update('kasbon', $data);
    }



    public function tampil_input($id = null)

    {

        $this->db->from('input_kasbon');

        if ($id != null) {

            $this->db->where('id_kasbon', $id);
        }

        return $this->db->order_by('id', 'DESC')->get()->result_array();
    }

    public function input_angsuran($post)

    {

        $id = $this->input->post('id_kasbon', true);

        $this->db->count_all_results('input_kasbon');  // Produces an integer, like 25

        $this->db->like('id_kasbon', $id);

        $this->db->from('input_kasbon');

        $angsuran_ke = $this->db->count_all_results();



        $data = [

            'id_kasbon' => $this->input->post('id_kasbon', true),

            'date_created' => $this->input->post('date_created', true),

            'nama' => $this->input->post('nama', true),

            'angsuran_ke' => $angsuran_ke + 1,

            'jumlah_bayar' => $this->input->post('jumlah', true),

            'note' => htmlspecialchars($this->input->post('note', true)),

        ];

        $this->db->insert('input_kasbon', $data);
    }

    public function get_jml_bayar($id = null)

    {

        if ($id != null) {

            $this->db->select('SUM(jumlah_bayar) AS total');

            $this->db->where('id_kasbon', $id);

            $this->db->from('input_kasbon');

            $sum = $this->db->get()->row()->total;

            return $sum;
        } else {

            $id = $this->session->userdata('id');

            $this->db->select('SUM(jumlah_bayar) AS total');

            $this->db->where('id_kasbon', $id);

            $this->db->from('input_kasbon');

            $sum = $this->db->get()->row()->total;

            return $sum;
        }
    }

    public function update_status($post)

    {

        $id = $this->input->post('id_kasbon', true);

        $data = ['bayar' => "Lunas"];

        $this->db->where('id', $id);

        $this->db->update('kasbon', $data);
    }

    public function update_berlangsung($post)

    {

        $id = $this->input->post('id_kasbon', true);

        $data = ['bayar' => "Berlangsung"];

        $this->db->where('id', $id);

        $this->db->update('kasbon', $data);
    }

    public function edit_inputan($ost)

    {

        $id = $this->input->post('id', true);

        $data = [

            'date_created' => $this->input->post('date_created'),

            'nama' => $this->input->post('nama'),

            'angsuran_ke' => $this->input->post('angsuran'),

            'jumlah_bayar' => $this->input->post('jumlah'),

            'note' => $this->input->post('note'),

        ];

        $this->db->where('id', $id);

        $this->db->update('input_kasbon', $data);
    }
    public function hitung_kasbon()
    {
        $this->db->where('status', 1);
        $this->db->where('nama_id', $this->session->userdata['id']);
        $this->db->from('kasbon');
        return $this->db->count_all_results();
    }
}
