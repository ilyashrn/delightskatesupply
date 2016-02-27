<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

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
			'title' => 'Video Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'galleries' => $this->gallery->getAllperType('2')
		);

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/video', $data);
		$this->load->view('adm/footer', $data);				
	}

	public function i_ing()
	{
		$input = array(
			'gallery_file' => $this->input->post('gallery_file'),
			'gallery_type' => '2' 
		);
		$this->gallery->insert($input);
		$this->session->set_flashdata('msg', 'Insert new youtube link on gallery list succesfull :)');
		redirect('adm/videos','refresh');
	}

	public function delete($id)
	{
		$this->gallery->delete($id);
		$this->session->set_flashdata('msg', 'One link has been succesfully removed.');
		redirect('adm/videos','refresh');
	}

}

/* End of file videos.php */
/* Location: ./application/controllers/adm/videos.php */