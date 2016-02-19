<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	private $table = 'posts';

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$this->db->select('*');
		$this->db->from($this->table.' as p');

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function get($id) {
		$this->db->select('*');
		$this->db->from($this->table.' as p');
		$this->db->where('id_post', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function checkEntry($comparison,$value) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($comparison, $value);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function insert($data) {
		$this->db->insert($this->table, $data);
	}

	function delete($where) {
		$this->db->where('id_post', $where);
		$this->db->delete($this->table);
	}

	function update($where,$data) {
		$this->db->where('id_post', $where);
		$this->db->update($this->table, $data);
	}	

}

/* End of file post.php */
/* Location: ./application/models/post.php */