<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Vendors extends CI_Controller
{
    public function index()
    {
        $data = [
            "judul" => "Vendors",
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('vendors/index', $data);
        $this->load->view('templete/ui_footer');
    }

    public function profile_vendor($id_vendor)
    {
        $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori, tb_media_sosial_vendor.*, tb_vendor.email');
        $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
        $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
        $this->db->join('tb_media_sosial_vendor', 'tb_data_lengkap_vendor.id_media_sosial = tb_media_sosial_vendor.id');
        $this->db->where('tb_data_lengkap_vendor.id_vendor', $id_vendor);
        $this->db->order_by('tb_data_lengkap_vendor.id_vendor', 'DESC');

        $data = [
            "judul" => "Profile Vendor",
            'data_vendor' => $this->db->get('tb_data_lengkap_vendor')->row_array(),
            'total_produk' => $this->db->get_where('tb_produk', ['id_vendor' => $id_vendor])->result_array(),
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('vendors/profile_vendor', $data);
        $this->load->view('templete/ui_footer');
    }

    public function menu_ajax()
    {
        $data = [
            "harga" => "Fungsi ini akan dipanggil pada event klik button raed. Fungsi Ini menggunakan getJSON jQuery untuk membaca data JSON yang dikembalikan dari halaman PHP. Iterates objek JSON array dan menambahkan hasil ke HTML,",
            "about" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has"
        ];
        echo json_encode($data);
    }

    public function promo()
    {
        $data = [
            "judul" => "Promo",
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templete/ui_header', $data);
        $this->load->view('vendors/promo', $data);
        $this->load->view('templete/ui_footer');
    }

    public function load_data_vendor()
    {
        if ($this->input->is_ajax_request()) {
            $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori');
            $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
            $this->db->order_by('tb_data_lengkap_vendor.id_vendor', 'DESC');
            $data = [
                'data_vendor' => $this->db->get('tb_data_lengkap_vendor')->result_array()
            ];
            echo json_encode($this->load->view('ajax-request-vendor/data-vendor', $data));
        } else {
            echo json_encode('Request failed');
        }
    }
}
