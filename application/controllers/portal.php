<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function index()
	{
		$this->load->view('portal/header');
		$this->load->view('portal/portal');
		$this->load->view('portal/footer');
	}
}