<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_User');
	}
	public function index()
	{
		if($this->session->userdata('login')=='1')
		{
			if($this->session->userdata('roles')==1){
				$data['user'] = $this->M_User->read();
				$this->load->view('user/header');
				$this->load->view('user/user',$data);
				$this->load->view('user/footer');
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
				$this->load->view('user/header');
				$this->load->view('user/tambah');
				$this->load->view('user/footer');
				if(isset($_POST['tambah']))
				{
					$this->M_User->create();
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
			$this->M_User->delete($id);
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
			if($this->session->userdata('login')=='1'){
				$data['user'] = $this->M_User->get_row($id);
		        $this->load->view('user/header');
		        $this->load->view('user/update', $data);
		        $this->load->view('user/footer');
		        if(isset($_POST['edit']))
		        {
		            $this->M_User->update();
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
