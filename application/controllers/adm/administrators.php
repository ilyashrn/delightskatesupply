<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrators extends CI_Controller {

	public $username;
	public $displayname;
	public $avatar;
	public function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		if (!$this->session->userdata('logged')) {
			redirect('adm/login','refresh');
		} else {
			$this->username = $this->session->userdata('user');
			$this->displayname = $this->session->userdata('displayname');
			$this->avatar = $this->session->userdata('avatar');
		}	
	}

	public function index()
	{
		$data = array(
			'title' => 'Administrator Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'adminlist' => $this->administrator->getAll()
		);
		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/admin-list', $data);
		$this->load->view('adm/footer', $data);		
	}

	public function is_username_exist($username) {
		if ($this->administrator->checkEntry('user_username',$username)) {
			return false;
		} else {
			return true;
		}
	}

	public function i_ing() {
		$this->form_validation->set_rules('user_username','Username','callback_is_username_exist');
		if ($this->form_validation->run()) {
			if ($_FILES['user_avatar']['size'] !== 0) {
				$config['upload_path'] = './assets/profil_photo/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['encrypt_name'] = TRUE;
				$config['overwrite'] = FALSE;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$upload = $this->upload->do_upload('user_avatar');	
				$upload_data = $this->upload->data(); //UPLOAD DATA AFTER UPLOADING
				$file_name = $upload_data['file_name']; //RETRIEVING FILE NAME
			}

			$data = array(
				'user_displayname' => $this->input->post('user_displayname'),
				'user_username' => $this->input->post('user_username'), 
				'user_password' => md5($this->input->post('user_password')),
				'id_prev' => $this->input->post('id_prev'), 
				'user_avatar' => $file_name
			);

			$this->administrator->insert($data);
			$this->session->set_flashdata('msg', 'Welldone, new user is inserted.');	
		} else {
			$this->session->set_flashdata('min', true);
			$this->session->set_flashdata('username', $this->input->post('user_username'));
			$this->session->set_flashdata('displayname', $this->input->post('user_displayname'));
			$this->session->set_flashdata('warn', 'Username is exist. Please choose another name.');
		}
		
		redirect('adm/administrators','refresh');
	}

	public function u_ing($id,$username) {
		if ($_FILES['user_avatar']['size'] !== 0) {
			$config['upload_path'] = './assets/profil_photo/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['encrypt_name'] = TRUE;
			$config['overwrite'] = FALSE;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$upload = $this->upload->do_upload('user_avatar');	
			$upload_data = $this->upload->data(); //UPLOAD DATA AFTER UPLOADING
			$file_name = $upload_data['file_name']; //RETRIEVING FILE NAME
		} else {
			$file_name = $this->input->post('current_avatar');
		}
		$update = array(
			'user_displayname' => $this->input->post('user_displayname'), 
			'user_username' => $this->input->post('user_username'), 
			'user_avatar' => $file_name
		);
		$this->administrator->update($id,$update);
		$this->session->set_flashdata('msg', $username."'s profile has been updated.");
		redirect('adm/administrators','refresh');
	}

	public function u_pass() {
		$password = array('user_password' => md5($this->input->post('user_password')));
		$id = $this->input->post('id_user');
		$this->administrator->update($id,$password);
		$this->session->set_flashdata('msg', 'Password successfully changed.');
		redirect('adm/administrators','refresh');
	}

	public function u_prev() {
		$prev = array('id_prev' => $this->input->post('id_prev2'));
		$id = $this->input->post('id_user');
		$this->administrator->update($id,$prev);
		$this->session->set_flashdata('msg', 'Previlege has been successfully changed.');
		redirect('adm/administrators','refresh');
	}

	public function delete($id,$username) {
		$this->administrator->delete($id);
		$this->session->set_flashdata('msg', $username.' has been removed. Well done.');
		redirect('adm/administrators','refresh');
	}

	public function del_photo($file,$id,$username) {
		$array = array('user_avatar' => '');
		unlink("./assets/profil_photo/".$file);
		$this->administrator->update($id,$array);
		$this->session->set_flashdata('msg', $username."'s avatar photo has been removed.");
		redirect('adm/administrators','refresh');
	}
}

/* End of file administrators.php */
/* Location: ./application/controllers/adm/administrators.php */