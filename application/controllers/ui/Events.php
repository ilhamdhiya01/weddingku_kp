<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Events extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Events"
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('events/index');
        $this->load->view('templete/ui_footer');
    }
}
