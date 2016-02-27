<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {
	
	private $table = 'home_pict';

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$this->db->select('*');
		$this->db->from($this->table);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function count($id) {
		$this->db->select('*');
		$this->db->from($this->table.' as p');

		$query = $this->db->get();
		return $query->num_rows();
	}

	function get($id) {
		$this->db->select('*');
		$this->db->from($this->table.' as p');
		$this->db->where('id_pict', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function getActive() {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('stat', 1);

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

	function insert($data) {
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function delete($where) {
		$this->db->where('id_pict', $where);
		$this->db->delete($this->table);
	}
}

/* End of file home.php */
/* Location: ./application/models/home.php */