<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'Media | Delight Skate Supply',
			'gallery' => $this->gallery->getAll(),
			'twitter' => $this->contact->get('c.contact_type','4'),
			'facebook' => $this->contact->get('c.contact_type','3'),
			'instagram' => $this->contact->get('c.contact_type','1')
		);
		$this->load->view('html_head',$data);
		$this->load->view('header',$data);
		$this->load->view('content/media',$data);
		$this->load->view('footer',$data);	
		$this->load->view('html_footer', $data);
	}

}

/* End of file media.php */
/* Location: ./application/controllers/media.php */