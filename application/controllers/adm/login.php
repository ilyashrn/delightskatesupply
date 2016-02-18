<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('logged')) {
			redirect('adm/dashboard','refresh');
		}
	}
	public function index()
	{
		$data = array('title' => 'Administrator Login Page');
		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/content/login', $data);
		$this->load->view('adm/footer');
	}

	function process() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));	
		if ($this->administrator->checkEntry('user_username',$username)) {
			$admin = $this->administrator->loginCheck($username,$password);
			if ($admin) {
				
				$array = array(
					'logged' => true,
					'user' => $username,
					'displayname' => $admin['user_displayname'],
					'avatar' => $admin['user_avatar']
				);
				$this->session->set_userdata($array);
				
				
				if($this->input->post('remember_me')) {
		            $cookie = $this->input->cookie('ci_session'); // we get the cookie
		            $this->input->set_cookie('ci_session', $cookie, '35580000'); // and add one year to it's expiration
		        }
				redirect('adm/dashboard','refresh');
			} else {
				$this->session->set_flashdata('username', $username);
				$this->session->set_flashdata('msg', 'Sorry, password you typed is incorrect. Please try again.');
				redirect('adm/login','refresh');
			}	
		} else {
			$this->session->set_flashdata('username', $username);
			$this->session->set_flashdata('msg', 'Sorry, username is not in the database. Please try again.');
			redirect('adm/login','refresh');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/adm/login.php */