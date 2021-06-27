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
}
