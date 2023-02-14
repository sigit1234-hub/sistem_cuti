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
        is_logged_in();
        $data['user'] = $this->db->get_where('karyawan', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Dashboard";
        // $data['peminjaman'] = $this->db->order_by('id', 'DESC')->get('permintaan')->result_array();
        $data['salam'] = $this->M_home->salam();
        // $data['peminjaman'] = $this->M_home->tampil_data_peminjaman();
        // //jumlah peminjam
        // $data['peminjam'] = $this->M_home->hitung_peminjaman();
        // $data['kend'] = $this->M_home->status_kendaraan();
        // $data['tampil_peminjaman'] = $this->M_home->data_peminjaman();
        $data['cuti'] = $this->M_home->hitung_cuti();
        // $data['izin'] = $this->M_home->hitung_izin();
        // $data['spl'] = $this->M_home->hitung_spl();
        // $data['mr'] = $this->M_home->hitung_mr();
        $data['update'] = $this->User_m->update_kuota();
        $data['ulangtahun'] = $this->User_m->get_ultah();

        $data['cuti_'] = $this->M_home->cuti_hari_ini();
        // $data['izin_'] = $this->M_home->izin_hari_ini();
        // $data['spl_'] = $this->M_home->spl_hari_ini();

        // $data['peminjam_'] = $this->M_home->pinjam_hari_ini();

        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('unpin/index', $data);
        $this->load->view('unpin/footer', $data);
    }
    public function cuti_acc()
    {
        // $data['title'] = "Data Cuti  / ACC Head";
        // $data['user'] = $this->User_m->tampil_data();
        // $data['cuti'] = $this->M_cuti->cuti_head()->result_array();
        // $data['jenis_cuti'] = $this->M_cuti->getjenis_cuti()->result_array();
        // $this->load->view('new_template/header', $data);
        // $this->load->view('new_template/topbar', $data);
        // $this->load->view('new_template/sidebar', $data);
        // $this->load->view('cuti/cuti_acc', $data);
        // $this->load->view('new_template/footer', $data);
        $data['title'] = "Data Cuti";
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->M_cuti->cuti_divisi()->result_array();
        $data['jenis_cuti'] = $this->M_cuti->getjenis_cuti()->result_array();
        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('cuti/cuti_acc', $data);
        $this->load->view('unpin/footer', $data);
    }
    public function edit_cuti()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_cuti->edit_cuti($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data berhasil diUpdate!</div>');
        redirect('Hrd/cuti_acc');
    }
    public function delete_cuti($id)
    {
        $this->M_cuti->del($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!
          </div>');
        redirect('Hrd/cuti_acc');
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
        $data['lihat'] = $this->User_m->data_karyawan();
        $data['title'] = "Data Karyawan";
        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('user/data_karyawan', $data);
        $this->load->view('unpin/footer', $data);
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


    public function ambil_email()
    {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "email_head") {
            echo $this->M_spl->data_email_head($id);
        }
    }


    public function laporan()
    {
        $data['title'] = "Data SPL";
        $data['user'] = $this->User_m->tampil_data();
        $data['karyawan'] = $this->User_m->ambil_karyawan();
        $data['spl'] = $this->M_spl->tampil_data();
        $data['spl2'] = $this->M_spl->tampil_data2()->result_array();
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        $data['tahun'] = $this->M_laporan->getTahun();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('spl/laporan', $data);
            $this->load->view('new_template/footer');
        }
    }
    public function filter()
    {
        $nilaifilter = $this->input->post('nilaifilter');
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');

        if ($nilaifilter == 1) {
            $data['title'] = "Data SPL";
            $data['user'] = $this->User_m->tampil_data();
            $data['karyawan'] = $this->User_m->ambil_karyawan();
            $data['title'] = "Laporan SPL Berdasarkan Tanggal";
            $data['subtitle'] = "Dari tanggal : " . $tanggalawal . " - " . $tanggalakhir;
            $data['filter'] = $this->M_laporan->filterbytanggal($tanggalawal, $tanggalakhir);

            $this->load->view('spl/Export', $data, false);
        } elseif ($nilaifilter == 2) {
            $data['title'] = "Data SPL";
            $data['user'] = $this->User_m->tampil_data();
            $data['karyawan'] = $this->User_m->ambil_karyawan();
            $data['title'] = "Laporan SPL Berdasarkan Bulan";
            $data['subtitle'] = "Dari bulan : " . $bulanawal . " - " . $bulanakhir . "  Tahun : " . $tahun1;
            $data['filter'] = $this->M_laporan->filterbybulan($tahun1, $bulanawal, $bulanakhir);

            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('spl/Export', $data, false);
            $this->load->view('new_template/footer');

            $this->excel($data);
        } elseif ($nilaifilter == 3) {
            $data['title'] = "Data SPL";
            $data['user'] = $this->User_m->tampil_data();
            $data['karyawan'] = $this->User_m->ambil_karyawan();
            $data['user'] = $this->User_m->tampil_data();
            $data['title'] = "Laporan SPL Berdasarkan Tahun";
            $data['subtitle'] = "Tahun : " . $tahun2;
            $data['filter'] = $this->M_laporan->filterbytahun($tahun2);

            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('spl/Export', $data, false);
            $this->load->view('new_template/footer');
        }
    }

    public function excel($data)
    {
        $data['filter'] = $data;
        $date = date('d-m-Y  h:i');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("Garuda Mart Indonesia / Mr.Prasetyo");
        $object->getProperties()->setLastModifiedBy("Garuda Mart Indonesia / Mr.Prasetyo");
        $object->getProperties()->setTitle("Daftar Material Request");

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'KODE MR');
        $object->getActiveSheet()->setCellValue('C1', 'TANGGAL');
        $object->getActiveSheet()->setCellValue('D1', 'STATUS');
        $object->getActiveSheet()->setCellValue('E1', 'NAMA');

        $baris = 2;
        $no = 1;

        foreach ($filter['filter'] as $mr) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $mr->kode_spl);
            $object->getActiveSheet()->setCellValue('C' . $baris, $mr->date_created);
            $object->getActiveSheet()->setCellValue('D' . $baris, $mr->status);
            $object->getActiveSheet()->setCellValue('E' . $baris, $mr->nama);

            $baris++;
        }

        $filename = "Data SPL" . '.xlsx';
        $object->getActiveSheet()->setTitle('Data MR');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Chache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
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
    public function edit_new_spl($kode_spl)
    {
        $data['title'] = "Edit SPL";
        $data['user'] = $this->User_m->tampil_data();
        $data['spl'] = $this->M_spl->data_spl($kode_spl);
        $data['karyawan'] = $this->User_m->data_karyawan();


        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('spl/detail_spl', $data);
        $this->load->view('new_template/footer');
    }
    public function update_input_spl()
    {
        $id = $this->input->post('id');
        $kode_spl = $this->input->post('kode_spl');
        $anggota = $this->input->post('anggota');
        $pekerjaan = $this->input->post('pekerjaan');
        $note = $this->input->post('note');

        $data = [
            'anggota' => $anggota,
            'pekerjaan' => $pekerjaan,
            'note' => $note,
        ];
        $this->db->where('id', $id);
        $this->db->update('input_spl', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success  text-center" role="alert">
        data berhasil diUpdate! </div>');
        redirect('Hrd/edit_new_spl/' . $kode_spl);
    }
    public function delete_input_spl($id, $kode_spl)
    {
        $this->db->where('id', $id);
        $this->db->delete('input_spl');
        $this->session->set_flashdata('message', '<div class="alert alert-success  text-center" role="alert">
        data berhasil dihapus! </div>');
        redirect('Hrd/edit_new_spl/' . $kode_spl);
    }
    public function tambah_anggota($kode_spl)
    {
        $data['title'] = "Tambah Anggota Lembur";
        $data['user'] = $this->User_m->tampil_data();
        $data['karyawan'] = $this->User_m->ambil_karyawan();
        $data['kode_spl'] = $kode_spl;
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('spl/tambah_anggota', $data);
        $this->load->view('new_template/footer');
    }
    public function input_tambah_anggota()
    {
        $this->load->model('M_spl');
        $sa = $this->input->post('kode_spl');
        $result = array();
        foreach ($sa as $key => $val) {
            $divisi = $_POST['anggota'][$key];
            $this->db->where('id', $divisi);
            $sql = $this->db->get('karyawan')->result_array();
            foreach ($sql as $d) :
            //ini
            endforeach;
            $result[] = array(
                "kode_input_spl" => $_POST['kode_spl'][$key],
                "anggota" => $_POST['anggota'][$key],
                "pekerjaan" => $_POST['pekerjaan'][$key],
                "note" => $_POST['note'][$key],
                "divisi" => $d['divisi'],
                "aksi" => '0',
            );
        }
        $this->db->insert_batch('input_spl', $result);
        $this->session->set_flashdata('message', '<div class="alert alert-success  text-center" role="alert">
        tambah data berhasil</div>');
        redirect('Hrd/admin_spl');
    }
}
