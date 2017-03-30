<?php
//$Email;
class Login extends CI_Controller {
	// $Email='akt@hw.com';

	//private $Email;


	function index()
	{
		//$this->load->view('includes/header');
		$this->load->view('login_form');
		
		//$this->load->view('includes/footer');
	}

	function signup()
	{
		//$this->load->view('includes/header');
		$this->load->view('signup_form');
		//$this->load->view('includes/footer');
	}

	function editpage()
	{
		//$this->load->view('includes/header');
		$this->load->view('edit_page', array('error' =>''));
		//$this->load->view('includes/footer');
	}
	function Investors(){
		//$this->load->view('includes/header');
		$this->load->view('investors');
		//$this->load->view('includes/footer');

	}

	function profile(){
		//$this->load->view('includes/header');
		// 		$Email = 'Email';
		// 		if (isset($this->session->userdata['loggedin_'])){
		// 			$Email = ($this->session->userdata['loggedin_']['Email']);
		// 		}
		$this->load->home();
		//		$this->load->validate_credentials();

	}
	function homepage(){
		$this->load->view('Home');
	}

    function formspage(){
    	$this->load->view('forms');
    }

	function about()
	{
		//	$this->load->view('includes/header');
		$this->load->view('about_us');
		//$this->load->view('includes/footer');
	}
	
	////////////// NEW BELLO FORMS ADMIN //////////////
	
	function formEmployee(){
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];

		$this->load->model('model_users');

		$data['Name'] = $this->model_users->getName($Email);
		
