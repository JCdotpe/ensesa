<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula1b extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
	}

	public function index()
	{
		$data['title'] = 'Doc. ENSENSA 01B';
		$data['nav'] = 'cedula1b';
		$data['main_content'] = 'cedulas/cedula1b';

		$this->load->view('frontend/template', $data);
	}

}