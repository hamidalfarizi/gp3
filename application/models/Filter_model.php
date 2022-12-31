<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getkategori()
    {
        $query = $this->db->query("SELECT (kategori) AS kategori FROM tb_kategori GROUP BY (kategori) ORDER BY (kategori) ASC");
        return $query->result();
    }

    function getkelas()
    {
        $query = $this->db->query("SELECT (kelas) AS kelas FROM tb_kelas GROUP BY (kelas) ORDER BY (kelas) ASC");
        return $query->result();
    }

    function get_rayon()
    {
        $query = $this->db->query("SELECT (rayon) AS rayon FROM tb_rayon GROUP BY (rayon) ORDER BY (rayon) ASC");
        return $query->result();
    }

    function get_santri($stambuk)
    {
        $query = $this->db->query("SELECT * FROM siswa WHERE (nis) = '$stambuk' AND (aktif) = '1' ORDER BY kelas ASC");
        return $query->result();
    }

    function filter_by_kelas($kelas)
    {
        $query = $this->db->query("SELECT * FROM siswa WHERE (kelas) = '$kelas' AND (aktif) = '1' ORDER BY kelas ASC");
        return $query->result();
    }

    function filter_by_rayon($rayon)
    {
        $query = $this->db->query("SELECT * FROM siswa WHERE (rayon) = '$rayon' AND (aktif) = '1' ORDER BY kelas ASC");
        return $query->result();
    }

    function get_provinsi()
    {
        $query = $this->db->query("SELECT DISTINCT (provinsi) AS provinsi FROM tb_kategori_alamat GROUP BY (provinsi) ORDER BY (provinsi) ASC");
        return $query->result();
    }

    function get_kabupaten($provinsi)
    {
        $query = $this->db->query("SELECT DISTINCT (kabupaten) FROM tb_kategori_alamat WHERE (provinsi) = '$provinsi' ORDER BY provinsi ASC");
        return $query->result();
    }

    function counting_siswa_kelas($kelas)
    {
        $query = $this->db->query("SELECT (kelas) FROM siswa WHERE (kelas) = '$kelas' ORDER BY kelas ASC")->num_rows();
        return $query->result();
    }
    
}