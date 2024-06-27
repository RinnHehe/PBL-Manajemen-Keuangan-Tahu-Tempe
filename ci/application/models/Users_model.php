<?php
class Users_model extends CI_Model {

    public function check_login($username, $password) {
        $this->db->where('USERNAME_USER', $username);
        $this->db->where('PASSWORD_USER', $password);
        $query = $this->db->get('user');
        return $query->row();
    }
}