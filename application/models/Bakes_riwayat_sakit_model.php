<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bakes_riwayat_sakit_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * function to tambah riwayatsakit siswa
     */
    function tambah_riwayatsakit($data){
        $this->db->insert('record_riwayat_sakit_santri', $data);
    }

     /*
     * function to update riwayat sakit
     */
    function update_riwayatsakit($id_riwayatsakit,$params)
    {
        $this->db->where('id',$id_riwayatsakit);
        return $this->db->update('record_riwayat_sakit_santri',$params);
    }

    /*
     * function to delete riwayat sakit siswa
     */
    function delete_riwayatsakit($id_riwayatsakit)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->where('record_riwayat_sakit_santri.id', $id_riwayatsakit);
        return $this->db->delete('record_riwayat_sakit_santri',array('id'=>$id_riwayatsakit));
    }

    /*
     * Get riwayat sakit by id riwayat sakit
     */
    function get_riwayatsakit($id_riwayatsakit)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('record_riwayat_sakit_santri.id', $id_riwayatsakit);
        $this->db->order_by('nama_lengkap', 'desc');
        return $this->db->get()->row_array();

        // return $this->db->get_where('record_riwayat_sakit_santri',array('id'=>$id))->row_array();
    }
    
    /*
     * function to view detail riwayat sakit siswa
     */
    function filter_by_id_siswa($id)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('id_siswa', $id);
        $this->db->order_by('create_at', 'desc');
        return $this->db->get()->result();
    }

    /*
     * function to get tabel newest pelanggaran siswa
     */
    function get_tabel_riwayatsakit_siswa()
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result_array();
    }

    /////////////////////////////////////////////////////filter data pelanggaran perkategori////////////////////////////////////////////////////////////////

    function filter_by_penyakit($jenis_penyakit)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('jenis_penyakit', $jenis_penyakit);
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    function filter_by_tindakan($tindakan)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('tindakan', $tindakan);
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    function filter_by_penginput($penginput)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('tb_staf_bakes.nama', $penginput);
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    function filter_by_tanggal($tanggalawal,$tanggalakhir)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where("(create_at) BETWEEN '$tanggalawal' AND '$tanggalakhir'");
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }

    function filtersakit_by_rayon($rayon)
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('rayon', "$rayon");
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result();
    }
    
    ////////////////////////////////////////////////////hitungan grafik pelanggaran perkategori////////////////////////////////////////////////////////////////


    /*
     * function to menghitung data Demam
     */
    function filter_by_tanggal_demam($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Demam'");
        return $query->num_rows();
    }
    
    /*
     * function to menghitung data Pusing
     */
    function filter_by_tanggal_pusing($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Pusing'");
        return $query->num_rows();
    }

     /*
     * function to menghitung data Muntaber
     */
    function filter_by_tanggal_muntaber($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Muntaber'");
        return $query->num_rows();
    }

     /*
     * function to menghitung data Mencret
     */
    function filter_by_tanggal_mencret($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Mencret'");
        return $query->num_rows();
    }

     /*
     * function to menghitung data Tipes
     */
    function filter_by_tanggal_tipes($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Tipes'");
        return $query->num_rows();
    }

     /*
     * function to menghitung data Patah Tulang
     */
    function filter_by_tanggal_patahtulang($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Patah Tulang'");
        return $query->num_rows();
    }

     /*
     * function to menghitung data Scabies
     */
    function filter_by_tanggal_scabies($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Scabies'");
        return $query->num_rows();
    }

     /*
     * function to menghitung data Cacar
     */
    function filter_by_tanggal_cacar($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM record_riwayat_sakit_santri WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING jenis_penyakit = 'Cacar'");
        return $query->num_rows();
    }



    ////////////////////////////////////////////////////hitungan grafik pelanggaran perkategori////////////////////////////////////////////////////////////////

    /*
     * function to get tabel emergency1 
     */
    function get_aktif_emergency1()
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('tindakan', "Emergency 1");
        $this->db->where('status', "1");
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result_array();
    }

    /*
     * function to get tabel emergency1
     */
    function get_aktif_emergency2()
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('tindakan', "Emergency 2");
        $this->db->where('status', "1");
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result_array();
    }

    /*
     * function to get tabel Rumah Sakit
     */
    function get_aktif_rumahsakit()
    {
        $this->db->select('*, record_riwayat_sakit_santri.id as id_sakit, record_riwayat_sakit_santri.status as status_sakit, siswa.id as id_siswa, tb_staf_bakes.nama as nama_penginput  ');
        $this->db->from('record_riwayat_sakit_santri');
        $this->db->join('siswa','siswa.id = record_riwayat_sakit_santri.id_siswa');
        $this->db->join('tb_staf_bakes','tb_staf_bakes.id = record_riwayat_sakit_santri.id_penginput');
        $this->db->where('tindakan', "Rumah Sakit");
        $this->db->where('status', "1");
        $this->db->order_by('create_at', 'desc');
        $this->db->order_by('siswa.id', 'asc');
        return $this->db->get()->result_array();
    }
    

   
}

    