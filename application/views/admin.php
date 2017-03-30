<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DevTech</title>

<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href=" <?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
<link rel="stylesheet" href=" <?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
<link rel="stylesheet" href=" <?php echo base_url('assets/css/form-elements.css')?>">
<link rel="stylesheet" href=" <?php echo base_url('assets/css/style.css')?>">

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href=" <?php echo base_url('assets/ico/favicon.png')?>">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href=" <?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href=" <?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href=" <?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" href=" <?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png')?>">

</head>

 
<body bgcolor="#C0C0C0">
<!-- Collect the nav links, forms, and other content for toggling -->
<nav class="navbar navbar-inverse">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button><a class="navbar-brand" href="#"> <img alt="Brand" src=" <?php echo base_url('assets/img/leidos.png')?>"></a>
</div>
<br>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="navbar-collapse-4">
<ul class="nav navbar-nav navbar-right">
<li><a  href="<?php echo base_url(). 'login/homepage'  ;?>">Home</a></li>
<li><a  href="<?php echo base_url(). 'login/Investors'  ;?>">Investors</a></li>
<li><a  href="<?php echo base_url(). 'login/about'  ;?>">About</a></li>
<li><a  href="<?php echo base_url(). 'login/ResAll'  ;?>">Resources</a></li>
<li><a href="<?php echo base_url(). 'login/home' ;?>">Profile</a></li>
<li><a  href="<?php echo base_url(). 'login/logout'  ;?>">Log Out</a></li>
 
<!-- <li><a href="resource_allocation.html">Resources</a></li> -->
<!--   <li><a  href="<?php echo base_url(). 'login/index'  ;?>">Login</a></li>
<li><a  href="<?php echo base_url(). 'login/signup'  ;?>">Register</a></li>
-->



</ul>
 
</div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>
 


    
 
 
    
    

    
    
    <div id="table_form">
<?php


echo form_open('login/adminpage');

echo "<table style='width:80%; color:black;' border='4'>";

echo "<th> EmployeeID </th>";

echo "<th> Name </th>";

echo "<th>";
echo "Type ";
echo "</th>";

echo "<th>";
echo "Email ";
echo "</th>";



echo "<th>";
echo "Job Role ";
echo "</th>";

echo "<th>";
echo "Location ";
echo "</th>";

echo "<th>";
echo "Preferred Location ";
echo "</th>";



echo "<th>";
echo "Available After ";
echo "</th>";

echo "<th>";
echo "Skills ";
echo "</th>";

echo "<th>";
echo "Interests ";
echo "</th>";
 

?>	
<!-- <div class="collapse" id="collapseExample"> -->


