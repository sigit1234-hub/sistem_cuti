<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Jo extends CI_Controller
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
        $this->load->model('Kodespl_model');
    }
    public function index()
    {
        $data['title'] = "Data_Jo";
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->M_cuti->tampil_data()->result_array();
        $data['jo'] = $this->User_m->tampil_jo();
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        //kode
        $data['kode'] = $this->User_m->no_jo();

        // kode 
        $this->form_validation->set_rules('no_jo', 'Nama JO', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('felix/index', $data);
            $this->load->view('new_template/footer', $data);
        } else {
            $post = $this->input->post(null, true);
            $this->User_m->input_jo($post);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Input Data JO baru berhasil!
          </div>');
            redirect('User/jo');
        }
    }
    public function delete_jo($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jo');
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
        data jo berhasil dihapus! </div>');

        redirect('User/jo');
    }
    public function edit_jo()
    {
        $post = $this->input->post(null, true);
        $this->User_m->edit_jo($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        data jo berhasil diUpdate! </div>');

        redirect('User/jo');
    }
}
