<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //ini untuk memanggil method construct yang ada di CI_Controller
        // is_logged_in();
        $this->load->model('User_m');
        $this->load->model('M_home');
        // $this->load->model('M_mr');
        // $this->load->model('M_absen');
        $this->load->model('M_cuti');
        // $this->load->model('M_izin');
        // $this->load->model('M_kasbon');
        // $this->load->model('M_peminjaman');
        $this->load->model('M_spl');
        $this->load->model('Member_model');
        $this->load->model('Menu_model');
        $this->load->model('Kodespl_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('karyawan', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Home";
        // $data['peminjaman'] = $this->db->order_by('id', 'DESC')->get('permintaan')->result_array();
        $data['salam'] = $this->M_home->salam();
        $data['divisi'] = $this->User_m->get_divisi();
        $data['karyawan'] = $this->User_m->data_karyawan();

        $data['ulangtahun'] = $this->User_m->get_ultah();

        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('home/index.php', $data);
        $this->load->view('unpin/footer');
    }
    public function user()
    {
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->User_m->data_cuti();
        $data['izin'] = $this->User_m->data_izin();
        $data['title'] = "Karyawan";
        $data['sisa_cuti'] = $this->User_m->get_sisa_cuti();
        $data['jumlah_izin'] = $this->User_m->get_jumlah_izin();
        $data['kasbon'] = $this->User_m->data_kasbon();
        $data['peminjaman'] = $this->User_m->data_peminjaman();
        $data['ultah'] = $this->User_m->get_ultah();
        $data['kasbon_status'] = $this->User_m->sisa_kasbon();
        $data['jml'] = $this->M_kasbon->get_jml_bayar();
        $data['get'] = $this->User_m->update_kuota();


        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('user/index', $data);
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
        $this->load->view('new_template/footer', $data);
    }

    //data cuti
    public function cuti()
    {
        $data['title'] = "Cuti";
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->M_cuti->tampil_data()->result_array();
        $data['jenis_cuti'] = $this->M_cuti->getjenis_cuti()->result_array();
        $data['kuota'] = $this->User_m->sisa_cuti()->result_array();
        $data['k_person'] = $this->M_cuti->Total_cuti_person();
        $data['hasil'] = $this->M_cuti->hasil();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('date_end', 'date_end', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('unpin/header', $data);
            $this->load->view('unpin/topbar', $data);
            $this->load->view('unpin/navbar', $data);
            $this->load->view('cuti/cuti', $data);
            $this->load->view('unpin/footer');
        } else {
            $post = $this->input->post(null, true);
            $this->M_cuti->tambah_cuti($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
              </div>');
            redirect('User/cuti');
        }
    }
    //akhir data cuti

    public function edit_user()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_peminjaman->_kendaraan_($post);
        $this->M_peminjaman->edit_user($post);
        $this->M_peminjaman->_driver_($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
           Peminjaman Kendaraan Selesai, Terima kasih</div>');
        redirect('User/peminjaman');
    }
    //akhir data peminjaman

    //data spl
    public function spl()
    {
        $data['title'] = "SPL";
        $data['user'] = $this->User_m->tampil_data();
        $data['karyawan'] = $this->User_m->ambil_karyawan();
        $data['spl'] = $this->M_spl->tampil_data();

        $data['divisi'] = $this->Menu_model->tampil_divisi();


        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('spl/spl', $data);
        $this->load->view('unpin/footer', $data);
    }
    public function input_spl()
    {
        $data['title'] = "Pengajuan SPL";
        $data['user'] = $this->User_m->tampil_data();
        $data['kode_spl'] = $this->M_spl->kode_spl();
        $data['karyawan'] = $this->User_m->ambil_karyawan();

        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('spl/input_spl', $data);
        $this->load->view('unpin/footer', $data);
    }

    public function tambahspl()
    {
        $this->load->model('M_spl');
        $kode = $this->M_spl->kode_spl();
        $sa = $this->input->post('kode_spl');
        $result = array();
        foreach ($sa as $key => $val) {
            //ini
            $divisi = $_POST['anggota'][$key];
            $this->db->where('id', $divisi);
            $sql = $this->db->get('karyawan')->result_array();
            foreach ($sql as $d) :
            //ini
            endforeach;
            $result[] = array(
                "kode_input_spl" => $kode,
                "anggota" => $_POST['anggota'][$key],
                "divisi" => $d['divisi'],
                "pekerjaan" => $_POST['pekerjaan'][$key],
                "note" => $_POST['note'][$key],
                "catatan" => "",
                "aksi" => 0,
            );
        }
        $test = $this->db->insert_batch('input_spl', $result);
        if ($test) {
            $post = $this->input->post();
            $this->M_spl->tambah_spl($post);
            // $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            //     Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
            //   </div>');
            redirect('User/spl');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
               permintaan anda Gagal dibuat!
              </div>');
        }
    }

    //akhir data spl



    public function print_mr($id)
    {
        $this->load->model('M_mr');
        $data['title'] = "Pengajuan Material Request";
        $data['user'] = $this->User_m->tampil_data();
        $data['karyawan'] = $this->User_m->ambil_karyawan($id);
        $data['input_mr'] = $this->M_mr->tampil_input($id);
        $data['print'] = $this->M_mr->tampil_data($id);

        $this->load->view('ga/print', $data);
    }




    public function get_tot()
    {
        $tot = $this->M_home->hitung_peminjaman();
        $cut = $this->M_home->hitung_cuti();
        $cut2 = $this->M_home->hitung_cuti_acc();
        $izi = $this->M_home->hitung_izin();
        $spl = $this->M_home->hitung_spl();
        $kas = $this->M_home->hitung_kasbon();
        $mr = $this->M_home->hitung_mr();
        $lembur = $this->M_home->hitung_lembur();
        $result['tot'] = $tot;
        $result['cuti'] = $cut;
        $result['cuti2'] = $cut2;
        $result['izin'] = $izi;
        $result['spl'] = $spl;
        $result['ks'] = $kas;
        $result['mr'] = $mr;
        $result['mr_user'] = "New";
        $result['lembur'] = $lembur;
        echo json_encode($result);
    }
    public function setting()
    {
        $data['user'] = $this->db->get_where('karyawan', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Setting";
        $this->load->library('form_validation');


        if ($this->form_validation->run() == null) {
            $this->load->view('unpin/header', $data);
            $this->load->view('unpin/topbar', $data);
            $this->load->view('unpin/navbar', $data);
            $this->load->view('user/setting', $data);
            $this->load->view('unpin/footer');
        } else {
            $this->Update_user();
        }
    }
    public function Update_user()
    {
        $post = $this->input->post(null, TRUE);
        $this->User_m->setting_user($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Tambah data karyawan berhasil!</div>');
        redirect('User/setting');
    }
}
