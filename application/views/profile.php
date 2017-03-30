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
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/footer.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/Tamimi.css">
		
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
            <!--   <li><a  href="<?php //echo base_url(). 'login/index'  ;?>">Login</a></li>
            <li><a  href="<?php //echo base_url(). 'login/signup'  ;?>">Register</a></li>
            -->
      

        
          </ul>
         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
     

	<div class="container">
    <div class="col-sm-12">
      <div class="col-sm-3 margin-img">
         <img id="img-profile" class="img-thumbnail img-center img-rounded" src="
         <?php
		foreach ($Image as $object){
			if ($object->Image != NULL){
				echo 'http://leidosdevtech.com/';
				echo 'images/profile/';
				echo $object->Image;
				} else {
				echo base_url('assets/img/dummy.png');
			}
		}
		?>
          ">

        <div class="page-header">
        <h2>
      <small><?php 
    foreach ($Name as $object){
        echo $object->FirstName.' '.$object->LastName ;
    }
    ?> </small>
        </h2>
      </div>
      <h4><?php 
    foreach ($JobRole as $object){
        echo $object->JobRole ;
    }
    ?> </h4>
    
    <br></br>
      
      <?php if (isset($account_updated)) { ?>
				<h3><?php echo $account_updated; ?></h3>
			<?php } else { ?>
			<?php } ?>


      <?php if (isset($file_uploaded)) { ?>
        <h3><?php echo $file_uploaded; ?></h3>
      <?php } else { ?>
      <?php } ?>
      
  <?php if (isset($photo_updated)) { ?>
        <h3><?php echo $photo_updated; ?></h3>
      <?php } else { ?>
      <?php } ?>

    <a class="btn btn-default btn-round-lg btn-lg"  href="<?php echo base_url().'login/editpage';?>" > Edit profile<i class="icon-edit icon-white"></i></a>
     
     <br><br>
	
	 <?php 
    	foreach ($Type as $object){
    		if ($object->Type == 'admin'){
    			echo '<a class="btn btn-default btn-round-lg btn-lg" href="';
    			echo base_url().'login/adminpage';
    ?>
    ">
    <?php
    echo 'Admin Panel';
    		}
		}
    ?>
    <i class="icon-edit icon-white"></i></a>	    
	            
</div>


   

     <div class="col-sm-8 well margin-well" >
       
    <div class="panel panel-default" style="width=100%;background-color:#f7e7ce">
  		<div class="panel-heading">
    		<h3 class="panel-title"><b>Personal Details</b></h3>
  		</div>
  		<div class="panel-body">
  		  <blockquote>
    		 <h5 style="color:black">ID:  <?php 
    foreach ($ID as $object){
        echo $object->EmployeeID ;
    }
    ?></h5>
    

    <h5 style="color:black">Privilege:  <?php 
    foreach ($Type as $object){
        echo $object->Type ;
    }
    ?></h5>
    
     <h5 style="color:black">Email:  <?php 
    foreach ($Email as $object){
        echo $object->Email ;
    }
    ?></h5>
    
      <h5 style="color:black">Location:  <?php 
    foreach ($Location as $object){
        echo $object->Location ;
    }
    ?></h5>	
    
      <h5 style="color:black">Preferred Location:  <?php 
    foreach ($preloc as $object){
        echo $object->PreferredLoc ;
    }
    ?></h5>
    
     <h5 style="color:black">Interests:  <?php 
    foreach ($interests as $object){
        echo $object->Interests ;
    }
    ?></h5>
    
       </blockquote>
  		</div>
	</div>
	
	<div class="panel panel-default" style="width=100%;background-color:#f7e7ce">
  		<div class="panel-heading">
    		<h3 class="panel-title"><b>Working On</b></h3>
  		</div>
  		<div class="panel-body">
  		  <blockquote>
    	<h5 style="color:black">
    	<?php 
          if ($Wo != NULL)
    foreach ($Wo as $object){
    	echo 'Project : ';
        echo $object->Name .'<br><br>' ;
    }
          else echo "Not working yet";
    ?></h5>      	
       </blockquote>
  		</div>
	</div>
       
 
 
 
    <div class="panel panel-default" style="width=100%;background-color:#f7e7ce">
		  		<div class="panel-heading">
		    		<h3 class="panel-title"><b>Skills</b></h3>
		  		</div>
		  		<div class="panel-body">
		  		
		  		<?php 
		  		if ($skills != NULL)
		  		foreach ($skills as $val){
		  		$SkillName=$val->Name;
		  		$level=$val->level;
		  		?>
				  		  <blockquote>
				    	    <div>
					               <p>
					               
					               <span  style=" text-align: left;color: black;"><?php echo $SkillName;?></span>
					               </p>
					               <div class="progress progress-striped active">
					                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="font-weight: bold;color: black; width: <?php echo $level;?>%">
					                    <?php echo $level.'%';?> <span class="sr-only">40% Complete (success)</span>
					                  </div>
					               </div>
				            </div>	
				       </blockquote>
				       
				       <?php }
		  		else echo "You don't have any skill yet!";
		  		?>
				       
				       
				       
		  		</div>
	</div> 
	
	
	     

  </div>  

  
     
    </div>

  </div>


<br><br><br>


	
            </body>

 <footer class="footer" style="">
 

      <div class="container">
          <div class="col-md-12">

      
      
        <style>
          .whitetext {
          color: white;}
        </style>

            <br>
            <div class="col-md-2">
              <center>
               <img src="<?php echo base_url();?>assets/img/dev2.png" alt="...">
              </center>
            </div>
          <div class="col-md-2" id="Devious">
          <br>
          <p class="whitetext">@ Devious Technology</p>
          <p class="whitetext">Copyrights 2017</p>     
          </div>
          <div class="col-md-1">
          <center>
          <br><br>
           <img src="<?php echo base_url();?>assets/img/hwwhite.png" alt="...">  
              </div>
              <div class="col-md-1">
                <center>
                <br><br>
                 <img src="<?php echo base_url();?>assets/img/leidosw.png" alt="...">
              </div>
              <div class="col-md-4">
              <br>
                <a class="whitetext">PRIVACY POLICY</a> | <a class="whitetext">SITE MAP</a><br>
                 <img src="<?php echo base_url();?>assets/img/phone.png" alt="..."><p class="whitetext">Contact Us: +9715599325</p>
              </div>

      </div>
    </div>
  </div>

 
    </footer>



        <!-- Javascript -->
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
        <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url();?>//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
       <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris-data.js"></script>

    



</html>