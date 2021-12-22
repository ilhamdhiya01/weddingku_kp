<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Store extends CI_Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Store',
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];

        $this->load->view('templete/ui_header', $data);
        $this->load->view('store/index', $data);
        $this->load->view('templete/ui_footer');
    }

    public function load_paket_lengkap()
    {
        if ($this->input->is_ajax_request()) {
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, tb_sub_kategori.sub_kategori');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->join('tb_sub_kategori', 'tb_produk.id_sub_kategori = tb_sub_kategori.id');
            $this->db->where('tb_kategori_service.nama_kategori', 'Wedding Planning');
            $this->db->order_by('id_produk', 'DESC');

            $data = [
                'paket_lengkap' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-store/data-paket-lengkap', $data));
        } else {
            echo json_encode("Request failed");
        }
    }

    public function paket_lengkap()
    {
        $data = [
            'judul' => 'Paket',
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];

        $this->load->view('templete/ui_header', $data);
        $this->load->view('paket/index', $data);
        $this->load->view('templete/ui_footer');
    }

    public function data_paket_lengkap()
    {
        if ($this->input->is_ajax_request()) {
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor, tb_sub_kategori.sub_kategori');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->join('tb_sub_kategori', 'tb_produk.id_sub_kategori = tb_sub_kategori.id');
            $this->db->where('tb_kategori_service.nama_kategori', 'Wedding Planning');

            $data = [
                'paket_lengkap' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('paket/data-paket-lengkap', $data));
        } else {
            echo json_encode("Request failed");
        }
    }

    public function filter_sub_kategori()
    {
        if ($this->input->is_ajax_request()) {
            $sub_kategori = $_GET['sub_kategori'];
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor, tb_sub_kategori.sub_kategori');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->join('tb_sub_kategori', 'tb_produk.id_sub_kategori = tb_sub_kategori.id');
            $this->db->where('tb_sub_kategori.sub_kategori', $sub_kategori);

            $data = [
                'paket_lengkap' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('paket/data-paket-lengkap', $data));
        } else {
            echo json_encode("Request failed");
        }
    }
}
