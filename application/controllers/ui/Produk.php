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
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templete/ui_footer');
    }

    public function load_semua_produk()
    {
        if ($this->input->is_ajax_request()) {
            $id_vendor = $_GET['id_vendor'];
            $data = [
                'id_vendor' => $id_vendor,
                'total_produk_promo' =>  $this->db->get_where('tb_produk', ['id_vendor' => $id_vendor, 'id_diskon !=' => null])->result_array(),
                'total_produk' => $this->db->get_where('tb_produk', ['id_vendor' => $id_vendor])->result_array(),
            ];
            echo json_encode($this->load->view('ajax-request-produk/semua-produk', $data));
        } else {
            echo json_encode("Request Failed");
        }
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

    public function promo_produk_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $id_vendor = $_GET['id_vendor'];
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->where('id_diskon !=', null);
            $this->db->where('tb_produk.id_vendor', $id_vendor);
            $this->db->order_by('id_produk', 'DESC');

            $data = [
                'produk_promo' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-produk/data-produk-promo', $data));
        } else {
            echo json_encode('Request failed');
        }
    }

    public function menu_promo_produk()
    {
        if ($this->input->is_ajax_request()) {
            $id_vendor = $_GET['id_vendor'];
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->where('id_diskon !=', null);
            $this->db->where('tb_produk.id_vendor', $id_vendor);
            $this->db->order_by('id_produk', 'DESC');

            $data = [
                'id_vendor' => $id_vendor,
                'produk_promo' => $this->db->get('tb_produk')->result_array(),
                'total_produk_promo' =>  $this->db->get_where('tb_produk', ['id_vendor' => $id_vendor, 'id_diskon !=' => null])->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-vendor/menu-promo-produk', $data));
        } else {
            echo json_encode('Request failed');
        }
    }

    public function semua_produk($id_vendor)
    {
        $this->db->select('nama_bisnis');
        $this->db->where('id_vendor', $id_vendor);
        $data = [
            "judul" => "Produk",
            'id_vendor' => $id_vendor,
            'nama_vendor' => $this->db->get('tb_data_lengkap_vendor')->row_array(),
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('produk/all-produk-vendor', $data);
        $this->load->view('templete/ui_footer');
    }

    public function show_all_produk_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $id_vendor = $_GET['id_vendor'];
            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->where('tb_produk.id_vendor', $id_vendor);
            $this->db->order_by('id_produk', 'DESC');

            $data = [
                'semua_produk' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-produk/show-all-produk-vendor', $data));
        } else {
            echo json_encode('Request failed');
        }
    }

    public function semua_produk_promo($id_vendor)
    {
        $this->db->select('nama_bisnis');
        $this->db->where('id_vendor', $id_vendor);
        $data = [
            'id_vendor' => $id_vendor,
            'nama_vendor' => $this->db->get('tb_data_lengkap_vendor')->row_array(),
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('produk/all-produk-vendor', $data);
        $this->load->view('templete/ui_footer');
    }

    public function show_promo_produk_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $id_vendor = $_GET['id_vendor'];

            $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor');
            $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
            $this->db->where('id_diskon !=', null);
            $this->db->where('tb_produk.id_vendor', $id_vendor);
            $this->db->order_by('id_produk', 'DESC');

            $data = [
                'semua_produk' => $this->db->get('tb_produk')->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-produk/show-promo-produk-vendor', $data));
        } else {
            echo json_encode('Request failed');
        }
    }

    public function detail_produk($id_produk)
    {
        $this->db->select('tb_data_lengkap_vendor.nama_bisnis,tb_data_lengkap_vendor.foto_profile,tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_produk.harga, tb_produk.id_diskon, tb_data_lengkap_vendor.flexible_vendor, tb_produk.gambar_tumbnail, tb_data_lengkap_vendor.kota, tb_produk.detail_produk, tb_produk.syarat_ketentuan, tb_produk.id_vendor, tb_produk.id as id_produk');
        $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_vendor = tb_data_lengkap_vendor.id');
        $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
        $this->db->where('tb_produk.id', $id_produk);
        $data = [
            "judul" => "Detail Produk",
            'detail_produk' => $this->db->get('tb_produk')->row_array(),
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templete/ui_footer');
    }
}
