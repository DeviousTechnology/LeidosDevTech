
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
	$ID=$object->ResourceID ;
	//$PrimaryLoc=$object->PrimaryLoc ;

	$Type= $object->Type ;
	$Rcost= $object->Rcost ;



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
echo form_label('ResourceID', 'Name', array("class" => "col-sm-2 control-label", "for" => "country")); 


?>
<div class="col-sm-2">
<?php echo $ID; ?>
		
		</div>
		<br></br>
		
		
		<?php echo form_open_multipart('login/update_Res_info/'.$ID); ?>
		

<!-- 		<label id="hide">Email :</label><br/>  
		<input type="text" id="hide" name="Email" value="<?php //echo $Email; ?>">
-->
       
        
<br>

<?php echo form_label('Cost', 'Cost', array("class" => "col-sm-2 control-label", "for" => "country")); ?>
  <div class="col-sm-3">
  <?php echo form_input('Cost', set_value('Name'), $attribute=array("class"=>"form-control", "id" => "Cost", "placeholder"=>$Rcost)); ?>
        

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
                          "Transport" => "Transport",
                          "Technology" => "Technology",
                          "Legal" => "Legal",
                          "Machinery" => "Machinery",
                          "Man-power" => "Man-power",
                          "Corporate" => "Corporate"
                      )
                    ?>
                    <?php echo form_dropdown('Type', $options, set_value('Type'), array("class" => "form-control", "id" => "Type"))?>
                       
                      </div>
           
		<br><br>

             
			
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
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>


</html>

 