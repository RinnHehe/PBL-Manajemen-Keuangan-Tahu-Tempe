<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardpegawai extends CI_Controller{

    public function index()
    {
        $data['title'] = 'DASHBOARD PEGAWAI';

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/dashboardpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }
}
