<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    public function get_user_by_username($username) {
        $this->db->where('USERNAME_USER', $username);
        $query = $this->db->get('user');
        return $query->row();
    }
}