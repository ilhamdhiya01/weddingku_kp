<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Auth extends CI_Controller
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
        $this->load->view('templete/ui_header', $data);
        $this->load->view('auth_member/registrasi_member');
        $this->load->view('templete/ui_footer');
    }

    public function proses_registrasi_member()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('nama_member', 'Nama member', 'required');
            $this->form_validation->set_rules('no_tlp', 'Nomor tlp', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required|is_unique[tb_member.email]');
            $this->form_validation->set_rules('kata_sandi', 'Kata sandi', 'min_length[8]|required|matches[konfirmasi_sandi]');
            $this->form_validation->set_rules('konfirmasi_sandi', 'Konfirmasi sandi', 'min_length[8]|required|matches[kata_sandi]');

            if ($this->form_validation->run() == false) {
                $msg = [
                    'error' => [
                        'nama_member' => form_error('nama_member'),
                        'no_tlp' => form_error('no_tlp'),
                        'email' => form_error('email'),
                        'kata_sandi' => form_error('kata_sandi'),
                        'konfirmasi_sandi' => form_error('konfirmasi_sandi')
                    ]
                ];
            } else {
                $data = [
                    'nama_member' => $_POST['nama_member'],
                    'no_tlp' => $_POST['no_tlp'],
                    'email' => $_POST['email'],
                    'kata_sandi' => password_hash($_POST['kata_sandi'], PASSWORD_DEFAULT)
                ];
                $this->db->insert('tb_member', $data);
                $msg = [
                    'status' => 201,
                    'message' => 'Registrasi success'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function proses_login_member()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('kata_sandi', 'Kata sandi', 'required|min_length[8]');
            if ($this->form_validation->run() == false) {
                $msg = [
                    'error' => [
                        'email' => form_error('email'),
                        'kata_sandi' => form_error('kata_sandi')
                    ]
                ];
                echo json_encode($msg);
            } else {
                $email = $_POST['email'];
                $kata_sandi = $_POST['kata_sandi'];
                // cek email
                $member = [
                    'users' => $this->db->get_where('tb_member', ['email' => $email])->row_array()
                ];
                if (is_null($member['users'])) {
                    $msg = [
                        'status' => 'null_email',
                        'message' => 'Email belum terdaftar'
                    ];
                    echo json_encode($msg);
                } else {
                    $msg = [
                        'users' => $member['users'],
                        'cek_kata_sandi' => password_verify($kata_sandi, $member['users']['kata_sandi'])
                    ];
                    $userdata = [
                        'nama_member' => $member['users']['nama_member'],
                        'email_member' => $member['users']['email']
                    ];
                    $this->session->set_userdata($userdata);
                    echo json_encode($msg);
                }
            }
        }
    }

    public function registrasi_vendor()
    {
        if ($this->input->is_ajax_request()) {
            echo json_encode($this->load->view('ajax-request/form-registrasi-vendor'));
        }
    }

    public function proses_registrasi_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_vendor.email]');
            $this->form_validation->set_rules('kata_sandi', 'Kata sandi', 'required|min_length[8]|matches[konfirmasi_kata_sandi]');
            $this->form_validation->set_rules('konfirmasi_kata_sandi', 'Kata sandi', 'required|min_length[8]|matches[kata_sandi]');

            if ($this->form_validation->run() == false) {
                $msg = [
                    'error' => [
                        'nama' => form_error('nama'),
                        'email' => form_error('email'),
                        'kata_sandi' => form_error('kata_sandi'),
                        'konfirmasi_kata_sandi' => form_error('konfirmasi_kata_sandi')
                    ]
                ];
            } else {
                $data = [
                    'nama' => $_POST['nama'],
                    'email' => $_POST['email'],
                    'kata_sandi' => password_hash($_POST['kata_sandi'], PASSWORD_DEFAULT),
                    'level_id' => 2,
                    'is_active' => 0,
                    'date_create' => date('Y-m-d')
                ];
                $this->db->insert('tb_vendor', $data);
                $msg = [
                    'status' => 201,
                    'message' => 'Registrasi vendor berhasil'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function login_vendor()
    {
        if ($this->input->is_ajax_request()) {
            echo json_encode($this->load->view('ajax-request/form-login-vendor'));
        }
    }

    public function proses_login_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('kata_sandi', 'Kata sandi', 'required|min_length[8]');

            if ($this->form_validation->run() == false) {
                $msg = [
                    'error' => [
                        'email' => form_error('email'),
                        'kata_sandi' => form_error('kata_sandi')
                    ]
                ];
            } else {
                $email = $_POST['email'];
                $kata_sandi = $_POST['kata_sandi'];
                $vendor = $this->db->get_where('tb_vendor', ['email' => $email])->row_array();

                if (is_null($vendor)) {
                    $msg = [
                        'status' => 'null_email',
                        'message' => 'Email belum terdaftar'
                    ];
                } else {
                    $msg = [
                        'cek_password' => password_verify($kata_sandi, $vendor['kata_sandi']),
                        'vendor' => $vendor
                    ];
                    $data = [
                        'email' => $vendor['email'],
                        'level_id' => $vendor['level_id']
                    ];
                    $this->session->set_userdata($data);
                }
            }
            echo json_encode($msg);
        }
    }

    public function logout_member()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('is_login');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Logout berhasil
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('ui/AuthMember');
    }
}
