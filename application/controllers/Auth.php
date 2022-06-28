<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index()
	{

		$data['title'] = "sign in";
		
		if ($this->session->userdata('username')) {
			redirect('admin');
		}
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/partial/auth_header', $data);
			$this->load->view('auth/sign_in', $data);
			$this->load->view('auth/partial/auth_footer', $data);
		} else {
			//validasinya sukses
			$this->_login();
		}
		
	}

	public function register()
	{
		$data['title'] = "sign up";
		

		if ($this->session->userdata('username')) {
			redirect('admin');
		}
		$this->form_validation->set_rules('fullname', 'FullName', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
			'is_unique' => 'User ini sudah terdaftar'
		]);
		// $this->form_validation->set_rules('password1', 'Pasword', 'required|trim|min_length[3]|matches[password2]', [
		// 	'matches' => 'password tidak sama!',
		// 	'min_length' => 'password terlalu pendek!'
		// ]);
		// $this->form_validation->set_rules('password2', 'Pasword', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		if ($this->form_validation->run() == false) {
			$this->load->library('form_validation');

			$this->load->view('auth/partial/auth_header', $data);
			$this->load->view('auth/sign_up', $data);
			$this->load->view('auth/partial/auth_footer', $data);
		} else {
			$dataregister = [
				'fullname' => htmlspecialchars($this->input->post('fullname', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'status_user' => "active"
			];
			$this->db->insert('users', $dataregister);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun anda sudah dibuat,Silahkan Login!</div>');
			redirect('auth');
		}
	}


	private function _login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		if ($user) {
			if ($user['status_user'] == "active") {
				if (password_verify($password, $user['password'])) {
					$datalogin = [
						'username' => $user['username'],
						'id' => $user['id']
					];
					$this->session->set_userdata($datalogin);

					redirect('admin');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Salah!</div>');

					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun tidak aktif!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun tidak terdaftar!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout.!</div>');
		redirect('auth');
	}
	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}
