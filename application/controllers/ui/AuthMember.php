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
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templete/ui_header', $data);
            $this->load->view('auth_member/index');
            $this->load->view('templete/ui_footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $member = $this->db->get_where('member', ['email' => $email])->row_array();
            if (is_null($member)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Email belum terdaftar
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('ui/AuthMember');
            } else {
                if (password_verify($password, $member['password'])) {
                    $data = [
                        'id' => $member['id'],
                        'email' => $member['email'],
                        'is_login' => $member['is_login']
                    ];
                    $this->session->set_userdata($data);
                    if ($member['is_login'] == 1) {
                        redirect('login/Home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password yang anda masukan salah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('ui/AuthMember');
                }
            }
        }
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
                'is_login' => 1,
                'date_create' => time()
            ];
            $this->db->insert('member', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Registrasi berhasil, silahkan login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('ui/AuthMember');
        }
    }

    public function logout_member()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('is_login');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">Logout berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('ui/AuthMember');
    }
}
