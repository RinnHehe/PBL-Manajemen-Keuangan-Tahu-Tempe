<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * @property CI_Input $input
 * @property Users_model $users_model
  * @property CI_Session $session
 */
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function login() {
        $this->load->view('login');
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->users_model->check_login($username, $password);

        if ($user) {
            $this->session->set_userdata('username', $user->USERNAME_USER);
            $this->session->set_userdata('level', $user->LEVEL_USER);

            if ($user->LEVEL_USER == '1') {
                redirect('dashboardadmin');
            } else if ($user->LEVEL_USER == '2') {
                redirect('pegawais/dashboardpegawai');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid Username or Password');
            redirect('auth/login');
        }
    }
}