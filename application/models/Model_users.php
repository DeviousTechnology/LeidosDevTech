<?php

class Model_users extends CI_Model {

	protected $table = 'User';
	function __construct() {
		parent::__construct();
	}

	public function update($params){
		$fields = array(
				'Name' => $params['Name'],
				'Username' => $params['Username']
		);

		$this->db->insert($this->table, $fields);
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


	//////////////////////////////////////////////////////////////////////////////////////////////

	/////////// BELLO ADDED
	function getJobrole($Email) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT JobRole FROM Employee WHERE Email='".$Email."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}

	function getImage($Email) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT Image FROM Employee WHERE Email='".$Email."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}
	/////////////////////////////////////  Below is Tamimi code //////////////////////////////////


	function getEmployee() {

		$query = $this->db->query('SELECT * FROM Employee;');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getRows() {

		$query = $this->db->query('SELECT count(*) FROM User;');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}
	function getPro(){
		$query = $this->db->query('SELECT * FROM Project;');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getCost(){
		$query = $this->db->query('SELECT * FROM Cost;');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getRes(){
		$query = $this->db->query('SELECT * FROM Resources;');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getWor(){
		$query = $this->db->query('SELECT * FROM WorkingOn;');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}
	/*function getJobrole($Email) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT JobRole FROM Employee WHERE Email='".$Email."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'
	
		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';
	
		} else {
			return NULL;
		}
	}*/
	
	//--------------------------------------------------------------------
	function getempSkills() {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query('SELECT * FROM EmpSkills;');
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'
	
		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';
	
		} else {
			return NULL;
		}
	}
	
	function getprojectskills() {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query('SELECT * FROM ProjectSkills;');
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'
	
		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';
	
		} else {
			return NULL;
		}
	}
	
	function getskillsm() {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query('SELECT * FROM Skills;');
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'
	
		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';
	
		} else {
			return NULL;
		}
	}


	function getName($Email) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT FirstName, LastName FROM Employee WHERE Email='".$Email."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}

	function getNameEmp($EmployeeID) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT * FROM Employee WHERE EmployeeID='".$EmployeeID."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}

	function getID($Email) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT EmployeeID FROM Employee WHERE Email='".$Email."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}

	function getType($Email) {

		$query = $this->db->query("SELECT Type FROM Employee WHERE Email='".$Email."';");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getEmail($Email) {

		$query = $this->db->query("SELECT Email FROM Employee WHERE Email='".$Email."';");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getLocation($Email) {

		$query = $this->db->query("SELECT Location FROM Employee WHERE Email='".$Email."';");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getEnrollment($Email) {
	
		$query = $this->db->query("SELECT * FROM `WorkingOn` WHERE EmployeeID= (SELECT EmployeeID FROM Employee WHERE Email = '".$Email."' LIMIT 1);");
	
	
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}
	function getSkills($Email) {

		//$query = $this->db->query("SELECT SkillID FROM EmpSkills WHERE Email='".$Email."';");
		$query = $this->db->query("SELECT EmpSkills.EmployeeID, EmpSkills.SkillID, EmpSkills.SkillLevel as level,Skills.Name FROM EmpSkills 
JOIN Skills On EmpSkills.SkillID=Skills.SkillID
WHERE  EmployeeID = (SELECT EmployeeID FROM Employee where email='".$Email."')");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getint($Email) {

		$query = $this->db->query("SELECT Interests FROM Employee WHERE Email='".$Email."';");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}



	function getWorking($Email) {

		$query = $this->db->query("SELECT

  Project.Name
FROM
  Project,
  Employee,
  WorkingOn
WHERE
  WorkingOn.EmployeeID = Employee.EmployeeID AND WorkingOn.ProjectID = Project.ProjectID AND Email='".$Email."';");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}
	//WorkingOn
	function getProjectID($Email) {

		$query = $this->db->query("SELECT
     w.ProjectID
FROM
    Employee AS e,
    WorkingOn AS w
WHERE
    e.EmployeeID = w.EmployeeID
AND
     Email='".$Email."';");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getpreloc($Email) {

		$query = $this->db->query("SELECT PreferredLoc FROM Employee WHERE Email='".$Email."';");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}
	

// 	SELECT Project.Name , Project.Type ,Project.Description, Project.PrimaryLoc , Project.StartDate , Project.EndDate ,Project.ProjectID
// 	FROM Project WHERE ProjectID in (
// 			SELECT DISTINCT ProjectID
// 			FROM `ProjectSkills`,Employee
// 			WHERE ProjectSkills.SkillID  IN (select DISTINCT SkillID
// 					from EmpSkills,Employee
// 					Where EmpSkills.EmployeeID = (SELECT EmployeeID FROM Employee WHERE Employee.email = 'akt@hw.com'))
// 			AND Employee.email = 'akt@hw.com')

	
	function getAI($Email) {
		/*
		$query = $this->db->query("SELECT
     p.Name , p.Type ,p.Description, p.PrimaryLoc , p.SkillsReq , p.StartDate , p.EndDate ,p.ProjectID
FROM
    Employee AS e,
    Project AS p
WHERE
    e.Skills = p.SkillsReq
    AND
e.Location = p.PrimaryLoc
AND
   Email='".$Email."';");

*/
		
		$query = $this->db->query("SELECT Project.Name ,Skills.Name as SkillsReq, Project.Type ,Project.Description, Project.PrimaryLoc , Project.StartDate , Project.EndDate ,Project.ProjectID
	FROM Project 
	JOIN ProjectSkills ON Project.ProjectID = ProjectSkills.ProjectID
        JOIN EmpSkills ON EmpSkills.SkillID = ProjectSkills.SkillID
        JOIN Employee ON Employee.EmployeeID = EmpSkills.EmployeeID
        JOIN Skills ON Skills.SkillID = EmpSkills.SkillID
        where Employee.Email = '".$Email."'");
		if ($query->num_rows() > 0) {
			return $query->result();
			//return NULL;
		} else {
			return NULL;
		}
	}

	//function get      SELECT * FROM Project ORDER BY ProjectID DESC LIMIT 10
	
	function getPopular() {

		$query = $this->db->query("SELECT  count(WorkingOn.EmployeeID) as count ,Project.ProjectID, Project.Name, Project.Description, Project.PrimaryLoc  , Project.StartDate , Project.EndDate ,  Project.Type 
from WorkingOn 
JOIN Project 

ON WorkingOn.ProjectID = Project.ProjectID
 
GROUP by WorkingOn.ProjectID
ORDER by count(WorkingOn.EmployeeID) DESC Limit 10");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}


	function getUnPopular() {

		$query = $this->db->query("select  Description, PrimaryLoc ,p.ProjectID , StartDate , EndDate , EmployeeID, Type, p.Name as Name , count(*) as count
from WorkingOn s
join Project p on s.EmployeeID = p.ProjectID
group by EmployeeID, p.Name
ORDER BY COUNT(*) ASC LIMIT 10");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getRecent() {
	
		$query = $this->db->query("SELECT Project.ProjectID, Project.Name, Project.Type, Project.Description, Project.PrimaryLoc ,Project.StartDate, Project.EndDate, Skills.Name as SkillsReq
FROM Project 
JOIN ProjectSkills ON Project.ProjectID = ProjectSkills.ProjectID
JOIN Skills ON ProjectSkills.SkillID= Skills.SkillID
ORDER BY ProjectID DESC LIMIT 10");
	
	
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	/*function getEnroll() {  //takes parameters
		$EmployeeID = getID(); //wrong
		$ProjectID = '2';
		$PercentUtilisation = '0';
		$query = $this->db->query("INSERT INTO `WorkingOn`(`EmployeeID `, ` ProjectID`, `PercentUtilisation`) VALUES (".$EmployeeID .",". $ProjectID . ",". $PercentUtilisation .") ");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}*/

	function get_results($search_term='default')
	{
		// Use the Active Record class for safer queries.
		$this->db->select('Project.ProjectID, Project.Name, Project.Type, Project.Description, Project.PrimaryLoc ,Project.StartDate, Project.EndDate, Skills.Name as SkillsReq');
		$this->db->from('Project');
		$this->db->join('ProjectSkills','Project.ProjectID = ProjectSkills.ProjectID');
		$this->db->join('Skills','ProjectSkills.SkillID= Skills.SkillID');
		$this->db->like('Project.Name',$search_term);
	
		// Execute the query.
		$query = $this->db->get();
	
		// Return the results.
		return $query->result_array();
	}

	function delete_row($EmployeeID){
		$this -> db -> where('EmployeeID', $EmployeeID);
		$this -> db -> delete('Employee');
		redirect('Login/tables');
	}
	
	function delete_pro($ProjectID){
		$this -> db -> where('ProjectID', $ProjectID);
		$this -> db -> delete('Project');
		redirect('Login/tables');
	}
	
	function delete_res($ResourceID){
		$this -> db -> where('ResourceID', $ResourceID);
		$this -> db -> delete('Resources');
		redirect('Login/tables');
	}
	
	function delete_cost($ProjectID){
		$this -> db -> where('ProjectID', $ProjectID);
		$this -> db -> delete('Cost');
		redirect('Login/tables');
	}
	
	function delete_alloc($EmployeeID,$ProjectID){
		$this -> db -> where('EmployeeID', $EmployeeID);
		$this -> db -> where('ProjectID', $ProjectID);
		$this -> db -> delete('WorkingOn');
		redirect('Login/tables');
	}
	//============================================================
	function delete_empskills($EmployeeID,$SkillID){
		$this -> db -> where('EmployeeID', $EmployeeID);
		$this -> db -> where('SkillID', $SkillID);
		$this -> db -> delete('EmpSkills');
		redirect('Login/tables');
	}
	function delete_projectskills($ProjectID,$SkillID){
		$this -> db -> where('ProjectID', $ProjectID);
		$this -> db -> where('SkillID', $SkillID);
		$this -> db -> delete('ProjectSkills');
		redirect('Login/tables');
	}
	function delete_skills($SkillID){
		$this -> db -> where('SkillID', $SkillID);
		$this -> db -> delete('skills');
		redirect('Login/tables');
	}
//======================================================================
	function getTotalEmp() {

		$query = $this->db->query("SELECT count(*) As total FROM Employee;");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getTotalPro() {

		$query = $this->db->query("SELECT count(*) As total FROM Project;");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getTotalCost() {

		$query = $this->db->query("SELECT count(*) As total FROM Cost;");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getTotalRes() {

		$query = $this->db->query("SELECT count(*) As total FROM Resources;");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getComPro() {

		$query = $this->db->query("SELECT count(*) As total FROM Project WHERE EndDate < CURDATE();");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getUndPro() {

		$query = $this->db->query("SELECT count(*) As total FROM Project WHERE EndDate >= CURDATE();");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getTotaladmin() {

		$query = $this->db->query("SELECT count(*) As total FROM Employee WHERE Type LIKE  'admin'");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getTotaluser() {

		$query = $this->db->query("SELECT count(*) As total FROM Employee WHERE Type LIKE  'user' ;");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getTotalWork() {

		$query = $this->db->query("SELECT count(DISTINCT EmployeeID) As total FROM WorkingOn;");


		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return NULL;
		}
	}

	function getNamePro($ProjectID) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT * FROM Project WHERE ProjectID='".$ProjectID."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}

	function getNameRes($ResourceID) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT * FROM Resources WHERE ResourceID='".$ResourceID."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}

	function getNameCost($ProjectID) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT * FROM Cost WHERE ProjectID='".$ProjectID."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}


	function getNameWor($EID,$PID) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT * FROM WorkingOn WHERE EmployeeID='".$EID."' AND ProjectID='".$PID."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}


	function getProBar() {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT ProjectID, Name, StartDate, EndDate, CURDATE() AS cur from Project;");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'

		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';

		} else {
			return NULL;
		}
	}
	
	function getProBar1() {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT ProjectID, Name, StartDate, EndDate, CURDATE() AS cur from Project 
ORDER BY ProjectID DESC
Limit 5;");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'
	
		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';
	
		} else {
			return NULL;
		}
	}
	function getEnroll($EID,$PID) {
			
		$query = $this->db->query("INSERT INTO `WorkingOn`(`EmployeeID`, `ProjectID`) VALUES (".$EID.",".$PID.")");
			
		redirect('Login/resAll');
	
	}
	function getEmployeeID($Email) {
		//$Activity = 'offline';
		//	$query = $this->db->query("SELECT Name FROM Employee WHERE Activity LIKE  ' ". $Activity  ." ' ; ");
		$query = $this->db->query("SELECT EmployeeID  FROM Employee WHERE Email='".$Email."';");
		// SELECT Name FROM Employee WHERE Activity LIKE 'offline'
	
		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';
	
		} else {
			return NULL;
		}
	}
	
	function get_skillset(){
		$query = $this->db->query("SELECT * FROM Skills");
		
		if ($query->num_rows() > 0) {
			return $query->result();
			//                 return 'Offine';
		
		} else {
			return NULL;
		}
		
	}


}

?>