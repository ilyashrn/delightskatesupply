<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {

	private $table = 'contacts';
	private $table2 = 'contacts_types';

	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$this->db->select('*, c.contact_type as contact_type, t.contact_type as cont_type');
		$this->db->from($this->table.' as c');
		$this->db->join($this->table2.' as t', 'c.contact_type = t.id_type', 'left');

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function get($comparison,$id) {
		$this->db->select('*');
		$this->db->from($this->table.' as c');
		$this->db->join($this->table2.' as t', 'c.contact_type = t.id_type', 'left');
		$this->db->where($comparison, $id);

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
	}

	function delete($where) {
		$this->db->where('id_cont', $where);
		$this->db->delete($this->table);
	}

	function update($where,$data) {
		$this->db->where('id_cont', $where);
		$this->db->update($this->table, $data);
	}	

}

/* End of file contact.php */
/* Location: ./application/models/contact.php */