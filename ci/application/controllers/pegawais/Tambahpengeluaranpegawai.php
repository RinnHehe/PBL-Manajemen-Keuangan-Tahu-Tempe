<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahpengeluaranpegawai extends CI_Controller{

    public function index()
    {
        $data['title'] = 'TAMBAH PENGELUARAN BARU';

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/tambahpengeluaranpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }
}
