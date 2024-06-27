<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Penjualanadmin_model $penjualanadmin_model
 * @property Stokbarangadmin_model $stokbarangadmin_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Penjualanadmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penjualanadmin_model');
        $this->load->model('stokbarangadmin_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'PENJUALAN ADMIN';
        $data['penjualanadmin'] = $this->penjualanadmin_model->get_pengeluaran_with_produk();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('penjualanadmin');
        $this->load->view('template/footeradmin');
    }

    public function tambah_penjualan()
    {
        $data['title'] = 'TAMBAH PENJUALAN BARU';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('tambahpenjualan');
        $this->load->view('template/footer');
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

            $this->penjualanadmin_model->insert_data($data, 'penjualan');
            $this->stokbarangadmin_model->reduce_stock($id_produk, $jmh_penjualan);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('penjualanadmin');
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
