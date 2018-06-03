<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelolaansampah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('layout/main_header');
		$this->load->view('sampah/toolbar');
		$this->load->view('sampah/listpost');
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