<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Kategori');
	}
	public function index()
	{
		if($this->session->userdata('login')=='1')
		{
			if($this->session->userdata('roles')==1){
				$data['user'] = $this->M_Kategori->read();
				$this->load->view('kategori/header');
				$this->load->view('kategori/kategori',$data);
				$this->load->view('kategori/footer');
			}
			else{
				redirect('home','refresh');
			}
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
			if($this->session->userdata('roles')==1){
				$this->load->view('kategori/header');
				$this->load->view('kategori/tambah');
				$this->load->view('kategori/footer');
				if(isset($_POST['tambah']))
				{
					$this->M_Kategori->create();
				}
			}else{
				redirect('home','refresh');
			}
		}
		else{
			$this->session->set_flashdata('belum_login','1');
			redirect('loginadmin','refresh');
		}
		
	}
	public function hapus($id)
	{
		if($this->session->userdata('login')=='1')
		{
			if($this->session->userdata('roles')==1){
				$this->M_Kategori->delete($id);
			}else{
				redirect('home','refresh');
			}
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
			if($this->session->userdata('roles')=='1'){
				$data['kategori'] = $this->M_Kategori->get_row($id);
		        $this->load->view('kategori/header');
		        $this->load->view('kategori/update', $data);
		        $this->load->view('kategori/footer');
		        if(isset($_POST['edit']))
		        {
		            $this->M_Kategori->update();
		        }
			}else{
				redirect('home','refresh');
			}
		}
		else{
			$this->session->set_flashdata('belum_login','1');
			redirect('loginadmin','refresh');
		}
    }
}
