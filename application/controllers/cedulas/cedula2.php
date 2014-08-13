<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula2 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Doc. ENSENSA 02';
		$data['nav'] = 'cedula2';
		$data['main_content'] = 'cedulas/cedula2';

		$this->load->view('frontend/template', $data);
	}
	public function pcisneros()
	{
		$data['title'] = 'Doc. ENSENSA 02';
		$data['nav'] = 'cedula2';
		$data['main_content'] = 'cedulas/cedula2_II';

		$this->load->view('frontend/template', $data);
	}

}