<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$this->do_login();
		}
	}
	private function do_login()
	{
		$username =  $this->input->post('username');
		$password =  md5($this->input->post('password'));

		$user     =  $this->db->get_where('tb_user', [
			'user' => $username
		])->row_array();
		date_default_timezone_set('Asia/Jakarta');
		$now = date("Y-m-d H:i:s");
		if ($user) {
			if ($user['status'] == "1") {
				if ($password == $user['pass']) {
					$data = [
						'username'  => $user['user'],
						'nama'      => $user['fullname'],
						'akun'      => $user['id'],
						'telp'     	=> $user['no_hp']
					];
					$this->session->set_userdata($data);
					$this->db->query("UPDATE tb_user SET last_login='$now' WHERE user='$username' ");
					redirect('../home');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your password is wrong</div>');
					redirect('../auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account is not actived/disabled</div>');
				redirect('../auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your password is wrong</div>');
			redirect('../auth');
		}
	}
}
