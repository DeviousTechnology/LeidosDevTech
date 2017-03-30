<?php
	
	class Model_users extends CI_Model {

	function __construct() {

		parent::__construct();
	}

	function getNames() {

		$query = $this->db->query('SELECT Name FROM Employee');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getUsers() {

		$query = $this->db->query('SELECT * FROM Employee');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	}	

?>