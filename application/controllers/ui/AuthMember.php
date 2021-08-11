<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AuthMember extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Login Member"
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('auth_member/index');
        $this->load->view('templete/ui_footer');
    }
    public function registrasi()
    {
        $data = [
            "judul" => "Registrasi"
        ];
        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
        $this->form_validation->set_rules('nama_belakang', 'Nama Depan', 'required');
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email|trim|is_unique[member.email]');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required|trim|min_length[8]|matches[konfirmasi_password]');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Kata Sandi', 'required|trim|min_length[8]|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templete/ui_header', $data);
            $this->load->view('auth_member/registrasi_member');
            $this->load->view('templete/ui_footer');
        } else {
            $data = [
                'nama_depan' => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'gambar' => 'default.png',
                'no_tlp' => '',
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_create' => time()
            ];
            $this->db->insert('member', $data);
            redirect('ui/AuthMember');
        }
    }
}
