<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertamanan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('layout/main_header');
		$this->load->view('pertamanan/content');

	}

	public function menu()
	{
		// $this->load->view('layout/main_header');
		// $this->load->view('smartcity/main');

	}

	public function tentang()
	{
		// $this->load->view('layout/main_header');
		// $this->load->view('smartcity/content');

	}
}