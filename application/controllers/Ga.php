<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $this->load->model('M_mr');
        $this->load->model('Kodespl_model');
    }

    public function index()
    {
        $data['title'] = "Atur Peminjaman";
        $data['user'] = $this->User_m->tampil_data();
        $data['peminjaman'] = $this->M_peminjaman->tampil_data()->result_array();
        $data['kendaraan'] = $this->M_peminjaman->kendaraan_();
        $data['driver'] = $this->M_peminjaman->driver();
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('ga/index', $data);
        $this->load->view('new_template/footer');
    }

    public function admin()
    {
        $data['title'] = "Data Peminjaman";
        $data['user'] = $this->User_m->tampil_data();
        $data['peminjaman2'] = $this->M_peminjaman->tampil_data2();
        $data['peminjaman'] = $this->M_peminjaman->tampil_data()->result_array();
        $data['get_kendaraan'] = $this->M_peminjaman->kendaraan();
        $data['get_driver'] = $this->M_peminjaman->get_driver();
        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('ga/admin', $data);
        $this->load->view('new_template/footer');
    }

    public function delete($id)
    {
        $this->M_peminjaman->del($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!</div>');
        redirect('Ga/admin');
    }

    public function edit()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_peminjaman->update_tidak_jadi($post);
        $this->M_peminjaman->update_tidak_driver($post);
        $this->M_peminjaman->edit_data_kendaraan($post);
        $this->M_peminjaman->edit_data_driver($post);
        $this->M_peminjaman->edit_peminjaman($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            data berhasil diUpdate!</div>');
        redirect('Ga/admin');
    }

    public function edit_driver_actived()
    {
        $post = $this->input->post(null, true);
        $this->M_peminjaman->driver_($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            data berhasil diUpdate!</div>');
        redirect('Ga');
    }

    public function edit_kendaraan_actived()
    {
        $post = $this->input->post(null, true);
        $this->M_peminjaman->kendaraan__($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            data berhasil diUpdate!</div>');
        redirect('Ga');
    }

    public function tambah_driver()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'actived' => 1
        ];
        $this->db->insert('driver', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            driver berhasil ditambah</div>');
        redirect('Ga');
    }

    public function tambah_kendaraan()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'actived' => 1
        ];
        $this->db->insert('kendaraan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            data berhasil ditambah</div>');
        redirect('Ga');
    }
    public function del_driver($id)
    {
        $this->db->delete('driver', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
        data berhasil dihapus</div>');
        redirect('Ga');
    }
    public function del_kendaraan($id)
    {
        $this->db->delete('kendaraan', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
        data berhasil dihapus</div>');
        redirect('Ga');
    }

    // form MR
    public function data_mr()
    {
        $data['title'] = "Data MR";
        $data['user'] = $this->User_m->tampil_data();
        $data['mr'] = $this->M_mr->tampil_data();
        $data['input'] = $this->M_mr->update_status_mr()->result_array();

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('ga/data_mr', $data);
        $this->load->view('new_template/footer');
    }
    public function detail_mr($id)
    {
        $this->load->model('M_mr');
        $data['title'] = "Data MR";
        $data['user'] = $this->User_m->tampil_data();
        $data['input_mr'] = $this->M_mr->tampil_input($id);
        $data['id'] = $id;
        $data['jumlah'] = $this->M_mr->jumlah_mr($id);
        $data['hitung'] = $this->M_mr->hitung_mr($id);

        $this->load->view('new_template/header', $data);
        $this->load->view('new_template/topbar', $data);
        $this->load->view('new_template/sidebar', $data);
        $this->load->view('ga/detail_data_mr', $data);
        $this->load->view('new_template/footer');
    }
    public function delete_mr($kode_mr)
    {
        $tables = array('mr', 'input_mr');
        $this->db->where('kode_mr', $kode_mr);
        $this->db->delete($tables);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!</div>');
        redirect('Ga/data_mr');
    }

    public function update_mr()
    {
        $status = $this->input->post('status');
        $id = $this->input->post('id', true);
        $kode = $this->input->post('kode_mr', true);
        $data = [
            'status' => $this->input->post('status'),
            'part' => $this->input->post('part'),
            'deskripsi' => $this->input->post('deskripsi'),
            'qty' => $this->input->post('qty'),
            'ouv' => $this->input->post('ouv'),
            'lokasi' => $this->input->post('lokasi'),
            'note' => $this->input->post('note'),
            'tanggal' => date('d M Y'),
            'note_admin' => $this->input->post('note_admin')
        ];
        $upload_image = $_FILES['foto'];
        if ($upload_image) {
            $config['upload_path']          = './assets/img/mr/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_image = $this->input->post('fotoasli', true);
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/mr/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            }
            $where = array('id' => $id);
            $this->M_mr->update_input_mr($where, $data, 'input_mr');
            if ($status == 4) {
                $this->db->where('id', $id);
                $this->db->update('input_mr', ['status_mr' => 1]);
            } elseif ($status == 1) {
                $this->db->where('id', $id);
                $this->db->update('input_mr', ['status_mr' => ""]);
            } elseif ($status == 2) {
                $this->db->where('id', $id);
                $this->db->update('input_mr', ['status_mr' => ""]);
            } elseif ($status == 3) {
                $this->db->where('id', $id);
                $this->db->update('input_mr', ['status_mr' => ""]);
            } else {
                $this->db->where('id', $id);
                $this->db->update('input_mr', ['status_mr' => 1]);
            }
            $this->update_status($kode);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Update Data berhasil!</div>');
            redirect('Ga/detail_mr/' . $kode);
        }
    }
    public function update_status($kode)
    {
        $jumlah = $this->M_mr->jumlah_mr($kode);
        $hitung = $this->M_mr->hitung_mr($kode);
        if ($jumlah == $hitung) {
            $this->db->where('kode_mr', $kode);
            $this->db->update('mr', ['status' => 3]);
        } else {
            $this->db->where('kode_mr', $kode);
            $this->db->update('mr', ['status' => 2]);
        }
    }
    public function print($id)
    {
        $data['title'] = "Pengajuan Material Request";
        $data['user'] = $this->User_m->tampil_data();
        $data['karyawan'] = $this->User_m->ambil_karyawan($id);
        $data['input_mr'] = $this->M_mr->tampil_input($id);
        $data['print'] = $this->M_mr->tampil_data($id);

        $this->load->view('ga/print', $data);
    }
    public function delete_barang($id, $kode_mr)
    {
        $this->M_mr->del_barang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!</div>');
        redirect('Ga/detail_mr/' . $kode_mr);
    }
    public function excel()
    {
        $data['MR'] = $this->M_mr->tambil_data('input_mr')->result();
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
        $object->getActiveSheet()->setCellValue('F1', 'DESKRIPSI');
        $object->getActiveSheet()->setCellValue('G1', 'QTY');
        $object->getActiveSheet()->setCellValue('H1', 'LOKASI');
        $object->getActiveSheet()->setCellValue('I1', 'NOTE ADMIN');
        $object->getActiveSheet()->setCellValue('J1', 'NOTE');
        $object->getActiveSheet()->setCellValue('K1', 'FOTO');

        $baris = 2;
        $no = 1;

        foreach ($data['MR'] as $mr) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $mr->kode_mr);
            $object->getActiveSheet()->setCellValue('C' . $baris, $mr->date_created);
            $object->getActiveSheet()->setCellValue('D' . $baris, $mr->status);
            $object->getActiveSheet()->setCellValue('E' . $baris, $mr->nama);
            $object->getActiveSheet()->setCellValue('F' . $baris, $mr->deskripsi);
            $object->getActiveSheet()->setCellValue('G' . $baris, $mr->qty . ' / ' . $mr->ouv);
            $object->getActiveSheet()->setCellValue('H' . $baris, $mr->lokasi);
            $object->getActiveSheet()->setCellValue('I' . $baris, $mr->note_admin);
            $object->getActiveSheet()->setCellValue('j' . $baris, $mr->note);
            $object->getActiveSheet()->setCellValue('K' . $baris, $mr->foto);

            $baris++;
        }

        $filename = "Data MR " . $date . '.xlsx';
        $object->getActiveSheet()->setTitle('Data MR');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Chache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
    public function tambah_barang()
    {
        $kode = $this->input->post('kode_mr', true);
        $data = [
            'kode_mr' => $this->input->post('kode_mr', true),
            'status' => 1,
            'part' => $this->input->post('part', true),
            'qty' => $this->input->post('qty', true),
            'ouv' => $this->input->post('ouv', true),
            'deskripsi' => $this->input->post('deskripsi', true),
            'lokasi' => $this->input->post('lokasi', true),
            'note' => $this->input->post('note', true),
        ];
        $this->db->insert('input_mr', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Barang berhasil ditambah pada $kode </div>');
        redirect('Ga/detail_mr/' . $kode);
    }

    // akhir form MR
}
