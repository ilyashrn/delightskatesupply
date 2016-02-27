<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller {

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
			'title' => 'Home Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'galleries' => $this->home->getAll()
		);

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/home', $data);
		$this->load->view('adm/footer', $data);				
	}

	public function i_ing()
	{
		if ($this->input->post('ins') !== false) {
			if ($_FILES['gallery']['size'] !== 0) {
				$config['upload_path'] = './assets/home/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['encrypt_name'] = TRUE;
				$config['overwrite'] = FALSE;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$upload = $this->upload->do_upload('gallery');	
				$upload_data = $this->upload->data(); //UPLOAD DATA AFTER UPLOADING
				$file_name = $upload_data['file_name']; //RETRIEVING FILE NAME

				if ($upload) {
					$input = array(
						'pict_file' => $file_name,
						'stat' => 0
					);
					$this->home->insert($input);
					$this->session->set_flashdata('msg', 'Insert new photo on gallery list succesfull :)');
				} else {
					$this->session->set_flashdata('warn', $this->upload->display_errors());
				}
			} else {
				$this->session->set_flashdata('warn', 'Please select a file to upload');
			}	
		}
		redirect('adm/homes','refresh');
	}

	public function delete($file_name,$id)
	{
		$this->home->delete($id);
		unlink('./assets/home/'.$file_name);
		$this->session->set_flashdata('msg', 'One home photo has been succesfully removed.');
		redirect('adm/homes','refresh');
	}
}

/* End of file gallery.php */
/* Location: ./application/controllers/adm/gallery.php */