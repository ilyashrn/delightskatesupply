<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galleries extends CI_Controller {

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
			'title' => 'Gallery Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'galleries' => $this->gallery->getAll()
		);

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/gallery', $data);
		$this->load->view('adm/footer', $data);				
	}

	public function i_ing()
	{
		if ($this->input->post('ins') !== false) {
			if ($_FILES['gallery']['size'] !== 0) {
				$config['upload_path'] = './assets/gallery/';
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
						'gallery_file' => $file_name,
						'gallery_desc' => $this->input->post('gallery_desc') 
					);
					$this->gallery->insert($input);
					$this->session->set_flashdata('msg', 'Insert new photo on gallery list succesfull :)');
				} else {
					$this->session->set_flashdata('warn', $this->upload->display_errors());
				}
			} else {
				$this->session->set_flashdata('warn', 'Please select a file to upload');
			}	
		}
		redirect('adm/galleries','refresh');
	}

	public function u_ing($id)
	{
		$input = array('gallery_desc' => $this->input->post('gallery_desc'));
		$this->gallery->update($id,$input);
		$this->session->set_flashdata('msg', 'Photo caption has been updated.');
		redirect('adm/galleries','refresh');
	}

	public function delete($file_name,$id)
	{
		$this->gallery->delete($id);
		unlink('./assets/gallery/'.$file_name);
		$this->session->set_flashdata('msg', 'One photo of gallery has been succesfully removed.');
		redirect('adm/galleries','refresh');
	}
}

/* End of file gallery.php */
/* Location: ./application/controllers/adm/gallery.php */