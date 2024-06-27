<?php
class Stoko_model extends CI_Model {

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
}
