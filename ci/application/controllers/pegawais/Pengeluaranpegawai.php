<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Pengeluaranpegawai_model $pengeluaranpegawai_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Pengeluaranpegawai extends CI_Controller{

    public function __construct()
     {
        parent::__construct();
        $this->load->model('pengeluaranpegawai_model'); 
        $this->load->library('session'); 
    }
    public function tambah_pengeluaran()
    {
        $data['title'] = 'TAMBAH PENGELUARAN BARU';

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/tambahpengeluaranpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }

    public function index()
    {
        $data['title'] = 'PENGELUARAN PEGAWAI';
        $data['pengeluaranpegawais'] = $this->pengeluaranpegawai_model->get_pengeluaran_with_produk();

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/pengeluaranpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }
    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() ==FALSE){
            $this->tambah_pengeluaran();
        } else{
            $data = array(
            'ID_PRODUK' => $this->input->post('ID_PRODUK'),
            'TGL_PENGELUARAN' => $this->input->post('TGL_PENGELUARAN'),
            'JMH_PENGELUARAN' => $this->input->post('JMH_PENGELUARAN'),
            'CTT_PENGELUARAN' => $this->input->post('CTT_PENGELUARAN'),
            );
            $this->pengeluaranpegawai_model->insert_data($data, 'pengeluaran');
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
            data berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('pegawais/pengeluaranpegawai');
        }
}
public function _rules()
    {
        $this->form_validation->set_rules('ID_PRODUK', 'ID_PRODUK', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('TGL_PENGELUARAN', 'TGL_PENGELUARAN', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('JMH_PENGELUARAN', 'JMH_PENGELUARAN', 'required', array(
            'required' => '%s harus diisi!'
        ));
        
    }
}
