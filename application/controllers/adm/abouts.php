<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abouts extends CI_Controller {

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
			'title' => 'About Information Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'about' => $this->about->get()
		);		

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/about', $data);
		$this->load->view('adm/footer', $data);			
	}

	public function u_ing()
	{
		$input = array('content' => $this->input->post('content'));
		$this->about->update($input);
		$this->session->set_flashdata('msg', 'About information has been updated.');
		redirect('adm/abouts','refresh');
	}
}

/* End of file about.php */
/* Location: ./application/controllers/adm/about.php */