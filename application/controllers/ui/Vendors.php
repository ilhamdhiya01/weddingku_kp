<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Vendors extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Vendors"
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('vendors/index');
        $this->load->view('templete/ui_footer');
    }

    public function profile_vendor()
    {
        $data = [
            "judul" => "Profile Vendor"
        ];
        $this->load->view('templete/ui_header',$data);
        $this->load->view('vendors/profile_vendor');
        $this->load->view('templete/ui_footer');
    }

    public function menu_ajax() {
        $data = [
            "harga" => "Fungsi ini akan dipanggil pada event klik button raed. Fungsi Ini menggunakan getJSON jQuery untuk membaca data JSON yang dikembalikan dari halaman PHP. Iterates objek JSON array dan menambahkan hasil ke HTML,",
            "about" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has"
        ];
        echo json_encode($data);
    }                   
}
