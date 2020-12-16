<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Berita');
	}
	public function index()
	{
		if($this->session->userdata('login')=='1')
		{
			$data['berita'] = $this->M_Berita->read();
			$this->load->view('berita/header');
			$this->load->view('berita/berita',$data);
			$this->load->view('berita/footer');
		}
		else{
			$this->session->set_flashdata('belum_login','1');
			redirect('loginadmin','refresh');
		}
	}
	public function tambah()
	{
		if($this->session->userdata('login')=='1')
		{
			$data['kategori'] = $this->M_Berita->readcategory();
			$this->load->view('berita/header');
			$this->load->view('berita/tambah',$data);
			$this->load->view('berita/footer');
			if(isset($_POST['tambah']))
			{
				$this->M_Berita->create();
				redirect('berita','refresh');
			}
		}
		else{
			$this->session->set_flashdata('belum_login','1');
			redirect('loginadmin');
		}
	}
	public function hapus($id)
	{
		if($this->session->userdata('login')=='1')
		{
			$this->M_Berita->delete($id);
			redirect('berita','refresh');
		}
		else{
			$this->session->set_flashdata('belum_login','1');
			redirect('loginadmin','refresh');
		}
		
	}
    public function edit($id)
    {
    	if($this->session->userdata('login')=='1')
		{
	        $data['berita'] = $this->M_Berita->get_row($id);
	        $data['kategori'] = $this->M_Berita->readcategory();
	        $this->load->view('berita/header');
	        $this->load->view('berita/update', $data);
	        $this->load->view('berita/footer');
	        if(isset($_POST['edit']))
	        {
	            $this->M_Berita->update();
	        }
	    }else{
	    	$this->session->set_flashdata('belum_login','1');
	    	redirect('loginadmin','refresh');
	    }
    }
}
