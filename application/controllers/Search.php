<?php
class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');

		$this->load->model('search_model');
	}

	public function index()
	{
		$this->load->view('search_form');
	}

	public function execute_search()
	{
		// Retrieve the posted search term.
		$search_term = $this->input->post('search');

		// Use a model to retrieve the results.
		$data['results'] = $this->search_model->get_results($search_term);

		// Pass the results to the view.
		$this->load->view('search_results',$data);
	}

}
