<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Perizinan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kategori_model');
        $this->load->model('Perizinan_pengasuhan_model');

        // cek user login
        check_login();
    }

    /*
     * Listing of tabel data santri
     */
    function index()
    {
        // ambil data santri aktif
        $data['siswa'] = $this->Siswa_model->get_aktif_siswa();

        $data['_view'] = 'perizinan/index';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengasuhan/perizinan/index', $data);
        $this->load->view('template/footer', $data);
    }

    /*
     * Listing of detail perizinan siswa
     */
    function detail ($id)
    {
        // periksa bahwa data santri itu ada
        $data['siswa'] = $this->Siswa_model->get_siswa($id);

        if (isset($data['siswa']['id'])) {
                $data['datafilter'] =$this->Perizinan_pengasuhan_model->filter_by_id_siswa($id);
                $data['detail'] =$this->Siswa_model->detail_data($id);
             
                $data['_view'] = 'perizinan/detail';
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('pengasuhan/perizinan/detail', $data);
                $this->load->view('template/footer', $data);
        } else
        show_error('The siswa you are trying to edit does not exist.');
    }

    /*
     * Function for input pelanggaran siswa
     */
    function input_perizinan($id)
    {
        // periksa bahwa data santri itu ada
        $data['siswa'] = $this->Siswa_model->get_siswa($id);
        // munculkan detail data santri
        $data['detail'] = $this->Siswa_model->detail_data($id);

        if(isset($data['siswa']['id']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('nama_perizinan','Nama Perizinan','required');

            if($this->form_validation->run()) {
               
                $id_siswa =  $this->input->post('id_siswa');
                $id_pengizin = $this->input->post('pengizin');
                $nama_lengkap = $this->input->post('nama_lengkap');
                $nama_perizinan = $this->input->post('nama_perizinan');
                $dari_tanggal = $this->input->post('dari_tanggal');
                $sampai_tanggal = $this->input->post('sampai_tanggal');
                $tujuan = $this->input->post('tujuan');
                $keterangan = $this->input->post('keterangan');
                $alasan = $this->input->post('alasan');
        
        
                $data = array(
                    'id_siswa' => $id_siswa,
                    'id_pengizin' => $id_pengizin,
                    'nama_perizinan' => $nama_perizinan,
                    'dari_tanggal' => $dari_tanggal,
                    'sampai_tanggal' => $sampai_tanggal,
                    'tujuan' => $tujuan,
                    'keterangan' => $keterangan,
                    'alasan' => $alasan,);
                    
        
                $this->Perizinan_pengasuhan_model->tambah_perizinan($data);
                $this->session->set_flashdata('berhasil', 'Anda berhasil menambahkan data perizinan <strong>' . $nama_lengkap . '</strong>' . ' berupa <strong>' . $nama_perizinan . '</strong>' );
                redirect('pengasuhan/perizinan');
            }
            else
            {
                
                $data['penghukumpengasuhan'] = $this->Kategori_model->get_penghukum_pengasuhan();
                $data['penghukumkeamanan'] = $this->Kategori_model->get_penghukum_keamanan();
                $data['tujuanjauh'] = $this->Kategori_model->get_tujuan_jauh();
                $data['tujuandekat'] = $this->Kategori_model->get_tujuan_dekat();

                $data['_view'] = 'pengasuhan/perizinan/input_perizinan';
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('pengasuhan/perizinan/input_perizinan', $data);
                $this->load->view('template/footer');
            }
        }
        else
            show_error('The Pelanggaran Santri you are trying to input does not exist.');
    }

    /*
     * Function for Editing a perizinan santri
     */
    function edit_perizinan($id_perizinan)
    {   
        // check if the perizinan exists before trying to edit it
        $data['perizinan'] = $this->Perizinan_pengasuhan_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('pengizin','Pengizin','required');

            $id_perizinan = $data['perizinan']['id_perizinan'];
            $id_siswa = $data['perizinan']['id_siswa'];
            $data['detail'] = $this->Siswa_model->detail_data($id_siswa);
		
			if($this->form_validation->run())     
            {   
                $params = array(
                    'id_pengizin' => $this->input->post('pengizin'),
                    'dari_tanggal' => $this->input->post('dari_tanggal'),
                    'sampai_tanggal' => $this->input->post('sampai_tanggal'),
                    'tujuan' => $this->input->post('tujuan'),
                    'keterangan' => $this->input->post('keterangan'),
                    'alasan' => $this->input->post('alasan'),
                );

                $nama_siswa = $this->input->post('nama_lengkap');

                $this->Perizinan_pengasuhan_model->update_perizinan($id_perizinan,$params);
                $this->session->set_flashdata('berhasil', 'Anda berhasil mengubah data perizinan <strong>' . $nama_siswa . '</strong>' . ' menjadi <strong>' . $this->input->post('perizinan') . '</strong>');

                redirect(base_url('pengasuhan/perizinan/detail/' . $id_siswa)) ;
            }
            else
            {
                $data['penghukumpengasuhan'] = $this->Kategori_model->get_penghukum_pengasuhan();
                $data['penghukumkeamanan'] = $this->Kategori_model->get_penghukum_keamanan();
                $data['tujuanjauh'] = $this->Kategori_model->get_tujuan_jauh();
                $data['tujuandekat'] = $this->Kategori_model->get_tujuan_dekat();

                $data['_view'] = 'pengasuhan/perizinan/edit_perizinan';
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar',$data);
                $this->load->view('pengasuhan/perizinan/edit_perizinan',$data);
                $this->load->view('template/footer',$data);
            }
        }
        else
            show_error('The Perizinan Santri you are trying to edit does not exist.');
    } 

    /*
     * Function of hapus perizinan siswa
     */
    function hapus_perizinan($id_perizinan)
    {
        // check if the perizinan exists before trying to edit it
        $data['perizinan'] = $this->Perizinan_pengasuhan_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->Perizinan_pengasuhan_model->delete_perizinan($id_perizinan);
            $this->session->set_flashdata('hapus', 'Anda berhasil menghapus data perizinan <strong>' .  $data['perizinan']['nama_lengkap'] . '</strong>' . ' berupa <strong>' .  $data['perizinan']['nama_perizinan'] . '</strong>' );
            redirect(base_url('pengasuhan/perizinan/detail/' . $data['perizinan']['id_siswa'])) ;
        } else
        show_error('The siswa you are trying to delete does not exist.');
    }
    
    /*
     * Function of print pdf pelanggaran siswa
     */
    function print()
    {
        $id_siswa = $this->input->post('id_siswa');
        $filterid = $this->input->post('print');

        if ($filterid == 1) {
            $data['datafilter'] =$this->Perizinan_pengasuhan_model->filter_by_id_siswa($id_siswa);
            $data['detail'] =$this->Siswa_model->detail_data($id_siswa);
        
            $data['_view'] = 'perizinan/detail';
 
            $this->load->view('pengasuhan/perizinan/print_laporan', $data);
            $this->load->view('template/footer', $data);
        }
    }

    /*
     * Listing of form Filter pelanggaran siswa
     */
    function form_filter_tanggal ()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pengasuhan/perizinan/form_filter_tanggal');
        $this->load->view('template/footer');
    }
   
    /*
     * Function of Submit form Filter pelanggaran siswa
     */
    function filterbytanggal()
    {
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $nilaitanggal = $this->input->post('nilaitanggal');

           
        if ($nilaitanggal == 1) {
            $data['title'] = "Data Santri yang izin dari tanggal '. <?php echo format_tanggal ($tanggalawal) ?> .'  hingga '. <?php echo format_tanggal ($tanggalakhir) ?>.'";
            $data['tanggalawal'] = $tanggalawal;
            $data['tanggalakhir'] = $tanggalakhir;

           
            $data['dataperizinansakit'] =$this->Perizinan_pengasuhan_model->filter_by_tanggal_sakit($tanggalawal,$tanggalakhir);
            $data['dataperizinanpulangsementara'] =$this->Perizinan_pengasuhan_model->filter_by_tanggal_pulang_sementara($tanggalawal,$tanggalakhir);
           
    
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pengasuhan/perizinan/print_grafik', $data);
            $this->load->view('template/footer', $data);
    
        }
    }

     /*
     * Listing Of Input Massal
     */
    function input_massal()
    {   
        $data['siswa'] = $this->Siswa_model->get_aktif_siswa();

        $data['penghukumpengasuhan'] = $this->Kategori_model->get_penghukum_pengasuhan();
        $data['penghukumkeamanan'] = $this->Kategori_model->get_penghukum_keamanan();
        $data['tujuanjauh'] = $this->Kategori_model->get_tujuan_jauh();
        $data['tujuandekat'] = $this->Kategori_model->get_tujuan_dekat();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('pengasuhan/perizinan/input_massal',$data);
        $this->load->view('template/footer',$data);
    }
    
     /*
     * Function for Submit Input Massal
     */
    function simpan_massal()
    {
        $result = $this->input->post('id_siswa[]');

        $params = array();
        $nama_perizinan = $this->input->post('nama_perizinan');
        $dari_tanggal = $this->input->post('dari_tanggal');
        $sampai_tanggal = $this->input->post('sampai_tanggal');
        $id_pengizin  = $this->input->post('pengizin');
        $tujuan = $this->input->post('tujuan');
        $keterangan = $this->input->post('keterangan');
        $alasan = $this->input->post('alasan');

        foreach($result as $result){
            
            // $result_explode = explode('|', $result);
            // $id_siswa = $result_explode[0];
            // $nama_lengkap = $result_explode[1];
            $id_siswa = $result;

            array_push($params, [
                'nama_perizinan' => $nama_perizinan,
                'dari_tanggal' => $dari_tanggal,
                'sampai_tanggal' => $sampai_tanggal,
                'id_pengizin' => $id_pengizin,
                'tujuan' => $tujuan,
                'keterangan' => $keterangan,
                'alasan' => $alasan,
                'id_siswa' => $id_siswa
            ]);

        $jumlahdata = count($params); 

        $this->session->set_flashdata('berhasil', 'Anda berhasil menambahkan data perizinan <strong>'.$nama_perizinan.'</strong> sejumlah <strong>'.$jumlahdata.' Santri </strong>');
        }

        $this->db->insert_batch('record_perizinan_pengasuhan', $params);
        redirect('pengasuhan/perizinan/tabel_perizinan');
    }

    /*
     * Listing of newest pelanggaran siswa
     */
    function tabel_perizinan()
    {
        $data['perizinan_siswa'] = $this->Perizinan_pengasuhan_model->get_tabel_perizinan_siswa();

        $data['_view'] = 'pengasuhan/perzinan/tabel_indeks_perizinan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengasuhan/perizinan/tabel_indeks_perizinan', $data);
        $this->load->view('template/footer', $data);
    }

    /*
     * Listing of filter pelanggaran siswa
     */
    function filter ()
    {

        $data['penghukumpengasuhan'] = $this->Kategori_model->get_penghukum_pengasuhan();
        $data['penghukumkeamanan'] = $this->Kategori_model->get_penghukum_keamanan();
        $data['rayon'] = $this->Kategori_model->get_rayon();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pengasuhan/filter/index_perizinan', $data);
        $this->load->view('template/footer');
    }

    /*
     * Function for Submit Filter Perkategori
     */
    function filterbykategori()
    {
        $nama_perizinan = $this->input->post('nama_perizinan');
        $tujuan = $this->input->post('tujuan_perizinan');
        $pengizin = $this->input->post('pengizin');
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $rayon = $this->input->post('rayon');

        $nilaiperizinan = $this->input->post('nilaiperizinan');
        $nilaitujuan = $this->input->post('nilaitujuan');
        $nilaipengizin = $this->input->post('nilaipengizin');
        $nilaitanggal = $this->input->post('nilaitanggal');
        $nilairayon = $this->input->post('nilairayon');
    
        if ($nilaiperizinan == 1) {
            $data['title'] = "Data Santri Yang Izin Perizinan $nama_perizinan";
            $data['datafilter'] =$this->Perizinan_pengasuhan_model->filter_by_perizinan($nama_perizinan);

            if (isset($data['datafilter']['id_siswa'])){
                $data['detail'] =$this->Siswa_model->detail_data($data['datafilter']['id_siswa']);
            };
    
            $this->load->view('pengasuhan/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilaitujuan == 1) {
            $data['title'] = "Data Santri Yang Izin Ke $tujuan";
            $data['datafilter'] =$this->Perizinan_pengasuhan_model->filter_by_tujuan($tujuan);
    
            $this->load->view('pengasuhan/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilaipengizin == 1) {
            $data['title'] = "Data Santri Yang Mendapat Izin Oleh $pengizin";
            $data['datafilter'] =$this->Perizinan_pengasuhan_model->filter_by_pengizin($pengizin);
    
            $this->load->view('pengasuhan/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilaitanggal == 1) {
            $data['title'] = "Data Santri Yang Izin Dari $tanggalawal Sampai $tanggalakhir" ;
            $data['datafilter'] =$this->Perizinan_pengasuhan_model->filter_by_tanggal($tanggalawal,$tanggalakhir);
    
            $this->load->view('pengasuhan/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilairayon == 1) {
            $data['title'] = "Data Santri Yang Izin Dari Rayon $rayon";
            $data['datafilter'] =$this->Perizinan_pengasuhan_model->filterperizinan_by_rayon($rayon);
    
            $this->load->view('pengasuhan/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }
    }


    //////////////////////////////////////////////////// FUNGSI UNTUK TABEL PELANGGARAN ////////////////////////////////////////////////////////////////

    /*
     * Function for Editing a pelanggaran santri
     */
    function edit_perizinan_tabel($id_perizinan)
    {   
        // check if the pelanggaran exists before trying to edit it
        $data['perizinan'] = $this->Perizinan_pengasuhan_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('pengizin','Pengizin','required');

            $id_perizinan = $data['perizinan']['id_perizinan'];
            $id_siswa = $data['perizinan']['id_siswa'];
            $data['detail'] = $this->Siswa_model->detail_data($id_siswa);
		
			if($this->form_validation->run())     
            {   
                $params = array(
                    'id_pengizin' => $this->input->post('pengizin'),
                    'tujuan' => $this->input->post('tujuan'),
                    'keterangan' => $this->input->post('keterangan'),
                );

                $nama_siswa = $this->input->post('nama_lengkap');

                $this->Perizinan_pengasuhan_model->update_perizinan($id_perizinan,$params);
                $this->session->set_flashdata('berhasil', 'Anda berhasil mengubah data Perizinan <strong>' . $nama_siswa . '</strong>' . ' menjadi <strong>' . $this->input->post('tujuan') . '</strong>');

                redirect(base_url('pengasuhan/perizinan/tabel_perizinan')) ;
            }
            else
            {
                $data['penghukumpengasuhan'] = $this->Kategori_model->get_penghukum_pengasuhan();
                $data['penghukumkeamanan'] = $this->Kategori_model->get_penghukum_keamanan();

                $data['_view'] = 'pengasuhan/perizinan/edit_perizinan';
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar',$data);
                $this->load->view('pengasuhan/perizinan/edit_perizinan_tabel',$data);
                $this->load->view('template/footer',$data);
            }
        }
        else
            show_error('The Perizinan Santri you are trying to edit does not exist.');
    } 

    /*
     * Function of hapus perizinan siswa
     */
    function hapus_perizinan_tabel($id_perizinan)
    {
        // check if the perizinan exists before trying to edit it
        $data['perizinan'] = $this->Perizinan_pengasuhan_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->Perizinan_pengasuhan_model->delete_perizinan($id_perizinan);
            $this->session->set_flashdata('hapus', 'Anda berhasil menghapus data perizinan <strong>' .  $data['perizinan']['nama_lengkap'] . '</strong>' . ' berupa <strong>' .  $data['perizinan']['nama_perizinan'] . '</strong>' );
            redirect(base_url('pengasuhan/perizinan/tabel_perizinan')) ;
        } else
        show_error('The siswa you are trying to delete does not exist.');
    }

}
