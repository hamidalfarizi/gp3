<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Rombel_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get rombel by id
     */
    function get_rombel($id)
    {
        return $this->db->get_where('rombel',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all rombel
     */
    function get_all_rombel()
    {
        $this->db->select('rombel.*, tahun_pelajaran.*, kelas.nama, siswa.id as id_siswa, siswa.nama_lengkap as nama_siswa');
        $this->db->from('rombel');
        $this->db->join('tahun_pelajaran', 'tahun_pelajaran.id = rombel.id_tahun');
        $this->db->join('kelas', 'kelas.id = rombel.id_kelas');
        $this->db->join('siswa', 'siswa.id = rombel.id_siswa');
        $this->db->where('rombel.id_tahun = '.$_SESSION['id_tahun_pelajaran']);
        $this->db->order_by('rombel.id', 'desc');
        return $this->db->get()->result_array();
    }
        
    /*
     * function to add new rombel
     */
    function add_rombel($params)
    {
        // $this->db->insert('rombel',$params);
        // return $this->db->insert_id();
        return $this->db->insert_batch('rombel', $params);

    }
    
    /*
     * function to update rombel
     */
    function update_rombel($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('rombel',$params);
    }
    
    /*
     * function to delete rombel
     */
    function delete_rombel($id_kelas)
    {
        return $this->db->delete('rombel',array('id_kelas'=>$id_kelas, 'id_tahun'=>$_SESSION['id_tahun_pelajaran']));
    }

    /*
     * Get all siswa
     */
    function get_all_siswa()
    {
        // $this->db->order_by('id', 'desc');
        // return $this->db->get('siswa')->result_array();
        return $this->db->query("SELECT * FROM siswa WHERE siswa.aktif = 1 AND NOT EXISTS 
        (
            SELECT * FROM rombel 
            WHERE siswa.id = rombel.id_siswa 
            AND rombel.id_tahun = ".$_SESSION['id_tahun_pelajaran']."
        )")->result_array();
    }

    /*
     * Get all kelas
     */
    function get_all_kelas()
    {
        $this->db->order_by('tingkat', 'asc');
        return $this->db->get('kelas')->result_array();
    }

    /*
     * Get all kelas berdasarkan id tahun pelajaran yang aktif
     */
    function get_kelas_by_tahun()
    {
        $this->db->select('rombel.*, kelas.nama');
        $this->db->from('rombel');
        $this->db->group_by('id_kelas');
        $this->db->where('rombel.id_tahun ='.$_SESSION['id_tahun_pelajaran']);
        $this->db->join('kelas', 'kelas.id = rombel.id_kelas');
        $this->db->order_by('kelas.tingkat, kelas.id', 'asc');
        return $this->db->get()->result_array();
    }
    
    /*
     * Get all siswa berdasarkan id kelas
     */
    function get_siswa_by_id_kelas($id_kelas)
    {
        $this->db->select('rombel.*, siswa.nis, siswa.nama_lengkap, siswa.kelas, siswa.nama_panggilan');
        $this->db->from('rombel');
        $this->db->where('rombel.id_kelas ='.$id_kelas);
        $this->db->where('rombel.id_tahun ='.$_SESSION['id_tahun_pelajaran']);
        $this->db->join('siswa', 'siswa.id = rombel.id_siswa');
        $this->db->order_by('siswa.nama_lengkap', 'asc');
        return $this->db->get()->result_array();
    }

    /*
     * hitung all siswa berdasarkan id kelas
     */
    function count_siswa_by_id_kelas($id_kelas)
    {
        $this->db->select('siswa.id');
        $this->db->from('rombel');
        $this->db->where('rombel.id_kelas ='.$id_kelas);
        $this->db->join('siswa', 'siswa.id = rombel.id_siswa');
        return $this->db->count_all_results();
    }

    /*
     * hitung siswa laki-laki berdasarkan id kelas
     */
    function count_siswa_laki_by_id_kelas($id_kelas)
    {
        $this->db->select('siswa.id');
        $this->db->from('rombel');
        $this->db->where('rombel.id_kelas ='.$id_kelas);
        $this->db->where('siswa.kelas = "L"');
        $this->db->join('siswa', 'siswa.id = rombel.id_siswa');
        return $this->db->count_all_results();
    }

    /*
     * hitung siswa perempuan berdasarkan id kelas
     */
    function count_siswa_perempuan_by_id_kelas($id_kelas)
    {
        $this->db->select('siswa.id');
        $this->db->from('rombel');
        $this->db->where('rombel.id_kelas ='.$id_kelas);
        $this->db->where('siswa.kelas = "P"');
        $this->db->join('siswa', 'siswa.id = rombel.id_siswa');
        return $this->db->count_all_results();
    }

    /*
    * get rombel berdasarkan id kelas dan berdasarkan tahun pelajaran yang aktif
    */
    function get_rombel_by_id_kelas($id_kelas)
    {
        $this->db->select('rombel.*, siswa.id as id_siswa, siswa.nama_lengkap as nama_siswa');
        $this->db->from('rombel');
        $this->db->where('rombel.id_kelas', $id_kelas);
        $this->db->where('rombel.id_tahun', $_SESSION['id_tahun_pelajaran']);
        $this->db->join('siswa', 'siswa.id = rombel.id_siswa');
        return $this->db->get()->result_array();
    }

    /*
    * get siswa berdasarkan rombel dan berdasarkan tahun pelajaran yang aktif
    */
    function get_siswa_by_rombel($id_kelas)
    {
        return $this->db->query('SELECT siswa.id as id_siswa, siswa.nama_lengkap, rombel.id_kelas as cek
        FROM siswa   
        LEFT JOIN rombel               
        ON siswa.id = rombel.id_siswa and rombel.id_tahun = '.$_SESSION['id_tahun_pelajaran'].' WHERE siswa.aktif = 1')->result_array();
    }

    /*
     * Get kelas by id
     */
    function get_kelas($id_kelas)
    {
        return $this->db->get_where('kelas',array('id'=>$id_kelas))->result_array();
    }

    // hapus seluruh siswa berdasarkan id kelas dan id tahun pelajaran aktif
    function delete_siswa_by_rombel($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->where('id_tahun', $_SESSION['id_tahun_pelajaran']);
        $this->db->delete('rombel');
    }
}