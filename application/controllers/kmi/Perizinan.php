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
        $this->load->model('Perizinan_kmi_model');

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

        $data['_view'] = 'kmi/perizinan/index';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kmi/perizinan/index', $data);
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
                $data['datafilter'] =$this->Perizinan_kmi_model->filter_by_id_siswa($id);
                $data['detail'] =$this->Siswa_model->detail_data($id);
             
                $data['_view'] = 'kmi/perizinan/detail';
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('kmi/perizinan/detail', $data);
                $this->load->view('template/footer', $data);
        } else
        show_error('The siswa you are trying to edit does not exist.');
    }

    /*
     * Function for input perizinan siswa
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
                $kategori = $this->input->post('kategori');
                $keterangan = $this->input->post('keterangan');
                        
                $data = array(
                    'id_siswa' => $id_siswa,
                    'id_pengizin' => $id_pengizin,
                    'nama_perizinan' => $nama_perizinan,
                    'kategori' => $kategori,
                    'keterangan' => $keterangan,
                );
                    
        
                $this->Perizinan_kmi_model->tambah_perizinan($data);
                $this->session->set_flashdata('berhasil', 'Anda berhasil menambahkan data perizinan <strong>' . $nama_lengkap . '</strong>' . ' berupa <strong>' . $nama_perizinan . '</strong>' );
                redirect('kmi/perizinan');
            }
            else
            {
                
                $data['perizinanpiket'] = $this->Kategori_model->get_perizinan_piket();
                $data['perizinanpanitia'] = $this->Kategori_model->get_perizinan_panitia();
                $data['perizinansakit'] = $this->Kategori_model->get_perizinan_sakit();
                $data['perizinanlain'] = $this->Kategori_model->get_perizinan_lainlain();
                $data['stafkmi'] = $this->Kategori_model->get_staf_kmi();
               
                $data['_view'] = 'kmi/perizinan/input_perizinan';
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('kmi/perizinan/input_perizinan', $data);
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
        $data['perizinan'] = $this->Perizinan_kmi_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('pengizin','Pengizin','required');

            $id_perizinan = $data['perizinan']['id_perizinan'];
            $id_siswa = $data['perizinan']['id_siswa'];
            $data['detail'] = $this->Siswa_model->detail_data($id_siswa);
		
			if($this->form_validation->run())     
            {   
                $id_siswa =  $this->input->post('id_siswa');
                $id_pengizin = $this->input->post('pengizin');
                $nama_lengkap = $this->input->post('nama_lengkap');
                $nama_perizinan = $this->input->post('nama_perizinan');
                $kategori = $this->input->post('kategori');
                $keterangan = $this->input->post('keterangan');

                $params = array(
                    'id_siswa' => $id_siswa,
                    'id_pengizin' => $id_pengizin,
                    'nama_perizinan' => $nama_perizinan,
                    'kategori' => $kategori,
                    'keterangan' => $keterangan,
                );
                
                $this->Perizinan_kmi_model->update_perizinan($id_perizinan,$params);
                $this->session->set_flashdata('berhasil', 'Anda berhasil mengubah data perizinan <strong>' . $nama_lengkap . '</strong>' . ' menjadi <strong>' . $nama_perizinan . '</strong>');

                redirect(base_url('kmi/perizinan/detail/' . $id_siswa)) ;
            }
            else
            {
                $data['perizinanpiket'] = $this->Kategori_model->get_perizinan_piket();
                $data['perizinanpanitia'] = $this->Kategori_model->get_perizinan_panitia();
                $data['perizinansakit'] = $this->Kategori_model->get_perizinan_sakit();
                $data['perizinanlain'] = $this->Kategori_model->get_perizinan_lainlain();
                $data['stafkmi'] = $this->Kategori_model->get_staf_kmi();

                $data['_view'] = 'kmi/perizinan/edit_perizinan';
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar',$data);
                $this->load->view('kmi/perizinan/edit_perizinan',$data);
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
        $data['perizinan'] = $this->Perizinan_kmi_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->Perizinan_kmi_model->delete_perizinan($id_perizinan);
            $this->session->set_flashdata('hapus', 'Anda berhasil menghapus data perizinan <strong>' .  $data['perizinan']['nama_lengkap'] . '</strong>' . ' berupa <strong>' .  $data['perizinan']['nama_perizinan'] . '</strong>' );
            redirect(base_url('kmi/perizinan/detail/' . $data['perizinan']['id_siswa'])) ;
        } else
        show_error('The siswa you are trying to delete does not exist.');
    }
    
    /*
     * Function of print pdf perizinan siswa
     */
    function print()
    {
        $id_siswa = $this->input->post('id_siswa');
        $filterid = $this->input->post('print');

        if ($filterid == 1) {
            $data['datafilter'] =$this->Perizinan_kmi_model->filter_by_id_siswa($id_siswa);
            $data['detail'] =$this->Siswa_model->detail_data($id_siswa);
        
            $data['_view'] = 'perizinan/detail';
 
            $this->load->view('kmi/perizinan/print_laporan', $data);
            $this->load->view('template/footer', $data);
        }
    }

    /*
     * Listing of form Filter perizinan siswa
     */
    function form_filter_tanggal ()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kmi/perizinan/form_filter_tanggal');
        $this->load->view('template/footer');
    }
   
    /*
     * Function of Submit form Filter perizinan siswa
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

            $data['datapiketrayon'] =$this->Perizinan_kmi_model->count_piket_rayon($tanggalawal,$tanggalakhir);
            $data['datasakit'] =$this->Perizinan_kmi_model->count_sakit($tanggalawal,$tanggalakhir);
    
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('kmi/perizinan/print_grafik', $data);
            $this->load->view('template/footer', $data);
    
        }
    }

     /*
     * Listing Of Input Massal
     */
    function input_massal()
    {   
        $data['siswa'] = $this->Siswa_model->get_aktif_siswa();

        $data['perizinanpiket'] = $this->Kategori_model->get_perizinan_piket();
        $data['perizinanpanitia'] = $this->Kategori_model->get_perizinan_panitia();
        $data['perizinansakit'] = $this->Kategori_model->get_perizinan_sakit();
        $data['perizinanlain'] = $this->Kategori_model->get_perizinan_lainlain();
        $data['stafkmi'] = $this->Kategori_model->get_staf_kmi();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('kmi/perizinan/input_massal',$data);
        $this->load->view('template/footer',$data);
    }
    
     /*
     * Function for Submit Input Massal
     */
    function simpan_massal()
    {
        $result = $this->input->post('id_siswa[]');
        $params = array();
        
        $id_pengizin = $this->input->post('pengizin');
        $nama_perizinan = $this->input->post('nama_perizinan');
        $kategori = $this->input->post('kategori');
        $keterangan = $this->input->post('keterangan');

        foreach($result as $result){
          
            $id_siswa = $result;

            array_push($params, [
                'nama_perizinan' => $nama_perizinan,
                'id_pengizin' => $id_pengizin,
                'kategori' => $kategori,
                'keterangan' => $keterangan,
                'id_siswa' => $id_siswa
            ]);

        $jumlahdata = count($params); 
        $this->session->set_flashdata('berhasil', 'Anda berhasil menambahkan data perizinan <strong>'.$nama_perizinan.'</strong> sejumlah <strong>'.$jumlahdata.' Santri </strong>');
        }

        $this->db->insert_batch('record_perizinan_kmi', $params);
        redirect('kmi/perizinan/tabel_perizinan');
    }

    /*
     * Listing of newest perizinan siswa
     */
    function tabel_perizinan()
    {
        $data['perizinan_siswa'] = $this->Perizinan_kmi_model->get_tabel_perizinan_siswa();

        $data['_view'] = 'kmi/perizinan/tabel_indeks_perizinan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kmi/perizinan/tabel_indeks_perizinan', $data);
        $this->load->view('template/footer', $data);
    }

    /*
     * Listing of filter perizinan siswa
     */
    function filter ()
    {
        $data['stafkmi'] = $this->Kategori_model->get_staf_kmi();
        $data['rayon'] = $this->Kategori_model->get_rayon();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kmi/filter/index_perizinan', $data);
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
            $data['datafilter'] =$this->Perizinan_kmi_model->filter_by_perizinan($nama_perizinan);

            if (isset($data['datafilter']['id_siswa'])){
                $data['detail'] =$this->Siswa_model->detail_data($data['datafilter']['id_siswa']);
            };
    
            $this->load->view('kmi/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilaitujuan == 1) {
            $data['title'] = "Data Santri Yang Izin Ke $tujuan";
            $data['datafilter'] =$this->Perizinan_kmi_model->filter_by_tujuan($tujuan);
    
            $this->load->view('kmi/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilaipengizin == 1) {
            $data['title'] = "Data Santri Yang Mendapat Izin Oleh $pengizin";
            $data['datafilter'] =$this->Perizinan_kmi_model->filter_by_pengizin($pengizin);
    
            $this->load->view('kmi/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilaitanggal == 1) {
            $data['title'] = "Data Santri Yang Izin Dari $tanggalawal Sampai $tanggalakhir" ;
            $data['datafilter'] =$this->Perizinan_kmi_model->filter_by_tanggal($tanggalawal,$tanggalakhir);
    
            $this->load->view('kmi/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }

        if ($nilairayon == 1) {
            $data['title'] = "Data Santri Yang Izin Dari Rayon $rayon";
            $data['datafilter'] =$this->Perizinan_kmi_model->filterperizinan_by_rayon($rayon);
    
            $this->load->view('kmi/filter/print_laporan_perizinan', $data);
            $this->load->view('template/footer', $data);
    
        }
    }


    //////////////////////////////////////////////////// FUNGSI UNTUK TABEL PERIZINAN ////////////////////////////////////////////////////////////////

    /*
     * Function for Editing a perizinan santri
     */
    function edit_perizinan_tabel($id_perizinan)
    {   
        // check if the perizinan exists before trying to edit it
        $data['perizinan'] = $this->Perizinan_kmi_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('pengizin','Pengizin','required');

            $id_perizinan = $data['perizinan']['id_perizinan'];
            $id_siswa = $data['perizinan']['id_siswa'];
            $data['detail'] = $this->Siswa_model->detail_data($id_siswa);
		
			if($this->form_validation->run())     
            {   
                $id_siswa =  $this->input->post('id_siswa');
                $id_pengizin = $this->input->post('pengizin');
                $nama_lengkap = $this->input->post('nama_lengkap');
                $nama_perizinan = $this->input->post('nama_perizinan');
                $kategori = $this->input->post('kategori');
                $keterangan = $this->input->post('keterangan');

                $params = array(
                    'id_siswa' => $id_siswa,
                    'id_pengizin' => $id_pengizin,
                    'nama_perizinan' => $nama_perizinan,
                    'kategori' => $kategori,
                    'keterangan' => $keterangan,
                );
                
                $this->Perizinan_kmi_model->update_perizinan($id_perizinan,$params);
                $this->session->set_flashdata('berhasil', 'Anda berhasil mengubah data perizinan <strong>' . $nama_lengkap . '</strong>' . ' menjadi <strong>' . $nama_perizinan . '</strong>');

                redirect(base_url('kmi/perizinan/tabel_perizinan')) ;
            }
            else
            {
                $data['perizinanpiket'] = $this->Kategori_model->get_perizinan_piket();
                $data['perizinanpanitia'] = $this->Kategori_model->get_perizinan_panitia();
                $data['perizinansakit'] = $this->Kategori_model->get_perizinan_sakit();
                $data['perizinanlain'] = $this->Kategori_model->get_perizinan_lainlain();
                $data['stafkmi'] = $this->Kategori_model->get_staf_kmi();

                $data['_view'] = 'kmi/perizinan/edit_perizinan_tabel';
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar',$data);
                $this->load->view('kmi/perizinan/edit_perizinan_tabel',$data);
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
        $data['perizinan'] = $this->Perizinan_kmi_model->get_perizinan($id_perizinan);

        if(isset($data['perizinan']['id_perizinan']))
        {
            $this->Perizinan_kmi_model->delete_perizinan($id_perizinan);
            $this->session->set_flashdata('hapus', 'Anda berhasil menghapus data perizinan <strong>' .  $data['perizinan']['nama_lengkap'] . '</strong>' . ' berupa <strong>' .  $data['perizinan']['nama_perizinan'] . '</strong>' );
            redirect(base_url('kmi/perizinan/tabel_perizinan')) ;
        } else
        show_error('The siswa you are trying to delete does not exist.');
    }


    //////////////////////////////////////////////////// JS ////////////////////////////////////////////////////////////////

    /*
     * Javasript autofill Kategori Perizinan
     */
    function fill_kategori_perizinan(){
        $nama_perizinan = $_POST['nama_perizinan'];
        $s = "SELECT * FROM tb_perizinan_kmi WHERE nama_perizinan='$nama_perizinan'";

        $res = $this->db->query($s)->row_array();
        echo json_encode($res);
    }
}