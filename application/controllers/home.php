<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Home');
	}
	public function index()
	{
		if($this->session->userdata('login')=='1')
		{
			$data['jumlahberita'] = $this->M_Home->countberita();
			$data['jumlahpengguna'] = $this->M_Home->countpengguna();
			$this->load->view('home/header');
			$this->load->view('home/home', $data);
			$this->load->view('home/footer');
		}
		else{
			redirect('loginadmin','refresh');
		}
	}
}