<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {
	public function index()
	{
		$this->load->view('login/header');
		$this->load->view('login/login');
		$this->load->view('login/footer');
		if  (isset($_POST['login'])){
			$this->_login();
		}
	}
	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_pengguna',['username'=> $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$pengguna = array(
					'login' => '1',
					'roles' => $user['user_role'],
					'ses_id' => $user['id'],
					'ses_username' => $user['username'],
				);
				$this->session->set_userdata($pengguna);
				redirect('home','refresh');
			}else {
				$this->session->set_flashdata('salah_login','1');
				redirect('loginadmin','refresh');
			}
		}else {
			$this->session->set_flashdata('salah_login','1');
			redirect('loginadmin','refresh');
		}
	}
	public function logout()
	{
		session_destroy();
		redirect('loginadmin','refresh');
	}
}
