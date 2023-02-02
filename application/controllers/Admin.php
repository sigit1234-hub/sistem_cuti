<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //ini untuk memanggil method construct yang ada di CI_Controller
        $this->load->library('form_validation');
        // is_logged_in();
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
            redirect('Admin/role');
        }
    }
    public function edit()
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
            $id = $this->input->post('id', true);
            $data = ['role' => $this->input->post('role', true)];
            $this->db->where('id', $id);
            $this->db->update('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            New role Added</div>');
            redirect('Admin/role');
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
        redirect('Admin/role');
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role-id');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        you have ben logout
      </div>');
        redirect('Auth');
    }
    // data cuti acc
    public function admin_cuti()
    {
        $data['title'] = "Data Cuti";
        $data['user'] = $this->User_m->tampil_data();
        $data['cuti'] = $this->M_cuti->cuti_divisi()->result_array();
        $data['jenis_cuti'] = $this->M_cuti->getjenis_cuti()->result_array();
        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('cuti/admin', $data);
        $this->load->view('unpin/footer', $data);
        // $this->load->view('new_template/header', $data);
        // $this->load->view('new_template/topbar', $data);
        // $this->load->view('new_template/sidebar', $data);
        // $this->load->view('cuti/admin', $data);
        // $this->load->view('new_template/footer', $data);
    }
    public function edit_cuti()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_cuti->edit_cuti($post);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data berhasil diUpdate!</div>');
        redirect('Admin/admin_cuti');
    }
    public function delete_cuti($id)
    {
        $this->M_cuti->del($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Telah dihapus!
          </div>');
        redirect('Admin/admin_cuti');
    }
    // akhir data cuti acc

    //spl
    public function laporan_spl()
    {
        $data['title'] = "Data Lembur";
        $data['user'] = $this->User_m->tampil_data();
        $data['input_spl'] = $this->M_spl->tampil_data_divisi();
        $data['divisi'] = $this->Menu_model->tampil_divisi();

        $this->load->view('unpin/header', $data);
        $this->load->view('unpin/topbar', $data);
        $this->load->view('unpin/navbar', $data);
        $this->load->view('spl/update_admin', $data);
        $this->load->view('unpin/footer');
    }

    public function edit_spl()
    {
        $post = $this->input->post(null, true);
        $id = $this->input->post('kode', true);
        $this->M_spl->edit_spl($post);
        $jumlah = $this->M_spl->hitung_detail_spl($id);
        $hitung = $this->M_spl->hitung_detail_byid($id);
        if ($jumlah == $hitung) {
            $this->db->where('kode_spl', $id);
            $this->db->update('spl', ['status' => '3']);
        } else {
            $this->db->where('kode_spl', $id);
            $this->db->update('spl', ['status' => '4']);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data Berhasil diupdate!
          </div>');

        redirect('Admin/laporan_spl');
    }
    public function update_status($id)
    {
        $jumlah = $this->M_spl->hitung_detail_spl($id);
        $hitung = $this->M_spl->hitung_detail_byid($id);
        if ($jumlah == $hitung) {
            $this->db->where('kode_spl', $id);
            $this->db->update('spl', ['status' => 3]);
        } else {
            $this->db->where('kode_spl', $id);
            $this->db->update('spl', ['status' => 4]);
        }
    }
}
