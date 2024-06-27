<?php
class Penjualanpegawai_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Load database library
        $this->load->database();
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function get_pengeluaran_with_produk()
    {
        $this->db->select('penjualan.*, produk.NAMA_PRODUK, produk.HARGA_PRODUK');
        $this->db->from('penjualan');
        $this->db->join('produk', 'penjualan.ID_PRODUK = produk.ID_PRODUK');
        return $this->db->get()->result();
    }
}
