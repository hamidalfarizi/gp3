<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->model('Guru_model');
        $this->load->model('Siswa_model');
        $this->load->model('Kelas_model');
        $this->load->model('Mapel_model');
        $this->load->model('Tahun_pelajaran_model');

        // cek user login
        check_login();
        set_tahun_aktif();
    }

    public function index ()
    {
        // data profil
        $data['profil'] = $this->Profil_model->get_all_profil();
        $data['tahun_pelajaran'] = $this->Tahun_pelajaran_model->get_all_tahun_pelajaran();
        // // hitung datanya
        $data['num_rows'] = $this->Profil_model->count_row();
        $data['jumlah_guru'] = $this->Guru_model->count_row();
        $data['jumlah_siswa'] = $this->Siswa_model->count_siswaaktif_row();
        $data['jumlah_siswa_nonaktif'] = $this->Siswa_model->count_siswanonaktif_row();
        $data['jumlah_rayon'] = $this->Siswa_model->count_rayon();
        $data['jumlah_kelas'] = $this->Kelas_model->count_row();
        $data['jumlah_mapel'] = $this->Mapel_model->count_row();
        
        // print_r($_SESSION);
        // $this->session->set_flashdata('message', 'anda berhasil menginput data');
        
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer', $data);
        
    }

    
}