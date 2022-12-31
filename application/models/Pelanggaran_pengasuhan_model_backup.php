<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pelanggaran_pengasuhan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    /*
     * function to tambah pelanggaran siswa
     */
    function tambah_pelanggaran($data){
        $this->db->insert('record_pelanggaran_pengasuhan', $data);
    }

     /*
     * function to update pelanggaran
     */
    function update_pelanggaran($id_pelanggaran,$params)
    {
        $this->db->where('id',$id_pelanggaran);
        return $this->db->update('record_pelanggaran_pengasuhan',$params);
    }

    /*
     * function to delete pelanggaran siswa
     */
    function delete_pelanggaran($id_pelanggaran)
    {
        $this->db->select('*, record_pelanggaran_pengasuhan.id as id_pelanggaran, siswa.id as id_siswa ');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->where('record_pelanggaran_pengasuhan.id', $id_pelanggaran);
        return $this->db->delete('record_pelanggaran_pengasuhan',array('id'=>$id_pelanggaran));
    }

    /*
     * Get pelanggaran by id pelanggaran
     */
    function get_pelanggaran($id)
    {
        $this->db->select('*, record_pelanggaran_pengasuhan.id as id_pelanggaran, siswa.id as id_siswa ');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->where('record_pelanggaran_pengasuhan.id', $id);
        $this->db->order_by('nama_lengkap', 'desc');
        return $this->db->get()->row_array();

        // return $this->db->get_where('record_pelanggaran_pengasuhan',array('id'=>$id))->row_array();
    }
    
    /*
     * function to view detail pelanggaran siswa
     */
    function filter_by_id_siswa($id)
    {
        $this->db->select('*, record_pelanggaran_pengasuhan.id as id_pelanggaran, siswa.id as id_siswa ');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->where('id_siswa', $id);
        $this->db->order_by('nama_lengkap', 'desc');
        return $this->db->get()->result();
    }

    /*
     * function to get tabel newest pelanggaran siswa
     */
    function get_tabel_pelanggaran_siswa()
    {
        $this->db->select('*, record_pelanggaran_pengasuhan.id as id_pelanggaran, siswa.id as id_siswa ');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result_array();
    }

    /////////////////////////////////////////////////////filter data pelanggaran perkategori////////////////////////////////////////////////////////////////

    function filter_by_pelanggaran($nama_pelanggaran)
    {
        $this->db->select('*');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->where('nama_pelanggaran', $nama_pelanggaran);
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    function filter_by_hukuman($hukuman)
    {
        $this->db->select('*');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->where('hukuman', $hukuman);
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    function filter_by_penghukum($penghukum)
    {
        $this->db->select('*');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->where('nama_penghukum', $penghukum);
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        // $this->db->where('rayon', "Syanggit Lt. 1");
        return $this->db->get()->result();
    }

    function filter_by_tanggal($tanggalawal,$tanggalakhir)
    {
        $this->db->select('*');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->where("(create_at) BETWEEN '$tanggalawal' AND '$tanggalakhir'");
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    function filterpelanggaran_by_rayon($rayon)
    {
        $this->db->select('*');
        $this->db->from('record_pelanggaran_pengasuhan');
        $this->db->join('siswa','siswa.id = record_pelanggaran_pengasuhan.id_siswa');
        $this->db->join('tb_penghukum_pengasuhan','tb_penghukum_pengasuhan.id = record_pelanggaran_pengasuhan.id_penghukum');
        $this->db->where('rayon', "$rayon");
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    ////////////////////////////////////////////////////hitungan grafik pelanggaran perkategori////////////////////////////////////////////////////////////////

    /*
     * Get all kategori Pelanggaran
     */
    function get_all_kategori_pelanggaran()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tb_pelanggaran_pengasuhan')->result_array();
    }

     /*
     * Get kategori pelanggaran by id 
     */
    function get_kategori_pelanggaran($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pelanggaran_pengasuhan');
        $this->db->where('tb_pelanggaran_pengasuhan.id', $id);
        $this->db->order_by('id', 'desc');
        return $this->db->get()->row_array();
    }

     /*
     * function to tambah pelanggaran siswa
     */
    function tambah_kategori_pelanggaran($data)
    {
        $this->db->insert('tb_pelanggaran_pengasuhan', $data);
    }
    
     /*
     * function to update pelanggaran
     */
    function update_kategori_pelanggaran($id_kategori,$data)
    {
        $this->db->where('id',$id_kategori);
        return $this->db->update('tb_pelanggaran_pengasuhan',$data);
    }

    /*
     * function to delete pelanggaran siswa
     */
    function delete_kategori_pelanggaran($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tb_pelanggaran_pengasuhan');
        $this->db->where('tb_pelanggaran_pengasuhan.id', $id_kategori);
        return $this->db->delete('tb_pelanggaran_pengasuhan',array('id'=>$id_kategori));
    }

    ////////////////////////////////////////////////////hitungan grafik pelanggaran perkategori////////////////////////////////////////////////////////////////


    /*
     * function to menghitung data kabur
     */
    function filter_by_tanggal_ringan($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING kategori_pelanggaran = 'Ringan'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data Ghosob
     */
    function filter_by_tanggal_ghosob($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Ghosob'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data tidak memakai sendal
     */
    function filter_by_tanggal_tidak_pakai_sendal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Pakai Sendal'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data menjemur pakian di kamar
     */
    function filter_by_tanggal_menjemur_pakaian_di_kamar($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Menjemur Pakaian Di Kamar'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data tidak mengunci lemari
     */
    function filter_by_tanggal_tidak_mengunci_lemari($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Mengunci Lemari'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data tidak memakai perlengkapan lengkap
     */
    function filter_by_tanggal_tidak_memakai_perlengkapan_lengkap($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Memakai Perlengkapan Lengkap'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data terlambat
     */
    function filter_by_tanggal_terlambat($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Terlambat'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data tidak memakai papan nama
     */
    function filter_by_tanggal_tidak_memakai_papan_nama($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Memakai Papan Nama'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data sembunyi dari kegiatan
     */
    function filter_by_tanggal_sembunyi_dari_kegiatan($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Sembunyi dari Kegiatan'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data kabur ketika mobilisasi
     */
    function filter_by_tanggal_kabur_ketika_mobilisasi($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Kabur Ketika Mobilisasi'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data mokel
     */
    function filter_by_tanggal_mokel($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Mokel'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data tidak datang panggilan bagian lebih dari 3 hari
     */
    function filter_by_tanggal_tidak_datang_panggilan_bagian_lebih_dari_3_hari($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Datang Panggilan Bagian Lebih dari 3 hari'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data melanggar norma susila
     */
    function filter_by_tanggal_melanggar_norma_susila($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Melanggar Norma Susila'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data mencuri
     */
    function filter_by_tanggal_mencuri($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Mencuri'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data berkelahi
     */
    function filter_by_tanggal_berkelahi($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Berkelahi'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data kabur dari pondok
     */
    function filter_by_tanggal_kabur_dari_pondok($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Kabur Dari Pondok'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data berhubungan dengan orang kampung
     */
    function filter_by_tanggal_berhubungan_dengan_orang_kampung($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Berhubungan Dengan Orang Kampung'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data melawan pembantu pimpinan pondok
     */
    function filter_by_tanggal_melawan_pembantu_pimpinan_pondok($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Melawan Pembantu Pimpinan Pondok'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data terlambat ke masjid
     */
    function filter_by_tanggal_terlambat_ke_masjid($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Terlambat Ke Masjid'");
        return $query->num_rows();
    }

    /*
     * function to menghitung data menyeret sandal
     */
    function filter_by_tanggal_menyeret_sandal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Menyeret Sandal'");
        return $query->num_rows();
    }
}

    