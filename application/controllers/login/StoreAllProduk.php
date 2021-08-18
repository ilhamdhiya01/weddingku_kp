<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class StoreAllProduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        function_helper();
    }
    
    public function index()
    {
        $data = [
            'judul' => 'Semua Produk',
            "member_session" => $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('templete/after_login',$data);
        $this->load->view('semuaproduk/index');
        $this->load->view('templete/ui_footer');
    }
}
