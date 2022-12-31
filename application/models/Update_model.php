<?php
/* 
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
 
class Update_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
   
    /*
     * function to update siswa
     */
    function update_siswa($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('siswa',$params);
    }

     /*
     * function to update kelas siswa
     */
    function update_kelas_siswa($stambuk,$kelasbaru)
    {
        $this->db->set('kelas',$kelasbaru);
        $this->db->where('nis',$stambuk);
        return $this->db->update('siswa');
    }

    /*
     * function to update rayon siswa
     */
    function update_rayon_siswa($stambuk,$rayonbaru)
    {
        $this->db->set('rayon',$rayonbaru);
        $this->db->where('nis',$stambuk);
        return $this->db->update('siswa');
    }

     /*
     * function to update nisn siswa
     */
    function update_nisn_siswa($stambuk,$nisn)
    {
        $this->db->set('nisn',$nisn);
        $this->db->where('nis',$stambuk);
        return $this->db->update('siswa');
    }

    /*
     * function to update ID siswa
     */
    function update_id_siswa($stambuk,$id_siswa)
    {
        $this->db->set('id',$id_siswa);
        $this->db->where('nis',$stambuk);
        return $this->db->update('siswa');
    }

    /*
     * function to update konsul siswa
     */
    function update_konsul_siswa($stambuk,$konsul)
    {
        $this->db->set('konsul',$konsul);
        $this->db->where('nis',$stambuk);
        return $this->db->update('siswa');
    }

     /*
     * function to update no telp siswa
     */
    function update_notelp_siswa($stambuk, $telpayah, $telpibu, $telpwali)
    {
        $this->db->set('telp_ayah',$telpayah);
        $this->db->set('telp_ibu',$telpibu);
        $this->db->set('telp_wali',$telpwali);
        $this->db->where('nis',$stambuk);
        return $this->db->update('siswa');
    }
}