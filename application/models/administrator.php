<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Model {

	private $table = 'users';

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$this->db->select('*');
		$this->db->from($this->table.' as u');
		$this->db->join('user_previleges as p', 'u.id_prev = p.id_prev', 'left');

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

	function loginCheck($username,$password) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('user_username', $username);
		$this->db->where('user_password', $password);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}

	function insert($data) {
		$this->db->insert($this->table, $data);
	}
}

/* End of file administrator.php */
/* Location: ./application/models/administrator.php */