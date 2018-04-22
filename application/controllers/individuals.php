<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class individuals extends CI_Controller {

	
	public function index()
	{
		$data = array();
		$data['active'] = 'individuals';
		$data['sidebar'] = $this->load->view('template/sidebar', $data, TRUE);
		$data['topnav'] = $this->load->view('template/topnav', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);
		$this->load->view('individuals/individuals', $data);
	}

	public function add()
	{
		$data = array();
		$data['active'] = 'individuals';
		$data['sidebar'] = $this->load->view('template/sidebar', $data, TRUE);
		$data['topnav'] = $this->load->view('template/topnav', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);
		$this->load->view('individuals/add_individual', $data);
	}

}
