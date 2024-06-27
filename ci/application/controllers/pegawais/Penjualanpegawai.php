<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Penjualanpegawai_model $penjualanpegawai_model
 * @property Stokpegawai_model $stokpegawai_model
  * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Penjualanpegawai extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('penjualanpegawai_model'); 
        $this->load->model('stokpegawai_model');
        $this->load->library('session'); 
    }

    public function index()
    {
        $data['title'] = 'PENJUALAN PEGAWAI';
        $data['penjualanpegawais'] = $this->penjualanpegawai_model->get_pengeluaran_with_produk();

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/penjualanpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }

    public function tambah_penjualan()
    {
        $data['title'] = 'TAMBAH PENJUALAN BARU';

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/tambahpenjualanpegawai');
        $this->load->view('templatepegawai/footeradmin');
    }
    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_penjualan();
        } else {
            $id_produk = $this->input->post('ID_PRODUK');
            $jmh_penjualan = $this->input->post('JMH_PENJUALAN');
            $diskon_penjualan = $this->input->post('DISKON_PENJUALAN');

            $data = array(
                'ID_PRODUK' => $id_produk,
                'TGL_PENJUALAN' => $this->input->post('TGL_PENJUALAN'),
                'JMH_PENJUALAN' => $jmh_penjualan,
                'DISKON_PENJUALAN' => $diskon_penjualan,
            );

            $this->penjualanpegawai_model->insert_data($data, 'penjualan');
            $this->stokpegawai_model->reduce_stock($id_produk, $jmh_penjualan);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('pegawais/penjualanpegawai');
        }
    }
public function _rules()
    {
        $this->form_validation->set_rules('ID_PRODUK', 'ID_PRODUK', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('TGL_PENJUALAN', 'TGL_PENJUALAN', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('JMH_PENJUALAN', 'JMH_PENJUALAN', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('DISKON_PENJUALAN', 'DISKON_PENJUALAN', 'required', array(
            'required' => '%s harus diisi!'
        ));
        
    }
}
