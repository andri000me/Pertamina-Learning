<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Raport extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	// SHOW DATA WORKBOOK
	public function index()
	{
		$this->load->view('v_raport');
	}

}