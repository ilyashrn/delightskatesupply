<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'Delight Skate Supply',
			'home' => $this->home->getActive()
		);
		$this->load->view('html_head',$data);
		$this->load->view('header',$data);
		$this->load->view('content/index',$data);
		$this->load->view('html_footer', $data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */