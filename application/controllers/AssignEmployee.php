<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssignEmployee extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	// SHOW DATA AssignEmployee
	public function index()
	{
		$data = array(
			'assemployee'=>$this->M_MasterData->get_assignemployee()
		);
		$this->load->view('assign-employee', $data);
	}

	// CREATE DATA Assign Employee
	public function create()
	{
		if(isset($_POST['submit']))
		{
			$NIP = $this->input->post('NIP');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$start_time = $this->input->post('start_time');
			$score = $this->input->post('score');
			$status = $this->input->post('status');
			$deadline_course = $this->input->post('deadline_course');
			$clear_time = $this->input->post('clear_time');
			$directorate = $this->input->post('directorate');

			$data = array(
				'NIP' => $NIP,
				'username' => $username,
				'email' => $email,
				'start_time' => $start_time,
				'score' => $score,
				'status' => $status,
				'deadline_course' => $deadline_course,
				'clear_time' => $clear_time,
				'directorate' => $directorate
			);
			// var_dump($data);die();
			$this->M_MasterData->input_data_assign_employee('tb_eppm', $data);
		} 
		redirect('AssignEmployee');	
	}

	// Update Assign Employe
	public function update($employee_id)
	{
		if(isset($_POST['update']))
		{	
			$data = array(
				'NIP'=>$this->input->post('NIP'),
				'username'=>$this->input->post('username'),
				'email'=>$this->input->post('email'),
				'start_time'=>$this->input->post('start_time'),
				'score'=>$this->input->post('score'),
				'status'=>$this->input->post('status'),
				'deadline_course'=>$this->input->post('deadline_course'),
				'clear_time'=>$this->input->post('clear_time'),
				'directorate'=>$this->input->post('directorate')
			);
			// var_dump($data);die();
			$this->M_MasterData->update_data_assignemployee('tb_eppm',$data, $employee_id);
		} 
		redirect('AssignEmployee');	
	}
	
	// Delete Assign Employee
	public function delete(){
		
		$employee_id['employee_id'] = $this->uri->segment(3);
		
		// var_dump($employee_id);die();
		$this->M_MasterData->DeleteDataAssignEmployee('tb_eppm',$employee_id);

		redirect('AssignEmployee');	
	}
	
	// UPLOAD EXCEL DATA ASSIGNEMPLOYEE
	public function upload()
	{
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$config['upload_path'] = realpath('assignemployee');
		$config['allowed_types'] = 'xlsx|xls|csv';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()) {

			//upload gagal
			$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
			//redirect halaman
			redirect('AssignEmployee/');

		} else {

			$data_upload = $this->upload->data();

		// var_dump($data_upload);die();
			$excelreader     = new PHPExcel_Reader_Excel2007();
			$loadexcel         = $excelreader->load('assignemployee/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
			$sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

			$data = array();

			$no = 1;
			foreach($sheet as $row){
					if($no > 1){
						array_push($data, array(
							// 'employee_id'   	=> $row['A'],
							'NIP'   			=> $row['A'],
							'username'     		=> $row['B'],
							'email'      		=> $row['C'],
							'start_time'    	=> $row['D'],
							'score'      		=> $row['E'],
							'status'      		=> $row['F'],
							'deadline_course'   => $row['G'],
							'clear_time'      	=> $row['H'],
							'directorate'      	=> $row['I'],
						));
					}
						// $data2 = array(
						// 	'username'    => $row['A'],
						// 	'password' 	  => '1234',
						// 	'user_create' => date('Y-m-d'),
						// 	'user_role'   => 'Employee',
						// 	'NIP'         => $row['A'],
						// 	'full_name'   => $row['B']
						// );
						// var_dump($data);die();
						// $this->M_MasterData->input_user('tb_user', $data2);

				$no++;
			}
			// var_dump($data);exit();
			$this->db->insert_batch('tb_eppm', $data);
			unlink(realpath('assignemployee/'.$data_upload['file_name']));

			//upload success
			$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
			//redirect halaman
			redirect('AssignEmployee/');

		}

	}
}