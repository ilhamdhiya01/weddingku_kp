<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Produk extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Produk",
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templete/ui_footer');
    }

    public function semua_produk_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $id_vendor = $_GET['id_vendor'];
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->where('tb_produk.id_vendor', $id_vendor);
            $this->db->order_by('id_produk', 'DESC');

            $data = [
                'semua_produk' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-produk/data-produk', $data));
        } else {
            echo json_encode('Request failed');
        }
    }
}
