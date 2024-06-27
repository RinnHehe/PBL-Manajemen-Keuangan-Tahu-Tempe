<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Stokpegawai_model $stokpegawai_model
* @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Stokbarangpegawai extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('stokpegawai_model'); // Memuat model Stokbarang_model
    }

    public function index()
    {
        $data['title'] = 'STOK BARANG PEGAWAI';
        $data['stokpegawai'] = $this->stokpegawai_model->get_data('produk')->result();

        $this->load->view('templatepegawai/header', $data);
        $this->load->view('templatepegawai/sidebaradmin', $data);
        $this->load->view('pegawai/stokb_pegawai', $data);
        $this->load->view('templatepegawai/footeradmin');
    }
    public function edit($ID_PRODUK)
{
    $this->_rules();

        if ($this->form_validation->run() ==FALSE){
            $this->index();
        } else{
            $data = array(
            'ID_PRODUK' =>$ID_PRODUK,
            'NAMA_PRODUK' => $this->input->post('NAMA_PRODUK'),
            'HARGA_PRODUK' => $this->input->post('HARGA_PRODUK'),
            'STOK_PRODUK' => $this->input->post('STOK_PRODUK'),
            'KATEGORI_PRODUK' => $this->input->post('KATEGORI_PRODUK'),
            'DESKRIPSI_PRODUK' => $this->input->post('DESKRIPSI_PRODUK'),
            );
            $this->stokpegawai_model->update_data($data, 'produk');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            data berhasil Di EDIT! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('pegawais/stokbarangpegawai');
        }
}
public function _rules()
{
    $this->form_validation->set_rules('NAMA_PRODUK', 'NAMA_PRODUK', 'required', array(
        'required' => '%s harus diisi!'
    ));
    $this->form_validation->set_rules('HARGA_PRODUK', 'HARGA_PRODUK', 'required', array(
        'required' => '%s harus diisi!'
    ));
    $this->form_validation->set_rules('STOK_PRODUK', 'STOK_PRODUK', 'required', array(
        'required' => '%s harus diisi!'
    ));
    $this->form_validation->set_rules('KATEGORI_PRODUK', 'KATEGORI_PRODUK', 'required', array(
        'required' => '%s harus diisi!'
    ));
    
}
public function delete($ID_PRODUK)
    {
        $where = array('ID_PRODUK' => $ID_PRODUK);
        $this->stokpegawai_model->delete($where, 'produk');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            data berhasil Di hapus! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('pegawais/stokbarangpegawai');
    }
}
