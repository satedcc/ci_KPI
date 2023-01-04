<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');
	}
	public function index()
	{
		$data['user'] = $this->m_register->get()->result();
		$this->load->view('template/layout_header');
		$this->load->view('template/layout_sidebar');
		$this->load->view('home', $data);
		$this->load->view('template/layout_footer');
	}
	public function edit($id)
	{
		$data['row'] = $this->m_register->getById($id);
		$this->load->view('template/layout_header');
		$this->load->view('template/layout_sidebar');
		$this->load->view('edit_user', $data);
		$this->load->view('template/layout_footer');
	}
	public function multiuser($id)
	{
		$data['row'] = $this->m_register->getById($id);
		$this->load->view('template/layout_header');
		$this->load->view('template/layout_sidebar');
		$this->load->view('multi_user', $data);
		$this->load->view('template/layout_footer');
	}
}
