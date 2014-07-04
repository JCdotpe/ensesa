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
	function test()
	{
		$get = $this->input->post('data');
		$data = array();
		foreach ($get as $key => $row) {
			foreach ($row as $idx => $value) {
				//var_dump($value);
				$data[$value['name']] = $value['value'];
				//echo($value);
			}
			
			//echo var_dump($value);
		}
		echo json_encode($data);
	}

}