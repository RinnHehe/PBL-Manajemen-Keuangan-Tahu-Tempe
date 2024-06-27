<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Stokbarangadmin_model $stokbarangadmin_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Stokbarangadmin extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('stokbarangadmin_model'); 
        $this->load->library('form_validation');
        $this->load->library('session'); 
    }
    public function index()
    {
        $data['title'] = 'Stokbarangadmin';
        $data['stokadmin'] = $this->stokbarangadmin_model->get_data('produk')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('stokb_admin');
        $this->load->view('template/footeradmin');
    }
    public function tambah_produk()
    {
        $data['title'] = 'TAMBAH PRODUK BARANG';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('tambahproduk');
        $this->load->view('template/footer');
    }
    
    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() ==FALSE){
            $this->tambah_produk();
        } else{
            $data = array(
            'NAMA_PRODUK' => $this->input->post('NAMA_PRODUK'),
            'HARGA_PRODUK' => $this->input->post('HARGA_PRODUK'),
            'STOK_PRODUK' => $this->input->post('STOK_PRODUK'),
            'KATEGORI_PRODUK' => $this->input->post('KATEGORI_PRODUK'),
            'DESKRIPSI_PRODUK' => $this->input->post('DESKRIPSI_PRODUK'),
            );
            $this->stokbarangadmin_model->insert_data($data, 'produk');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            data berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('stokbarangadmin');
        }
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
            $this->stokbarangadmin_model->update_data($data, 'produk');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            data berhasil Di Edit! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('stokbarangadmin');
        }
}

    public function _rules()
    {
        $this->form_validation->set_rules('NAMA_PRODUK', 'NAMA PRODUK', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('HARGA_PRODUK', 'HARGA PRODUK', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('STOK_PRODUK', 'STOK PRODUK', 'required', array(
            'required' => '%s harus diisi!'
        ));
        $this->form_validation->set_rules('KATEGORI_PRODUK', 'KATEGORI_PRODUK', 'required', array(
            'required' => '%s harus diisi!'
        ));
        
    }
    public function delete($ID_PRODUK)
    {
        $where = array('ID_PRODUK' => $ID_PRODUK);
        
        $this->stokbarangadmin_model->delete($where, 'produk');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            data berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('stokbarangadmin');
    }
}

