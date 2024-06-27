<?php
class User_model extends CI_Model {

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
    public function update_data($data, $table)
    {
        $this->db->where('NIK_USER', $data['NIK_USER']);
        $this->db->update($table, $data);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function delete($where ,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
