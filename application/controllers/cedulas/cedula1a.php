<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula1a extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
	}

	public function index()
	{
		$data['title'] = 'Doc. ENSENSA 01A';
		$data['nav'] = 'cedula1a';
		$data['main_content'] = 'cedulas/cedula1a';

		$this->load->view('frontend/template', $data);
	}

}