		$data['ProBar1'] = $this->model_users->getProBar1();
		$this->load->view('form1',$data);
	}
	
	function formProject(){
		
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$this->load->model('model_users');
		$data['Name'] = $this->model_users->getName($Email);
		
		$data['skill'] = $this->membership_model->get_skills();
		
		$this->load->model('model_users');
		$data['skillset'] = $this->model_users->get_skillset();
		$data['ProBar1'] = $this->model_users->getProBar1();
		$this->load->view('form2', $data);
	}
	
	function formResource(){
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$this->load->model('model_users');
		$data['Name'] = $this->model_users->getName($Email);
		$data['ProBar1'] = $this->model_users->getProBar1();
		$this->load->view('form3', $data);
	}
	
	function formWorking(){
		//fetch data from department and designation tables
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$this->load->model('model_users');
		$data['Name'] = $this->model_users->getName($Email);
		$data['employee'] = $this->membership_model->get_Employee();
		$data['project'] = $this->membership_model->get_Project();
		$data['ProBar1'] = $this->model_users->getProBar1();
		$this->load->view('form4', $data);
	}
	
	function formCost(){
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$this->load->model('model_users');
		$data['Name'] = $this->model_users->getName($Email);
		$data['ProBar1'] = $this->model_users->getProBar1();
		$data['project'] = $this->membership_model->get_Project();
	
		$this->load->view('form5', $data);
	}
	
	function formSkill(){
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$this->load->model('model_users');
		$data['Name'] = $this->model_users->getName($Email);
		$data['ProBar1'] = $this->model_users->getProBar1();
		$this->load->view('form6', $data);
	}
	
	function formSkillEmployee(){
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$this->load->model('model_users');
		$data['Name'] = $this->model_users->getName($Email);
	
		$data['employee'] = $this->membership_model->get_Employee();
		$data['skill'] = $this->membership_model->get_skills();
		$data['ProBar1'] = $this->model_users->getProBar1();
		$this->load->view('form7', $data);
	}
	
	function formSkillProject(){
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$this->load->model('model_users');
		$data['Name'] = $this->model_users->getName($Email);
	
		$data['project'] = $this->membership_model->get_Project();
		$data['skill'] = $this->membership_model->get_skills();
		
		
		$data['ProBar1'] = $this->model_users->getProBar1();
	
		$this->load->view('form8', $data);
	}
	
	
	//////////////////////////////////////////////////
	

	function resAll()
	{
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];

		$this->load->model('model_users');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		$data['results'] =NULL;
		$data['res'] = NULL;
		$search_term = $this->input->post('search');
		//if ($search_term != NULL)
		//{
		$data['results'] = $this->model_users->get_results($search_term);
		$data['res'] = 404;
		//echo json_encode ($data['results']);
		//}//echo json_encode ($data['results']);
		//$data['results'] = NULL;
	//	$this->load->view('search_form',$data);
	    $data['popular']=$this->model_users->getPopular();
	   $data['Unpopular']=$this->model_users->getUnPopular();
	    $data['recent']=$this->model_users->getRecent();
		$data['AI'] = $this->model_users->getAI($Email);
		$data['Pro'] = $this->model_users->getPro();
		$data['EmpID'] = $this->model_users->getEmployeeID($Email);
		$data['enrollment'] = $this->model_users->getEnrollment($Email);
		/////$data['results'] = $this->model_users->get_results();
		//	$this->load->view('includes/header');
		// 		$this->load->view('profile',$data);
		$this->load->view('res',$data,$Email);
		//$this->load->view('includes/footer');
	}

	function adminpage()
	{
		$this->load->model('model_users');

		$data['TotalEmp'] = $this->model_users->getTotalEmp();
		$data['TotalPro'] = $this->model_users->getTotalPro();
		$data['TotalCost'] = $this->model_users->getTotalCost();
		$data['TotalRes'] = $this->model_users->getTotalRes();
		$data['ComPro'] = $this->model_users->getComPro();
		$data['UndPro'] = $this->model_users->getUndPro();
		$data['TotalAdmin'] = $this->model_users->getTotaladmin();
		$data['TotalUser'] = $this->model_users->getTotaluser();
		$data['TotalWork'] = $this->model_users->getTotalWork();
      
		$data['ProBar1'] = $this->model_users->getProBar1();
		$data['ProBar'] = $this->model_users->getProBar();
		
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		//$loggedin_ ['Email'];
		// 		$this->load->model('membership_model');
		// 		$Email=$this->membership_model->setOnline();
		$this->load->model('model_users');
		//$name = 'Employee';
		
		//		$data['Emp'] = $this->adminM->getEmployee();
		$data['Name'] = $this->model_users->getName($Email);

// 		$this->load->library('pagination');
		
// 	$data['base_url'] = 'http://localhost/Login/adminpage';
// 		$config['total_rows'] = 5;
// 		$config['per_page'] = 2;
		
// 		$this->pagination->initialize($config);
		
	//	echo $this->pagination->create_links();


		
		// 		$this->load->view('profile',$data);
		$this->load->view('adminPanelT',$data);
	
	}
	function delete_emp($EmployeeID) {
		$this->load->model('model_users');
		$this->model_users->delete_row($EmployeeID);
	
	}
	function delete_pro($ProjectID) {
		$this->load->model('model_users');
		$this->model_users->delete_pro($ProjectID);
	
	}
	
	function delete_res($ResourceID) {
		$this->load->model('model_users');
		$this->model_users->delete_res($ResourceID);
	
	}
	
	function delete_cost($ProjectID) {
		$this->load->model('model_users');
		$this->model_users->delete_cost($ProjectID);
	
	}
	
	function delete_alloc($EmployeeID,$ProjectID) {
		$EmployeeID = $this->uri->segment(3);
		$ProjectID = $this->uri->segment(4);
		$data = array(
				'EmployeeID' => $EmployeeID,
				'ProjectID' => $ProjectID
		);
	
		$this->load->model('model_users');
		$this->model_users->delete_alloc($EmployeeID,$ProjectID);
	
	}
	function delete_empskills($EmployeeID,$SkillID) {
		$this->load->model('model_users');
		$this->model_users->delete_empskills($EmployeeID,$SkillID);
	
	}
	function delete_projectskills($ProjectID,$SkillID) {
		$this->load->model('model_users');
		$this->model_users->delete_projectskills($ProjectID,$SkillID);
	
	}
	function delete_skills($SkillID) {
		$this->load->model('model_users');
		$this->model_users->delete_skills($SkillID);
	
	}
	
	function tables(){
		$this->load->model('model_users');
		
		$data['Emp'] = $this->model_users->getEmployee();
		$data['Pro'] = $this->model_users->getPro();
		$data['Cost'] = $this->model_users->getCost();
		$data['Res'] = $this->model_users->getRes();
		$data['Wor'] = $this->model_users->getWor();
		$data['emps'] = $this->model_users->getempSkills();
		$data['PS'] = $this->model_users->getprojectskills();
		$data['Ski'] = $this->model_users->getskillsm();
		
		$data['ProBar1'] = $this->model_users->getProBar1();
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		//$loggedin_ ['Email'];
		// 		$this->load->model('membership_model');
		// 		$Email=$this->membership_model->setOnline();
	
		//$name = 'Employee';
		
		//		$data['Emp'] = $this->adminM->getEmployee();
		$data['Name'] = $this->model_users->getName($Email);
			
		$this->load->view('tablesT',$data);
	}
	




	function update_Employee_email() {

		//$this->load->model('membership_model');

		$Email = 'Email';
		$data = 'data';

		$this->load->model('membership_model');

		if ($query = $this->membership_model->update_Employee_email($Email, $data))
		{
			$datas['account_updated'] = 'Your Account has been Updated!<br/><br/> SIGN IN';

			//$this->load->view('profile', $datas);
			$this->load->view('testview', $datas);
		}
		else {
			//$this->load->view('includes/header');
			$this->load->view('edit_page');
			//$this->load->view('includes/footer');
		}
	}

	
	function Edit_emp_table($EmployeeID) {
	
		//$this->load->model('membership_model');
		$this->load->model('model_users');
		//$name = 'Employee';
		//$Email=$EmployeeID;
		//		$data['Emp'] = $this->adminM->getEmployee();
		$data['Name'] = $this->model_users->getNameEmp($EmployeeID);
	$this->load->view('editEmployee',$data);
		//$EmployeeID = 'EmployeeID';
// 		$data = 'data';
	
// 		$this->load->model('membership_model');
	
// 		if ($query = $this->membership_model->update_Employee_email($EmployeeID, $data))
// 		{
// 			$datas['account_updated'] = 'Your Account has been Updated!<br/><br/> SIGN IN';
	
// 			//$this->load->view('profile', $datas);
// 			$this->load->view('testview', $datas);
// 		}
// 		else {
// 			//$this->load->view('includes/header');
// 			$this->load->view('edit_page');
// 			//$this->load->view('includes/footer');
// 		}
	}
	
	function Edit_pro_table($ProjectID) {
	
	
		$this->load->model('model_users');

		$data['Name'] = $this->model_users->getNamePro($ProjectID);
		$this->load->view('editProject',$data);

			}
			
	function Edit_res_table($ResourceID) {
			
			
				$this->load->model('model_users');
			
				$data['Name'] = $this->model_users->getNameRes($ResourceID);
				$this->load->view('editRes',$data);
			
			}
	
			
   function Edit_Cost_table($ProjectID) {
					
					
				$this->load->model('model_users');
					
				$data['Name'] = $this->model_users->getNameCost($ProjectID);
				$this->load->view('editCost',$data);
					
			}
			
 function Edit_Wor_table($EID,$PID) {
					
					
				$this->load->model('model_users');
					
				$data['Name'] = $this->model_users->getNameWor($EID,$PID);
				$this->load->view('editWor',$data);
					
			}
			
			function Enroll($EID,$PID) {
					
					
				$this->load->model('model_users');
				 $this->model_users->getEnroll($EID,$PID);			
				
			}
				
			
			
	function update_emp_info($ID) {
	
		//$this->load->model('membership_model');
	
		//$Email = 'Email';
		$data = 'data';
	
		$this->load->model('membership_model');
		$this->membership_model->update_Employee_info($ID, $data);
	
// 		if ($query = $this->membership_model->update_Employee_info($ID, $data))
// 		{
// 			//$datas['account_updated'] = 'Your Account has been Updated!<br/><br/> SIGN IN';
	
// 			//$this->load->view('profile', $datas);
// 			//$this->load->view('admin');
// 		}
// 		else {
// 			//$this->load->view('includes/header');
// 			$this->load->view('edit_page');
// 			//$this->load->view('includes/footer');
// 		}
	}
	
	function update_Project_info($ID) {
	

		$data = 'data';
	
		$this->load->model('membership_model');
		$this->membership_model->update_Project_info($ID, $data);
	

			}
	
    function update_Res_info($ID) {
			
			
				$data = 'data';
			
				$this->load->model('membership_model');
				$this->membership_model->update_Res_info($ID, $data);
			
			
	}
	
	function update_Cost_info($ID) {
			
			
		$data = 'data';
			
		$this->load->model('membership_model');
		$this->membership_model->update_Cost_info($ID, $data);
			
			
	}
	
	function update_Wor_info($ID,$empID) {
	
	
		$data = 'data';
	
		$this->load->model('membership_model');
		$this->membership_model->update_Wor_info($ID,$empID, $data);
	
	
	}
	

	function validate_credentials(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules(
				'Email', 'email', 'trim|required|valid_email', array("required" => "Please enter your Email Address.")
				);
		$this->form_validation->set_rules(
				'Password', 'password', 'trim|required', array("required" => "Please enter Password.")
				);


		if ($this->form_validation->run() == FALSE) //didnt validate
		{
			if (isset($this->session->userdata['loggedin_'])){
				//$this->load->view('includes/header');
				//$this->load->view('profile', $datas);
				$this->load->view('testview');
				//$this->load->view('includes/footer');
			} else {
				$this->load->view('login_form');
			}
		}
		else {

			$credentials = array(
					'Email' => $this->input->post('Email'),
					'Password' => $this->input->post('Password')
			);

			$this->load->model('membership_model');
			$result = $this->membership_model->validate($credentials);
			if ($result == TRUE) {
				global $Email;
				$Email = $this->input->post('Email');
				$result = $this->membership_model->read_info($Email);
				if ($result != false) {
					$session_data = array(
							'Email' => $result[0]->Email,

					);

					// Add user data in session
					$this->session->set_userdata('loggedin_', $session_data);
					//$this->load->view('profile', $datas);
					$this->load->view('Home');                  /////////////////////////////////  Changed By Tamimi
					//$this->home($Email);                                   /////////////////////////////////  Tamimi

					//$this->membership_model->setOnline($Email);     /////////////////////////////////  Tamimi

				}


			} else {
				$credentials = array(
						'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('login_form', $credentials);
			}
		}
			
	}


	/*function enroll(){

		$this->load->model('membership_model');
		$query = $this->membership_model->enrol_project();
	}
*/
	function logout()
	{
		$session_end = array(
				'Email' => ''
		);

		$this->session->unset_userdata('loggedin_', $session_end);
		$data['message_display'] = 'Logged Out Succesfully';

		$this->load->model('membership_model');                        ////////////////////////////////  Tamimi
		///$this->membership_model->setOffline();        /////////New T///////                 ////////////////////////////////  Tamimi
        $this->index();
		//$this->load->view('includes/header');
		//$this->load->view('login_form', $data);
		//$this->load->view('includes/footer');
		//	$this->session->sess_destroy();
		//	redirect(site_url(''), 'refresh');
	}

	function create_member()
	{
		$this->load->library('form_validation');

		//validation rules
		$this->form_validation->set_rules(
				'Name', 'name', 'trim|required', array("required" => "Please enter your Full Name.")
				);
		$this->form_validation->set_rules(
				'Type', 'type', 'trim'
				);
		$this->form_validation->set_rules(
				'Email', 'email', 'trim|required|valid_email', array("required" => "Please enter your Email Address.")
				);
		$this->form_validation->set_rules(
				'Password', 'password', 'trim|required', array("required" => "Please enter Password.")
				);
		$this->form_validation->set_rules(
				'JobRole', 'jobrole', 'trim|required', array("required" => "Please select a preerred Job Role.")
				);
		$this->form_validation->set_rules(
				'Location', 'location', 'trim|required', array("required" => "Please select your Location.")
				);
		$this->form_validation->set_rules(
				'PreferredLoc', 'preferredloc', 'trim|required', array("required" => "Please select your Preferred Location.")
				);
		//$this->form_validation->set_rules('AvailableAfter', 'availableafter', 'trim|required');
		$this->form_validation->set_rules(
				'Interests[]', 'interests[]', 'trim|required', array("required" => "Please select your Interests.")
				);
		$this->form_validation->set_rules(
				'Skills[]', 'skills[]', 'trim|required', array("required" => "Please select your Skills.")
				);



		if ($this->form_validation->run() == FALSE) //didnt validate
		{
			$this->load->view('includes/header');
			$this->load->view('signup_form');
			$this->load->view('includes/footer');
		}

		else {
			$this->load->model('membership_model');

			if ($query = $this->membership_model->create_member())
			{
				$data['account_created'] = 'Your Account has been created!<br/><br/> SIGN IN';

				//$this->load->view('includes/header');
				$this->load->view('login_form', $data);
				//$this->load->view('includes/footer');
			}
			else {

				//$this->load->view('includes/header');
				$this->load->view('signup_form');
				//$this->load->view('includes/footer');
			}

		}

	}

	//custom validation
	function check_if_email_exists($requested_email) {

		$this->load->model('membership_model');

		$username_available = $this->membership_model->check_if_email_exists($requested_email);

		if ($username_available) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	///////////// ---- NEW B---- //////////////////////////////////////////////	
	function upload()
	{
		$config = array();
		//
		$config['upload_path']          = './images/profile/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['max_size']             = 1024;
// 		$config['max_width']            = 1024;
// 		$config['max_height']           = 768;
	
		$this->load->library('upload', $config);
		
	//'userfile'
		if (!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('edit_page', $error);
		} 
		else
		{
			$data['photo_updated'] = 'Your file was successfully updated!<br/><br/>';
			
			$data = array('upload_data' => $this->upload->data());
			$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
			
			$image_file = array (
				'Image' => $data['upload_data']['file_name']
			);
			
			$this->load->model('membership_model');
			$this->membership_model->insert_image($image_file);
	
			//$this->load->view('testview');
			//display success message
			$this->session->set_flashdata('msgimage', '<div class="alert alert-success text-center">Profile Image Updated!</div>');
			redirect('login/editpage');
			
			//2nd
// 			$file_data = $this->upload()->data();
// 			$data['img'] = base_url().'/images/profile/'.$file_data['file_name'];
// 			$this->load->view('success_msg', $data);
//1st
// 						$data = array('upload_data' => $this->upload->data());
// 						$this->load->view('upload_success', $data);
		}
	}
	
	function image_resize($path, $file){
		$config_resize = array();
		$config_resize['image_library'] = 'gd2';
		$config_resize['source_image'] = $path;
		$config_resize['maintain_ratio'] = TRUE;
		$config_resize['width'] = 75;
		$config_resize['height'] = 50;
		$config_resize['new_image'] = './image/profile/thumb/'.$file;
		
		$this->load->library('image_lib',$config_resize);
		$this->image_lib->resize();
	}
	

	///////////////////////////////////////////////////////////////////////////////

	/////////////////////////////// below is Tamimi code  /////////////////////////



	public function home()
	{
		// 		global $Email  ;
		$this->load->library('session');
		$user_data = $this->session->userdata('loggedin_');
		$Email = $user_data['Email'];
		//$loggedin_ ['Email'];
		// 		$this->load->model('membership_model');
		// 		$Email=$this->membership_model->setOnline();
		$this->load->model('model_users');
		//$name = 'Employee';

		//		$data['Emp'] = $this->adminM->getEmployee();
		$data['Name'] = $this->model_users->getName($Email);
		$data['ID'] = $this->model_users->getID($Email);
		$data['Type'] = $this->model_users->getType($Email);
		$data['Email'] = $this->model_users->getEmail($Email);
		$data['Location'] = $this->model_users->getLocation($Email);
		$data['skills'] = $this->model_users->getSkills($Email);
		$data['interests'] = $this->model_users->getint($Email);
		$data['preloc'] = $this->model_users->getpreloc($Email);
		// 		$data['AI'] = $this->model_users->getAI($Email);
		$data['Wo'] = $this->model_users->getWorking($Email);
		$data['Image'] = $this->model_users->getImage($Email); ///////////// BBB//

		$data['JobRole'] = $this->model_users->getJobrole($Email); ////// BELLO ADDED


		$this->load->view('profile',$data);
	}




	// 	public function editProfile(){
	// 		$this->load->view('editProfile');
	// 	}

	// 	public function Enroll(){
	// 		$this->load->model('ResModel');
	// 		$data['Enroll'] = $this->ResModel->getEnroll();

	// 		$this->load->view('Resources',$data);
	// 	}





	function execute_search()
	{
		// Retrieve the posted search term.
		$search_term = $this->input->post('search');
	
		// Use a model to retrieve the results.
		$data['results'] = $this->model_users->get_results($search_term);
	
		// Pass the results to the view.
		$this->load->view('res',$data);
	}


	////////////////--------- LATEST EDIT PAGE BELLO---------------/////////////////////
	function passupdate() {
	
		$Email = 'Email';
		$data = 'data';
	
		$this->load->model('membership_model');
	
		if ($query = $this->membership_model->passupdate($Email, $data))
		{
			$this->session->set_flashdata('msgp', '<div class="alert alert-success text-center">Password Updated!</div>');
			redirect('login/editpage');
		}
		else {
			//$this->load->view('includes/header');
			$this->load->view('edit_page');
			//$this->load->view('includes/footer');
		}
	}
	
	
	function skillsupdate() {
	
	
		$Email = 'Email';
		$data = 'data';
	
		$this->load->model('membership_model');
	
		if ($query = $this->membership_model->skillsupdate($Email, $data))
		{
			$this->session->set_flashdata('msgs', '<div class="alert alert-success text-center">Your Skills have been Updated!</div>');
			redirect('login/editpage');
				
		}
		else {
			//$this->load->view('includes/header');
			$this->load->view('edit_page');
			//$this->load->view('includes/footer');
		}
	}
	
	function interestsupdate() {
	
		$Email = 'Email';
		$data = 'data';
	
		$this->load->model('membership_model');
	
		if ($query = $this->membership_model->interestsupdate($Email, $data))
		{
			$this->session->set_flashdata('msgi', '<div class="alert alert-success text-center">Your Interests have been Updated!</div>');
			redirect('login/editpage');
				
		}
		else {
			//$this->load->view('includes/header');
			$this->load->view('edit_page');
			//$this->load->view('includes/footer');
		}
	}
	
	function locationupdate() {
	
		$Email = 'Email';
		$data = 'data';
	
		$this->load->model('membership_model');
	
		if ($query = $this->membership_model->locationupdate($Email, $data))
		{
			$this->session->set_flashdata('msgl', '<div class="alert alert-success text-center">Your Location has been Updated!</div>');
			redirect('login/editpage');
				
		}
		else {
			//$this->load->view('includes/header');
			$this->load->view('edit_page');
			//$this->load->view('includes/footer');
		}
	}
	
	function preflocationupdate() {
	
		$Email = 'Email';
		$data = 'data';
	
		$this->load->model('membership_model');
	
		if ($query = $this->membership_model->preflocationupdate($Email, $data))
		{
			$this->session->set_flashdata('msgpl', '<div class="alert alert-success text-center">Your Preferred Location has been Updated!</div>');
			redirect('login/editpage');
				
		}
		else {
			//$this->load->view('includes/header');
			$this->load->view('edit_page');
			//$this->load->view('includes/footer');
		}
	}
	
	////////////////////////////////////////////////////////////////////////////////////
	
	/////////////////////////////NEW B////////////////////////////////
	function admincreate_member()
	{
		$this->load->library('form_validation');
	
		//validation rules
		$this->form_validation->set_rules(
				'FirstName', 'FirstName', 'trim|required', array("required" => "Please enter your First Name.")
				);
		$this->form_validation->set_rules(
				'LastName', 'LastName', 'trim|required', array("required" => "Please enter your Last Name.")
				);
		$this->form_validation->set_rules(
				'Type', 'type', 'trim'
				);
		$this->form_validation->set_rules(
				'Gender', 'Gender', 'trim|required',  array("required" => "Please provide Gender.")
				);
		$this->form_validation->set_rules(
				'Email', 'email', 'trim|required|valid_email', array("required" => "Please enter your Email Address.")
				);
		$this->form_validation->set_rules(
				'Password', 'password', 'trim|required', array("required" => "Please enter Password.")
				);
		$this->form_validation->set_rules(
				'JobRole', 'jobrole', 'trim|required', array("required" => "Please select a preerred Job Role.")
				);
		$this->form_validation->set_rules(
				'Location', 'location', 'trim|required', array("required" => "Please select your Location.")
				);
		$this->form_validation->set_rules(
				'PreferredLoc', 'preferredloc', 'trim|required', array("required" => "Please select your Preferred Location.")
				);
		//$this->form_validation->set_rules('AvailableAfter', 'availableafter', 'trim|required');
		$this->form_validation->set_rules(
				'Interests[]', 'interests[]', 'trim|required', array("required" => "Please select your Interests.")
				);
	
	
	
	
		if ($this->form_validation->run() == FALSE) //didnt validate
		{
				
			$this->load->view('form1');
				
		}
	
		else {
			$this->load->model('membership_model');
	
			if ($query = $this->membership_model->admincreate_member())
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee Added to Database!!!</div>');
				redirect('login/formEmployee');
			}
			else {
	
				$this->load->view('form1');
			}
	
		}
	
	
	}
	
	
	
	
	
	function create_resource()
	{
		$this->load->library('form_validation');
	
		//validation rules
		$this->form_validation->set_rules(
				'Name', 'Name', 'trim|required', array("required" => "Please enter your Full Project Name.")
				);
		$this->form_validation->set_rules(
				'Type', 'Type', 'trim|required', array("required" => "Please provide Project Type.")
				);
		$this->form_validation->set_rules(
				'RCost', 'Rcost', 'trim', array("required" => "Please Provide Project Cost.")
				);
	
	
	
		if ($this->form_validation->run() == FALSE) //didnt validate
		{
			$this->load->view('form3');
		}
	
		else {
			$this->load->model('membership_model');
	
			if ($query = $this->membership_model->create_resource())
			{
				$this->session->set_flashdata('msgres', '<div class="alert alert-success text-center">Resource Allocated!</div>');
				redirect('login/formResource');
			}
			else {
	
					
				$this->load->view('form3');
	
			}
	
		}
	
	}
	
	function create_project()
	{
		$this->load->library('form_validation');
	
		//validation rules
		$this->form_validation->set_rules(
				'Name', 'name', 'trim|required', array("required" => "Please enter Project Name.")
				);
		$this->form_validation->set_rules(
				'Type', 'type', 'trim|required', array("required" => "Please enter Project Type.")
				);
		$this->form_validation->set_rules(
				'Description', 'Description', 'trim|required', array("required" => "Please enter Project Description.")
				);
		$this->form_validation->set_rules(
				'PrimaryLoc', 'PrimaryLoc', 'trim|required', array("required" => "Please select Primary Location.")
				);
		$this->form_validation->set_rules(
				'SecondaryLoc', 'SecondaryLoc', 'trim|required', array("required" => "Please select Secondary Location.")
				);
		$this->form_validation->set_rules(
				'Priority', 'Priority', 'trim|required', array("required" => "Please select Project Priority.")
				);
		$this->form_validation->set_rules(
				'StartDate', 'StartDate', 'trim'
				);
		$this->form_validation->set_rules(
				'EndDate', 'EndDate', 'trim'
				);
	
	
		if ($this->form_validation->run() == FALSE) //didnt validate
		{
				
			$this->load->view('form2');
		}
	
		else {
			$this->load->model('membership_model');
	
			if ($query = $this->membership_model->create_project())
			{
	
				$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Project Added to Database!!!</div>');
				redirect('login/formProject');
	
			}
			else {
	
				//$this->load->view('includes/header');
				$this->load->view('form2');
				//$this->load->view('includes/footer');
			}
	
		}
	
	}
	
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('security');
		//load the employee model
		$this->load->model('membership_model');
		

	}
	
	
	function insert_WorkingOn()
	{
	
		//fetch data from department and designation tables
		$data['employee'] = $this->membership_model->get_Employee();
		$data['project'] = $this->membership_model->get_Project();
	
	
	
		//set validation rules
	
		$this->form_validation->set_rules('employee', 'Employee', 'callback_combo_check');
		$this->form_validation->set_rules('project', 'Project', 'callback_combo_check');
		$this->form_validation->set_rules('PercentUtilisation', 'Progress', 'trim|required|numeric');
	
	
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->view('form4', $data);
		}
		else
		{
			//pass validation
			$data = array(
					'EmployeeID' => $this->input->post('employee'),
					'ProjectID' => $this->input->post('project'),
					'PercentUtilisation' => $this->input->post('PercentUtilisation'),
			);
	
			//insert the form data into database
			$this->db->insert('WorkingOn', $data);
	
			//display success message
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">User Enrolled! Added to Database!!!</div>');
			redirect('login/formWorking');
		}
	}
	
	function insert_Cost()
	{
	
		$data['project'] = $this->membership_model->get_Project();
	
	
	
		//set validation rules
		$this->form_validation->set_rules('project', 'Project', 'callback_combo_check');
		$this->form_validation->set_rules(
				'ResourcesNeeded[]', 'ResourcesNeeded[]', 'trim|required', array("required" => "Please select Resources Needed.")
				);
		$this->form_validation->set_rules(
				'Budget', 'budget', 'trim|required', array("required" => "Please enter Project Budget.")
				);
		$this->form_validation->set_rules(
				'RequiredHeadcount', 'RequiredHeadcount', 'trim|required', array("required" => "Please enter Project Required HeadCount.")
				);
	
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->view('form5', $data);
		}
		else
		{
			$ResourcesNeeded = $this->input->post('ResourcesNeeded');
			//pass validation
			$new_cost_data = array(
						
					'ProjectID' => $this->input->post('project'),
					'ResourcesNeeded' => implode(',', $ResourcesNeeded),
					'Budget' => $this->input->post('Budget'),
					'RequiredHeadcount' => $this->input->post('RequiredHeadcount')
			);
	
			//insert the form data into database
			$this->db->insert('Cost', $new_cost_data);
	
			//display success message
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Cost Added to Database!!!</div>');
			redirect('login/formCost');
		}
	}
	
	function combo_check($str)
	{
		if ($str == '-SELECT-')
		{
			$this->form_validation->set_message('combo_check', 'Valid %s Name is required');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	function create_skill()
	{
		$this->load->library('form_validation');
	
		//validation rules
		$this->form_validation->set_rules(
				'Name', 'name', 'trim|required', array("required" => "Please enter a Skill.")
				);
	
	
		if ($this->form_validation->run() == FALSE) //didnt validate
		{
			$this->load->view('form6');
		}
	
		else {
			$this->load->model('membership_model');
	
			if ($query = $this->membership_model->create_skill())
			{
				$this->session->set_flashdata('msgsadminskill', '<div class="alert alert-success text-center">Skill Added to Database!!!</div>');
				redirect('login/formSkill');
			}
			else {
	
					
				$this->load->view('form6');
	
			}
	
		}
	
	}
	
	
	function insert_EmployeeSkills()
	{
	
		//fetch data from department and designation tables
		$data['employee'] = $this->membership_model->get_Employee();
		$data['skill'] = $this->membership_model->get_skills();
	
	
	
		//set validation rules
	
		$this->form_validation->set_rules('employee', 'Employee', 'callback_combo_check');
		$this->form_validation->set_rules('skill', 'Skill', 'callback_combo_check');
		$this->form_validation->set_rules('SkillLevel', 'SkillLevel', 'trim|required');
	
	
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->view('form7', $data);
		}
		else
		{
			//pass validation
			$EmpSkills_data = array(
					'EmployeeID' => $this->input->post('employee'),
					'SkillID' => $this->input->post('skill'),
					'SkillLevel' => $this->input->post('SkillLevel'),
			);
	
			//insert the form data into database
			$this->db->insert('EmpSkills', $EmpSkills_data);
	
			//display success message
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Skill Allocated!</div>');
			redirect('login/formSkillEmployee');
		}
	}
	
	function insert_ProjectSkills()
	{
	
		//fetch data from department and designation tables
		$data['project'] = $this->membership_model->get_Project();
		$data['skill'] = $this->membership_model->get_skills();
	
		//set validation rules
	
		$this->form_validation->set_rules('project', 'Project', 'callback_combo_check');
		$this->form_validation->set_rules('skill', 'Skill', 'callback_combo_check');
	
	
		if ($this->form_validation->run() == FALSE)
		{
			//fail validation
			$this->load->view('form8', $data);
		}
		else
		{
			//pass validation
			$ProjSkills_data = array(
					'ProjectID' => $this->input->post('project'),
					'SkillID' => $this->input->post('skill'),
			);
	
			//insert the form data into database
			$this->db->insert('ProjectSkills', $ProjSkills_data);
	
			//display success message
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Skill Allocated to Project!</div>');
			redirect('login/formSkillProject');
		}
	}
	

}
