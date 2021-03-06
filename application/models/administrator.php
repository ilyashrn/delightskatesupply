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

	function count() {
		$this->db->select('*');
		$this->db->from($this->table.' as u');		

		$query = $this->db->get();
		return $query->num_rows();
	}

	function get($id) {
		$this->db->select('*');
		$this->db->from($this->table.' as u');
		$this->db->join('user_previleges as p', 'u.id_prev = p.id_prev', 'left');
		$this->db->where('id_user', $id);

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

	function delete($where) {
		$this->db->where('id_user', $where);
		$this->db->delete($this->table);
	}

	function update($where,$data) {
		$this->db->where('id_user', $where);
		$this->db->update($this->table, $data);
	}
}

/* End of file administrator.php */
/* Location: ./application/models/administrator.php */