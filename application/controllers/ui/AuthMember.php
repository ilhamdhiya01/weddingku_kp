<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AuthMember extends CI_Controller
{
    public function registrasi()
    {
        $data = [
            "judul" => "Registrasi"
        ];

        $this->load->view('templete/ui_header', $data);
        $this->load->view('auth_member/registrasi_member');
        $this->load->view('templete/ui_footer');
    }

    public function test()
    {
        $data = [
            "judul" => "Home"
        ];
        $email_benar = "ulhaqilhamdhiya@gmail.com";
        $password_benar = "ilhamdhiya01";
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if ($email != $email_benar) {
            echo "
                <script>
                    alert('Email salah');
                </script>
                ";
            $this->load->view('templete/ui_header', $data);
            $this->load->view('home/index');
            $this->load->view('templete/ui_footer');
        } else {
            if ($password != $password_benar) {
                echo "
                <script>
                    alert('Password salah');
                </script>
                ";
                $this->load->view('templete/ui_header', $data);
                $this->load->view('home/index');
                $this->load->view('templete/ui_footer');
            } else {
                redirect('ui/AuthMember/afterLogin');
            }
        }
    }

    public function afterLogin()
    {
        $this->load->view('templete/after_login');
        $this->load->view('home/index');
        $this->load->view('templete/ui_footer');
    }
}
