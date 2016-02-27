<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutt extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'About Delight Skate Supply',
			'about' => $this->about->get(),
			'contacts' => $this->contact->getAll(),
			'twitter' => $this->contact->get('c.contact_type','4'),
			'facebook' => $this->contact->get('c.contact_type','3'),
			'instagram' => $this->contact->get('c.contact_type','1'),
			'phone' => $this->contact->get('c.contact_type','9'),
			'email' => $this->contact->get('c.contact_type','8'),
			'address' => $this->contact->get('c.contact_type','7'),
		);
		$this->load->view('html_head',$data);
		$this->load->view('header',$data);
		$this->load->view('content/about',$data);
		$this->load->view('footer',$data);	
		$this->load->view('html_footer', $data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */