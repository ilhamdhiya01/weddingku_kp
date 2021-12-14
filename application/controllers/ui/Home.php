<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Home extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Home",
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templete/ui_footer');
    }

    public function load_btn_auth()
    {
        if ($this->input->is_ajax_request()) {
            echo json_encode($this->load->view('home/setelah-login'));
        } else {
            echo json_encode('Request failed');
        }
    }

    public function load_tumbnail_produk_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $this->db->select('tb_kategori_service.*');
            $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
            $this->db->group_by('tb_data_lengkap_vendor.id_kategori_service');
            $this->db->order_by('id_vendor', 'DESC');
            $data = [
                'data_tumbnail_vendor' => $this->db->get('tb_data_lengkap_vendor')->result_array(),
                'kategori_service' => $this->db->get('tb_kategori_service')->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-vendor/data-tumbnail-produk-vendor', $data));
        } else {
            echo json_encode('Request failed');
        }
    }

    public function home_all_produk_diskon()
    {
        if ($this->input->is_ajax_request()) {
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->where('id_diskon !=', null);

            $data = [
                'produk_promo' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('home/home-all-produk-diskon', $data));
        } else {
            echo json_encode('Request failed');
        }
    }
}
