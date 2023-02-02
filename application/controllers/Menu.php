<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
        $this->load->model('Menu_model');
        $this->load->model('User_m');
    }
    public function index()
    {
        $data['title'] = "Menu";
        $data['user'] = $this->User_m->tampil_data();
        $data['menu'] = $this->Menu_model->tampil_data()->result_array();
        $this->form_validation->set_rules('nama', 'Menu', 'required'); //set kondisi
        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('new_template/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('nama')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                New Menu Added</div>');
            redirect('menu');
        }
    }
    public function submenu()
    {
        $data['title'] = "Menu";
        $data['user'] = $this->User_m->tampil_data();
        //$data['subMenu'] = $this->db->get('user_sub_menu')->result_array(); //mengirim data ke submenu |diganti ke model
        $this->load->model('menu_model', 'menu'); //nama modelnya, ganti namanya jadi menu agar tdk kepajangan
        $data['subMenu'] = $this->menu->getSubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array(); //mengirim data ke modal
        //menu = nama yang akan di panggil di form tujuan yang untuk di looping
        //user_menu = nama pada table database
        $this->form_validation->set_rules('nama', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('new_template/footer');;
        } else {
            $data = [
                'title' => $this->input->post('nama'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
                'label' => $this->input->post('label'),
                'isi' => $this->input->post('isi')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                New Menu Added</div>');
            redirect('menu/submenu');
        }
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        Delete Success!
      </div>');
        redirect('menu/submenu');
    }
    public function changeActive()
    {
        $menu_id = $this->input->post('menuactiveID');
        $data = [
            'is_actived' => $menu_id
        ];
        $result = $this->db->get_where('user_sub_menu', $data);
        if ($result->num_rows() < 0) {
            $this->db->insert('user_sub_menu', $data);
        } else {
            $this->db->delete('user_sub_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                Actived change!</div>');
    }
    public function MenuAccess($menu_id) //menerima role id
    {
        $data['title'] = 'Role Access Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //ambil data user dari database yang emailnya samadengan email yang ada pada data session->row array=ambil satu baris saja
        $data['subMenu'] = $this->db->get_where('user_sub_menu', ['id' => $menu_id])->row_array();
        //selanjutnya query semua data menu yang ada di db untuk bisa diakses role id
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data); //memanggil index yang ada di folder user | $data agar isi yang ada di $data dikirim ke halaman user/index
        $this->load->view('menu/submenu', $data);
        $this->load->view('template/footer');
    }
    public function divisi()
    {
        $data['user'] = $this->User_m->tampil_data();
        $data['title'] = "Divisi";
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        $data['jabatan'] = $this->Menu_model->getJabatan();
        $this->form_validation->set_rules('divisi', 'Divisi', 'required|is_unique[devisi.nama_divisi]', [
            'is_unique' => 'Username is already!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('menu/menu_divisi', $data);
            $this->load->view('new_template/footer');
        } else {
            $data = [
                'nama_divisi' => htmlspecialchars($this->input->post('divisi', true)),
                'email_head' => htmlspecialchars($this->input->post('email', true)),
            ];
            $this->db->insert('devisi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Divisi baru berhasil ditambah!</div>');
            redirect('Menu/divisi');
        }
    }
    public function tambahjabatan()
    {
        $data['user'] = $this->User_m->tampil_data();
        $data['divisi'] = $this->Menu_model->tampil_divisi();
        $data['jabatan'] = $this->Menu_model->getJabatan();
        $this->form_validation->set_rules('divisi', 'Divisi', 'required|is_unique[devisi.nama_divisi]', [
            'is_unique' => 'Username is already!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('new_template/header', $data);
            $this->load->view('new_template/topbar', $data);
            $this->load->view('new_template/sidebar', $data);
            $this->load->view('menu/menu_divisi', $data);
            $this->load->view('new_template/footer');
        } else {
            $data = [
                'id_jabatan' => htmlspecialchars($this->input->post('divisi', true)),
                'nama' => htmlspecialchars($this->input->post('jabatan', true)),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('jabatan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Jabatan baru berhasil ditambah!</div>');
            redirect('Menu/divisi');
        }
    }
    public function editdivisi()
    {
        $post = $this->input->post(null, TRUE);
        $this->Menu_model->editDivisi($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Divisi berhasil diUpdate!</div>');
        redirect('Menu/divisi');
    }
    public function editjabatan()
    {
        $post = $this->input->post(null, TRUE);
        $this->Menu_model->editjabatan($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Jabatan berhasil diUpdate!</div>');
        redirect('Menu/divisi');
    }
    public function deletdivisi($id)
    {
        $this->Menu_model->hapus_divisi($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Divisi Berhasil dihapus!</div>');
            redirect('Menu/divisi');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Divisi Gagal dihapus!</div>');
            redirect('Menu/divisi');
        }
    }
    public function deletjabatan($id)
    {
        $this->Menu_model->hapus_jabatan($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            jabatan Berhasil dihapus!</div>');
            redirect('Menu/divisi');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            jabatan Gagal dihapus!</div>');
            redirect('Menu/divisi');
        }
    }
    public function edit_role_menu()
    {
        $id = $this->input->post('id', true);
        $data = ['menu' => htmlspecialchars($this->input->post('nama', true))];
        $this->db->update('user_menu', $data, ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data berhasil diUpdate!</div>');
        redirect('Menu');
    }
    public function delete_role_menu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data berhasil dihapus!</div>');
        redirect('Menu');
    }
    public function edit_submenu()
    {
        $id = $this->input->post('id', true);
        $data = [
            'title' => $this->input->post('nama'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
                'label' => $this->input->post('label'),
                'isi' => $this->input->post('isi')
        ];
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
           Data berhasil Diupdate</div>');
        redirect('menu/submenu');
    }
    public function delete_submenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data berhasil dihapus!</div>');
        redirect('Menu/submenu');
    }
}
