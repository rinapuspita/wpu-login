<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
        // $this->load->model('user_model');
	}

	public function index() 
	{
		$token = $this->session->userdata('token');
		// $data['user'] = $this->user_model->getLogin($token);
		$data['title'] = 'Data Produk | Cupo';
        $data['produk'] = $this->produk_model->getProduk($token);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('produk/index');
		$this->load->view('templates/footer');
	}

    public function add()
    {
        $data['title'] = 'Data Produk | Cupo';
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        if ($this->form_validation->run() == true) {
            if($this->produk_model->addProduk()>0){
                echo "yey berhasil";
                redirect('produk', 'refresh');
            } else{
                echo "yah gagal";
            }

          } else {
            redirect('produk', 'refresh');
          }
    }

	
}	