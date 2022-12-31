<?php


function is_logged()
{
    $ci = &get_instance();
    if ($ci->session->userdata('logged') != true) {
        redirect('Frontend', 'refresh');
    }
}


function sf_upload($nama_gambar, $lokasi_gambar, $tipe_gambar, $ukuran_gambar, $name_file_form) {
    $Ci                      = &get_instance();
    $nmfile                  = $nama_gambar . "_" . time();
    $config['upload_path']   = './' . $lokasi_gambar;
    $config['allowed_types'] = $tipe_gambar;
    $config['max_size']      = $ukuran_gambar;
    $config['file_name']     = $nmfile;
    $Ci->upload              = null;
    $Ci->load->library('upload', $config);
    // $Ci->upload->do_upload($name_file_form);
    // $result1 = $Ci->upload->data();
    // $result  = array('gambar' => $result1);
    // $dfile   = $result['gambar']['file_name'];

    // return $dfile;

}

function is_allow($acs)
{
    $ci      = &get_instance();
    $lvl  = $_SESSION['level'];
    $isallow = $ci->db->query("SELECT * FROM user_access as aa inner join master_access as bb on aa.kd_access=bb.id WHERE bb.nm_access='$acs' and aa.id_group='$lvl'")->row();
    
    if ($isallow != []) {
        if ($isallow->is_allow == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

}

function get_data_kategori($for_modul)
{

    $ci                   = &get_instance();
    $data_ref_jenis_rapat = $ci->db
        ->where('for_modul', $for_modul)
        ->get('kategori')->result_array();
    $ref_kategori = array();
    foreach ($data_ref_jenis_rapat as $v) {
        $ref_kategori[$v['id_kat']] = $v['cat_name'];
    }
    return $ref_kategori;
}

//app e.usaha: tabel kategori_val
function get_kategori_val($for_modul)
{

    $ci                   = &get_instance();
    $data_ref_jenis_rapat = $ci->db
        ->where('for_modul', $for_modul)
        ->get('kategori')->result_array();
    $ref_kategori = array();
    foreach ($data_ref_jenis_rapat as $v) {
        $ref_kategori[$v['id_kat']] = $v['cat_name'];
    }
    return $ref_kategori;
}


function get_combo($tbl,$id,$nm,$add_opt)
{

    $ci = &get_instance();
    $data = $ci->db->get($tbl)->result_array();
    $res = array();
    $res = $add_opt;
    foreach ($data as $v) {
        $res[$v[$id]] = $v[$nm];
    }
    return $res;

}

function data_app($id = 'APP_NAME')
{
    $ci            = &get_instance();
    $data_instansi = $ci->db->query("SELECT conf_val FROM sy_config WHERE conf_name='$id'")->row();

    if ($data_instansi != []) {
       return $data_instansi->conf_val;
    } else {
        return "";
    }
    
}

function layout($l = 'back')
{
    if ($l == 'front') {
        return "layout_frontend";
    } else {
        return "layout_backend";
    }
}

function cek_session_akses($link, $id)
{
    $ci      = &get_instance();
    $session = $ci->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    if ($session == '0' and $ci->session->userdata('level') != 'admin') {
        redirect(base_url() . 'administrator/home');
    }
}

function get_data_users()
{
    $ci = &get_instance();
    $ci->db->select('*')
        ->where_in('level', array('2', '3'))
        ->where('isactive', 1);
    $data_users_disposisi = $ci->db->get('users')->result_array();
    $users_disposisi      = array();
    foreach ($data_users_disposisi as $v) {
        $users_disposisi[$v['id_user']] = $v['fullname'];
    }
    return $users_disposisi;
}

function get_numrows($tbl)
{
    $ci = &get_instance();
    $ci->db->select('*');
    $total_row = $ci->db->get($tbl)->num_rows();
    return $total_row;
}

function activate_menu($controller, $by = 'c')
{
    //c=controller, f=method/function
    // Getting CI class instance.
    $CI = get_instance();
    // Getting router class to active.
    if ($by == 'c') {
        $class = $CI->router->fetch_class();
    } elseif ($by == 'f') {
        $class = $CI->router->fetch_method();
    }
    return ($class == $controller) ? 'active' : '';
}

function format_rupiah($number)
{

    return 'Rp ' . number_format($number);
}

function formatBytes($size, $precision = 2)
{
    $base     = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');

    return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}

function lookup()
{?>
<div class="modal" id="lookup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                        &times;
                    </span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1><i class="fa fa-refresh"></i></h1>
                </div>
            </div>
        </div>
    </div>
<?php }


function nama_hari($day){
$dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
);

return $dayList[$day];
}

function tanggal_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tahun
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tanggal
 
    echo $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function GenerateCode() {
    $possible ='123456789';
    $operator ='+x-';   
    $admin    = array('Edy S', 'Bima N', 'Zaki C');
    $a = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $b = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $opr = substr($operator, mt_rand(0, strlen($operator)-1), 1);
    if($opr=='+'){
        $res = $a + $b;
    }
    else if($opr=='x'){
        $res = $a * $b;
    }
    else{
        $res = $a - $b;
    }
    $code['adm']  = $admin[mt_rand(0, strlen($operator)-1)];
    $code['res']  = $res;
    $code['text'] = $a.' '.$opr.' '.$b.' =';
    return $code ;
}

function format_tanggal($timestamp){

   
    $splitTimeStamp = explode(" ",$timestamp);
    $date = $splitTimeStamp[0];
    $time = $splitTimeStamp[1];

    $nama = date("l", strtotime ($date));
    $nama_hari = "";
    if($nama=="Sunday") {$nama_hari="Minggu";}
    else if($nama=="Monday") {$nama_hari="Senin";}
    else if($nama=="Tuesday") {$nama_hari="Selasa";}
    else if($nama=="Wednesday") {$nama_hari="Rabu";}
    else if($nama=="Thursday") {$nama_hari="Kamis";}
    else if($nama=="Friday") {$nama_hari="Jumat";}
    else if($nama=="Saturday") {$nama_hari="Sabtu";}

    $bulan = date("F", strtotime($date));
    $nama_bulan = "";
    if($bulan=="January") {$nama_bulan="Januari";}
    else if($bulan=="February") {$nama_bulan="Februari";}
    else if($bulan=="March") {$nama_bulan="Maret";}
    else if($bulan=="April") {$nama_bulan="April";}
    else if($bulan=="May") {$nama_bulan="Mei";}
    else if($bulan=="June") {$nama_bulan="Juni";}
    else if($bulan=="July") {$nama_bulan="Juli";}
    else if($bulan=="August") {$nama_bulan="Agustus";}
    else if($bulan=="September") {$nama_bulan="September";}
    else if($bulan=="October") {$nama_bulan="Oktober";}
    else if($bulan=="November") {$nama_bulan="November";}
    else if($bulan=="December") {$nama_bulan="Desember";}

    setlocale(LC_ALL, 'id_ID');

    // $nama_kolom = $timestamp ;

    // echo strftime('%A, %d %B %Y %H:%M %Z',strtotime($nama_kolom));

    // echo $date;
    // echo $time;

    echo ($nama_hari . ',') . date (' d ', strtotime ($date)) . $nama_bulan . date (' Y', strtotime ($date) ) . ' Pukul : ' . $time . ' WIB' ;
}

function alamat_lengkap($desa, $kecamatan, $kabupaten, $provinsi, $kodepos){
    
    $desa_edit = 'Desa ' . $desa;
    $kec_edit = 'Kec. ' . $kecamatan;
    $kab_edit = 'Kab. ' . $kabupaten;
    $prov_edit = 'Prov. ' . $provinsi;

    if (isset($desa, $kecamatan, $kabupaten, $provinsi, $kodepos)) {
        echo $desa_edit . ' ' .  $kec_edit . ' ' . $kab_edit . ' ' .  $prov_edit . ' ' . $kodepos  ;
    }

    elseif (isset($kecamatan, $kabupaten, $provinsi, $kodepos)) {
        echo $kec_edit . ' ' . $kab_edit . ' ' .  $prov_edit . ' ' . $kodepos  ;
    }

    elseif (isset($kabupaten, $provinsi, $kodepos)) {
        echo $kab_edit . ' ' .  $prov_edit . ' ' . $kodepos  ;
    }
     
    elseif (isset($provinsi, $kodepos)) {
        echo  $prov_edit . ' ' . $kodepos  ;
    }
}