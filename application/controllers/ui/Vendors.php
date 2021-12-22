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
            "semua_kategori" => $this->db->get('tb_kategori_service')->result_array(),
            // "semua_kota" => $this->db->get("cities")->result_array(),
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
            'member' => $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array()
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

    public function tentang_kami()
    {
        $id_vendor = $_GET['id_vendor'];
        if ($this->input->is_ajax_request()) {
            $this->db->select('tentang_bisnis,alamat_kantor,kota,tb_kategori_service.nama_kategori,id_kategori_service');
            $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
            $this->db->where('id_vendor', $id_vendor);
            $data = [
                'tentang_kami' => $this->db->get('tb_data_lengkap_vendor')->row_array()
            ];
            echo json_encode($this->load->view('ajax-request-vendor/tentang-vendor', $data));
        } else {
            echo json_encode("Request failed");
        }
    }

    public function cek_harga_produk()
    {
        if ($this->input->is_ajax_request()) {
            if (!$this->session->userdata('email_member')) {
                echo json_encode($this->load->view('ajax-request-vendor/belum_login'));
            } else {
                $id_vendor = $_GET['id_vendor'];
                $nama_kategori = $_GET['nama_kategori'];
                $this->db->select('nama_produk,nama_kategori,detail_produk,harga');
                $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
                $this->db->where('id_vendor', $id_vendor);
                $data = [
                    'nama_kategori' => $nama_kategori,
                    'detail_harga' => $this->db->get('tb_produk')->result_array()
                ];
                echo json_encode($this->load->view('ajax-request-vendor/detail_harga_produk', $data));
            }
        } else {
            echo json_encode("Request failed");
        }
    }

    public function semua_kategori()
    {
    }

    public function cari_kategori()
    {
        $kategori = $_GET['kategori'];
        $kota = $_GET['kota'];
        $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori');
        $this->db->from('tb_data_lengkap_vendor');
        $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
        $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
        $this->db->like('nama_kategori', $kategori, 'both');
        $this->db->like('kota', $kota, 'both');

        $data = [
            'data_vendor' => $this->db->get()->result_array(),
        ];
        echo json_encode($this->load->view('ajax-request-vendor/data-vendor', $data));
    }

    public function cari_kota()
    {
        $kota = $_GET['kota'];
        $kategori = $_GET['kategori'];
        $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori');
        $this->db->from('tb_data_lengkap_vendor');
        $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
        $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
        $this->db->like('kota', $kota, 'both');
        $this->db->like('nama_kategori', $kategori, 'both');

        $data = [
            'data_vendor' => $this->db->get()->result_array(),
        ];
        echo json_encode($this->load->view('ajax-request-vendor/data-vendor', $data));
    }

    public function cari_harga()
    {
        $kota = $_GET['kota'];
        $kategori = $_GET['kategori'];
        $harga = $_GET['harga'];

        switch ($harga) {
            case '$':
                $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori');
                $this->db->from('tb_produk');
                $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_vendor = tb_data_lengkap_vendor.id_vendor');
                $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
                $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
                $this->db->where('harga <=', 2500000);
                $this->db->group_by('id_vendor');
                $this->db->like('kota', $kota, 'both');
                $this->db->like('nama_kategori', $kategori, 'both');

                $data = [
                    'data_vendor' => $this->db->get()->result_array(),
                ];
                echo json_encode($this->load->view('ajax-request-vendor/data-vendor', $data));
                break;
            case '$$':
                $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori');
                $this->db->from('tb_produk');
                $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_vendor = tb_data_lengkap_vendor.id_vendor');
                $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
                $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
                $this->db->where('harga >', 2500000);
                $this->db->where('harga <=', 10000000);
                $this->db->group_by('id_vendor');
                $this->db->like('kota', $kota, 'both');
                $this->db->like('nama_kategori', $kategori, 'both');

                $data = [
                    'data_vendor' => $this->db->get()->result_array(),
                ];
                echo json_encode($this->load->view('ajax-request-vendor/data-vendor', $data));
                break;
            case '$$$':
                $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori');
                $this->db->from('tb_produk');
                $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_vendor = tb_data_lengkap_vendor.id_vendor');
                $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
                $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
                $this->db->where('harga >', 10000000);
                $this->db->group_by('id_vendor');
                $this->db->like('kota', $kota, 'both');
                $this->db->like('nama_kategori', $kategori, 'both');

                $data = [
                    'data_vendor' => $this->db->get()->result_array(),
                ];
                echo json_encode($this->load->view('ajax-request-vendor/data-vendor', $data));
                break;

            default:
                # code...
                break;
        }
    }

    public function vendor_flexible()
    {
        if ($this->input->is_ajax_request()) {
            $this->db->select('tb_data_lengkap_vendor.*, tb_kategori_service.nama_kategori');
            $this->db->from('tb_data_lengkap_vendor');
            $this->db->join('tb_vendor', 'tb_data_lengkap_vendor.id_vendor = tb_vendor.id');
            $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
            $this->db->where('flexible_vendor', 1);
            $data = [
                'data_vendor' => $this->db->get()->result_array(),
            ];
            echo json_encode($this->load->view('ajax-request-vendor/data-vendor', $data));
        }
    }
}
