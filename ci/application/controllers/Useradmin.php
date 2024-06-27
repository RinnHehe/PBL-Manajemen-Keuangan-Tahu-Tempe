<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property User_model $user_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Useradmin extends CI_Controller{


    public function __construct() 
    {
        parent::__construct();
        $this->load->model('user_model'); 
        $this->load->library('form_validation');
        $this->load->library('session'); 
    }
    public function index()
    {
        $data['title'] = 'USER';
        $data['Useradmin'] = $this->user_model->get_data('user')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('useradmin');
        $this->load->view('template/footeradmin');
    }

    public function tambah_user()
    {
        $data['title'] = 'TAMBAH USER';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebaradmin', $data);
        $this->load->view('tambahuser');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() ==FALSE){
            $this->tambah_user();
        } else{
            $data = array(
            'USERNAME_USER' => $this->input->post('USERNAME_USER'),
            'NIK_USER' => $this->input->post('NIK_USER'),
            'NAMA_USER' => $this->input->post('NAMA_USER'),
            'LEVEL_USER' => $this->input->post('LEVEL_USER'),
            'PASSWORD_USER' => $this->input->post('PASSWORD_USER'),
            );
            $this->user_model->insert_data($data, 'user');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            data berhasil ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('useradmin');
        }
}
    public function edit($NIK_USER)
{
    $this->_rules();

        if ($this->form_validation->run() ==FALSE){
            $this->index();
        } else{
            $data = array(
                'NIK_USER' =>$NIK_USER,
            'USERNAME_USER' => $this->input->post('USERNAME_USER'),
            'NAMA_USER' => $this->input->post('NAMA_USER'),
            'LEVEL_USER' => $this->input->post('LEVEL_USER'),
            'PASSWORD_USER' => $this->input->post('PASSWORD_USER'),
            );
            $this->user_model->update_data($data, 'user');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            data berhasil Di Edit! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('useradmin');
        }
}
public function delete($NIK_USER)
    {
        $where = array('NIK_USER' => $NIK_USER);
        
        $this->user_model->delete($where, 'user');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            data berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="close"><span
            aira-hidden="true">&times;</span></button></div>');
            redirect('useradmin');
    }
public function _rules()
    {
        $this->form_validation->set_rules('USERNAME_USER', 'Username', 'required|trim');
        $this->form_validation->set_rules('NIK_USER', 'NIK', 'required|trim');
        $this->form_validation->set_rules('NAMA_USER', 'Nama', 'required|trim');
        $this->form_validation->set_rules('LEVEL_USER', 'Level', 'required|trim');
        $this->form_validation->set_rules('PASSWORD_USER', 'Password', 'required|trim');
        
    }
}