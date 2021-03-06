<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class StoreVenue extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Paket',
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];

        $this->load->view('templete/ui_header', $data);
        $this->load->view('venue/index', $data);
        $this->load->view('templete/ui_footer');
    }
}
