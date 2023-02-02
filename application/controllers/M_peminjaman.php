<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_peminjaman extends CI_Model
{
    public function tampil_data($id = null)
    {
        $this->db->from('permintaan');
        if ($id != null) {
            return $this->db->where('id', $id);
        }
        $query = $this->db->order_by('id', 'DESC')->get();
        return $query;
    }

    public function print($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function kendaraan()
    {
        $query = "SELECT * FROM kendaraan WHERE actived = 1";
        return $this->db->query($query)->result_array();
    }
    public function get_driver()
    {
        $query = "SELECT * FROM driver WHERE actived = 1";
        return $this->db->query($query)->result_array();
    }

    public function edit_peminjaman($post)
    {
        $id = htmlspecialchars_decode($this->input->post('id', true));
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
            // if ($day != "Sun" && $day != "Sat") {
            //     //echo $i;
            $x    +=    $end - $i;
            // }
            $end++;
            $i++;
        }

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'date_end' => htmlspecialchars($this->input->post('date_end', true)),
            'jam_berangkat' => htmlspecialchars($this->input->post('jam', true)),
            'kendaraan' => htmlspecialchars($this->input->post('jenis_kendaraan', true)),
            'driver' => htmlspecialchars($this->input->post('driver', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'jam_kembali' => 'Belum Diisi',
            'alamat' => htmlspecialchars($this->input->post('keterangan', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'durasi' => $x + 1,
            'note' => htmlspecialchars($this->input->post('note', true)),
        ];
        $this->db->where('id', $id);
        $this->db->update('permintaan', $data);
    }
    public function del($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('permintaan');
    }
    public function tambah_peminjaman($post)
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

            // Check untuk menghitung yang bukan hari sabtu dan minggu
            // if ($day != "Sun" && $day != "Sat") {
            //     //echo $i;
            $x    +=    $end - $i;
            // }
            $end++;
            $i++;
        }
        $data = [
            'foto' => htmlspecialchars($this->input->post('foto', true)),
            'id_nama' => htmlspecialchars($this->input->post('id_nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'date_end' => htmlspecialchars($this->input->post('date_end', true)),
            'jam_berangkat' => htmlspecialchars($this->input->post('jam', true)),
            'kendaraan' => htmlspecialchars($this->input->post('jenis_kendaraan', true)),
            'driver' => htmlspecialchars($this->input->post('driver', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'jam_kembali' => htmlspecialchars($this->input->post('kembali', true)),
            'alamat' => htmlspecialchars($this->input->post('keterangan', true)),
            'status' => 1,
            'durasi' =>  $x + 1,
            'date_created' => htmlspecialchars($this->input->post('date_created', true)),
            'note' => ''
        ];

        // $token = base64_encode(random_bytes(32)); //32 =parameter(dari fungsi php)| base_encode = code utk menterjemahkan si tandom_bytes tsb
        //siapkan tbl sementara untuk simpan token

        $this->db->insert('permintaan', $data);
    }
    public function _driver($post)
    {
        $id_driver = $this->input->post('driver', true);

        $data = ['actived' => 0];
        $this->db->where('id', $id_driver);
        $this->db->update('driver', $data);
    }
    public function _kendaraan($post)
    {
        $id_driver = $this->input->post('jenis_kendaraan', true);

        $data = ['actived' => 0];
        $this->db->where('id', $id_driver);
        $this->db->update('kendaraan', $data);
    }
    public function _driver_($post)
    {
        $id_driver = $this->input->post('driver', true);

        $data = ['actived' => 1];
        $this->db->where('id', $id_driver);
        $this->db->update('driver', $data);
    }
    public function _kendaraan_($post)
    {
        $id_driver = $this->input->post('jenis_kendaraan', true);

        $data = ['actived' => 1];
        $this->db->where('id', $id_driver);
        $this->db->update('kendaraan', $data);
    }
    public function edit_user()
    {
        $id = htmlspecialchars_decode($this->input->post('id', true));
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
            // if ($day != "Sun" && $day != "Sat") {
            //     //echo $i;
            $x    +=    $end - $i;
            // }
            $end++;
            $i++;
        }

        $data = [
            'date_end' => htmlspecialchars($this->input->post('date_end', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'jam_kembali' => htmlspecialchars($this->input->post('kembali', true)),
            'alamat' => htmlspecialchars($this->input->post('keterangan', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'durasi' => $x + 1,
            'note' => htmlspecialchars($this->input->post('note', true)),
        ];
        $this->db->where('id', $id);
        $this->db->update('permintaan', $data);
    }

    public function driver()
    {
        return $this->db->get('driver')->result_array();
    }
    public function driver_($post)
    {
        $id = $this->input->post('driver', true);
        $data = [
            'actived' => $this->input->post('actived', true),
            'nama' => $this->input->post('nama', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('driver', $data);
    }
    public function kendaraan_()
    {
        return $this->db->get('kendaraan')->result_array();
    }
    public function kendaraan__($post)
    {
        $id = $this->input->post('driver', true);
        $data = [
            'actived' => $this->input->post('actived', true),
            'nama' => $this->input->post('nama', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('kendaraan', $data);
    }
}
