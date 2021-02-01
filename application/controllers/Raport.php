<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raport extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	public function index()
	// {
	// 	$data = array(
	// 		'stok'=>$this->M_MasterData->get_stok()
	// 	);
	// 	$this->load->view('stok_brg', $data);
	// }
	{
		$this->load->view('raport');
	}

}