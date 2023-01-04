<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forget extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');
	}
	public function index()
	{
		$this->load->view('forget');
	}
	public function otp()
	{
		$this->load->view('otp');
	}
	public function newpass()
	{
		$this->load->view('newpass');
	}
	public function verif()
	{
		$cek = $this->m_register->cekEmail($this->input->post('email'));
		if ($cek > 0) {
			$this->session->set_flashdata('email', $this->input->post('email'));
			$data['token_id'] = angka(4);
			$this->m_register->updateByEmail($data, $this->input->post('email'));
			redirect('../forget/otp/');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
		}
		redirect('../forget/');
	}
	public function otproses()
	{
		$token = $this->input->post('kode_1') . $this->input->post('kode_2') . $this->input->post('kode_3') . $this->input->post('kode_4');
		$cek = $this->m_register->cekToken($token);

		if ($cek > 0) {
			$this->session->set_flashdata('token', $token);
			redirect('../forget/newpass/');
		} else {
			$this->session->set_flashdata('email', $this->input->post('email'));
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kode OTP salah</div>');
			redirect('../forget/otp/');
		}
	}
}
