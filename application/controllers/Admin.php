<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
	}

	
	public function index()
	{
		$this->load->view('layout/admin_header');
		$this->load->view('admin/main');
	}

	public function lihatberita()
	{
		$data['judul'] = "List Berita";
		//$data['user'] = $this->query->GetdataDosen()->result();
		$this->load->view('layout/admin_header',$data);
		$this->load->view('admin/berita',$data);
	}
}
