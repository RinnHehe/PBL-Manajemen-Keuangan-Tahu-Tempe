<?php
class Pengeluaranadmin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
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
        $this->db->select('pengeluaran.*, produk.NAMA_PRODUK');
        $this->db->from('pengeluaran');
        $this->db->join('produk', 'pengeluaran.ID_PRODUK = produk.ID_PRODUK');
        return $this->db->get()->result();
    }
}
