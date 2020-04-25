<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function get_lokasi()
    {
        $this->db->join('tb_prodi', 'tb_lokasi.id_prodi=tb_prodi.id_prodi');
        $this->db->order_by('nama_prodi', 'desc');
        $lokasi = $this->db->get('tb_lokasi')->result_array();
        return $lokasi;
    }
    function get_lokasi_byId($id)
    {
        $this->db->join('tb_prodi', 'tb_lokasi.id_prodi=tb_prodi.id_prodi');
        $this->db->order_by('nama_prodi', 'desc');
        $this->db->where('id_lokasi=', $id);
        $lokasi = $this->db->get('tb_lokasi')->row_array();
        return $lokasi;
    }
    public function get_aset()
    {
        $this->db->join('tb_aset', 'tb_aset.id_lokasi=tb_lokasi.id_lokasi');
        $this->db->order_by('nama_barang', 'desc');
        $aset = $this->db->get('tb_aset')->result_array();
        return $aset;
    }
}
