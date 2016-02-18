<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		if ($this->input->cookie('ci_session')) {
			delete_cookie('ci_session');	
		}	
		redirect('adm/login','refresh');
	}

}

/* End of file logout.php */
/* Location: ./application/controllers/adm/logout.php */