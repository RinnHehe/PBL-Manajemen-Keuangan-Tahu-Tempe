<?php
class Stokbarangadmin_model extends CI_Model {

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

    public function update_data($data, $table)
    {
        $this->db->where('ID_PRODUK', $data['ID_PRODUK']);
        $this->db->update($table, $data);
    }

    public function delete($where ,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function reduce_stock($id_produk, $jumlah)
    {
        $this->db->set('STOK_PRODUK', 'STOK_PRODUK - ' . (int) $jumlah, FALSE);
        $this->db->where('ID_PRODUK', $id_produk);
        $this->db->update('produk');
    }
}
