<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $form_validation;
    public $session;
    public $Produk_model;
    public $Kategori_modelP;
    public $pagination;


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->model('Kategori_modelP');
        $this->load->library('pagination'); // Load library pagination dengan benar
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/home_footer');
    }

    public function profile()
    {
        $data['title'] = 'Madina Mentari Teknologi Profile';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/profile', $data);
        $this->load->view('templates/home_footer');
    }

    public function product($page = 0)
    {
        $data['title'] = 'Madina Mentari Teknologi Product';
        $data['per_page'] = 3; // Jumlah produk per halaman
        $data['total_rows'] = $this->Produk_model->countProduk(); // Total produk
    
        // Hitung offset
        $data['current_page'] = $page;
        $data['total_pages'] = ceil($data['total_rows'] / $data['per_page']); // Hitung total halaman
    
        // Pastikan offset tidak negatif
        $offset = max(0, $page);
        $data['products'] = $this->Produk_model->getProduk($data['per_page'], $offset); // Ambil produk berdasarkan halaman
        $data['kategori'] = $this->Kategori_modelP->getAllKategori();
    
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/product', $data);
        $this->load->view('templates/home_footer');
    }
    




    public function news()
    {
        $data['title'] = 'Madina Mentari Teknologi News';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/news', $data);
        $this->load->view('templates/home_footer');
    }

    public function job()
    {
        $data['title'] = 'Madina Mentari Teknologi Job';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/job', $data);
        $this->load->view('templates/home_footer');
    }
}
