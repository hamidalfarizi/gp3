<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mapel_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get mapel by id
     */
    function get_mapel($id)
    {
        return $this->db->get_where('mapel',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all mapel
     */
    function get_all_mapel()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('mapel')->result_array();
    }
        
    /*
     * function to add new mapel
     */
    function add_mapel($params)
    {
        $this->db->insert('mapel',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update mapel
     */
    function update_mapel($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('mapel',$params);
    }
    
    /*
     * function to delete mapel
     */
    function delete_mapel($id)
    {
        return $this->db->delete('mapel',array('id'=>$id));
    }

    // hitung
    function count_row()
    {
        $this->db->select('id');
        $this->db->from('mapel');
        return $this->db->get()->num_rows();
    }
}