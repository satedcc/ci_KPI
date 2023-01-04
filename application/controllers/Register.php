<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');
	}
	public function index()
	{
		$this->load->view('register');
	}
	public function save()
	{
		$data['user'] 		= $this->input->post('username');
		$data['pass'] 		= md5($this->input->post('password'));
		$data['re_pass'] 	= $this->input->post('password');
		$data['full_name'] 	= $this->input->post('nama');
		$data['email'] 		= $this->input->post('username');
		$data['level'] 		= 'admin';
		$data['token'] 		= '0';
		$data['join_date'] 	= date("Y-m-d H:i:s");

		$cek = $this->m_register->cekEmail($this->input->post('username'));
		if ($cek > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email telah terdaftar</div>');
		} else {
			$this->m_register->save($data);
		}
		redirect('../register/');
	}
	public function update()
	{
	}
}
