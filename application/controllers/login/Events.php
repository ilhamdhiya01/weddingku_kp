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
            "member_session" => $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templete/after_login',$data);
        $this->load->view('events/events');
        $this->load->view('templete/ui_footer');
    }
}
