<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function tampil_data($id = null)
    {
        if ($id != null) {
            $sql = $this->db->order_by('id', 'Desc')->get_where('karyawan', ['id' => $id])->row_array();
            return $sql;
        } else {
            $sql = $this->db->order_by('id', 'Desc')->get_where('karyawan', ['username' => $this->session->userdata('username')])->row_array();
            return $sql;
        }
    }
    public function data_peminjaman($id = null)
    {
        if ($id != null) {
            $sql = $this->db->order_by('id', 'Desc')->get_where('permintaan', ['id_nama' => $id])->result_array();
            return $sql;
        } else {
            $sql = $this->db->order_by('id', 'Desc')->get_where('permintaan', ['id_nama' => $this->session->userdata('id')])->result_array();
            return $sql;
        }
    }

    public function data_cuti($id = null)
    {
        if ($id != null) {
            $sql = $this->db->order_by('id', 'Desc')->get_where('cuti', ['nama_id' => $id])->result_array();
            return $sql;
        } else {
            $sql = $this->db->order_by('id', 'Desc')->get_where('cuti', ['nama_id' => $this->session->userdata('id')])->result_array();
            return $sql;
        }
    }
    public function data_karyawan()
    {
        return $this->db->order_by('id', 'Desc')->get('karyawan')->result_array();
    }
    public function add_karyawan($post)
    {
        $upload_image = $_FILES['foto'];
        if ($upload_image) {
            $config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            } else {
                echo $this->upload->display_errors();
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                           Input data karyawan gagal!</div>');
                redirect('user/tambah_karyawan');
            }
            $data = [
                'sapaan' => htmlspecialchars($this->input->post('panggilan', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => "Xx#" . htmlspecialchars($this->input->post('password', true)),
                'nrp' => "G" . htmlspecialchars($this->input->post('nrp', true)),
                'divisi' => htmlspecialchars($this->input->post('divisi', true)),
                'tanggal_gabung' => htmlspecialchars($this->input->post('tanggalgabung', true)),
                'tahun_gabung' => htmlspecialchars($this->input->post('tahungabung', true)),
                'ttl' => htmlspecialchars($this->input->post('tanggallahir', true)),
                'tempat' => htmlspecialchars($this->input->post('tempat', true)),
                'tahun_lahir' => htmlspecialchars($this->input->post('tahunlahir')),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'jenjang' => htmlspecialchars($this->input->post('jenjang', true)),
                'pendidikan' => htmlspecialchars($this->input->post('sekolah', true)),
                'gol_darah' => htmlspecialchars($this->input->post('goldar', true)),
                'ktp' => htmlspecialchars($this->input->post('ktp', true)),
                'bpjs_kese' => htmlspecialchars($this->input->post('kese', true)),
                'bpjs_kete' => htmlspecialchars($this->input->post('kete', true)),
                'npwp' => htmlspecialchars($this->input->post('npwp', true)),
                'tlp' => htmlspecialchars($this->input->post('notlp', true)),
                'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'is_active' => 1,
                'role_id' => 5,
                'kuota_cuti' => 12

            ];

            $this->db->insert('karyawan', $data);
        }
    }

    public function edit_karyawan($post)
    {
        $id = $this->input->post('id', true);
        $data = [
            'sapaan' => htmlspecialchars($this->input->post('panggilan', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => htmlspecialchars($this->input->post('password', true)),
            'nrp' => htmlspecialchars($this->input->post('nrp', true)),
            'divisi' => htmlspecialchars($this->input->post('divisi', true)),
            'tanggal_gabung' => htmlspecialchars($this->input->post('tanggalgabung', true)),
            'tahun_gabung' => htmlspecialchars($this->input->post('tahungabung', true)),
            'ttl' => htmlspecialchars($this->input->post('tanggallahir', true)),
            'tempat' => htmlspecialchars($this->input->post('tempat', true)),
            'tahun_lahir' => htmlspecialchars($this->input->post('tahunlahir')),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenjang' => htmlspecialchars($this->input->post('jenjang', true)),
            'pendidikan' => htmlspecialchars($this->input->post('sekolah', true)),
            'gol_darah' => htmlspecialchars($this->input->post('goldar', true)),
            'ktp' => htmlspecialchars($this->input->post('ktp', true)),
            'bpjs_kese' => htmlspecialchars($this->input->post('kese', true)),
            'bpjs_kete' => htmlspecialchars($this->input->post('kete', true)),
            'npwp' => htmlspecialchars($this->input->post('npwp', true)),
            'tlp' => htmlspecialchars($this->input->post('notlp', true)),
            'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'is_active' => htmlspecialchars_decode($this->input->post('aktif', true)),
            'role_id' => htmlspecialchars_decode($this->input->post('role_id', true))
        ];
        $upload_image3 = $_FILES['foto'];
        if ($upload_image3) {
            $config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_image = $this->input->post('fotoasli', true);
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            }
            $where = array('id' => $id);
            $this->User_m->update_kar($where, $data, 'karyawan');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Update Data berhasil!</div>');
            redirect('User/data_karyawan');
        }
    }

    public function lihat_karyawan($id = null)
    {
        $this->db->from('karyawan');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->order_by('id', 'DESC')->get();
        return $query;
    }
    public function cuti_person($id = null)
    {
        $this->db->from('cuti');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->order_by('id', 'DESC')->get()->result_array();
        return $query;
    }
    public function edit_kar($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_kar($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function del($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('karyawan');
    }

    public function ambilgambar($id)
    {
        $this->db->from('karyawan');
        $this->db->where('id', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    public function _kuota($id)
    {
        $this->db->select('SUM(kuota_cuti) AS total');
        $this->db->where('id', $id);
        $this->db->from('karyawan');
        $sum2 = $this->db->get()->row()->total;
        return $sum2;
    }

    public function get_sisa_cuti($id = null)
    {
        if ($id != null) {
            $this->db->select('SUM(kuota_cuti) AS total');
            $this->db->where('id', $id);
            $this->db->from('karyawan');
            $kuota = $this->db->get()->row()->total;
            return $kuota;
        } else {
            $sql = $this->session->userdata('id');
            $this->db->select('SUM(kuota_cuti) AS total');
            $this->db->where('id', $sql);
            $this->db->from('karyawan');
            $kuota = $this->db->get()->row()->total;
            return $kuota;
        }
    }


    public function ambil_karyawan()
    {
        return $this->db->order_by('nama', 'ASC')->get('karyawan')->result_array();
    }

    public function _finance()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 1])->result_array();
    }
    public function _logistic()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 2])->result_array();
    }
    public function _service()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 13])->result_array();
    }
    public function _warehouse()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 14])->result_array();
    }
    public function _ga()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 15])->result_array();
    }
    public function _it()
    {
        $query = "SELECT * FROM karyawan WHERE divisi IN ('17', '23');";
        return $this->db->query($query)->result_array();
    }
    public function _manufaktur()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 18])->result_array();
    }
    public function _marketing()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 22])->result_array();
    }
    public function lain()
    {
        return  $this->db->get_where('karyawan', ['divisi' => 22])->result_array();
    }
    public function get_ultah()
    {
        $date = date('d-M');
        return  $this->db->get_where('karyawan', ['ttl' => $date])->result_array();
    }
    public function sisa_kasbon($id = null)
    {
        if ($id != null) {
            $this->db->select('SUM(kasbon) AS total');
            $this->db->where('id', $id);
            $this->db->where('bayar', 'Berlangsung');
            $this->db->from('kasbon');
            return $this->db->get()->row()->total;
        } else {
            $sql = $this->session->userdata('id');
            $this->db->select('SUM(kasbon) AS total');
            $this->db->where('nama_id', $sql);
            $this->db->where('bayar', "Berlangsung");
            $this->db->from('kasbon');
            return $this->db->get()->row()->total;
        }
    }
    public function update_kuota()
    {
        $date = date('j-M');
        $this->db->where('tanggal_gabung', $date);
        $this->db->where('kuota_cuti !=', '12');
        return $this->db->get('karyawan')->result_array();
    }
    public function update_cuti()
    {
        $id = $this->input->post('id', true);
        $this->db->where('id', $id);
        $this->db->update('karyawan', ['kuota_cuti' => 12]);
    }
    public function sisa_cuti()
    {
        $id = $this->session->userdata('id');
        return $this->db->get_where('karyawan', ['id' => $id]);
    }

    public function tampil_jo()
    {
        $data = "SELECT * FROM jo";
        return json_encode($data, true);
    }
    public function input_jo()
    {
        $data = [
            'no_jo' => htmlspecialchars($this->input->post('no_jo', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'date_created' => date('d-M-Y'),
            'part_number' => htmlspecialchars($this->input->post('part_number', true)),
            'po/mr' => htmlspecialchars($this->input->post('po/mr', true)),
            'vom' => htmlspecialchars($this->input->post('vom', true)),
            'harga_ea' => htmlspecialchars($this->input->post('ea', true)),
            'qty' => htmlspecialchars($this->input->post('qty', true)),
            'total' => htmlspecialchars($this->input->post('total', true)),
            'no_jbc' => htmlspecialchars($this->input->post('no_jbc', true)),
            'it' => htmlspecialchars($this->input->post('it', true)),
            'request' => htmlspecialchars($this->input->post('request', true)),
            'mulai' => htmlspecialchars($this->input->post('mulai', true)),
            'selesai' => htmlspecialchars($this->input->post('selesai', true)),
            'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
        ];
        $this->db->insert('jo', $data);
    }
    public function no_jo()
    {
        $table = "jo";
        $field = "no_jo";
        $lastcode = $this->Kodespl_model->getMax($table, $field);
        //mengambil 4 nomor urut dari belakang
        $noUrut = (int)substr($lastcode, -3, 3); //substr =sub string mengambil string yang ada dalam db (int) agar berubah jadi int,-4 mengambil nomor urut dari belakang sebanyak 4
        $noUrut++;
        //ubah kembali jadi string
        $str = "000";
        return $str . "-" . sprintf('%03s', $noUrut); //%04s = merubah dari 1 digit jadi 4 ext 1 = 0001
    }
    public function edit_jo($post)
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $harga = htmlspecialchars($this->input->post('ea2', true));
        $qty = htmlspecialchars($this->input->post('qty2', true));

        $sum = $harga * $qty;
        $data = [
            'no_jo' => htmlspecialchars($this->input->post('no_jo', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'date_created' => date('d-M-Y'),
            'part_number' => htmlspecialchars($this->input->post('part_number', true)),
            'po/mr' => htmlspecialchars($this->input->post('po/mr', true)),
            'vom' => htmlspecialchars($this->input->post('vom', true)),
            'harga_ea' => htmlspecialchars($this->input->post('ea2', true)),
            'qty' => htmlspecialchars($this->input->post('qty2', true)),
            'total' => $sum,
            'no_jbc' => htmlspecialchars($this->input->post('no_jbc', true)),
            'it' => htmlspecialchars($this->input->post('it', true)),
            'request' => htmlspecialchars($this->input->post('request', true)),
            'mulai' => htmlspecialchars($this->input->post('mulai', true)),
            'selesai' => htmlspecialchars($this->input->post('selesai', true)),
            'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
        ];
        $this->db->where('id', $id);
        $this->db->update('jo', $data);
    }
    public function tampil_role()
    {
        return $this->db->order_by('id', 'Desc')->get('user_role')->result_array();
    }



    public function peminjaman()
    {
        $this->db->where('id_nama', $this->session->userdata('id'));
        $this->db->where('status', 1);
        return $this->db->get('permintaan')->result_array();
    }
    public function hit_peminjaman()
    {
        $this->db->count_all_results('permintaan');  // Produces an integer, like 25
        $this->db->where('id_nama', $this->session->userdata('id'));
        $this->db->where('status', 1);
        $this->db->from('permintaan');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function peminjaman_()
    {
        $this->db->where('id_nama', $this->session->userdata('id'));
        $this->db->where('status', 2);
        return $this->db->get('permintaan')->result_array();
    }
    public function hit_peminjaman_()
    {
        $this->db->count_all_results('permintaan');  // Produces an integer, like 25
        $this->db->where('id_nama', $this->session->userdata('id'));
        $this->db->where('status', 1);
        $this->db->from('permintaan');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hit_cuti()
    {
        $this->db->count_all_results('cuti');  // Produces an integer, like 25
        $this->db->where('nama_id', $this->session->userdata('id'));
        $this->db->where('status', 1);
        $this->db->from('cuti');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hit_cuti_()
    {
        $this->db->count_all_results('cuti');  // Produces an integer, like 25
        $this->db->where('nama_id', $this->session->userdata('id'));
        $this->db->where('status', 2);
        $this->db->from('cuti');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hit_izin()
    {
        $this->db->count_all_results('izin');  // Produces an integer, like 25
        $this->db->where('nama_id', $this->session->userdata('id'));
        $this->db->where('status', 1);
        $this->db->from('izin');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hit_izin_()
    {
        $this->db->count_all_results('izin');  // Produces an integer, like 25
        $this->db->where('nama_id', $this->session->userdata('id'));
        $this->db->where('status', 2);
        $this->db->from('izin');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hit_spl()
    {
        $this->db->count_all_results('input_spl');  // Produces an integer, like 25
        $this->db->where('anggota', $this->session->userdata('id'));
        $this->db->from('input_spl');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function hit_mr()
    {
        $id = $this->session->userdata('id');
        $this->db->where('id', $id);
        $sql = $this->db->get('karyawan')->result_array();
        foreach ($sql as $sq) :
            $this->db->count_all_results('mr');  // Produces an integer, like 25
            $this->db->where('nama', $sq['nama']);
            $this->db->where('status', 1);
            $this->db->from('mr');
            $query = $this->db->count_all_results();
            return $query;
        endforeach;
    }
    public function hit_mr_()
    {
        $id = $this->session->userdata('id');
        $this->db->where('id', $id);
        $sql = $this->db->get('karyawan')->result_array();
        foreach ($sql as $sq) :
            $this->db->count_all_results('mr');  // Produces an integer, like 25
            $this->db->where('nama', $sq['nama']);
            $this->db->where('status', 2);
            $this->db->from('mr');
            $query = $this->db->count_all_results();
            return $query;
        endforeach;
    }
    public function get_divisi()
    {
        return $this->db->order_by('nama_divisi', 'ASC')->get('devisi')->result_array();
    }
    public function setting_user($post)
    {
        $id = $this->input->post('id', true);
        $data = [
            'password' => htmlspecialchars($this->input->post('pass1', true)),
            'email' => htmlspecialchars($this->input->post('email', true))
        ];
        $upload_image3 = $_FILES['foto'];
        if ($upload_image3) {
            $config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_image = $this->input->post('fotoasli', true); //foto asli dari form
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            }
            $where = array('id' => $id);
            $this->User_m->update_kar($where, $data, 'karyawan');
        }
    }
    public function detail_nama($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->get('karyawan')->result_array();
        return $result;
    }
    public function status($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('status')->result_array();
    }
}
