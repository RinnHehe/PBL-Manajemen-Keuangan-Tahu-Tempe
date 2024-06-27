<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahpenjualanpegawai extends CI_Controller{

    public function index()
    {
        $data['title'] = 'TAMBAH PENJUALAN BARU';

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/tambahpenjualanpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }
}
