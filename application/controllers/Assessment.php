<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assessment extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	public function index()
	{
		$data = array(
			'assesspen'=>$this->M_MasterData->get_assessment()
		);
		$this->load->view('assessment', $data);
	}

	// CREATE PENILAIAN ASSESSMENT
	public function create()
	{
		if(isset($_POST['submit']))
		{
			$NIP = $this->input->post('NIP');
			$defenisi = $this->input->post('defenisi');
			$tujuan = $this->input->post('tujuan');
			$proses = $this->input->post('proses');
			$contoh = $this->input->post('contoh');
			$analisis = $this->input->post('analisis');
			$solusi = $this->input->post('solusi');
			$periode = $this->input->post('periode');

			$data = array(
				'NIP' => $NIP,
				'defenisi' => $defenisi,
				'tujuan' => $tujuan,
				'proses' => $proses,
				'contoh' => $contoh,
				'analisis' => $analisis,
				'solusi' => $solusi,
				'periode' => $periode
			);
			$this->M_MasterData->input_penilaian('tb_penilaian', $data);
		} 
		redirect('Assessment');	
	}

	// UPDATE PENILAIAN
	public function update($id_pen)
	{
		if(isset($_POST['update']))
		{	
			$data = array(
				'defenisi'=>$this->input->post('defenisi'),
				'tujuan'=>$this->input->post('tujuan'),
				'proses'=>$this->input->post('proses'),
				'contoh'=>$this->input->post('contoh'),
				'analisis'=>$this->input->post('analisis'),
				'solusi'=>$this->input->post('solusi')
			);
			$this->M_MasterData->update_data_penilaian('tb_penilaian',$data, $id_pen);
		} 
		redirect('Assessment');	
	}

	// DELETE PENILAIAN
	public function delete(){
		
		$id_pen['id_pen'] = $this->uri->segment(3);
		
		$this->M_MasterData->DeleteDataPenilaian('tb_penilaian',$id_pen);

		redirect('Assessment');	
	}


}