<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kategori_model');

        // cek user login
        check_login();
    }

    /*
     * Listing of siswa
     */
    function index()
    {
        $data['siswa'] = $this->Siswa_model->get_aktif_siswa();

        $data['_view'] = 'siswa/index';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengasuhan/siswa/index', $data);
        $this->load->view('template/footer', $data);
    }


    function detail ($id)
    {
        $this->load->model('Siswa_model');
        $data['s'] = $this->Siswa_model->get_siswa($id);
        $detail = $this->Siswa_model->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pengasuhan/siswa/detail', $data);
        $this->load->view('template/footer');
    }

    /*
     * Listing of grafik mingguan
     */
    function grafik_mingguan()
    {
        $data['_view'] = 'pengasuhan/grafik_mingguan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengasuhan/grafik_mingguan', $data);
        $this->load->view('template/footer', $data);
    }
}
