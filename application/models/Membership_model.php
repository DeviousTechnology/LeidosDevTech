<?php
//$Logindata;
class Membership_model extends CI_Model {

	function validate($credentials) {

		$UserCondition = "Email =" . "'" . $credentials['Email'] . "' AND " . "Password =" . "'" . $credentials['Password'] . "'";
		$this->db->select('*');
		$this->db->from('Employee');
		$this->db->where($UserCondition);
		
		$query = $this->db->get();
	
		if ($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
		
	}
	
	public function read_info($Email) {
	
		$condition = "Email =" . "'" . $Email . "'";
		$this->db->select('*');
		$this->db->from('Employee');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
	
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	
	function update_Employee_email($Email, $data){
			
		if (isset($this->session->userdata['loggedin_'])){
		$Email = ($this->session->userdata['loggedin_']['Email']);
		}
	
		$data = array(
				'Location' => $this->input->post('Location'),
				'PreferredLoc' => $this->input->post('PreferredLoc'),
				'Skills' => $this->input->post('Skills'),
				'Interests' => $this->input->post('Interests')
		);
		
		$this->db->where(
				'Email', $this->session->userdata['loggedin_']['Email']		
				);
		
		$update = $this->db->update('Employee', $data);
		return $update;
	}
	
	
	function update_Employee_info($ID, $data){
			
// 		if (isset($this->session->userdata['loggedin_'])){
// 			$Email = ($this->session->userdata['loggedin_']['Email']);
// 		}

// 		'Location' => $this->input->post('Location'),
// 		'PreferredLoc' => $this->input->post('PreferredLoc'),
// 		'Skills' => $this->input->post('Skills'),
// 		'Interests' => $this->input->post('Interests')
		if ($this->input->post('Type')!=NULL){
		$data = array(
				
				'Type'=> $this->input->post('Type')
				
		);
	
		$this->db->where(
				'EmployeeID', $ID
				);
	
		 $this->db->update('Employee', $data);
		}
		
		if ($this->input->post('PreferredLoc')!=NULL){
			$data = array(
		
					'PreferredLoc'=> $this->input->post('PreferredLoc')
		
			);
		
			$this->db->where(
					'EmployeeID', $ID
					);
		
			$this->db->update('Employee', $data);
		}
		
		////
		if ($this->input->post('Location')!=NULL){
			$data = array(
		
					'Location'=> $this->input->post('Location')
		
			);
		
			$this->db->where(
					'EmployeeID', $ID
					);
		
			$this->db->update('Employee', $data);
		}
		/////
		if ($this->input->post('Skills')!=NULL){
			$data = array(
		
					'Skills'=> $this->input->post('Skills')
		
			);
		
			$this->db->where(
					'EmployeeID', $ID
					);
		
			$this->db->update('Employee', $data);
		}
		/////checboxes Interests
		if ($this->input->post('Interests')!=NULL){
			$Interests=$this->input->post('Interests');
			$data = array(
		
// 					'Interests'=> $this->input->post('Interests'),
					'Interests'=> implode(',',$Interests)
// 					'Interests'=> $this->input->post('Interests'),
// 					'Interests'=> $this->input->post('Interests'),
// 					'Interests'=> $this->input->post('Interests'),
// 					'Interests'=> $this->input->post('Interests')
		
			);
		
			$this->db->where(
					'EmployeeID', $ID
					);
		
			$this->db->update('Employee', $data);
		}
		
		
		redirect('Login/adminpage');
	}
	
	function update_Project_info($ID, $data){
			
		// 		if (isset($this->session->userdata['loggedin_'])){
		// 			$Email = ($this->session->userdata['loggedin_']['Email']);
		// 		}
	
		// 		'Location' => $this->input->post('Location'),
		// 		'PreferredLoc' => $this->input->post('PreferredLoc'),
		// 		'Skills' => $this->input->post('Skills'),
		// 		'Interests' => $this->input->post('Interests')
		if ($this->input->post('Type')!=NULL){
			$data = array(
	
					'Type'=> $this->input->post('Type')
	
			);
	
			$this->db->where(
					'ProjectID', $ID
					);
	
			$this->db->update('Project', $data);
		}
		
		if ($this->input->post('Name')!=NULL){
			$data = array(
		
					'Description'=> $this->input->post('Name')
		
			);
		
			$this->db->where(
					'ProjectID', $ID
					);
		
			$this->db->update('Project', $data);
		}
		
	
		if ($this->input->post('Location')!=NULL){
			$data = array(
	
					'PrimaryLoc'=> $this->input->post('Location')
	
			);
	
			$this->db->where(
					'ProjectID', $ID
					);
	
			$this->db->update('Project', $data);
		}
	
		////
		if ($this->input->post('SecondaryLoc')!=NULL){
			$data = array(
	
					'SecondaryLoc'=> $this->input->post('SecondaryLoc')
	
			);
	
			$this->db->where(
					'ProjectID', $ID
					);
	
			$this->db->update('Project', $data);
		}
		/////
		if ($this->input->post('Priority')!=NULL){
			$data = array(
	
					'Priority'=> $this->input->post('Priority')
	
			);
	
			$this->db->where(
					'ProjectID', $ID
					);
	
			$this->db->update('Project', $data);
		}
		/////checboxes Interests
		if ($this->input->post('SkillsReq')!=NULL){
			$SkillsReq=$this->input->post('SkillsReq');
			$data = array(
	
			// 					'Interests'=> $this->input->post('Interests'),
					'SkillsReq'=> implode(',',$SkillsReq)
					// 					'Interests'=> $this->input->post('Interests'),
			// 					'Interests'=> $this->input->post('Interests'),
			// 					'Interests'=> $this->input->post('Interests'),
			// 					'Interests'=> $this->input->post('Interests')
	
			);
	
			$this->db->where(
					'ProjectID', $ID
					);
	
			$this->db->update('Project', $data);
		}
	
		
		
		if ($this->input->post('StartDate')!=NULL){
			$data = array(
		
					'StartDate'=> $this->input->post('StartDate')
		
			);
		
			$this->db->where(
					'ProjectID', $ID
					);
		
			$this->db->update('Project', $data);
		}
		
		
		if ($this->input->post('EndDate')!=NULL){
			$data = array(
		
					'EndDate'=> $this->input->post('EndDate')
		
			);
		
			$this->db->where(
					'ProjectID', $ID
					);
		
			$this->db->update('Project', $data);
		}
	
		redirect('Login/tables');
	}
	
	
	
	function update_Res_info($ID, $data){
			
		// 		if (isset($this->session->userdata['loggedin_'])){
		// 			$Email = ($this->session->userdata['loggedin_']['Email']);
		// 		}
	
		// 		'Location' => $this->input->post('Location'),
		// 		'PreferredLoc' => $this->input->post('PreferredLoc'),
		// 		'Skills' => $this->input->post('Skills'),
		// 		'Interests' => $this->input->post('Interests')
		if ($this->input->post('Type')!=NULL){
			$data = array(
	
					'Type'=> $this->input->post('Type')
	
			);
	
			$this->db->where(
					'ResourceID', $ID
					);
	
			$this->db->update('Resources', $data);
		}
	
		if ($this->input->post('Cost')!=NULL){
			$data = array(
		
					'Rcost'=> $this->input->post('Cost')
		
			);
		
			$this->db->where(
					'ResourceID', $ID
					);
		
			$this->db->update('Resources', $data);
		}
	
	
	

	
		redirect('Login/tables');
	}
	
	
	function update_Cost_info($ID, $data){
			
		// 		if (isset($this->session->userdata['loggedin_'])){
		// 			$Email = ($this->session->userdata['loggedin_']['Email']);
		// 		}
	
		// 		'Location' => $this->input->post('Location'),
		// 		'PreferredLoc' => $this->input->post('PreferredLoc'),
		// 		'Skills' => $this->input->post('Skills'),
		// 		'Interests' => $this->input->post('Interests')
		if ($this->input->post('Budget')!=NULL){
			$data = array(
	
					'Budget'=> $this->input->post('Budget')
	
			);
	
			$this->db->where(
					'ProjectID', $ID
					);
	
			$this->db->update('Cost', $data);
		}
	
		if ($this->input->post('ResourcesNeeded')!=NULL){
			$data = array(
	
					'ResourcesNeeded'=> $this->input->post('ResourcesNeeded')
	
			);
	
			$this->db->where(
					'ProjectID', $ID
					);
	
			$this->db->update('Cost', $data);
		}
	
		
		if ($this->input->post('RequiredHeadcount')!=NULL){
			$data = array(
		
					'RequiredHeadcount'=> $this->input->post('RequiredHeadcount')
		
			);
		
			$this->db->where(
					'ProjectID', $ID
					);
		
			$this->db->update('Cost', $data);
		}
	
	
	
	
		redirect('Login/tables');
	}
	
	
	
	function update_Wor_info($ID,$empID, $data){
			
		// 		if (isset($this->session->userdata['loggedin_'])){
		// 			$Email = ($this->session->userdata['loggedin_']['Email']);
		// 		}
	
		// 		'Location' => $this->input->post('Location'),
		// 		'PreferredLoc' => $this->input->post('PreferredLoc'),
		// 		'Skills' => $this->input->post('Skills'),
		// 		'Interests' => $this->input->post('Interests')
		if ($this->input->post('PercentUtilisation')!=NULL){
			$data = array(
	
					'PercentUtilisation'=> $this->input->post('PercentUtilisation')
	
			);
	
			$this->db->where(
					'ProjectID', $ID,
					'EmployeeID',$empID
					);
	
			$this->db->update('WorkingOn', $data);
		}
	

	
	
	
		redirect('Login/tables');
	}
	
function create_member() {

		$Email = $this->input->post('Email');

		$Interests = $this->input->post('Interests');
		$Skills = $this->input->post('Skills');
		
		$new_member_insert_data = array(
				'Name' => $this->input->post('Name'),
				'Type' => $this->input->post('Type'),
				'Email' => $this->input->post('Email'),
				'Password' => $this->input->post('Password'),
				'JobRole' => $this->input->post('JobRole'),
				'Location' => $this->input->post('Location'),
				'PreferredLoc' => $this->input->post('PreferredLoc'),
				'AvailableAfter' => $this->input->post('AvailableAfter'),
				'Skills' => implode(',', $Skills),
				'Interests' => implode(',', $Interests)  
		);

		$insert = $this->db->insert('Employee', $new_member_insert_data);
		return $insert;
	}
	
	function insert_image($image_file){
		
		
		if (isset($this->session->userdata['loggedin_'])){
			$Email = ($this->session->userdata['loggedin_']['Email']);
		}
		
// 		$image_file = array(
// 				'Image' => $this->input->post('Image')
// 		);
		
		$this->db->where(
				'Email', $this->session->userdata['loggedin_']['Email']
				);
		
		$update = $this->db->update('Employee', $image_file);
		return $update;
		
		
	}
	 
	function enroll_project(){
		
		$ProjectID = $this->input->post('ProjectID');
		
		$enroll_data = array(
				'ProjectID' => $this->input->post('ProjectID')
		);
		
		$insert = $this->db->insert('WorkingOn', $enroll_data);
		return $insert;
	}

	function check_if_email_exists($Email) {

		$this->db->where('Email', $Email);
		$result = $this->db->get('Employee');

		if ($result->num_rows() > 0) {
			return FALSE; //username taken
		} else {
			return TRUE; //username can be used
		}
	}
	
	function setOnline($Email){                        /////  Tamimi
		
		//////T	$query = $this->db->query("UPDATE Employee SET Activity = REPLACE(Activity, 'offline', 'online') WHERE Email='".$Email."'; ");
		$LoginData=$Email;
		return $Logindata;
// 			if ($query->num_rows() > 0) {
// 				return $query->result();
// 			} else {
// 				return NULL;
// 			}
		
	}
	
	function setOffline(){                        /////  Tamimi
	
		$query = $this->db->query("UPDATE `Employee` SET `Activity`='offline' WHERE 1");
	
	
// 		if ($query->num_rows() > 0) {
// 			return $query->result();
// 		} else {
// 			return NULL;
// 		}
	
	}
	
	////////////////--------- LATEST EDIT PAGE BELLO---------------/////////////////////
	
	function passupdate($Email, $data){
	
		if (isset($this->session->userdata['loggedin_'])){
			$Email = ($this->session->userdata['loggedin_']['Email']);
		}
	
		$data = array(
				'Password' => $this->input->post('Password')
		);
	
		$this->db->where(
				'Email', $this->session->userdata['loggedin_']['Email']
				);
	
		$update = $this->db->update('Employee', $data);
		return $update;
	
	}
	
	function skillsupdate($Email, $data){
	
		if (isset($this->session->userdata['loggedin_'])){
			$Email = ($this->session->userdata['loggedin_']['Email']);
		}
	
		$Skills = $this->input->post('Skills');
	
		$data = array(
				'Skills' => implode(',', $Skills)
		);
	
		$this->db->where(
				'Email', $this->session->userdata['loggedin_']['Email']
				);
	
		$update = $this->db->update('Employee', $data);
		return $update;
	
	}
	
	function interestsupdate($Email, $data){
	
		if (isset($this->session->userdata['loggedin_'])){
			$Email = ($this->session->userdata['loggedin_']['Email']);
		}
	
		$Interests = $this->input->post('Interests');
	
		$data = array(
				'Interests' => implode(',', $Interests)
		);
	
		$this->db->where(
				'Email', $this->session->userdata['loggedin_']['Email']
				);
	
		$update = $this->db->update('Employee', $data);
		return $update;
	
	}
	
	function locationupdate($Email, $data){
	
		if (isset($this->session->userdata['loggedin_'])){
			$Email = ($this->session->userdata['loggedin_']['Email']);
		}
	
		$data = array(
				'Location' => $this->input->post('Location'),
		);
	
		$this->db->where(
				'Email', $this->session->userdata['loggedin_']['Email']
				);
	
		$update = $this->db->update('Employee', $data);
		return $update;
	
	}
	
	function preflocationupdate($Email, $data){
	
		if (isset($this->session->userdata['loggedin_'])){
			$Email = ($this->session->userdata['loggedin_']['Email']);
		}
	
		$data = array(
				'PreferredLoc' => $this->input->post('PreferredLoc'),
		);
	
		$this->db->where(
				'Email', $this->session->userdata['loggedin_']['Email']
				);
	
		$update = $this->db->update('Employee', $data);
		return $update;
	
	}
	
	
	
	
	
	/////////////////////////////////////////////////////////////////////////////////////
	
	
	
	

	/////////////////////new b///////////////////
	function admincreate_member() {
	
		//$Email = $this->input->post('Email');
	
		$Interests = $this->input->post('Interests');
		$Skills = $this->input->post('Skills');
	
		$new_member_insert_data = array(
				'FirstName' => $this->input->post('FirstName'),
				'LastName' => $this->input->post('LastName'),
				'Type' => $this->input->post('Type'),
				'Gender' => $this->input->post('Gender'),
				'Email' => $this->input->post('Email'),
				'Password' => $this->input->post('Password'),
				'JobRole' => $this->input->post('JobRole'),
				'Location' => $this->input->post('Location'),
				'PreferredLoc' => $this->input->post('PreferredLoc'),
				'AvailableAfter' => $this->input->post('AvailableAfter'),
	
				'Interests' => implode(',', $Interests)
		);
	
		$insert = $this->db->insert('employee', $new_member_insert_data);
		return $insert;
	}
	
	
	
	function create_resource() {
	
		$new_resources_data = array(
				'Name' => $this->input->post('Name'),
				'Type' => $this->input->post('Type'),
				'Rcost' => $this->input->post('Rcost')
		);
	
		$insert = $this->db->insert('Resources', $new_resources_data);
		return $insert;
	}
	
	
	function create_project() {
	
	
		$new_project_data = array(
				'Name' => $this->input->post('Name'),
				'Type' => $this->input->post('Type'),
				'Description' => $this->input->post('Description'),
				'PrimaryLoc' => $this->input->post('PrimaryLoc'),
				'SecondaryLoc' => $this->input->post('SecondaryLoc'),
				'Priority' => $this->input->post('Priority'),
				'StartDate' => $this->input->post('StartDate'),
				'EndDate' => $this->input->post('EndDate')
		);
		
		$insert = $this->db->insert('Project', $new_project_data);
		return $insert;
	}
	
	function create_skill() {
	
		$new_skill_data = array(
				'Name' => $this->input->post('Name'),
		);
	
		$insert = $this->db->insert('Skills', $new_skill_data);
		return $insert;
	}
	
	
	function get_Employee()
	{
		$this->db->select('EmployeeID');
		$this->db->select('FirstName');
		$this->db->select('LastName');
		$this->db->from('Employee');
		$query = $this->db->get();
		$result = $query->result();
	
	
		$EmployeeID = array('-SELECT-');
		$FirstName = array('-SELECT-');
		$LastName = array('-SELECT-');
		$FullName = $FirstName + $LastName;
	
		for ($i = 0; $i < count($result); $i++)
		{
			array_push($EmployeeID, $result[$i]->EmployeeID);
			array_push($FullName, $result[$i]->FirstName.' '.$result[$i]->LastName);
		}
		return $employee_result = array_combine($EmployeeID, $FullName);
	}
	
	
	function get_Project()
	{
		$this->db->select('ProjectID');
		$this->db->select('Name');
		$this->db->from('Project');
		$query = $this->db->get();
		$result = $query->result();
	
		$ProjectID = array('-SELECT-');
		$Name = array('-SELECT-');
	
		for ($i = 0; $i < count($result); $i++)
		{
			array_push($ProjectID, $result[$i]->ProjectID);
			array_push($Name, $result[$i]->Name);
		}
		return $project_result = array_combine($ProjectID, $Name);
	}
	
	function get_skills()
	{
		$this->db->select('SkillID');
		$this->db->select('Name');
		$this->db->from('Skills');
		$query = $this->db->get();
		$result = $query->result();
	
		$SkillID = array('-SELECT-');
		$Name = array('-SELECT-');
	
		for ($i = 0; $i < count($result); $i++)
		{
			array_push($SkillID, $result[$i]->SkillID);
			array_push($Name, $result[$i]->Name);
		}
		return $project_result = array_combine($SkillID, $Name);
	}
	
}

?>