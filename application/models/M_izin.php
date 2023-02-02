<?php

defined('BASEPATH') or exit('No direct script access allowed');



class M_izin extends CI_Model

{

    public function tampil_data()

    {
        $this->db->where('nama_id', $this->session->userdata('id'));
        $query = $this->db->order_by('id','DESC')->get('izin')->result_array();

        return $query;
    }

    public function jenis_izin()

    {

        return $this->db->get('jenis_izin');
    }



    public function print($where, $table)

    {

        return $this->db->get_where($table, $where);
    }



    public function tambah_izin($post)

    {

        $awal =  htmlspecialchars($this->input->post('tanggal', true));

        $akhir = htmlspecialchars($this->input->post('date_end', true));



        $begin = new DateTime($awal);

        $end = new DateTime($akhir);



        $daterange     = new DatePeriod($begin, new DateInterval('P1D'), $end);

        //mendapatkan range antara dua tanggal dan di looping

        $i = 0;

        $x     =    0;

        $end     =    1;



        foreach ($daterange as $date) {

            $daterange     = $date->format("Y-m-d");

            $datetime     = DateTime::createFromFormat('Y-m-d', $daterange);



            //Convert tanggal untuk mendapatkan nama hari

            $day         = $datetime->format('D');



            //Check untuk menghitung yang bukan hari sabtu dan minggu

            if ($day != "Sun" && $day != "Sat") {

                //echo $i;

                $x    +=    $end - $i;
            }

            $end++;

            $i++;
        }

        $data = [

            'nama' => htmlspecialchars($this->input->post('nama', true)),

            'tanggal' => $awal,

            'email' => htmlspecialchars($this->input->post('email', true)),

            'nama_id' => htmlspecialchars($this->input->post('nama_id', true)),

            'jenis_izin' => htmlspecialchars($this->input->post('Jenis_izin', true)),

            'date_end' => $akhir,

            'Keterangan' => htmlspecialchars($this->input->post('keterangan', true)),

            'date_created' => htmlspecialchars($this->input->post('date_created', true)),

            'durasi' => $x + 1,

            'status' => 1,

            'foto' => htmlspecialchars($this->input->post('foto', true)),

            'note' => "Belum ada catatan"

        ];

        $this->db->insert('izin', $data);
    }

    public function del($id)

    {

        $this->db->where('id', $id);

        return $this->db->delete('izin');
    }

    public function edit_izin($post)

    {

        $id = $this->input->post('id', true);

        $awal =  htmlspecialchars($this->input->post('tanggal', true));

        $akhir = htmlspecialchars($this->input->post('date_end', true));



        $begin = new DateTime($awal);

        $end = new DateTime($akhir);



        $daterange     = new DatePeriod($begin, new DateInterval('P1D'), $end);

        //mendapatkan range antara dua tanggal dan di looping

        $i = 0;

        $x     =    0;

        $end     =    1;



        foreach ($daterange as $date) {

            $daterange     = $date->format("Y-m-d");

            $datetime     = DateTime::createFromFormat('Y-m-d', $daterange);



            //Convert tanggal untuk mendapatkan nama hari

            $day         = $datetime->format('D');



            //Check untuk menghitung yang bukan hari sabtu dan minggu

            if ($day != "Sun" && $day != "Sat") {

                //echo $i;

                $x    +=    $end - $i;
            }

            $end++;

            $i++;
        }

        $data = [

            'nama' => htmlspecialchars($this->input->post('nama', true)),

            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),

            'date_end' => htmlspecialchars($this->input->post('date_end', true)),

            'status' => htmlspecialchars($this->input->post('status', true)),

            'jenis_izin' => htmlspecialchars($this->input->post('Jenis_izin', true)),

            'note' => htmlspecialchars($this->input->post('note', true)),

            'durasi' => $x + 1,

            'Keterangan' => htmlspecialchars($this->input->post('keterangan', true))

        ];

        $this->db->where('id', $id);

        $this->db->update('izin', $data);
    }

    public function update_izin($where, $data, $table)

    {

        $this->db->where($where);

        $this->db->update($table, $data);
    }
    public function total_izin()
    {
        $this->db->count_all_results('izin');  // Produces an integer, like 25
        $this->db->where('nama_id', $this->session->userdata('id'));
        $this->db->from('izin');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function izin()
    {
        $this->db->count_all_results('izin');  // Produces an integer, like 25
        $this->db->where('tanggal', date('Y-m-d'));
        $this->db->from('izin');
        $query = $this->db->count_all_results();
        return $query;
    }
}
