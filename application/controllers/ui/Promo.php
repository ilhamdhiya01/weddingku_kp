<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Promo extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Promo",
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('promo/index', $data);
        $this->load->view('templete/ui_footer');
    }

    public function load_all_promo()
    {
        if ($this->input->is_ajax_request()) {
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->where('id_diskon !=', null);

            $data = [
                'produk_promo' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('promo/all-data-promo', $data));
        } else {
            echo json_encode('Request failed');
        }
    }

    public function filter_kategori_promo()
    {
        if ($this->input->is_ajax_request()) {
            $kategori = $_GET['kategori'];
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->like('nama_kategori', $kategori, 'both');
            $this->db->where('id_diskon !=', null);

            $data = [
                'produk_promo' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('promo/all-data-promo', $data));
        } else {
            echo json_encode('Request failed');
        }
    }
}
