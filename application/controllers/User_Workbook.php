<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Workbook extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	// SHOW DATA WORKBOOK
	public function index()
	{
		$data = array(
			'workbook'=>$this->M_MasterData->get_workbook()
		);
		$this->load->view('v_workbook', $data);
	}

}