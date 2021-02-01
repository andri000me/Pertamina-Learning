<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteAdministrator extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	// SHOW DATA USER
	public function index()
	{
		$data = array(
			'user'=>$this->M_MasterData->get_user()
		);
		$this->load->view('site-administrator',$data);
	}

	// CREATE USER
	public function create()
	{
		if(isset($_POST['submit']))
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user_create = $this->input->post('user_create');
			$user_role = $this->input->post('user_role');
			$full_name = $this->input->post('full_name');
			$foto = $this->input->post('foto');

			$data = array(
				'username' => $username,
				'password' => $password,
				'user_create' => $user_create,
				'user_role' => $user_role,
				'full_name' => $full_name,
				'NIP' => $username,
				'foto' => $foto
			);
			$this->M_MasterData->input_user('tb_user', $data);
		} 
		redirect('SiteAdministrator');	
	}

	// UPDATE USER
	public function update($user_id)
	{
		if(isset($_POST['update']))
		{	
			$data = array(
				// 'username'=>$this->input->post('username'),
				'user_create'=>$this->input->post('user_create'),
				'user_role'=>$this->input->post('user_role'),
				// 'full_name'=>$this->input->post('full_name'),
				// 'NIP'=>$this->input->post('username'),
				// 'foto'=>$this->input->post('foto')
			);
			// var_dump($data);die();
			$this->M_MasterData->update_data_user('tb_user',$data, $user_id);
		} 
		redirect('SiteAdministrator');	
	}
	
	// UPDATE PASSWORD USER
	public function updatepassword($user_id)
	{
		if(isset($_POST['update']))
		{	
			$data = array(
				'password'=>$this->input->post('password')
			);
			// var_dump($data);die();
			$this->M_MasterData->update_data_user('tb_user',$data, $user_id);
		} 
		redirect('SiteAdministrator');	
	}

	// DELETE USER
	public function delete(){
		
		$user_id['user_id'] = $this->uri->segment(3);
		
		$this->M_MasterData->DeleteDataUser('tb_user',$user_id);

		redirect('SiteAdministrator');	
	}

}