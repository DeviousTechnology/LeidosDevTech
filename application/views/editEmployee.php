
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
        <link rel="stylesheet" href=" <?php //echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href=" <?php //echo base_url('assets/css/form-elements.css')?>">
        <link rel="stylesheet" href=" <?php //echo base_url('assets/css/style.css')?>">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href=" <?php //echo base_url('assets/ico/favicon.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href=" <?php //echo base_url('assets/ico/apple-touch-icon-144-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href=" <?php //echo base_url('assets/ico/apple-touch-icon-114-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href=" <?php //echo base_url('assets/ico/apple-touch-icon-72-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" href=" <?php //echo base_url('assets/ico/apple-touch-icon-57-precomposed.png')?>">

    </head>

	<div class="container-fluid">
    <div class="row">

                
            
        </div>
    </div>
	
	</div>
	
    <body>
<!-- Top content -->
<div class="top-content">
	<div class="inner-bg1">
		<div class="col-sm-8">

<div>




		<?php
		//if (is_array($Name) || is_object($Name))
		
		foreach ($Name as $object){
                   $firstname=$object->FirstName ;
                   $lastname=$object->LastName;
                   $gender= $object->Gender;
                  $ID=$object->EmployeeID ;
                  //$skills=$object->Skills ;
                  $Location=$object->Location ;
                  $preloc=$object->PreferredLoc ;
                  $JobRole= $object->JobRole ;
                  $Type= $object->Type ;
		}
               //  echo $name;
                  // echo anchor('login/home', 'profile!');
    	?>
<br>

<?php 
echo form_label('Full Name', 'Name', array("class" => "col-sm-2 control-label", "for" => "country")); 


?>
<div class="col-sm-3">
<?php echo $firstname.' '.$lastname; ?>
		
		</div>
		<br></br>
<?php 
echo form_label('Gender', 'Gender', array("class" => "col-sm-2 control-label", "for" => "country")); 


?>
<div class="col-sm-3">
<?php echo $gender; ?>
		
		</div>
		<br></br>
		
		<?php 
echo form_label('EmployeeID', 'Name', array("class" => "col-sm-2 control-label", "for" => "country")); 


?>
<div class="col-sm-2">
<?php echo $ID; ?>
		
		</div>
		<br></br>
		
		
		<?php echo form_open_multipart('login/update_emp_info/'.$ID); ?>
		

<!-- 		<label id="hide">Email :</label><br/>  
		<input type="text" id="hide" name="Email" value="<?php //echo $Email; ?>">
-->
       
        
<br>
        
        
		
		
                    <?php 
					//	echo form_submit('submit', 'Update', array("name" => "skills", "class"=>"btn btn-sml", "id"=>"submit"));
					?>
           
		
		        			<?php echo form_label('Type', 'Type', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
			
				<div class="col-sm-8">
				
                   	<?php 
                   		$options = array(
                   				"" => $Type,
                   				"admin" => "admin",
                   				"user" => "user"
                   		)
                   	?>
                   	
                   	<?php echo form_dropdown('Type', $options, set_value('Type'), array("class" => "form-control", "id" => "Skills"))?>
                   
				
		</div>
		
                    <?php 
					//	echo form_submit('submit', 'Update', array("name" => "skills", "class"=>"btn btn-sml", "id"=>"submit"));
					?>
           
		<br><br>

		
		<?php echo form_label('Location', 'Location', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
		  
			<div class="col-sm-8">
				<?php 
                   		$options = array(
                   				"" => $Location,
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
			
				<?php 
				//	echo form_submit('submit', 'Update', array("name" => "loc", "class"=>"btn btn-sml", "id"=>"submit"));
				?>
			
		<br><br>
		
			<?php echo form_label('PreferredLoc', 'Preferred Location', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
		  
			<div class="col-sm-8">
			<?php 
                   		$options = array(
                   				"" => $preloc,
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
					<?php 
					//	echo form_submit('submit', 'Update', array("name" => "prefloc", "class"=>"btn btn-sml", "id"=>"submit"));
					?>
									<br><br>	                   
                
               
		  <?php echo form_label('Interests', 'Interests', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
                    <div class="col-sm-3">
                    
                      <div class="checkbox" >
                            <label>
                              <?php echo form_checkbox("Interests[]", "Transport" ,set_checkbox("Interests", "Transport") )?> Transport
                            </label>
                        </div>
                        <div class="checkbox" >
                            <label>
                              <?php echo form_checkbox("Interests[]", "Technology" ,set_checkbox("Interests", "Technology") )?> Technology
                            </label>
                        </div>
                        <div class="checkbox"  >
                            <label>
                              <?php echo form_checkbox("Interests[]", "Man-power" ,set_checkbox("Interests", "Man-power") )?> Man-power
                            </label>
                        </div>
                        <div class="checkbox"  >
                            <label>
                              <?php echo form_checkbox("Interests[]", "Legal" ,set_checkbox("Interests", "Legal") )?> Legal
                            </label>
                        </div>
                        <div class="checkbox"  >
                            <label>
                              <?php echo form_checkbox("Interests[]", "Machinery" ,set_checkbox("Interests", "Machinery") )?> Machinery
                            </label>
                        </div>
                    </div>
                </div>
			
			<br><br><br><br>
						<br><br><br><br>
			
			<div align="center">
			<a>
			<?php 
				echo form_submit('submit', 'Update', array("class"=>"btn btn-default btn-round-lg btn-lg", "id"=>"submit"));
			?>
			
</a>

	<br><br>
			<?php echo form_close() ?>
			<form action="<?php echo site_url('login/tables');?>">
		<button class="btn btn-default btn-round-lg btn-lg">Cancel</button>
		</form>
		
		</div>
	</div>
</div>
		
</div>

 