<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Protection;

class Nilai_sikap extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
        $this->load->model('Nilai_sikap_model');
        $this->load->model('Kelas_model');
        // cek user login
        check_login();
    }
    
    public function index()
    {
        $data['kelas'] = $this->Nilai_sikap_model->get_kelas();
        // cek apakah guru tersebut walikelas
        if(user_info()['is_walikelas'] == 'yes'){
            $data['walikelas'] = $this->Nilai_sikap_model->get_walikelas();
        }
        // print_r($data['walikelas']);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('nilai_sikap/index', $data);
        $this->load->view('template/footer');
    }

    // lakukan penilaian pada kelas yang diajar
    public function do_nilai($id_kelas)
    {
        $data['siswa'] = $this->Nilai_sikap_model->get_siswa($id_kelas);
        $data['kelas'] = $this->Nilai_sikap_model->get_kelas_by_id($id_kelas);
        $data['id_kelas'] = $id_kelas;

        // print_r(count($data['siswa']));
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('nilai_sikap/do_nilai', $data);
        $this->load->view('template/footer');
    }

    // simpan hasil penilaian
    public function simpan_lama()
    {
        $id_siswa = $this->input->post('id_siswa[]');
        $id_guru = user_info()['id_guru'];
        $nilai = $this->input->post('nilai[]');
        $id_tahun=$_SESSION()['id_tahun_pelajaran'];
        $data = array();
        $i=0;
        foreach($id_siswa as $datanis)
        {
            array_push($data, array(
                'id_siswa'=>$datanis,
                'id_tahun' => $id_tahun[$i],
                'id_guru' => $id_guru[$i],
                'nilai' => $nilai[$i],
            )); $i++;
        }

        $this->db->update_batch('nilai_sikap', $data);
        redirect('nilai_sikap');
    }
 //SIMPAN BARU
 
 public function simpan(){    // Ambil data yang dikirim dari form    
 $nis = $_POST['id_siswa']; // Ambil data  nis dan masukkan ke variabel nis    
 $nilai = $_POST['nilai']; // Ambil data nama dan masukkan ke variabel nama    
 $id_guru = user_info('id_guru'); 
 $id_tahun=$_SESSION['id_tahun_pelajaran'];
 $data = array();        
 $index = 0; // Set index array awal dengan 0    
 foreach($nis as $datanis){ 
   //   if($nis['id_siswa'] == 0 ) .and. ($nis['id_tahun_pelajaran']==0) .and. ($nis['id_guru']==0 ){ 
	//		$data_nol[] = $datanis;
	//	}else{
	//		$data_positif[]=$nis;
	//	}		
//	}
//	if($this->db->insert_batch('nilai_sikap', $data_nol) &&
//	$this->db->update_batch('nilai_sikap', $data_positif, 'id_siswa')){
//		return true;
//	}
//	return false;
//}
  
 // Kita buat perulangan berdasarkan nis sampai data terakhir      
 array_push($data, array('id_siswa'=>$datanis,
 							'nilai'=>$nilai[$index],  // Ambil dan set data nama sesuai index array dari $index 
 							'id_guru'=>user_info()['id_guru'],  // Ambil dan set data telepon sesuai index array dari $index  
 							'id_tahun'=>$id_tahun,  // Ambil dan set data alamat sesuai index array dari $index    
 							
							 ));            
 $index++;  
 }        
// $sql= $this->Nilai_sikap_model>update_batch($data);
 $sql = $this->Nilai_sikap_model->save_batch($data);
         
 
  // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)        
 // Cek apakah query insert nya sukses atau gagal    
 if($sql){ // Jika sukses      
 echo "<script>alert('Data Nilai berhasil disimpan');window.location = '".base_url('index.php/nilai_sikap')."';</script>";    
 }else{ // Jika gagal      
echo "<script>alert('Data Nilai gagal disimpan');window.location = '".base_url('index.php/nilai_sikap/form')."';</script>";    
}  
}
 
 
 
 //BATAS BARU
 
 
    // cek nilai rombel walikelas
    public function cek_nilai_walikelas()
    {
        $data_kelas = [];
        $kelas = $this->Nilai_sikap_model->get_walikelas();
        foreach ($kelas as $k) {
            $cek = $this->Nilai_sikap_model->cek_nilai_siswa($k['id_kelas']);
            $data_nya = array(
                'id_kelas' => $k['id_kelas'],
                'datanya' => [
                    'jumlah' => $cek['jumlah'],
                    'sudah_dinilai' => $cek['sudah_dinilai'],
                    'belum_dinilai' => $cek['belum_dinilai'],
                ]
            );
            array_push($data_kelas, $data_nya);
        }
        header('Content-Type: application/json');
        echo json_encode($data_kelas);
    }

    // cek nilai kelas yang diajar
    public function cek_nilai()
    {
        $data_kelas = [];
        $kelas = $this->Nilai_sikap_model->get_kelas();
        foreach ($kelas as $k) {
            $cek = $this->Nilai_sikap_model->cek_nilai_siswa($k['id_kelas']);
            $data_nya = array(
                'id_kelas' => $k['id_kelas'],
                'datanya' => [
                    'jumlah' => $cek['jumlah'],
                    'sudah_dinilai' => $cek['sudah_dinilai'],
                    'belum_dinilai' => $cek['belum_dinilai'],
                ]
            );
            array_push($data_kelas, $data_nya);
        }
        header('Content-Type: application/json');
        echo json_encode($data_kelas);
    }

    // download file excel
    public function download()
    {
        $id_kelas = $this->uri->segment(3);
        
        $nama_user = user_info()['first_name'];
        $id_guru = user_info()['id_guru'];
        
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

        // Add some data
        $data_siswa = $this->Nilai_sikap_model->get_siswa($id_kelas);
        $jml_siswa_kelas = count($data_siswa) + 7; // digunakan untuk proteksi cell
        $data_kelas = $this->Kelas_model->get_kelas($id_kelas);
        $filename = '"Nilai Sikap Kelas '.$data_kelas['nama'].' oleh '.user_info()['first_name'].' '.user_info()['last_name'].'.xlsx"';

        // rapikan dulu datanya
        $siswa = [];
        foreach($data_siswa as $ds){
            array_push($siswa, [
                'nama_siswa' => $ds['nama_siswa'],
                'id_tahun' => $_SESSION['id_tahun_pelajaran'],
                'id_guru' => user_info()['id_guru'],
                'id_kelas' => $id_kelas,
                'id_siswa' => $ds['id_siswa'],
                'nilai' => $ds['nilai']
            ]);
        }
        ## Setting a range of cells from an array
        $identitas = [
            // tulis identitas tahun pelajaran, guru, dan kelas
            ['Tahun Pelajaran', null, null, null, null, $_SESSION['tahun']],
            ['Semester', null, null, null, null, $_SESSION['semester']],
            ['Nama Guru', null, null, null, null, user_info()['first_name'].' '.user_info()['last_name']],
            ['Kelas yang dinilai',  null, null, null, null, $data_kelas['nama']],
            ['Jenis Penilaian',  null, null, null, null, 'Penilaian Sikap'],
            [null,  null, null, null, null, null,],
            ['Nama Siswa', 'id_tahun', 'id_guru', 'id_kelas', 'id_siswa', 'Nilai']
        ];

        $data = array_merge($identitas, $siswa);
        
        // keterangan dalam file excel
        $data_keterangan = [
            ['Keterangan'],
            ['4', 'Sangat Baik'],
            ['3', 'Baik'],
            ['2', 'Cukup'],
            ['1', 'Kurang Baik'],
        ];

        // tuliskan array ke dalam excel
        $spreadsheet->getActiveSheet()
            ->fromArray(
                $data,  // The data to set
                NULL,        // Array values with this value will not be set
                'A1'         // Top left coordinate of the worksheet range where
                             //    we want to set these values (default is A1)
            );

         $spreadsheet->getActiveSheet()
            ->fromArray(
                $data_keterangan,  // The data to set
                NULL,        // Array values with this value will not be set
                'J1'         // Top left coordinate of the worksheet range where
                             //    we want to set these values (default is A1)
            );

        // rubah ukuran kolom A
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);

        // sembunyikan kolom 
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setVisible(false);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setVisible(false);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setVisible(false);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setVisible(false);

        // proteksi cell
        $spreadsheet->getActiveSheet()
            ->getProtection()->setPassword('PhpSpreadsheet');
        $spreadsheet->getActiveSheet()->getProtection()->setSheet(true);
        $spreadsheet->getActiveSheet()
            ->getStyle('F8:F'.$jml_siswa_kelas) // proteksi cell mulai dari baris ke 8 sampai jumlah siswanya + 8
            ->getProtection()->setLocked(
                Protection::PROTECTION_UNPROTECTED
            );

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Nilai Sikap');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

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

    public function do_upload()
    {
        $file_ext = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'xlsx|xls|csv';
        $config['overwrite']             = true;
        $config['file_name']             = 'nilai_sikap';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            
            $helper = new Sample();
            $inputFileName = 'uploads/nilai_sikap.'.$file_ext;
            $helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory to identify the format');
            $spreadsheet = IOFactory::load($inputFileName);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();
            
            // hitung jumlah data yang di upload
            $jumlahData = $highestRow - 7;
            $dataAwal = array();
            foreach($sheetData as $s) 
            {
                array_push($dataAwal, array(
                    'id_tahun' => $s['B'],
                    'id_guru' => $s['C'],
                    'id_kelas' => $s['D'],
                    'id_siswa' => $s['E'],
                    'nilai' => $s['F']
                ));
            }
            
            // $dataAwal membaca semua data yang ada di excel termasuk nama kolom
            // $dataAkhir membaca $dataAwal dari array urutan ke 7
            $dataAkhir = array_slice($dataAwal, 7);

            // cek dulu isi dari file excel yg di upload
            // data file excel harus sesuai dengan data tahun pelajaran, guru, kelas
            $id_tahun_diexcel = $dataAkhir[0]['id_tahun'];
            $id_guru_diexcel = $dataAkhir[0]['id_guru'];
            $id_kelas_diexcel = $dataAkhir[0]['id_kelas'];

            $id_tahun = $_SESSION['id_tahun_pelajaran'];
            $id_guru = user_info()['id_guru'];
            $id_kelas = $_POST['id_kelas'];
            
            if($id_tahun_diexcel == $id_tahun && $id_guru_diexcel == $id_guru && $id_kelas_diexcel == $id_kelas){
                // $this->session->set_flashdata('berhasil_upload', 'Anda berhasil mengunggah <strong>'.$jumlahData.' data guru.</strong>');
                $this->db->insert_on_duplicate_update_batch('nilai_sikap', $dataAkhir);
                redirect('nilai_sikap');
                // echo 'benar';
            } else {
                echo 'File excel salah!';
            };

            // hapus jika sudah di upload
            unlink($inputFileName);
        }
    }

    // cetak penilaian
    public function cetak($id_kelas)
    {
        $data['siswa'] = $this->Nilai_sikap_model->get_siswa($id_kelas);
        $data['kelas'] = $this->Nilai_sikap_model->get_kelas_by_id($id_kelas);
        $data['id_kelas'] = $id_kelas;

        // print_r(count($data['siswa']));
        $this->load->view('template/header');
        $this->load->view('nilai_sikap/cetak', $data);
        $this->load->view('template/footer');
    }
}