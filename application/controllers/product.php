<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'Products | Delight Skate Supply',
			'productlist' => $this->post->getAll(),
			'catlist' => $this->category->getAll(),
			'twitter' => $this->contact->get('c.contact_type','4'),
			'facebook' => $this->contact->get('c.contact_type','3'),
			'instagram' => $this->contact->get('c.contact_type','1')
		);
		$this->load->view('html_head',$data);
		$this->load->view('header',$data);
		$this->load->view('content/products',$data);
		$this->load->view('footer',$data);	
		$this->load->view('html_footer', $data);
	}

	public function detail($id,$title)
	{
		$data = array(
			'title' => 'Products | Delight Skate Supply',
			'product' => $this->post->get($id),
			'productlist' => $this->post->getAll(),
			'catlist' => $this->category->getAll(),
			'twitter' => $this->contact->get('c.contact_type','4'),
			'facebook' => $this->contact->get('c.contact_type','3'),
			'instagram' => $this->contact->get('c.contact_type','1')
		);
		$this->load->view('html_head',$data);
		$this->load->view('header',$data);
		$this->load->view('content/product-detail',$data);
		$this->load->view('footer',$data);	
		$this->load->view('html_footer', $data);
	}

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */