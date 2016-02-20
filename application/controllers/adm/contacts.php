<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

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
			'title' => 'Contacts Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'contlist' => $this->contact->getAll()
		);		

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/contacts', $data);
		$this->load->view('adm/footer', $data);			
	}

	public function i_ing() {
		$data = array(
			'contact_content' => $this->input->post('contact_content'),
			'contact_type' => $this->input->post('contact_type') 
		);	
		$this->contact->insert($data);
		$this->session->set_flashdata('msg', '<b>New contact</b> added!');
		redirect('adm/contacts','refresh');
	}

	public function u_ing($type,$id,$name) {
		$data = array('contact_content' => $this->input->post('contact_content'));
		$this->contact->update($id,$data);
		$this->session->set_flashdata('msg', 'One <b>'.$type.'</b> contact has been successully updated.');
		redirect('adm/Contacts','refresh');
	}

	public function delete($type,$id,$name) {
		$this->contact->delete($id);
		$this->session->set_flashdata('msg', 'One <b>'.$type.'</b> contact has been successully removed.');
		redirect('adm/Contacts','refresh');
	}



}

/* End of file contacts.php */
/* Location: ./application/controllers/adm/contacts.php */