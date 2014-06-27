<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
	}

	public function index()
	{
		$data['title'] = 'Doc. ENSENSA 01';
		$data['nav'] = 'cedula1';
		$data['main_content'] = 'cedulas/cedula1';

		$this->load->view('frontend/template', $data);
	}

}