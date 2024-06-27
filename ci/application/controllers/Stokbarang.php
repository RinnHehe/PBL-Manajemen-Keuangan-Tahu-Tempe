<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Stoko_model $stoko_model
 */
class Stokbarang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('stoko_model');
    }

    public function index()
    {
        $data['title'] = 'STOK BARANG';
        $data['stokbar'] = $this->stoko_model->get_data('produk')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('stokb', $data);
        $this->load->view('template/footer');
        
    }
    
}
