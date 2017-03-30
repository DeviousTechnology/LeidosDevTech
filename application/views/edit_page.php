<?php 
	if (isset($this->session->userdata['loggedin_'])){
		
		$Email = ($this->session->userdata['loggedin_']['Email']);
	}else{
		header("location : edit_page");
	}
?>
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
    
 <!-- Top content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="top-content">
              <div class="inner-bg1">
                <div class="col-sm-8">
                
                <br>
			 <div class="panel-group" id="accordion" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Edit Password
                        </a>
                      </h4>
                      </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <div class="form-group">
                        <?php echo form_open_multipart('login/passupdate'); ?>
                        <?php echo $this->session->flashdata('msgp'); ?>
                          <?php echo form_password('Password', set_value('Password'), $attribute=array("class"=>"form-control", "id" => "Password", "placeholder"=>"Password")); ?>
                        </div>
                        <div class="form-group">
                          <?php echo form_password('Password_confirm', set_value('Conf_Password'), $attribute=array("class"=>"form-control", "id" => "Password", "placeholder"=>"Confirm Password")); ?>
                        </div>
                        <button class="btn3abood btn-lg" type = "submit" name="submit" value = "Update!">Update!</button>
    			<?php echo form_close() ?>
                        </div>
                  </div>
                  </div>
                
                
  
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Edit Interests
                    </a>
                  </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                  	<?php echo form_open_multipart('login/interestsupdate'); ?>
                  	<?php echo $this->session->flashdata('msgi'); ?>
                  	
                  		<div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Interests[]", "Transport" ,set_checkbox("Interests", "Transport") )?> Transport
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Interests[]", "Technology" ,set_checkbox("Interests", "Technology") )?> Technology
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Interests[]", "Man-power" ,set_checkbox("Interests", "Man-power") )?> Man-power
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Interests[]", "Legal" ,set_checkbox("Interests", "Legal") )?> Legal
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Interests[]", "Machinery" ,set_checkbox("Interests", "Machinery") )?> Machinery
                            </label>
                        </div>

                      <br/> 
                     <button class="btn3abood btn-lg" type = "submit" name="submit" value = "Update!">Update!</button>
    			<?php echo form_close() ?>

                    
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Edit Location
                    </a>
                  </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                       <label for="country" class="col-sm-2 control-label txtblack">Location</label>
                    <div class="col-sm-8">
                    <?php echo form_open_multipart('login/locationupdate'); ?>
                    <?php echo $this->session->flashdata('msgl'); ?>
                    
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
                      <button class="btn3abood btn-lg" type = "submit" name="submit" value = "Update!">Update!</button>
    			<?php echo form_close() ?>
                    </div>
                  </div>
                </div>

<!-- ------------------------------------------------------ -->


                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Edit Preferred Location
                    </a>
                  </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body"> 
                      <label for="country" class="col-sm-2 control-label txtblack">Preferred Location</label>
                      <div class="col-sm-8">
                       <?php echo form_open_multipart('login/preflocationupdate'); ?>
                       <?php echo $this->session->flashdata('msgpl'); ?>
                       
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
                      <br><br>
                        <button class="btn3abood btn-lg" type = "submit" name="submit" value = "Update!">Update!</button>
    			<?php echo form_close() ?>
                     </div>
                  </div>
                </div>
                <!-- ------------------------------------------------------------- -->

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Edit Profile Picture
                    </a>
                  </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body"> 
                     
                          
                            <div class="panel-body">
                                <!-- Standard Form -->
                                <label for="country" class="control-label txtblack">Select files from your computer</label>
                                 
                                 	
									<?php echo $error; ?>
									<?php echo $this->session->flashdata('msgimage'); ?>
									
    								<?php echo form_open_multipart('login/upload'); ?>
									<!--  <form action = "login/upload" method="post" enctype="multipart/form-data"> -->
    								<div class="form-inline">
	                                    <div class="form-group">
    								<input type="file" name="userfile" id="js-upload-files"/> 
    									</div>
    								<button class="btn3abood btn-lg" type = "submit" name="submit" value = "Upload File!">Upload File!</button>
    								<?php echo form_close() ?>
   
										<br>
                                    </div>
                                </div>
                         

                    </div>
                  </div>
                </div>

              </div>






                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
			
	



    <!-- Footer -->
        <br><br><br>
        <br><br><br>
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
        
    



</html>
    