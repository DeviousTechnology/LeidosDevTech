<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


// 	public function __construct() {
		
// 		parent::__construct();
		
// 		$this->load->model(array('model_users'));
// 	}
	
// 	public function index()
// 	{
// 		$Name = NULL;
// 		$Username = NULL;
// 		$submit = NULL;
		
// 		extract($_POST);
		
// 		$params['Name'] = $Name;
// 		$params['Username'] = $Username;
		
// 		if (isset($submit))
// 		{
// 			$this->model_users->update($params);
// 		}
		
// 		$this->load->view('test');
		
// 	}
	
public function __construct()
{
	parent::__construct();

	$this->load->helper('form');

	$this->load->model('model_users');
}

public function index()
{
	$data['results'] = NULL;
	$this->load->view('search_form',$data);
// 	$this->load->view('search_form');
}

public function execute_search()
{
	// Retrieve the posted search term.
	$search_term = $this->input->post('search');

	// Use a model to retrieve the results.
	$data['results'] = $this->model_users->get_results($search_term);

	// Pass the results to the view.
	$this->load->view('res',$data);
}
	
// 	public function home()
// 	{
// 		//$this->load->model('model_users');
		
// 		$data['title'] = 'DevTech'; // $title
// 		$data['page_header'] = 'Welcome to DevTech';
// 		//$data['Names'] = $this->model_users->getNames();
		
		
// 		//$data['users'] = $this->model_users->getUsers();
		
// 		$this->load->view('welcome_message', $data);
// 	}
	
	
}
