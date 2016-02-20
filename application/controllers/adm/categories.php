<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

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
			'title' => 'Categories Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'catlist' => $this->category->getAll()
		);

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/cats-list', $data);
		$this->load->view('adm/footer', $data);			
	}

	public function i_ing()
	{
		$data = array('cat_name' => $this->input->post('cat_name'));
		$cat_name = $this->input->post('cat_name');
		$this->category->insert($data);
		$this->session->set_flashdata('msg', 'New category <b>'.$cat_name.'</b> is added.');
		redirect('adm/categories','refresh');
	}

	public function u_ing($id,$name) 
	{
		$data = array('cat_name' => $this->input->post('cat_name1'));
		$cat_name = $this->input->post('cat_name1');
		$this->category->update($id,$data);
		$this->session->set_flashdata('msg', '<b>Category number '.$id.'</b> name has been changed to <b>'.$cat_name.'<b>.');
		redirect('adm/categories','refresh');
	}

	public function delete($id,$name) 
	{
		$this->category->delete($id);
		$this->session->set_flashdata('msg', '<b>'.$name.'</b> has been removed from category list.');
		redirect('adm/categories','refresh');
	}

}

/* End of file categories.php */
/* Location: ./application/controllers/adm/categories.php */