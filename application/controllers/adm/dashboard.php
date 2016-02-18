<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		// print_r($this->session->all_userdata());
		$data = array(
			'title' => 'Delight Skate Supply',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar
			);
		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/dashboard', $data);
		$this->load->view('adm/footer', $data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/adm/dashboard.php */