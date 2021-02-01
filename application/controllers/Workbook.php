<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workbook extends CI_Controller {

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
		$this->load->view('workbook', $data);
	}

	// CREATE WORKBOOK
	public function create(){
        $config['upload_path']="./assets/PDF";
		$config['allowed_types']='pdf|jpg|png';
		$config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("scan_lp")){
            $file = $this->upload->data();
			
			$timestamp = $this->input->post('timestamp');
			$employee_id = $this->input->post('employee_id');
			$name_employee = $this->input->post('name_employee');
			$module_1_1 = $this->input->post('module_1_1');
			$module_1_2 = $this->input->post('module_1_2');
			$module_2_1 = $this->input->post('module_2_1');
			$module_2_2 = $this->input->post('module_2_2');
			$module_3_1 = $this->input->post('module_3_1');
			$module_3_2 = $this->input->post('module_3_2');
			$module_3_3 = $this->input->post('module_3_3');
			$module_4_1 = $this->input->post('module_4_1');
			$module_4_2 = $this->input->post('module_4_2');
			$module_4_3 = $this->input->post('module_4_3');
			$module_5_1 = $this->input->post('module_5_1');
			$module_6_1 = $this->input->post('module_6_1');
			$module_6_2 = $this->input->post('module_6_2');
			$module_6_3 = $this->input->post('module_6_3');
			$tgl_upload = $this->input->post('tgl_upload');
			$status_upload = $this->input->post('status_upload');
			$pdf= $file['file_name']; 
			
			$data = array(
				'timestamp' => $timestamp,
				'employee_id' => $employee_id,
				'name_employee' => $name_employee,
				'module_1_1' => $module_1_1,
				'module_1_2' => $module_1_2,
				'module_2_1' => $module_2_1,
				'module_2_2' => $module_2_2,
				'module_3_1' => $module_3_1,
				'module_3_2' => $module_3_2,
				'module_3_3' => $module_3_3,
				'module_4_1' => $module_4_1,
				'module_4_2' => $module_4_2,
				'module_4_3' => $module_4_3,
				'module_5_1' => $module_5_1,
				'module_6_1' => $module_6_1,
				'module_6_2' => $module_6_2,
				'module_6_3' => $module_6_3,
				'scan_lp' => $pdf,
				'tgl_upload' => $tgl_upload,
				'status_upload' => $status_upload
			);
			
			$data2 = array(
				'username'    => $employee_id,
				'password' 	  => '1234',
				'user_create' => date('Y-m-d'),
				'user_role'   => 'Employee',
				'NIP'         => $employee_id,
				'full_name'   => $name_employee
			);

			$this->M_MasterData->input_user('tb_user', $data2);
            $result= $this->M_MasterData->input_data_workbook('tb_workbook', $data);
            echo json_decode($result);
		}
		redirect('Workbook');
     }

	 // UPDATE DATA WORKBOOK
	 public function update($workbook_id)
	{
		if(isset($_POST['update']))
		{	
			$data = array(
				'timestamp'=>$this->input->post('timestamp'),
				// 'employee_id'=>$this->input->post('employee_id'),
				// 'name_employee'=>$this->input->post('name_employee'),
				'module_1_1'=>$this->input->post('module_1_1'),
				'module_1_2'=>$this->input->post('module_1_2'),
				'module_2_1'=>$this->input->post('module_2_1'),
				'module_2_2'=>$this->input->post('module_2_2'),
				'module_3_1'=>$this->input->post('module_3_1'),
				'module_3_2'=>$this->input->post('module_3_2'),
				'module_3_3'=>$this->input->post('module_3_3'),
				'module_4_1'=>$this->input->post('module_4_1'),
				'module_4_2'=>$this->input->post('module_4_2'),
				'module_4_3'=>$this->input->post('module_4_3'),
				'module_5_1'=>$this->input->post('module_5_1'),
				'module_6_1'=>$this->input->post('module_6_1'),
				'module_6_2'=>$this->input->post('module_6_2'),
				'module_6_3'=>$this->input->post('module_6_3'),
				'tgl_upload'=>$this->input->post('tgl_upload'),
				'status_upload'=>$this->input->post('status_upload')
			);
			
			$this->M_MasterData->update_data_workbook('tb_workbook',$data, $workbook_id);
		} 
		redirect('Workbook');	
	}

	// DELETE DATA WORKBOOK
	public function delete(){
		
		$workbook_id['workbook_id'] = $this->uri->segment(3);
		
		$this->M_MasterData->DeleteDataWorkbook('tb_workbook',$workbook_id);

		redirect('Workbook');	
	}

	// UPLOAD CVS DATA WORKBOOK
	public function upload()
	{
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$config['upload_path'] = realpath('excel');
		$config['allowed_types'] = 'xlsx|xls|csv';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()) {

			$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
			redirect('Workbook/');

		} else {

			$data_upload = $this->upload->data();

			$excelreader     = new PHPExcel_Reader_Excel2007();
			$loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
			$sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

			$data = array();

			$no = 1;
			foreach($sheet as $row){
					if($no > 1){
						array_push($data, array(
							'timestamp'       => $row['A'],
							'employee_id'     => $row['B'],
							'name_employee'   => $row['C'],
							'module_1_1'      => $row['D'],
							'module_1_2'      => $row['E'],
							'module_2_1'      => $row['F'],
							'module_2_2'      => $row['G'],
							'module_3_1'      => $row['H'],
							'module_3_2'      => $row['I'],
							'module_3_3'      => $row['J'],
							'module_4_1'      => $row['K'],
							'module_4_2'      => $row['L'],
							'module_4_3'      => $row['M'],
							'module_5_1'      => $row['N'],
							'module_6_1'      => $row['O'],
							'module_6_2'      => $row['P'],
							'module_6_3'      => $row['Q'],
							'scan_lp'      	  => 'No Action',
							'tgl_upload'      => date('Y-m-d'),
							'status_upload'   => $this->session->userdata('fullname'),
						));
					}
					$data2 = array(
							'username'    => $row['B'],
							'password' 	  => '1234',
							'user_create' => date('Y-m-d'),
							'user_role'   => 'Employee',
							'NIP'         => $row['B'],
							'full_name'   => $row['C']
						);

						$this->M_MasterData->input_user('tb_user', $data2);
				$no++;
			}
			$this->db->insert_batch('tb_workbook', $data);
			unlink(realpath('excel/'.$data_upload['file_name']));

			$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
			redirect('Workbook/');

		}
	}

	// UPLOAD FILE MODAL "No Action"
	public function uploadfile($workbook_id){
        $config['upload_path']="./assets/PDF";
		$config['allowed_types']='pdf|jpg|png';
		$config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("scan_lp")){
            $file = $this->upload->data();
			
			$pdf= $file['file_name']; 
			
			$data = array(
				'scan_lp' => $pdf
			);
             
			$result= $this->M_MasterData->update_data_workbook('tb_workbook',$data, $workbook_id);
            echo json_decode($result);
		}
		redirect('Workbook');
     }
		 

}