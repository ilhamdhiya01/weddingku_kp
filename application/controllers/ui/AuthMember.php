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
}
