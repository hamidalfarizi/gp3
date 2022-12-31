<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Filter_siswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Filter_model');
    }

    function index ()
    {
        $data['kategori'] = $this->Filter_model->getkategori();
        $data['kelas'] = $this->Filter_model->getkelas();
        $data['provinsi'] = $this->Filter_model->get_provinsi();
        $data['rayon'] = $this->Filter_model->get_rayon();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('filter/index', $data);
        $this->load->view('template/footer');
    }


    function filterbykelas()
    {
        $kelas = $this->input->post('kelas');
        $nilaikelas = $this->input->post('nilaikelas');

        if ($nilaikelas == 1) {
            $data['title'] = "Data Santri Kelas $kelas";
            $data['datafilter'] =$this->Filter_model->filter_by_kelas($kelas);

            // $this->load->view('template/header', $data);
            // $this->load->view('template/sidebar', $data);
            $this->load->view('filter/print_laporan', $data);
            $this->load->view('template/footer', $data);
        }
    }

    function filterbyrayon()
    {
        $rayon = $this->input->post('rayon');
        $nilairayon = $this->input->post('nilairayon');
    
        if ($nilairayon == 1) {
            $data['title'] = "Data Santri Rayon $rayon";
            $data['datafilter'] =$this->Filter_model->filter_by_rayon($rayon);
    
            // $this->load->view('template/header', $data);
            // $this->load->view('template/sidebar', $data);
            $this->load->view('filter/print_laporan', $data);
            $this->load->view('template/footer', $data);
    
        }
    }

    function get_siswa()
    {
        $stambuk = $this->input->post('nis');
        $namalengkap = $this->input->post('nama_lengkap');
        $nilaisiswa = $this->input->post('nilaisiswa');
    
        if ($nilaisiswa == 1) {
            $data['title'] = "Data Santri $namalengkap";
            $data['datafilter'] =$this->Filter_model->get_santri($stambuk);
    
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('filter/print_laporan', $data);
            $this->load->view('template/footer');
    
        }
    }
    
   
}