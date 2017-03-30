<?php
class Search_model extends CI_Model {

	public function get_results($search_term='default')
	{
		// Use the Active Record class for safer queries.
		$this->db->select('*');
		$this->db->from('Project');
		$this->db->like('Name',$search_term);

		// Execute the query.
		$query = $this->db->get();

		// Return the results.
		return $query->result_array();
	}

}