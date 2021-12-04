<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Events extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Events",
            'member' => $this->db->get_where('tb_member',['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('events/index', $data);
        $this->load->view('templete/ui_footer');
    }
}
