<!-- Top content -->
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

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                     
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                         <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="#"> <img alt="Brand" src=" <?php echo base_url('assets/img/leidos.png')?>"></a>
                </div>
                <br><br><br>
                
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      
     <!--   <li><a  href="<?php echo base_url(). 'login/homepage'  ;?>">Home</a></li> -->
    <!--    <li><a  href="<?php echo base_url(). 'login/Investors'  ;?>">Investors</a></li> -->
    <!--    <li><a  href="<?php echo base_url(). 'login/about'  ;?>">About</a></li> -->
          <li><a  href="<?php echo base_url(). 'login/index'  ;?>">Login</a></li>

  
  <li><a  href="<?php echo base_url(). 'login/signup'  ;?>">Register</a></li>
      
       
  </ul>
      </div>
                
            </nav>
        </div>
    </div>
  
  </div>
  
    <body>
        <div class="top-content">
          
            <div class="inner-bg1">
                <div class="col-sm-8">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h2>Register</h2>
                                    </div>
                                    <?php echo form_open(base_url().'login/create_member')?>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                
                                <div class="form-bottom">
                                 
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <?php echo form_label('Full Name', 'Name', $attribute=array()); ?>
                                    <?php echo form_input('Name', set_value('Name'), $attribute=array("class"=>"form-control", "id" => "Name", "placeholder"=>"Full Name")); ?>
                                </div>
                                </div>
                            </div>
                               <div class="form-group">
                                  <?php echo form_label('Email Address', 'Email', $attribute=array()); ?>
                                  <?php echo form_input('Email', set_value('Email'), $attribute=array("class"=>"form-control", "id" => "Email", "placeholder"=>"Email Address...")); ?>
                               </div>
                              <p>You will occasionally receive account related emails. We promise not to share with anyone.<p>

                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <?php echo form_label('Password', 'Password', $attribute=array()); ?>
                                  <?php echo form_password('Password', set_value('Password'), $attribute=array("class"=>"form-control", "id" => "Password", "placeholder"=>"Password")); ?>
                                    </div>
                               </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <?php echo form_label('Confirm Password', 'Password', $attribute=array()); ?>
                                  <?php echo form_password('Password_confirm', set_value('Conf_Password'), $attribute=array("class"=>"form-control", "id" => "Password", "placeholder"=>"Confirm Password")); ?>
                                    </div>
                </div>
              </div>
              
              <br/> 
                 
          <div class="form-group">
                    <?php echo form_label('Job Role', 'JobRole', $attribute=array()); ?>
                    <?php 
                      $options = array(
                          "" => "Select Preferrable Job Role",
                          "Financial Advisor" => "Financial Advisor",
                          "Engineer" => "Engineer",
                          "Analyst" => "Analyst",
                          "Architect" => "Architect"
                      )
                    ?>
                    <?php echo form_dropdown('JobRole', $options, set_value('JobRole'), array("class" => "form-control", "id" => "JobRole"))?>
                   </div>
                   
                   <div class="form-group">
                    <?php echo form_label('Location', 'Location', $attribute=array()); ?>
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
                    
                    <div class="form-group">
                    <?php echo form_label('Preferred Location', 'PreferredLoc', $attribute=array()); ?>
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
                    
                <br/>         
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Interests</label>
                    <div class="col-sm-9">
                    
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
                    </div>
                </div>
                
                <br/>    
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Skills</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Project management" ,set_checkbox("Skills", "Project management") )?> Project Management
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Bilingual" ,set_checkbox("Skills", "Bilingual") )?> Bilingual
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Confident" ,set_checkbox("Skills", "Confident") )?> Confident
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Hardworking" ,set_checkbox("Skills", "Hardworking") )?> Hardworking
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Communication" ,set_checkbox("Skills", "Communication") )?> Communication
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Leadership" ,set_checkbox("Skills", "Leadership") )?> Leadership
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Mathematics" ,set_checkbox("Skills", "Mathematics") )?> Mathematics
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <?php echo form_checkbox("Skills[]", "Computers" ,set_checkbox("Skills", "Computers") )?> Computers
                            </label>
                        </div>
                    </div>
                </div>
                
                <br/> 
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Account Type</label>
                        <div class="col-sm-9">
                              <div class="checkbox">
                                <label>
                                  <?php echo form_checkbox("Type", "User" , set_checkbox("Type", "User"), $attribute=array("checked"=>"", ))?> User
                                </label>
                            </div>
                          </div>
                </div>
                
                    <div class="col-sm-6">
                              <p>By clicking register, you agree to have read and agreed to our Terms and Conditions.<p>
                    </div>
                    <br/>
                    
                    <div class="form-group">
                    <?php 
            echo form_submit('submit', 'Register', array("class"=>"btn btn-lg", "id"=>"submit"));
          ?>
                    </div>
          <br/>
          <?php echo form_close() ?>
        
          <div class="alert alert-danger" role="alert">
            <?php echo validation_errors();?>
          </div>
            
     
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
 <!-- ------------------------------------------------------------------------------------------------------------------------ --> 
  