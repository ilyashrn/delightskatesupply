<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index()
	{
		$this->load->view('html_head');
		$this->load->view('content/404');	
	}

}

/* End of file error.php */
/* Location: ./application/controllers/error_404/error.php */