<!-- <div class="well"> -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<?php echo form_open_multipart('login/update_Employee_table'); ?>
<?php echo form_label('Skills', 'Skills', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
			
				<div class="col-sm-8">
				
                   	<?php 
                   		$options = array(
                   				"" => "Select Skill",
                   				"Project management" => "Project Management",
                   				"Bilingual" => "Bilingual",
                   				"Confident" => "Confident",
                   				"Hardworking" => "Hardworking",
                   				"Hardworking" => "Hardworking",
                   				"Communication" => "Communication",
                   				"Leadership" => "Leadership",
                   				"Mathematics" => "Mathematics",
                   				"Computers" => "Computers"
                   		)
                   	?>
                   	<?php echo form_dropdown('Skills', $options, set_value('Skills'), array("class" => "form-control", "id" => "Skills"))?>
                   
				
		</div>
		
                   
           
		<br><br>
		
		  <?php echo form_label('Interests', 'Interests', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
		  
			<div class="col-sm-8">
				<?php 
                   		$options = array(
                   				"" => "Select Interest",
                   				"Transport" => "Transport",
                   				"Technology" => "Technology",
                   				"Man-power" => "Man-power",
                   				"Legal" => "Legal",
                   				"Machinery" => "Machinery"
                   		)
                   	?>
                   	<?php echo form_dropdown('Interests', $options, set_value('Interests'), array("class" => "form-control", "id" => "Interests"))?>
				
		</div>
                   
           
	<br><br>
		
		<?php echo form_label('Location', 'Location', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
		  
			<div class="col-sm-8">
				<?php 
                   		$options = array(
                   				"" => "Select Location",
                   				"Australia" => "Australia",
                   				"Canada" => "Canada",
                   				"England" => "England",
                   				"Germany" => "Germany",
                   				"Turkey" => "Turkey",
                   				"United Arab Emirates" => "United Arab Emirates"
                   		)
                   	?>
                   	<?php echo form_dropdown('Location', $options, set_value('Location'), array("class" => "form-control", "id" => "Location"))?>
               
			</div>
			
				
			
		<br><br>
		
			<?php echo form_label('PreferredLoc', 'Preferred Location', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
		  
			<div class="col-sm-8">
			<?php 
                   		$options = array(
                   				"" => "Select Preferred Location",
                   				"Australia" => "Australia",
                   				"Canada" => "Canada",
                   				"England" => "England",
                   				"Germany" => "Germany",
                   				"Turkey" => "Turkey",
                   				"United Arab Emirates" => "United Arab Emirates"
                   		)
                   	?>
                   	<?php echo form_dropdown('PreferredLoc', $options, set_value('PreferredLoc'), array("class" => "form-control", "id" => "Location"))?>
               
			</div>
					
			
			<br><br><br>
			
			
			<?php 
				echo form_submit('submit', 'Update', array("class"=>"btn btn-sml", "id"=>"submit"));
			?>
		</div>

</div>
</div> 
<?php 
// echo "<tr>";
// echo "<div class='collapse' id='collapseExample'>";


// echo "<div class='well'>";
// echo "Here the editing stuff";
// echo "</div>";

// echo "</div>";
// echo "</tr>";
foreach ($Emp as $object){


	
	echo "<tr>";

	echo "<td align='center'>" ;
		
	echo $object->EmployeeID ;

	echo "</td>";
	 
	echo "<td align='center'>" ;

	echo $object->Name ;
	 
	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object-> Type ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Email ;

	echo "</td>";
	 
// 	echo "<td align='center'>" ;
	 
// 	echo $object->Pass ;

// 	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->JobRole ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Location ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->PreferredLoc ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->AvailableAfter ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Skills ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Interests ;

	echo "</td>";
	
	/////echo "<td align='center'>" ;
	//echo $object->ProjectID;
	/////echo anchor('ResController/Enroll/',"   Add..   ") ;
	//echo "<a>".'Log Out'."</a>";
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	/////echo "</td>";
	
	////echo "<td align='center'>" ;
	//echo $object->ProjectID;
	////echo anchor('ResController/Enroll/',"   Edit..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	////echo "</td>";<?php echo site_url('Login/adminpage/'.$object->EmployeeID);
	?>

	<td align='center'>
<!-- 	<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> -->
<!-- 	Edit -->
<!-- 	</a> -->
<!-- data-toggle="modal" data-target="#myModal"  -->
<a type="button" class="btn btn-info btn-lg" href ="<?php echo site_url();?>Login/Edit_emp_table/<?php echo $object->EmployeeID ;?>">Edit</a>
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit</button> -->
	</td>

<?php 	 
}


echo "</tr>";


echo "</table>";

echo form_close();



?>
     </div>






<!--<h3 class="text-right">
<img src="assets/img/ra_bello.png"</h3><img src="assets/img/p1.png"<h4><img src="assets/img/p2.png"</h4> -->




<!-- <table class="NOTHERE"> -->

<div id="table_form">
<?php


echo form_open('login/adminpage');

echo "<table style='width:80%; color:black;' border='4'>";

echo "<th>";
echo "Project ID ";
echo "</th>";

echo "<th>";
echo "Name ";
echo "</th>";

echo "<th>";
echo "Type";
echo "</th>";

echo "<th>";
echo "Description ";
echo "</th>";

echo "<th>";
echo "Primary Loc ";
echo "</th>";

echo "<th>";
echo "Secondary Loc ";
echo "</th>";

echo "<th>";
echo "Skills Required ";
echo "</th>";

echo "<th>";
echo "Priority ";
echo "</th>";

echo "<th>";
echo "Start Date ";
echo "</th>";

echo "<th>";
echo "End Date ";
echo "</th>";

foreach ($Pro as $object){


	echo "<tr>";

	echo "<td align='center'>" ;
		
	echo $object->ProjectID ;

	echo "</td>";
	 
	echo "<td align='center'>" ;

	echo $object->Name ;
	 
	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object-> Type ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Description ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->PrimaryLoc ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->SecondaryLoc ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->SkillsReq;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Priority ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->StartDate ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->EndDate ;

	echo "</td>";
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Add..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";
	
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Edit..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";

	 
}

echo "</tr>";


echo "</table>";

echo form_close();



?>
     </div>



<!--                                       </table>  -->






<!--<h3 class="text-right">
<img src="assets/img/ra_bello.png"</h3><img src="assets/img/p1.png"<h4><img src="assets/img/p2.png"</h4> -->




<!-- <table class="NOTHERE"> -->

<div id="table_form">
<?php


echo form_open('login/adminpage');

echo "<table style='width:80%; color:black;' border='4'>";

echo "<th>";
echo "Project ID ";
echo "</th>";

echo "<th>";
echo "Resources Needed ";
echo "</th>";

echo "<th>";
echo "Budget ";
echo "</th>";

echo "<th>";
echo "Required Head count";
echo "</th>";

foreach ($Cost as $object){


	echo "<tr>";

	echo "<td align='center'>" ;
		
	echo $object->ProjectID ;

	echo "</td>";
	 
	echo "<td align='center'>" ;

	echo $object->ResourcesNeeded ;
	 
	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object-> Budget ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->RequiredHeadcount ;

	echo "</td>";
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Add..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";
	
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Edit..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";
	
	 
}

echo "</tr>";


echo "</table>";

echo form_close();



?>
    



<!--                                       </table>  -->

</div>




<!--<h3 class="text-right">
<img src="assets/img/ra_bello.png"</h3><img src="assets/img/p1.png"<h4><img src="assets/img/p2.png"</h4> -->




<!-- <table class="NOTHERE"> -->

<div id="table_form">
<?php


echo form_open('login/adminpage');

echo "<table style='width:80%; color:black;' border='4'>";
echo "<th>";
echo "Resources ID ";
echo "</th>";

echo "<th>";
echo "Name ";
echo "</th>";

echo "<th>";
echo "Type ";
echo "</th>";

echo "<th>";
echo "Resources Cost";
echo "</th>";

foreach ($Res as $object){


	echo "<tr>";

	echo "<td align='center'>" ;
		
	echo $object->ResourceID ;

	echo "</td>";
	 
	echo "<td align='center'>" ;

	echo $object->Name ;
	 
	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object-> Type ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object->Rcost ;

	echo "</td>";
	 
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Add..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";
	
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Edit..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";
	 
}

echo "</tr>";


echo "</table>";

echo form_close();



?>
     </div>



<!--                                       </table>  -->



<!--<h3 class="text-right">
<img src="assets/img/ra_bello.png"</h3><img src="assets/img/p1.png"<h4><img src="assets/img/p2.png"</h4> -->




<!-- <table class="NOTHERE"> -->

<div id="table_form">
<?php


echo form_open('login/adminpage');

echo "<table style='width:80%; color:black;' border='4'>";

echo "<th>";
echo "Employee ID ";
echo "</th>";



echo "<th>";
echo "Project ID ";
echo "</th>";

echo "<th>";
echo "Percent Utilisation ";
echo "</th>";


foreach ($Wor as $object){


	echo "<tr>";

	echo "<td align='center'>" ;
		
	echo $object->EmployeeID ;

	echo "</td>";
	 
	echo "<td align='center'>" ;

	echo $object->ProjectID ;
	 
	echo "</td>";
	 
	echo "<td align='center'>" ;
	 
	echo $object-> PercentUtilisation ;

	echo "</td>";
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Add..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";
	
	echo "<td align='center'>" ;
	//echo $object->ProjectID;
	echo anchor('ResController/Enroll/',"   Edit..   ") ;
	//echo "<a href='". base_url()."ResController/Enroll".$object->ProjectID .  "   >Enroll</a>";
	echo "</td>";

	 
	
	 
}

echo "</tr>";


echo "</table>";

echo form_close();



?>
     </div>

    
 

	

 <footer class="container-fluid bg-lightgray">

         
        <div class="col-md-12">
       
                        <div class="col-sm-5 col-sm-offset-0 text">
                            <div id="footer">
    <div class="container">
        <div class="row">
        
            <br>
              <div class="col-md-2">
                <center>

                  <img src=" <?php echo base_url('assets/img/dev.png')?>" alt="...">
                  
                </center>
              </div>
              <div class="col-md-2" id="Devious">
           <br><br>
                  <p>@ Devious Technology</p>
                  <p>Copyrights 2017</p>
                
              </div>
              <div class="col-md-1">
                <center>
                <br><br>

                  <img src=" <?php echo base_url('assets/img/heriot.png')?>" alt="...">
                  
              </div>
              <div class="col-md-1">
                <center>
                <br><br>

                  <img src=" <?php echo base_url('assets/img/logo.png')?>" alt="...">
                  
              </div>

              <div class="col-md-4">
              <br>
              <a>PRIVACY POLICY</a> | <a>SITE MAP</a><br>

               <img src=" <?php echo base_url('assets/img/phone.png')?>" alt="..."><p>Contact Us: +971559349325</p>
                
              </div>
            </div>
           
        </div>
    </div>
</div>
                            </div>
                        </div>
                    </div>
        
</footer>
 


    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/scripts.js"></script>
  </body>
</html>