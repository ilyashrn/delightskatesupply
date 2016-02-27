<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	private $table = 'posts';
	private $table2 = 'post_categories';
	private $table3 = 'post_images';

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$this->db->select('*');
		$this->db->from($this->table.' as p');
		$this->db->join($this->table2.' as c', 'p.id_cat = c.id_cat', 'left');

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function count() {
		$this->db->select('*');
		$this->db->from($this->table.' as p');

		$query = $this->db->get();
		return $query->num_rows();
	}

	function get($id) {
		$this->db->select('*');
		$this->db->from($this->table.' as p');
		$this->db->join($this->table2.' as c', 'p.id_cat = c.id_cat', 'left');
		$this->db->where('id_post', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
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

	function getImg($where) {
		$this->db->select('*');
		$this->db->from($this->table3);
		$this->db->where('id_post', $where);

		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}

	function getImgperPost($id) {
		$this->db->select('*');
		$this->db->from($this->table3);
		$this->db->where('id_post', $id);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}	
	}

	function countPerCat($where) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('id_cat', $where);

		$query = $this->db->get();
		return $query->num_rows();
	}

	function insert($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function insert_img($data) {
		$this->db->insert($this->table3, $data);
		return $this->db->insert_id();
	}

	function delete($where) {
		$this->db->where('id_post', $where);
		$this->db->delete($this->table);
	}

	function deleteImg($comparison,$where) {
		$this->db->where($comparison, $where);
		$this->db->delete($this->table3);
	}

	function update($where,$data) {
		$this->db->where('id_post', $where);
		$this->db->update($this->table, $data);
	}	

}

/* End of file post.php */
/* Location: ./application/models/post.php */