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
        $this->load->model('M_peminjaman');
        $this->load->model('Member_model');
        $this->load->model('Menu_model');
        $this->load->model('M_laporan');
        $this->load->model('M_Bar');
        $this->load->model('kodespl_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('karyawan', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Dashboard";
        // $data['peminjaman'] = $this->db->order_by('id', 'DESC')->get('permintaan')->result_array();
        $data['salam'] = $this->M_home->salam();
        $data['peminjaman'] = $this->M_peminjaman->tampil_data()->result_array();
        //jumlah peminjam
        $data['peminjam'] = $this->M_home->hitung_peminjaman(); //footer
        $data['hit_kendaraan'] = $this->M_home->hitung_kendaraan();
        $data['pengembalian2'] = $this->M_home->hitung_pengembalianFOOTER();
        $data['pengembalian'] = $this->M_home->hitung_pengembalian(); //footer
        $data['hitung_pinjam_berlangsung'] = $this->M_home->hitung_peminjaman_berlangsung(); //footer
        $data['total_pinjam'] = $this->M_home->hitung_total_peminjaman(); //footer
        $data['berlangsung'] = $this->M_peminjaman->berlangsung();
        $data['get_kendaraan'] = $this->M_peminjaman->kendaraan();
        $data['data_kend'] = $this->M_laporan->get_data_kendaraan();
        $data['data_kend_dipakai'] = $this->M_laporan->get_data_kendaraan_dipakai();
        $data['driver'] = $this->M_peminjaman->driver();
        $data['get_driver'] = $this->M_peminjaman->get_driver();

        $data['jan'] = $this->M_Bar->jan();
        $data['feb'] = $this->M_Bar->feb();
        $data['mar'] = $this->M_Bar->mar();
        $data['apr'] = $this->M_Bar->apr();
        $data['mei'] = $this->M_Bar->mei();
        $data['jun'] = $this->M_Bar->jun();
        $data['jul'] = $this->M_Bar->jul();
        $data['aug'] = $this->M_Bar->aug();
        $data['sep'] = $this->M_Bar->sep();
        $data['okt'] = $this->M_Bar->okt();
        $data['nov'] = $this->M_Bar->nov();
        $data['des'] = $this->M_Bar->des();

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('new_template/template', $data);
        $this->load->view('new_template/footer', $data);
    }
    //data karyawan
    public function data_karyawan($id = null)
    {
        $data['user'] = $this->User_m->tampil_data();
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
        $data['lihat'] = $this->User_m->tampil_data($id);
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

        $data['title'] = "Data Karyawan";
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nrp', 'nrp', 'required');
        $this->form_validation->set_rules('divisi', 'divisi', 'required');
        $this->form_validation->set_rules('tanggalgabung', 'tanggal gabung', 'required');
        $this->form_validation->set_rules('tanggallahir', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[karyawan.email]', [
            'is_unique' => 'Username is already!'
        ]);
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


    public function update_k()
    {

        $id = $this->input->post('id', true);
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => htmlspecialchars($this->input->post('password', true)),
            'nrp' => htmlspecialchars($this->input->post('nrp', true)),
            'resign' => htmlspecialchars($this->input->post('resign', true)),
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
    //report//
    public function report()
    {
        $data['title'] = "Report";
        $data['user'] = $this->User_m->tampil_data();
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('report/index', $data);
        $this->load->view('new_template/footer');
    }
    //report*//
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->User_m->tampil_data();
        //ambil data user dari database yang emailnya samadengan email yang ada pada data session->row array=ambil satu baris saja
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('new_template/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            New role Added</div>');
            redirect('HRD/role');
        }
    }
    public function roleAccess($role_id) //menerima role id
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->User_m->tampil_data();
        //ambil data user dari database yang emailnya samadengan email yang ada pada data session->row array=ambil satu baris saja
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        //selanjutnya query semua data menu yang ada di db untuk bisa diakses role id
        // $this->db->where('id !=', 8); //agar admin tidak muncul untuk diatur access permisitionya
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('new_template/footer');
    }
    public function changeAccess()
    {
        //ambil data dari js
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        //menyiapkan data
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        Access change!
      </div>');
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!
          </div>');
        redirect('HRD/role');
    }
}
