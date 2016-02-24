<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

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
			'title' => 'Posts Manager',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'postlist' => $this->post->getAll(),
			'catlist' => $this->category->getAll()
		);

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/posts-list', $data);
		$this->load->view('adm/footer', $data);			
	}

	public function new_post() 
	{
		$data = array(
			'title' => 'Add New Post',
			'username' => $this->username,
			'displayname' => $this->displayname,
			'avatar' => $this->avatar,
			'catlist' => $this->category->getAll()
		);

		$this->load->view('adm/html_head', $data);
		$this->load->view('adm/navbar-top', $data);
		$this->load->view('adm/sidebar', $data);
		$this->load->view('adm/content/post-new', $data);
		$this->load->view('adm/footer', $data);			
	}

	public function i_ing()
	{
		$input = array(
			'post_title' => $this->input->post('post_title'),
			'post_price' => $this->input->post('post_price'), 
			'post_content' => $this->input->post('post_content'), 
			'id_cat' => $this->input->post('id_cat'), 
			'post_keyword' => $this->input->post('post_keyword'), 
		);
		$id = $this->post->insert($input);

		if ($_FILES['images']['size'] !== 0) {
			$config['upload_path'] = './assets/post_images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['encrypt_name'] = TRUE;
			$config['overwrite'] = FALSE;

			$attachName = 'images';
			$files = $_FILES;
            $count = count($_FILES[$attachName]['name']);

            for ($i = 0; $i < $count; $i++) {

                $_FILES[$attachName]['name'] = $files[$attachName]['name'][$i];
                $_FILES[$attachName]['type'] = $files[$attachName]['type'][$i];
                $_FILES[$attachName]['tmp_name'] = $files[$attachName]['tmp_name'][$i];
                $_FILES[$attachName]['error'] = $files[$attachName]['error'][$i];
                $_FILES[$attachName]['size'] = $files[$attachName]['size'][$i];

                $this->upload->initialize($config);
                $upload = $this->upload->do_upload($attachName);
                $upload_data = $this->upload->data();
                if ($upload) {
                	$file_name = $upload_data['file_name']; //RETRIEVING FILE NAME
					$img = array('id_post' => $id, 'image_file' => $file_name);
					$this->post->insert_img($img);			
                } else {
                	$this->session->set_flashdata('warn', $this->upload->display_errors());
                	echo $this->upload->display_errors();
                }
        	}
		}

		$this->session->set_flashdata('msg', '<b>'.$this->input->post('post_title').'</b> has been added to your post list :)');
		redirect('adm/posts','refresh');
	}

	public function u_ing($id,$post) {
		if (false !== $this->input->post('update')) {

			if ($this->post->getImgperPost($id)) {
				foreach ($this->post->getImgperPost($id) as $key) {
					$existed = false;
					foreach ($this->input->post('current_img') as $cur) {
						if ($cur == $key->id_img) {
							$existed = true;	
						}
					}
					if (!$existed) {
						$this->post->deleteImg('id_img',$key->id_img);
						unlink("./assets/post_images/".$key->image_file);
					}
				}	
			}

			$this->session->set_flashdata('msg', '<b>One row</b> has been updated :) ');
			$datestring = '%Y-%m-%d %h:%i:%s';
      		$now = mdate($datestring,now('Asia/Jakarta'));
			$update = array(
				'post_title' => $this->input->post('post_title'),
				'post_price' => $this->input->post('post_price'), 
				'post_content' => $this->input->post('post_content'),
				'post_keyword' => $this->input->post('post_keyword'), 
				'post_modified' => $now
			);
			$this->post->update($id,$update);

			if ($_FILES['images']['size'] !== 0) {
				$config['upload_path'] = './assets/post_images/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['encrypt_name'] = TRUE;
				$config['overwrite'] = FALSE;

				$attachName = 'images';
				$files = $_FILES;
	            $count = count($_FILES[$attachName]['name']);

	            for ($i = 0; $i < $count; $i++) {

	                $_FILES[$attachName]['name'] = $files[$attachName]['name'][$i];
	                $_FILES[$attachName]['type'] = $files[$attachName]['type'][$i];
	                $_FILES[$attachName]['tmp_name'] = $files[$attachName]['tmp_name'][$i];
	                $_FILES[$attachName]['error'] = $files[$attachName]['error'][$i];
	                $_FILES[$attachName]['size'] = $files[$attachName]['size'][$i];

	                $this->upload->initialize($config);
	                $upload = $this->upload->do_upload($attachName);
	                $upload_data = $this->upload->data();
	                if ($upload) {
	                	$file_name = $upload_data['file_name']; //RETRIEVING FILE NAME
						$img = array('id_post' => $id, 'image_file' => $file_name);
						$this->post->insert_img($img);			
	                } else {
	                	// $this->session->set_flashdata('warn', $this->upload->display_errors());
	                }
	        	}
			}
		}

		redirect('adm/posts','refresh');	
	}

	public function delete($id,$post) {
		$this->post->deleteImg('id_post',$id);
		$this->post->delete($id);
		$this->session->set_flashdata('msg', '<b>one row of products</b> has been succesfully removed.');
		redirect('adm/posts','refresh');
	}



}

/* End of file posts.php */
/* Location: ./application/controllers/adm/posts.php */