<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardadmin extends CI_Controller{

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('dashboardadmin');
        $this->load->view('template/footeradmin');
    }
}
