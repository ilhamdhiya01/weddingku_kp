<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Home extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Home"
        ];
        $this->load->view('templete/ui_header',$data);
        $this->load->view('home/index');
        $this->load->view('templete/ui_footer');
    }
}
