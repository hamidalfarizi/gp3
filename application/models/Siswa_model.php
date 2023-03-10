<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Siswa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get siswa by id
     */
    function get_siswa($id)
    {
        return $this->db->get_where('siswa',array('id'=>$id))->row_array();
    }

     /*
     * Get siswa by nis
     */
    function get_siswa_nis($nis)
    {
        return $this->db->get_where('siswa',array('nis'=>$nis))->row_array();
    }
        
    /*
     * Get all siswa
     */
    function get_all_siswa()
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get('siswa')->result_array();
    }

    /*
     * function to get aktif siswa
     */
    function get_aktif_siswa()
    {
        $this->db->where('aktif', 1 );
        return $this->db->get('siswa')->result_array();
    }

    /*
     * function to get non aktif siswa
     */
    function get_nonaktif_siswa()
    {
        $this->db->where('aktif', 0 );
        return $this->db->get('siswa')->result_array();
    }

    /*
     * Get tampil siswa
     */
    function tampil_data()
    {
        $this->db->where('aktif', 1 );
        return $this->db->get('siswa');
    }
        
    /*
     * function to add new siswa
     */
    function add_siswa($params)
    {
        $this->db->insert('siswa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update siswa
     */
    function update_siswa($nis,$params)
    {
        $this->db->where('nis',$nis);
        return $this->db->update('siswa',$params);
    }

    /*
     * function to delete siswa
     */
    function delete_siswa($id)
    {
        return $this->db->delete('siswa',array('id'=>$id));
    }

    /*
    * function count rows
    */
    function count_row()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('siswa')->num_rows();
    }

    function count_siswaaktif_row()
    {
        $query = $this->db->query("SELECT * FROM siswa WHERE (aktif) = '1' ORDER BY kelas ASC");
        return $query->num_rows();
    }

    function count_siswanonaktif_row()
    {
        $query = $this->db->query("SELECT * FROM siswa WHERE (aktif) = '0' ORDER BY kelas ASC");
        return $query->num_rows();
    }

    function count_rayon()
    {
        $query = $this->db->query("SELECT (rayon) AS rayon FROM tb_rayon GROUP BY (rayon) ORDER BY (rayon) ASC");
        return $query->num_rows();
    }
    
    function detail_data($id = NULL)
    {
        $query = $this->db->get_where('siswa', array('id' => $id))->row();
        return $query;
    }

    ///////////////////////////saudara///////////////////////
    /*
     * function to get saudara siswa
     */
    function get_saudara_siswa_bystambuk($stambuk)
    {
        $this->db->where('stambuk_santri',$stambuk);
        return $this->db->get('siswa_saudara')->result_array();
    }

    /*
     * Get siswa by id
     */
    function get_saudara_siswa($id)
    {
        return $this->db->get_where('siswa_saudara',array('id'=>$id))->row_array();
    }

     /*
     * function to delete siswa
     */
    function delete_saudara_siswa($id)
    {
        return $this->db->delete('siswa_saudara',array('id'=>$id));
    }

     /*
     * function to add siswa
     */
    function add_saudara_siswa($id)
    {
        return $this->db->insert('siswa_saudara',array('id'=>$id));
    }

   
}