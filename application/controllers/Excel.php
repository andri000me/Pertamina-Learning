<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

	public function index()
	// {
	// 	$data = array(
	// 		'stok'=>$this->M_MasterData->get_stok()
	// 	);
	// 	$this->load->view('stok_brg', $data);
	// }
	{
		$this->load->view('template_excel_wb');
	}

}