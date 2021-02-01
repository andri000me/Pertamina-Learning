<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	public function index()
	{
		$data = array(
			'user'=>$this->M_MasterData->get_user()
		);
		$this->load->view('profile',$data);
	}

	public function updatefoto(){
        $config['upload_path']="./assets/images/users";
		$config['allowed_types']='jpeg|jpg|png';
		$config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("foto")){
            $file = $this->upload->data();
			
			$gambar= $file['file_name']; 
			
			$data = array(
				'foto' => $gambar
			);
             
            $result= $this->M_MasterData->update_foto('tb_user', $data);
            echo json_decode($result);
		}
		redirect('Profile');
	 }
	 
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
		redirect('Profile');	
	}

}