<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Store extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Store'
        ];

        $this->load->view('templete/ui_header', $data);
        $this->load->view('store/index');
        $this->load->view('templete/ui_footer');
    }
}
