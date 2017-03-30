<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DevTech</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href=" <?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
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

<body>
<!-- Top content -->
<div class="top-content">
<div class="inner-bg1">
<div class="col-sm-8">

<div>




<?php
//if (is_array($Name) || is_object($Name))

foreach ($Name as $object){
	$name=$object->Name ;
	$ID=$object->ProjectID ;
	$PrimaryLoc=$object->PrimaryLoc ;
	$SecondaryLoc=$object->SecondaryLoc ;
	$Desc= $object->Description ;
	$Type= $object->Type ;
	$Priority= $object->Priority ;
	$StartDate= $object->StartDate ;
	$EndDate= $object->EndDate ;
	
	
}
//  echo $name;
// echo anchor('login/home', 'profile!');
?>
<br>

<?php 
echo form_label('Name', 'Name', array("class" => "col-sm-2 control-label", "for" => "country")); 


?>
<div class="col-sm-3">
<?php echo $name; ?>
		
		</div>
		<br></br>
		
		<?php 
echo form_label('ProjectID', 'Name', array("class" => "col-sm-2 control-label", "for" => "country")); 


?>
<div class="col-sm-2">
<?php echo $ID; ?>
		
		</div>
		<br></br>
		
		</div>
		<?php echo form_open_multipart('login/update_Project_info/'.$ID); ?>
		

<!-- 		<label id="hide">Email :</label><br/>  
		<input type="text" id="hide" name="Email" value="<?php //echo $Email; ?>">
-->
       
        
<br>

  <?php echo form_label('Description', 'Description', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
  
  <div class="col-sm-4">
  <?php echo form_input('Name', set_value('Name'), $attribute=array("class"=>"form-control", "id" => "Name", "placeholder"=>$Desc)); ?>
        
		
		
				
		</div>
		
                    <?php 
					//	echo form_submit('submit', 'Update', array("name" => "skills", "class"=>"btn btn-sml", "id"=>"submit"));
					?>
           
		<br><br>
		        			<?php echo form_label('Type', 'Type', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
			
				<div class="col-sm-4">
				
                   	<?php 
                   		$options = array(
                   				"" => $Type,
                   				"Bid" => "Bid",
                   				"Research" => "Research",
                   				"Delivery" => "Delivery",
                   				"Constructoin" => "Constructoin",
                   				"Adminstrative" => "Adminstrative",
                   				"Development" => "Development",
                   				"Consultancy" => "Consultancy"
                   		)
                   	?>
                   	
                   	<?php echo form_dropdown('Type', $options, set_value('Type'), array("class" => "form-control", "id" => "Type"))?>
                   
				
		</div>
		
                    <?php 
					//	echo form_submit('submit', 'Update', array("name" => "skills", "class"=>"btn btn-sml", "id"=>"submit"));
					?>
           
		<br><br>

		
		<?php echo form_label('Location', 'Location', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
		  
			<div class="col-sm-4">
				<?php 
                   		$options = array(
                   				"" => $PrimaryLoc,
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
		
			<?php echo form_label('Secondary Loc', 'SecondaryLoc', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
		  
			<div class="col-sm-4">
			<?php 
                   		$options = array(
                   				"" => $SecondaryLoc,
                   				"Australia" => "Australia",
                   				"Canada" => "Canada",
                   				"England" => "England",
                   				"Germany" => "Germany",
                   				"Turkey" => "Turkey",
                   				"United Arab Emirates" => "United Arab Emirates"
                   		)
                   	?>
                   	<?php echo form_dropdown('SecondaryLoc', $options, set_value('SecondaryLoc'), array("class" => "form-control", "id" => "SecondaryLoc"))?>
               
			</div>
					<?php 
					//	echo form_submit('submit', 'Update', array("name" => "prefloc", "class"=>"btn btn-sml", "id"=>"submit"));
					?>
									<br><br>	                   
                
               

                      
                 
                      
                     
                      <br>
                             <label for="Priority" class="col-sm-2 control-label txtblack">Priority</label>
                                <div class="col-sm-4 ">
            				<?php 
                      			$options = array(
                          			"" => $Priority,
                          			"Urgent" => "Urgent",
                          			"Important" => "Important",
                          			"Moderate" => "Moderate"
                     	 		)
                    		?>
                    <?php echo form_dropdown('Priority', $options, set_value('Priority'), array("class" => "form-control", "id" => "Priority"))?>
                      </div>

                     
                     
         
			
			<br><br><br><br>
			
			                <div class="col-xs-6 col-sm-6 col-md-10">
                <label class="control-label col-sm-2" for="registration-date">Start Date:</label>
                <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <?php 
                    echo '<input class="form-control" name="StartDate" id="registration-date" type="date">';
                    ?>
<!--                     <input class="form-control" name="registration_date" id="registration-date" type="date"> -->
            
                    
                </div>
           <br><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-10">
                <label class="control-label col-sm-2" for="registration-date">End Date:</label>
                <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                   
                       <?php 
                    echo '<input class="form-control" name="EndDate" id="registration-date" type="date">';
                    ?>
                    
                
                    </div></div>
             
			
						<br><br><br><br>
			<div class="col-sm-9">
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


              
            
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

  <!-- jQuery -->

    <script src="<?php echo base_url('js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

</html>

 