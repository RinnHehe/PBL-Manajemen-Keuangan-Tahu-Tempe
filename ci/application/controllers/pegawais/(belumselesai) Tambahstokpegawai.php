<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahstokpegawai extends CI_Controller{

    public function index()
    {
        $data['title'] = 'TAMBAH stok BARANG';

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/tambahstokpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }
}
