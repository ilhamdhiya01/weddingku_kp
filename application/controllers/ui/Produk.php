<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Produk extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Produk"
        ];
        $this->load->view('templete/ui_header',$data);
        $this->load->view('produk/index');
        $this->load->view('templete/ui_footer');
    }
}
