<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hrd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //ini untuk memanggil method construct yang ada di CI_Controller
        $this->load->library('form_validation');
        is_logged_in();
        $this->load->model('User_m');
        $this->load->model('M_home');
        $this->load->model('M_absen');
        $this->load->model('M_cuti');
        $this->load->model('M_izin');
        $this->load->model('M_kasbon');
        $this->load->model('M_peminjaman');
        $this->load->model('M_spl');
        $this->load->model('Member_model');
        $this->load->model('Menu_model');
        $this->load->model('kodespl_model');
        $this->load->model('M_mr');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('karyawan', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Dashboard";
        // $data['peminjaman'] = $this->db->order_by('id', 'DESC')->get('permintaan')->result_array();
        $data['salam'] = $this->M_home->salam();
        $data['peminjaman'] = $this->M_home->tampil_data_peminjaman();
        //jumlah peminjam
        $data['peminjam'] = $this->M_home->hitung_peminjaman();
        $data['cuti'] = $this->M_home->hitung_cuti();
        $data['izin'] = $this->M_home->hitung_izin();
        $data['spl'] = $this->M_home->hitung_spl();
        $data['update'] = $this->User_m->update_kuota();
        $data['ulangtahun'] = $this->User_m->get_ultah();


        $data['peminjam'] = $this->M_home->hitung_peminjaman();
        $data['pinjam_hari'] = $this->M_home->pinjam_hari_ini();


        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('new_template/template', $data);
        $this->load->view('new_template/footer');
    }
    // Data absen

    public function absen()
    {
        $data['title'] = "Data Absen";
        $data['user'] = $this->User_m->tampil_data();
        $data['data'] = $this->M_absen->tampil_data();
        $data['karyawan'] = $this->M_absen->data_karyawan();
        $data['divisi'] = $this->M_absen->data_divisi();

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('absen/index', $data);
        $this->load->view('new_template/footer', $data);
    }
    public function tambah_absen()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_absen->tambah_data($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data berhasil ditambahkan!</div>');
        redirect('Hrd/absen');
    }
    public function edit_absen()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_absen->edit_data($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data berhasil diupdate!</div>');
        redirect('Hrd/absen');
    }
    public function ambil_divisi_absen()
    {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "Divisi_user") {
            echo $this->M_absen->data_div($id);
        }
    }
    public function delete_absen($id)
    {
        $this->db->delete('absen', ['id_absen' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!
          </div>');
        redirect('Hrd/absen');
    }

    // akhir data absen
    // data cuti
    public function cuti_acc()
    {
        $data['title'] = "Data Cuti  / ACC Head";
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->M_cuti->cuti_head()->result_array();
        $data['jenis_cuti'] = $this->M_cuti->getjenis_cuti()->result_array();
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('cuti/cuti_acc', $data);
        $this->load->view('new_template/footer', $data);
    }
    public function delete_cuti($id)
    {
        $this->M_cuti->del($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!
          </div>');
        redirect('Hrd/cuti_acc');
    }
    public function edit_cuti()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_cuti->edit_cuti($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data berhasil diUpdate!</div>');
        redirect('Hrd/admin_cuti');
    }
    public function edit_acc()
    {
        
        $jencut = $this->input->post('jenis_cuti', true);
        if ($jencut == 'Personal') {
        	$post = $this->input->post(null, TRUE);
            $this->M_cuti->edit_acc($post);
            $this->M_cuti->kurangi_kuota($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                Data berhasil diUpdate!</div>');
            redirect('Hrd/cuti_acc');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->M_cuti->edit_acc($post);
            $this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">
                Data berhasil diUpdate!</div>');
            redirect('Hrd/cuti_acc');
        }
    }
    // akhir data cuti

    //data karyawan
    public function data_karyawan($id = null)
    {
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->User_m->cuti_person();
        $data['izin'] = $this->User_m->data_izin();
        $data['lihat'] = $this->User_m->data_karyawan();
        $data['title'] = "Data Karyawan";
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('user/data_karyawan', $data);
        $this->load->view('new_template/footer');
    }
    public function detail($id)
    {
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->User_m->data_cuti($id);
        $data['izin'] = $this->User_m->data_izin($id);
        $data['lihat'] = $this->User_m->tampil_data($id);
        $data['kasbon'] = $this->User_m->data_kasbon($id);
        $data['sisa_cuti'] = $this->User_m->get_sisa_cuti($id);
        $data['kuota'] = $this->User_m->_kuota($id);
        $data['jumlah_izin'] = $this->User_m->get_jumlah_izin($id);
        $data['kasbon_status'] = $this->User_m->sisa_kasbon($id);
        $data['jml'] = $this->M_kasbon->get_jml_bayar($id);
        $data['title'] = "Data Karyawan";


        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('new_template/footer');
    }
    public function edit_karyawan($id)
    {
        $data['lihat'] = $this->User_m->lihat_karyawan($id);
        $data['user'] = $this->User_m->tampil_data();
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        $data['jabatan'] = $this->Menu_model->tampil_jabatan();
        $data['role'] = $this->User_m->tampil_role();

        $data['title'] = "Edit Data Karyawan";
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nrp', 'nrp', 'required');
        $this->form_validation->set_rules('divisi', 'divisi', 'required');
        $this->form_validation->set_rules('tanggalgabung', 'tanggal gabung', 'required');
        $this->form_validation->set_rules('tanggallahir', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jenjang', 'jenjang', 'required');
        $this->form_validation->set_rules('sekolah', 'sekolah', 'required');
        $this->form_validation->set_rules('ktp', 'no ktp', 'required');
        $this->form_validation->set_rules('notlp', 'no telepon', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('user/edit_karyawan', $data);
            $this->load->view('new_template/footer');
        } else {
            $post = $this->input->post(null, true);
            $this->user_m->edit_karyawan($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Update data karyawan berhasil!</div>');
            redirect('Hrd/data_karyawan');
        }
    }
    public function tambah_karyawan($id = null)
    {
        $data['user'] = $this->User_m->tampil_data();
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        $data['jabatan'] = $this->Menu_model->tampil_jabatan();
        $data['title'] = "Tambah Karyawan";

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[karyawan.username]', [
            'is_unique' => 'Email is already!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nrp', 'nrp', 'required');
        $this->form_validation->set_rules('divisi', 'divisi', 'required');
        $this->form_validation->set_rules('tanggalgabung', 'tanggal gabung', 'required');
        $this->form_validation->set_rules('tanggallahir', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jenjang', 'jenjang', 'required');
        $this->form_validation->set_rules('sekolah', 'sekolah', 'required');
        $this->form_validation->set_rules('ktp', 'no ktp', 'required');
        $this->form_validation->set_rules('notlp', 'no telepon', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[karyawan.email]', [
            'is_unique' => 'Username is already!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('user/tambah_karyawan', $data);
            $this->load->view('new_template/footer');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->add_karyawan($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Tambah data karyawan berhasil!</div>');
            redirect('Hrd/data_karyawan');
        }
    }
    public function ambil_jabatan()
    {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "jabataN") {
            $this->load->model('Menu_model');
            echo $this->Menu_model->data_jabatan($id);
        }
    }
    public function update_cuti()
    {
        $post = $this->input->post(null, TRUE);
        $this->User_m->update_cuti($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Edit Data berhasil</div>');
        redirect('Admin');
    }

    public function update_k()
    {

        $id = $this->input->post('id', true);
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => htmlspecialchars($this->input->post('password', true)),
            'nrp' => htmlspecialchars($this->input->post('nrp', true)),
            'divisi' => htmlspecialchars($this->input->post('divisi', true)),
            'tanggal_gabung' => htmlspecialchars($this->input->post('tanggalgabung', true)),
            'tahun_gabung' => htmlspecialchars($this->input->post('tahungabung', true)),
            'ttl' => htmlspecialchars($this->input->post('tanggallahir', true)),
            'tahun_lahir' => htmlspecialchars($this->input->post('tahunlahir', true)),
            'tempat' => htmlspecialchars($this->input->post('tempat', true)),
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
            'role_id' => htmlspecialchars($this->input->post('role_id', true)),
            'is_active' => htmlspecialchars_decode($this->input->post('aktif', true))
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
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Update Data berhasil!</div>');
            redirect('Hrd/data_karyawan');
        }
    }
    public function del($id)
    {
        $return =  $this->User_m->ambilgambar($id);

        $path = './assets/img/profile/';
        @unlink($path . $return->foto);


        if ($this->User_m->del($id) == TRUE) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">
                               Hapus data berhasil!</div>');
            redirect('Hrd/data_karyawan');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Hapus data barang gagal !</div>');
            redirect('Hrd/data_karyawan');
        }
    }
    //akhir data karyawan

    //data izin
    public function delete_izin($id)
    {
        $this->M_izin->del($id);

        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!
          </div>');

        redirect('Hrd/admin_izin');
    }
    public function admin_izin()
    {
        $data['user'] = $this->User_m->tampil_data();
        $data['title'] = "Data Izin";
        $data['izin'] = $this->M_izin->tampil_data()->result_array();
        $data['jenis_izin'] = $this->M_izin->jenis_izin()->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('Jenis_izin', 'Jenis Izin', 'required|trim');
        $this->form_validation->set_rules('date_end', 'Sampai Tanggal', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('izin/admin', $data);
            $this->load->view('new_template/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'jenis_izin' => htmlspecialchars($this->input->post('Jenis_izin', true)),
                'date_end' => htmlspecialchars($this->input->post('date_end', true)),
                'Keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'date_created' => time(),
                'note' => "Belum ada Catatan"
            ];

            $token = base64_encode(random_bytes(32)); //32 =parameter(dari fungsi php)| base_encode = code utk menterjemahkan si tandom_bytes tsb
            //siapkan tbl sementara untuk simpan token

            $this->db->insert('izin', $data);
            // $this->_sendEmail($token, 'verify');


            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
          </div>');

            redirect('Hrd/admin_izin');
        }
    }
    public function edit_izin()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_izin->edit_izin($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Izin berhasil diUpdate!</div>');
        redirect('Hrd/admin_izin');
    }
    //akhir data izin

    //data spl
    public function admin_spl()
    {
        $data['title'] = "Data SPL";
        $data['user'] = $this->User_m->tampil_data();
        $data['karyawan'] = $this->User_m->ambil_karyawan();
        $data['spl'] = $this->M_spl->tampil_data();
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('spl/admin', $data);
            $this->load->view('new_template/footer');
        }
    }
    public function delete_spl($id)
    {
        $this->M_spl->del($id);
        $this->session->set_flashdata('flash', 'Hapus');
        redirect('Hrd/admin_spl');
    }

    public function edit_spl()
    {
        $post = $this->input->post(null, true);
        $this->M_spl->edit($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        Data Berhasil diupdate!
      </div>');

        redirect('Hrd/admin_spl');
    }

    public function update_spl()
    {
        $id = $this->input->post('id');
        $email = htmlspecialchars($this->input->post('email'), true);
        $data = [
            'nama' => htmlspecialchars($this->input->post('name'), true),
            'email' => $email,
            'devisi' => htmlspecialchars($this->input->post('devisi'), true),
            'tanggal' => htmlspecialchars($this->input->post('tanggal'), true),
            'date_end' => htmlspecialchars($this->input->post('date_end'), true),
            'anggota' => htmlspecialchars($this->input->post('anggota'), true),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan'), true),
            'kode_spl' => htmlspecialchars($this->input->post('kode'), true),
            'jam' => htmlspecialchars($this->input->post('jam'), true),
            'date_created' => time(),
            'mengetahui' => htmlspecialchars($this->input->post('mengetahui'), true),
            'emailhead' => htmlspecialchars($this->input->post('emailhead'), true),
            'status' => htmlspecialchars($this->input->post('status'), true),
            'note' => htmlspecialchars($this->input->post('note'), true)
        ];
        $where = array(
            'id' => $id
        );
        $this->load->model('Member_model');
        $this->Member_model->update_data($where, $data, 'spl');

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
           Data Telah diupdate!
          </div>');
        redirect('Hrd/admin_spl');
    }
    public function ambil_email()
    {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "email_head") {
            echo $this->M_spl->data_email_head($id);
        }
    }
    public function print($id)
    {
        $data['title'] = "Surat Perintah Lembur";
        $data['user'] = $this->User_m->tampil_data();
        $data['karyawan'] = $this->User_m->ambil_karyawan($id);
        $data['spl'] = $this->M_spl->tampil_data($id);
        $data['divisi'] = $this->M_spl->divisi_data();

        $this->load->view('spl/print', $data);
    }
    //akhir data spl

    //data kasbon
    public function admin_kasbon()
    {
        $data['title'] = "Data Kasbon";
        $data['user'] = $this->User_m->tampil_data();
        $data['kasbon'] = $this->M_kasbon->tampil_data();

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('kasbon/admin', $data);
            $this->load->view('new_template/footer');
        } else {
            $post = $this->input->post(null, true);
            $this->M_kasbon->edit_kasbon($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success  text-center" role="alert">
            Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
          </div>');

            redirect('Hrd/admin_kasbon');
        }
    }
    public function edit_kasbon()
    {
        $post = $this->input->post(null, true);
        $this->M_kasbon->edit_kasbon($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success  text-center" role="alert">
        data berhasil diupdate! </div>');

        redirect('Hrd/admin_kasbon');
    }
    public function delete_kasbon($id)
    {
        $this->db->delete('kasbon', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
        data berhasil dihapus! </div>');

        redirect('Hrd/admin_kasbon');
    }
    public function input_angsuran($id)
    {
        $data['title'] = "Input Kasbon";
        $data['user'] = $this->User_m->tampil_data();
        $data['kasbon'] = $this->M_kasbon->tampil_data($id);
        $data['input'] = $this->M_kasbon->tampil_input($id);
        $data['jml'] = $this->M_kasbon->get_jml_bayar($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('kasbon/input_form', $data);
        $this->load->view('new_template/footer');
    }
    public function add()
    {
        $angsuran = $this->input->post('jml', true);
        $angsuran_hari_ini = $this->input->post('jumlah', true);
        $kasbon = $this->input->post('kasbon', true);

        $jumlah = $angsuran + $angsuran_hari_ini;
        $sum = $kasbon - $jumlah;
        echo $sum;
        if ($sum == 0) {
            $id = $this->input->post('id_kasbon', true);
            $post = $this->input->post('id', true);
            $this->M_kasbon->input_angsuran($post);
            $this->M_kasbon->update_status($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success  text-center" role="alert">
        data berhasil ditambah!! </div>');
            redirect('Hrd/input_angsuran/' . $id);
        } else {
            $id = $this->input->post('id_kasbon', true);
            $post = $this->input->post('id', true);
            $this->M_kasbon->input_angsuran($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success  text-center" role="alert">
        data berhasil ditambah! </div>');
            redirect('Hrd/input_angsuran/' . $id);
        }
    }
    //akhir data kasbon
    public function get_tot()
    {
        $tot = $this->M_home->hitung_peminjaman();
        $cut = $this->M_home->hitung_cuti();
        $cut2 = $this->M_home->hitung_cuti_acc();
        $izi = $this->M_home->hitung_izin();
        $spl = $this->M_home->hitung_spl();
        $kas = $this->M_home->hitung_kasbon();
        $mr = $this->M_home->hitung_mr();
        $result['tot'] = $tot;
        $result['cuti'] = $cut;
        $result['cuti2'] = $cut2;
        $result['izin'] = $izi;
        $result['spl'] = $spl;
        $result['ks'] = $kas;
        $result['mr'] = $mr;
        $result['mr_user'] = "New";
        echo json_encode($result);
    }

}
