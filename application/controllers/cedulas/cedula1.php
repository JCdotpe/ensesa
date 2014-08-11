<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('cedula1_model');
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->msgType = array('alert-success','alert-info','alert-warning','alert-danger');
		//$this->load->library('session');
	}

	public function index()
	{

		$data['title'] = 'Doc. ENSENSA 01';
		$data['nav'] = 'cedula1';
		$data['main_content'] = 'cedulas/cedula1/cedula1';
		$this->form_validation->set_message('required', '%s [campo requerido]');
		$this->form_validation->set_message('alpha_numeric', '%s [seleccione una opcion valida]');
		$fieldsName = $this->cedula1_model->getFieldsName('PadVivienda');
		$fieldsName = array_diff($fieldsName, array('Cod_Vivienda'));//
		foreach ($fieldsName as $key => $value) {
				if (in_array($value, array('A_1_Cod_Dpto','A_2_Cod_Prov','A_3_Cod_Dist'))) {
					$this->form_validation->set_rules($value,$value,'alpha_numeric');
				}else{
					$this->form_validation->set_rules($value,$value,'required');
				}
		}

        if ($this->form_validation->run() === TRUE)
        {
        	foreach ($fieldsName as $key => $value) {
        		$dataFind[$value] = $this->input->post($value);
        	}
        	$existeCodigo = $this->cedula1_model->existeCodigo($dataFind);
        	if (!is_null($existeCodigo)) {
        		redirect('cedulas/cedula1/cod/'.$existeCodigo);
        	}else{
        		$data['msgBox'] = array('type'=>$this->msgType[2],'title'=>'NO EXISTE','msg'=>'No se encontró datos con la información ingresada');
        		$this->load->view('frontend/template', $data);
        	}
			
        }else{
        	if ($this->session->flashdata('msgBox')) {//redireccionado desde cod
        		$data['msgBox'] = array('type'=>$this->msgType[2],'title'=>'NO EXISTE','msg'=>'No se encontró datos con la información ingresada');
        	}
			$this->load->view('frontend/template', $data);
        }



		
	}

	function cod($cod_vivienda,$Nro_Hogar = null)
	{
		$data['Cod_Vivienda'] = $cod_vivienda;
		$data['title'] = 'Doc. ENSENSA 01';
		$data['nav'] = 'cedula1';
		$data['main_content'] = 'cedulas/cedula1/cedula1';
    	$data['PadVivienda'] = $this->cedula1_model->existeCodigo($cod_vivienda);
    	if (is_null($Nro_Hogar)) {
	    	if (!is_null($data['PadVivienda'])) {//si obtiene rows
	    	
	    		$data['E1_B_13_Nro_Hogar'] = null;
	    		$this->load->view('frontend/template', $data);

	    	}else{
	    		$this->session->set_flashdata('msgBox',TRUE);
	    		redirect('cedulas/cedula1/');
	    	}
    	}else{
    		$arrayWhere = array('Cod_Vivienda'=>$cod_vivienda,'E1_B_13_Nro_Hogar'=> $Nro_Hogar);
    		$dataSend['E1_Vivienda_Hogar'] = $this->cedula1_model->selectRows('E1_Vivienda_Hogar',null,$arrayWhere);
    		$dataSend['E1_Visita_VH'] = $this->cedula1_model->selectRows('E1_Visita_VH',null,$arrayWhere);
    		$dataSend['E1_Persona'] = $this->cedula1_model->selectRows('E1_Persona',null,$arrayWhere);
    		$dataSend['E1_Persona_Empleo'] = $this->cedula1_model->selectRows('E1_Persona_Empleo',null,$arrayWhere);
    		$dataSend['E1_Conservacion_Bosque'] = $this->cedula1_model->selectRows('E1_Conservacion_Bosque',null,$arrayWhere);
    		echo json_encode($dataSend);
    	}

	}



	function test()
	{
		$get = $this->input->post('data');
		$data = array();
		foreach ($get as $key => $row) {
			echo json_encode($row);
			foreach ($row as $idx => $value) {
				//var_dump($value);
				//$data[$value['name']] = $value['value'];
				//echo($value);
			}
			
			//echo var_dump($value);
		}
		
	}

	function save($tab)
	{
		if ($this->input->post('Cod_Vivienda')!="" && $this->input->post('E1_B_13_Nro_Hogar')!="") {	
			if ($tab == 1) {//E1_Vivienda_Hogar
				$tableLocal = 'E1_Vivienda_Hogar';
				$fieldsName = $this->cedula1_model->getFieldsName($tableLocal);
				$dataModel =  array();
				foreach ($fieldsName as $key => $value) {
					if (!in_array($value, array('E1_200_Informante','E1_200_Obs','E1_300_Obs','E1_400_Informante','E1_400_Obs'))) {
						$dataModel[$value] = ($this->input->post($value)=="") ? NULL : $this->input->post($value);
					}
				}
				$dataWhere = array('Cod_Vivienda'=>$dataModel['Cod_Vivienda'],'E1_B_13_Nro_Hogar'=>$dataModel['E1_B_13_Nro_Hogar']);
				$existeRow = $this->cedula1_model->checkExistRow($tableLocal,$dataWhere);
				if ($existeRow) {
					$dataModel = array_diff_assoc($dataModel,$dataWhere);
					$afectados = $this->cedula1_model->updateRow($tableLocal,$dataModel,$dataWhere);
					if ($afectados == 1) {
						//visita
							$dataVisita = array();
							$visita = json_decode($this->input->post('visitaData'),true);
							$cont = 0;
							foreach ( $visita as $i => $row) {

								foreach ($row as $key => $value) {
									$dataVisita[$value['name']] =  ($value['value'] == "") ? null : $value['value'];
								}
								$dataWhere['E1_C_Visita_Nro'] = $dataVisita['E1_C_Visita_Nro'];
								$existeVisita = $this->cedula1_model->checkExistRow('E1_Visita_VH',$dataWhere);
								if ($existeVisita) {
									$cont+= $afectados = $this->cedula1_model->updateRow('E1_Visita_VH',$dataVisita,$dataWhere);
								}else{
									$dataVisita['Cod_Vivienda'] 		= $dataWhere['Cod_Vivienda'];
									$dataVisita['E1_B_13_Nro_Hogar'] 	= $dataWhere['E1_B_13_Nro_Hogar'];
									$cont+= $afectados = $this->cedula1_model->insertRow('E1_Visita_VH',$dataVisita);
								}
								
							}
							if ($cont==7) {
								echo json_encode(array('response'=>'update','msg' =>'Éxito: Se actualizó satisfactoriamente' ));
							}
						
					}else{
						echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de actualizar' ));
					}
				}else{
					$afectados = $this->cedula1_model->insertRow($tableLocal,$dataModel);
					if ($afectados == 1) {
						echo json_encode(array('response'=>'insert','msg' =>'Éxito: Se insertó satisfactoriamente' ));
					}else{
						echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de insertar' ));
					}
				}

			}else if($tab == 2){
				$tableLocal = 'E1_Persona';
				$dataAjax = $this->input->post('data');
				$fieldsName = $this->cedula1_model->getFieldsName($tableLocal);
				$dataModel =  array();
				foreach ($dataAjax as $idx => $row) {
					foreach ($row as $kk => $field) {
						//if (!in_array($value, array('E1_200_Informante','E1_200_Obs','E1_300_Obs','E1_400_Informante','E1_400_Obs'))) {
							$dataModel[$field['name']] = ($field['value']=="") ? NULL : $field['value'];
						//}
					}
					$dataModel['Cod_Vivienda'] = $this->input->post('Cod_Vivienda');
					$dataModel['E1_B_13_Nro_Hogar'] = $this->input->post('E1_B_13_Nro_Hogar');					
					$dataWhere = array('Cod_Vivienda'=>$dataModel['Cod_Vivienda'],'E1_B_13_Nro_Hogar'=>$dataModel['E1_B_13_Nro_Hogar'],'E1_201_Nro' =>$dataModel['E1_201_Nro']);
					$existeRow = $this->cedula1_model->checkExistRow($tableLocal,$dataWhere);
					if ($existeRow) {
						$dataModel = array_diff_assoc($dataModel,$dataWhere);
						$afectados = $this->cedula1_model->updateRow($tableLocal,$dataModel,$dataWhere);
						if ($afectados == 1) {
							echo json_encode(array('response'=>'update','msg' =>'Éxito: Se actualizó satisfactoriamente' ));
						}else{
							echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de actualizar' ));
						}
					}else{
						$afectados = $this->cedula1_model->insertRow($tableLocal,$dataModel);
						if ($afectados == 1) {
							echo json_encode(array('response'=>'insert','msg' =>'Éxito: Se insertó satisfactoriamente' ));
						}else{
							echo json_encode(array('response'=>'error','msg' =>'Error: Al mommento de insertar' ));
						}
					}
				}			
			}			
		}else{
			echo json_encode(array('response'=>'error','msg' =>'Error: Cod_Vivienda o Nro_Hogar vacios' ));
		}		

	}



}