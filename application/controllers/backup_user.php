<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //ini untuk memanggil method construct yang ada di CI_Controller
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
        $this->load->model('Kodespl_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('karyawan', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Home";
        // $data['peminjaman'] = $this->db->order_by('id', 'DESC')->get('permintaan')->result_array();
        $data['salam'] = $this->M_home->salam();
        $data['peminjaman'] = $this->M_home->tampil_data_peminjaman();
        //jumlah peminjam
        $data['peminjam'] = $this->M_home->hitung_peminjaman();
        $data['cuti'] = $this->M_home->cuti_hari_ini();
        $data['izin'] = $this->M_home->izin_hari_ini();
        $data['spl'] = $this->M_home->spl_hari_ini();
        $data['karyawan'] = $this->User_m->data_karyawan();

        $data['finance'] = $this->User_m->_finance();
        $data['logistic'] = $this->User_m->_logistic();
        $data['service'] = $this->User_m->_service();
        $data['warehouse'] = $this->User_m->_warehouse();
        $data['ga'] = $this->User_m->_ga();
        $data['it'] = $this->User_m->_it();
        $data['manufaktur'] = $this->User_m->_manufaktur();
        $data['marketing'] = $this->User_m->_marketing();
        $data['ulangtahun'] = $this->User_m->get_ultah();

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('new_template/footer');
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
        $this->load->view('new_template/footer');
    }

    //data cuti
    public function cuti()
    {
        $data['title'] = "Cuti";
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->M_cuti->tampil_data()->result_array();
        $data['jenis_cuti'] = $this->M_cuti->getjenis_cuti()->result_array();
        $data['kuota'] = $this->User_m->sisa_cuti()->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('date_end', 'date_end', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('cuti/index', $data);
            $this->load->view('new_template/footer', $data);
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

    //data izin
    public function izin($id = null)
    {
        $data['title'] = "Izin";
        $data['user'] = $this->User_m->tampil_data();
        $data['izin'] = $this->M_izin->tampil_data()->result_array();
        $data['jenis_izin'] = $this->M_izin->jenis_izin()->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('date_end', 'Sampai Tanggal', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('izin/index', $data);
            $this->load->view('new_template/footer');
        } else {

            //     // $this->_sendEmail($token, 'verify');
            $post = $this->input->post(null, TRUE);
            $this->M_izin->tambah_izin($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
          </div>');

            redirect('User/izin');
        }
    }
    //akhir data izin

    //data peminjaman
    public function peminjaman()
    {
        $data['title'] = "Peminjaman";
        $data['user'] = $this->User_m->tampil_data();
        $data['peminjaman2'] = $this->M_peminjaman->tampil_data2();
        $data['peminjaman'] = $this->M_peminjaman->tampil_data()->result_array();
        $data['get_kendaraan'] = $this->M_peminjaman->kendaraan();
        $data['get_driver'] = $this->M_peminjaman->get_driver();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('peminjaman/index', $data);
            $this->load->view('new_template/footer');
        } else {

            $post = $this->input->post(null, true);
            $this->M_peminjaman->tambah_peminjaman($post);
            $this->M_peminjaman->_driver($post);
            $this->M_peminjaman->_kendaraan($post);

            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.<br>Pastikan STNK ada pada saat membawa kendaraan.
          </div>');

            redirect('User/peminjaman');
        }
    }
    public function edit_user()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_peminjaman->edit_user($post);
        $this->M_peminjaman->_driver_($post);
        $this->M_peminjaman->_kendaraan_($post);
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
        $data['spl'] = $this->M_spl->tampil_data2()->result_array();

        $data['divisi'] = $this->Menu_model->tampil_divisi();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('spl/index', $data);
            $this->load->view('new_template/footer');
        } else {
        }
    }
    public function input_spl()
    {
        $data['title'] = "Pengajuan SPL";
        $data['user'] = $this->User_m->tampil_data();
        $data['kode_spl'] = $this->M_spl->kode_spl();
        $data['karyawan'] = $this->User_m->ambil_karyawan();

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('spl/input_spl', $data);
        $this->load->view('new_template/footer', $data);
    }

    public function tambahspl()
    {
        $this->load->model('M_spl');
        $sa = $this->input->post('kode_spl');
        $result = array();
        foreach ($sa as $key => $val) {
            $result[] = array(
                "kode_input_spl" => $_POST['kode_spl'][$key],
                "anggota" => $_POST['anggota'][$key],
                "pekerjaan" => $_POST['pekerjaan'][$key],
                "note" => $_POST['note'][$key],
            );
        }
        $test = $this->db->insert_batch('input_spl', $result);
        if ($test) {
            $post = $this->input->post();
            $this->M_spl->tambah_spl($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
              </div>');
            redirect('User/spl');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
               permintaan anda Gagal dibuat!
              </div>');
        }
    }

    //akhir data spl

    //data kasbon
    public function kasbon()
    {
        $data['title'] = "Kasbon";
        $data['user'] = $this->User_m->tampil_data();
        $data['kasbon'] = $this->User_m->data_kasbon();

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('kasbon/index', $data);
            $this->load->view('new_template/footer');
        } else {
            $post = $this->input->post(null, true);
            $this->M_kasbon->tambah_kasbon($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
          </div>');

            redirect('User/user');
        }
    }
    //akhir data kasbon

    //mr data
    public function index_mr()
    {
        $this->load->model('M_mr');
        $data['title'] = "Pengajuan MR";
        $data['user'] = $this->User_m->tampil_data();
        $data['mr'] = $this->M_mr->tampil_data();

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('ga/mr', $data);
        $this->load->view('new_template/footer');
    }
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
    public function mr()
    {
        $this->load->model('M_mr');
        $data['title'] = "Pengajuan MR";
        $data['user'] = $this->User_m->tampil_data();
        $data['kode_mr'] = $this->M_mr->kode_mr();

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('ga/input_mr', $data);
        $this->load->view('new_template/footer');
    }

    public function tambah_mr()
    {
        $this->load->model('M_mr');
        $sa = $this->input->post('kode_mr');
        $result = array();
        foreach ($sa as $key => $val) {
            $result[] = array(
                "kode_mr" => $_POST['kode_mr'][$key],
                "part" => $_POST['part_number'][$key],
                "status" => 1,
                "deskripsi" => $_POST['deskripsi'][$key],
                "qty" => $_POST['qty'][$key],
                "ouv" => $_POST['ouv'][$key],
                "lokasi" => $_POST['lokasi'][$key],
                "note" => $_POST['note'][$key],
            );
        }
        $test = $this->db->insert_batch('input_mr', $result);
        if ($test) {
            $post = $this->input->post(null, true);
            $this->M_mr->tambah_mr($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                Selamat permintaan anda berhasil dibuat. untuk selanjutnya menunggu Konfirmasi.
              </div>');

            redirect('User/index_mr');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
               permintaan anda Gagal dibuat!
              </div>');
        }
    }
    public function detail_mr($id)
    {
        $this->load->model('M_mr');
        $data['title'] = "Pengajuan MR";
        $data['user'] = $this->User_m->tampil_data();
        $data['input_mr'] = $this->M_mr->tampil_input($id);
        $data['id'] = $id;

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('ga/detail_mr', $data);
        $this->load->view('new_template/footer');
    }
    //akhir mr data
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
