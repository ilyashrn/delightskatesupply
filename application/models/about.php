<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Model {

	private $table = 'about';

	function __construct() {
		parent::__construct();
	}

	function get() {
		$this->db->select('*');
		$this->db->from($this->table);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}

	function update($data) {
		$this->db->update($this->table, $data);
	}	


}

/* End of file about.php */
/* Location: ./application/models/about.php */