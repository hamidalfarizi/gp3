<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
 
class Kompetensi_dasar extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kompetensi_dasar_model');
        $this->load->model('Kelas_model');

        // cek user login
        check_login();
        set_tahun_aktif();
    } 

    /*
     * Listing of kompetensi_dasar
     */
    function index()
    {
        $data['kompetensi_dasar'] = $this->Kompetensi_dasar_model->get_all_kompetensi_dasar();
        $data['mapel'] = $this->Kompetensi_dasar_model->get_mapel();
        
        $data['_view'] = 'kompetensi_dasar/index';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kompetensi_dasar/index',$data);
        $this->load->view('template/footer');
    }

    /*
     * Adding a new kompetensi_dasar
     */
    function add()
    {   
        $id_mapel = $this->uri->segment(3);
        $data['mapel'] = $this->Kompetensi_dasar_model->get_id_mapel($id_mapel);
        // tampilkan kelas tingkat berdasarkan mapel yang diajarkan 
        $data['tingkat'] = $this->Kompetensi_dasar_model->get_kelas_tingkat($id_mapel);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kompetensi_dasar/add',$data);
        $this->load->view('template/footer');
    }  

    function simpan()
    {
        $params = [
            'id_tahun' => $_SESSION['id_tahun_pelajaran'],
            'id_mapel' => $this->input->post('id_mapel'),
            'tingkat'  => $this->input->post('tingkat'),
            'id_guru' => user_info()['id_guru'],
            'jenis'  => $this->input->post('jenis'),
            'kd' => $this->input->post('kd')
        ];

        $this->Kompetensi_dasar_model->add_kompetensi_dasar($params);
        redirect('kompetensi_dasar');
    }

    /*
     * Editing a kompetensi_dasar
     */
    function edit($id)
    {   
        // check if the kompetensi_dasar exists before trying to edit it
        $data['kompetensi_dasar'] = $this->Kompetensi_dasar_model->get_kompetensi_dasar($id);    
        $data['mapel'] = $this->Kompetensi_dasar_model->get_id_mapel($data['kompetensi_dasar']['id_mapel']);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kompetensi_dasar/edit',$data);
        $this->load->view('template/footer');
    } 

    function simpan_edit($id)
    {
        $kd = $this->input->post('kd');
        $params = ['kd' => $kd];
        $this->Kompetensi_dasar_model->update_kompetensi_dasar($id,$params);
        redirect('kompetensi_dasar');
    }

    /*
     * Deleting kompetensi_dasar
     */
    function remove($id)
    {
        $kompetensi_dasar = $this->Kompetensi_dasar_model->get_kompetensi_dasar($id);

        // check if the kompetensi_dasar exists before trying to delete it
        if(isset($kompetensi_dasar['id']))
        {
            $this->Kompetensi_dasar_model->delete_kompetensi_dasar($id);
            redirect('kompetensi_dasar/index');
        }
        else
            show_error('The kompetensi_dasar you are trying to delete does not exist.');
    }

    // download kd
    function download($id)
    {
        $mapel = $this->Kompetensi_dasar_model->get_id_mapel($id);
        $kd = $this->Kompetensi_dasar_model->get_kd($id, null, null);
        $tingkat = $this->Kelas_model->get_all_kelas();

        $nama_user = user_info()['first_name'];
        
        $helper = new Sample();
        if ($helper->isCli()) {
            $helper->log('This example should only be run from a Web Browser' . PHP_EOL);
            return;
        }
        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('Teguh Permadi')
            ->setLastModifiedBy($nama_user)
            ->setTitle('Office 2007 XLSX Download Nilai Sikap')
            ->setSubject('Office 2007 XLSX Download Nilai Sikap')
            ->setDescription('Download Nilai Sikap for Office 2007 XLSX, generated using PHP classes.')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Siakad Excel');

        // Add some data for file name
        $filename = '"Kompetensi Dasar '.$mapel['nama'].' oleh '.user_info()['first_name'].' '.user_info()['last_name'].'.xlsx"';

        // setting sheet
        $sheet1 = 'Kompetensi Dasar';
        $myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, $sheet1);
        $spreadsheet->addSheet($myWorkSheet);

        // Retrieve the worksheet called 'Worksheet 1'
        $spreadsheet->getSheetByName($sheet1);

        $sheet2 = 'Kelas';
        $myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, $sheet2);
        $spreadsheet->addSheet($myWorkSheet);

        // Retrieve the worksheet called 'Worksheet 1'
        $spreadsheet->getSheetByName($sheet2);

        // hapus default worksheet karena tidak di gunakan
        $sheetIndex = $spreadsheet->getIndex(
            $spreadsheet->getSheetByName('Worksheet')
        );
        $spreadsheet->removeSheetByIndex($sheetIndex);
        
        // tuliskan data untuk bagian identitas dan petunjuk
        $identitas = [
            ['Kompetensi Dasar Mata Pelajaran '.$mapel['nama'], null, null],
            ['Tahun Pelajaran '. $_SESSION['tahun']. ' Semester '.$_SESSION['semester'], null, null],
            ['Oleh '.user_info()['first_name'].' '.user_info()['last_name'], null, null],
            [null, null, null],
            ['Petunjuk Pengisian:', null, null],
            ['1. Isilah kolom Tingkat dengan jenjang tingkatan kelas yang ada, lihat jenjang tingkatan kelas pada sheet Kelas',null, null],
            ['2. Isilah kolom Jenis dengan kata pengetahuan atau keterampilan',null, null],
            ['3. Isilah kolom Deskripsi KD dengan deskripsi komptensi dasar sesuai dengan yang diinginkan',null, null],
            [null, null, null],
            ['tingkat', 'jenis', 'Deskripsi KD'],
        ];

        // masukan data array identitas ke dalam cell pada sheet 1
        $spreadsheet->getSheet(0)
        ->fromArray(
            $identitas,  // The data to set
            NULL,        // Array values with this value will not be set
            'A1'         // Top left coordinate of the worksheet range where
                            //    we want to set these values (default is A1)
        );

        // cek kd nya jika ada
        if(!empty($kd)){
            // masukan data semua kd yang ada
            // hapus element kd yang tidak diperlukan
            foreach ($kd as $key => $subArr) {
                unset($subArr['id']);
                unset($subArr['id_tahun']);
                unset($subArr['id_mapel']);
                unset($subArr['id_guru']);
                $data[$key] = $subArr;  
            }
        } else {
            // jika kd nya tidak ada isi dengan array kosong
            $data = array();
        }
        
        // masukan data kd ke dalam cell pada sheet 1
        $spreadsheet->getSheet(0)
        ->fromArray(
            $data,
            null,
            'A11'
        );

        // format cell agar lebih indah pada sheet 1
        $spreadsheet->getActiveSheet()->getStyle('A1:A3')
            ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);
        $spreadsheet->getActiveSheet()->getStyle('A1:A3')
            ->getFont()->setSize(16);
        $spreadsheet->getActiveSheet()->getStyle('A1:A3')
            ->getFont()->setBold(true);
        
        $spreadsheet->getActiveSheet()->getStyle('A5:A8')
            ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLUE);
        

        // masukan data header kelas pada sheet Kelas
        $header_kelas = ['Nama Kelas', 'Kode Kelas', 'Tingkat'];
        $spreadsheet->getSheet(1)
        ->fromArray(
            $header_kelas,
            null,
            'A1'
        );

        // cek kelas nya jika ada
        if(!empty($tingkat)){
            // masukan data semua kd yang ada
            // hapus element kd yang tidak diperlukan
            foreach ($tingkat as $key => $subArr) {
                unset($subArr['id']);
                $data_tingkat[$key] = $subArr;  
            }
        } else {
            // jika kd nya tidak ada isi dengan array kosong
            $data_tingkat = array();
        }

        // masukan data kelas pada sheet kelas
        $spreadsheet->getSheet(1)
        ->fromArray(
            $data_tingkat,
            null,
            'A2'
        );
        
        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename='.$filename);
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        ob_end_clean();
        $writer->save('php://output');
    }

    // upload kd
    function do_upload()
    {
        $id_tahun = $_SESSION['id_tahun_pelajaran'];
        $id_mapel = $this->input->post('id_mapel');
        $id_guru = user_info()['id_guru'];
        $nama_mapel = $this->input->post('nama_mapel');

        $file_ext = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'xlsx|xls|csv';
        $config['overwrite']             = true;
        $config['file_name']             = 'kompetensi_dasar_by_userId_'.user_info()['user_id'];

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                // print_r($data['upload_data']['orig_name']);
                // exit;
                $helper = new Sample();
                $inputFileName = 'uploads/kompetensi_dasar_by_userId_'.user_info()['user_id'].'.'.$file_ext;
                $helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory to identify the format');
                $spreadsheet = IOFactory::load($inputFileName);
                $sheetData = $spreadsheet->getSheet(0)->toArray(null, true, true, true);
                $highestRow = $spreadsheet->getSheet(0)->getHighestRow();
                
                // print_r($sheetData);
                // exit;
                // hitung jumlah data yang di upload
                $jumlahData = $highestRow - 10;
                $dataAwal = array();
                foreach($sheetData as $s) 
                {
                        array_push($dataAwal, array(
                            'id_tahun' => $id_tahun,
                            'id_mapel' => $id_mapel,
                            'tingkat' => $s['A'],
                            'id_guru' => $id_guru,
                            'jenis' => $s['B'],
                            'kd' => $s['C'],
                        ));
                }
                array_filter($dataAwal);
                // $dataAwal membaca semua data yang ada di excel termasuk nama kolom
                // $dataAkhir membaca $dataAwal dari array urutan ke 2
                $dataAkhir = array_slice($dataAwal, 10);
                // print_r($dataAkhir);
                // exit;
                if(!empty($dataAkhir)){
                    $this->session->set_flashdata('berhasil_upload', 'Anda berhasil mengunggah <strong>'.$jumlahData.' data kompetensi dasar mata pelajaran '.$nama_mapel.'.</strong>');
                    
                    $this->db->insert_on_duplicate_update_batch('kompetensi_dasar', $dataAkhir);
                } else {
                    $this->session->set_flashdata('warning', 'Anda berhasil mengunggah <strong>'.$jumlahData.' data kompetensi dasar mata pelajaran '.$nama_mapel.'.</strong>');
                }
                unlink($inputFileName);
                redirect('kompetensi_dasar');
                
        }

    }

    function cetak($id){
        $data['mapel'] = $this->Kompetensi_dasar_model->get_id_mapel($id);
        $data['tingkat'] = $this->Kompetensi_dasar_model->get_tingkat($id);

        $this->load->view('template/header');
        // $this->load->view('template/sidebar');
        $this->load->view('kompetensi_dasar/cetak',$data);
        // $this->load->view('template/footer');
    }
}
