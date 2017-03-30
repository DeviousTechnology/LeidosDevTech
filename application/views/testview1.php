<!DOCTYPE html>
<?php 
	if (isset($this->session->userdata['loggedin_'])){
		
		$Email = ($this->session->userdata['loggedin_']['Email']);
	}else{
		header("location : login_form");
	}
		

?>
<html lang="en">
<head>

</head>
<body>
<h1>Profile page</h1>
<div>
<?php //echo anchor('ResController/editProfile','Edit Profile'); 

echo anchor('login/logout', 'LogOut!');
?>
			<?php
                   echo "Logged In: ". $Email;
    		?>
			
			<?php if (isset($account_updated)) { ?>
				<h3><?php echo $account_updated; ?></h3>
			<?php } else { ?>
			<?php } ?>
			<div>
               <?php 
                  echo anchor('login/editpage', 'Edit Profile');
				?>
            </div>
      </div>
<!--      <div>
          <a href="
<?php //echo base_url(); ?>"
             >editProfile</a> 
      </div>
      <div>
<?php //echo anchor('ResController/editProfile','Resource Allocatoin'); ?>
    
    </div>
          <div>
<?php //echo anchor('ResController/editProfile','Log Out'); ?>
    
    </div>-->
    
    
    <h2> Welcome     <?php 
    foreach ($Name as $object){
        echo $object->Name ;
    }
    ?>
    </h2>
    
    <h3>Personal Details:  </h3>
    <p>ID:  <?php 
    foreach ($ID as $object){
        echo $object->EmployeeID ;
    }
    ?></p>
    

    <p>privilege:  <?php 
    foreach ($Type as $object){
        echo $object->Type ;
    }
    ?></p>
    
        <p>Email:  <?php 
    foreach ($Email as $object){
        echo $object->Email ;
    }
    ?></p>
    
        <p>Location:  <?php 
    foreach ($Location as $object){
        echo $object->Location ;
    }
    ?></p>
    
    <h3>Working Details:  </h3>
       
      <p>Skills:  <?php 
    foreach ($skills as $object){
        echo $object->Skills ;
    }
    ?></p>  
      <p>Interests:  <?php 
    foreach ($interests as $object){
        echo $object->Interests ;
    }
    ?></p>
      <p>Preferred Location:  <?php 
    foreach ($preloc as $object){
        echo $object->PreferredLoc ;
    }
    ?></p>

          <p>Working On:  <?php 
    foreach ($Wo as $object){
        
        echo  $object->name .', ' ;
    }
    ?></p>
          
          <h3>Recommended Projects: </h3> 
    <div id="table_form">
<?php


echo form_open('ResController/home');

echo "<table style='width:100%' border='1'>";

echo "<th>";
echo "Name ";
echo "</th>";

echo "<th>";
echo "Type ";
echo "</th>";

echo "<th>";
echo "Description ";
echo "</th>";

echo "<th>";
echo "PrimaryLoc ";
echo "</th>";

echo "<th>";
echo "SkillsReq ";
echo "</th>";


echo "<th>";
echo "StartDate ";
echo "</th>";

echo "<th>";
echo "EndDate ";
echo "</th>";


foreach ($AI as $object){


	echo "<tr>";

	echo "<td align='center'>" ;
		
	echo $object->Name ;

	echo "</td>";
	 
	echo "<td align='center'>" ;

	echo $object->Type ;
	 
	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Description ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->PrimaryLoc ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->SkillsReq ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->StartDate ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->EndDate ;

	echo "</td>";
        
   	echo "<td align='center'>" ;
	 //echo $object->ProjectID;
	echo anchor(''.$object->ProjectID,"Enroll") ;
//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>"; 

	 
}
//foreach ($AI as $object){
//
//}
echo "</tr>";


echo "</table>";

echo form_close();

    
    
    
    

//    foreach ($Pro as $object){
//        echo $object->Location ;
//    }
    ?>
    
  </div>  
    
    
        <?php 
    
//    if (is_array($Pro) || is_object($Pro))
//{
   // echo $Pro;
  //  foreach ($Pro as $object){
   //     echo $object->Location ;
       // echo $object->Activity ;
   //  }
//}
//         foreach ($Loc as $object){
//        echo $object->Email ;
//     }
     
   // echo $Pro; 
     
  // echo $Pro;
     
    ?>
  
</body>
</html>