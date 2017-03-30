<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Admin</title>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?php echo base_url();?>../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url();?>../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo base_url();?>../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php echo base_url();?>css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url();?>assets/css/Tamimi.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <br>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <br><br>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <img alt="Brand" src="<?php echo base_url()?>assets/img/leidos.png"></a>
        
            </div>
            <br>
            <!-- Top Menu Items -->
 
           <ul class="nav navbar-right top-nav">
         
          <ul class="nav navbar-nav navbar-left">
            <li><a  href="<?php echo base_url(). 'login/homepage'  ;?>">Home</a></li>
          <li><a  href="<?php echo base_url(). 'login/Investors'  ;?>">Investors</a></li>
            <li><a  href="<?php echo base_url(). 'login/about'  ;?>">About</a></li>
              <li><a  href="<?php echo base_url(). 'login/ResAll'  ;?>">Resources</a></li>
          
                </ul>


             <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                    
      		<?php 
		foreach ($ProBar1 as $val){
		$ID=$val->ProjectID;
		$start1=$val->StartDate;
		$end1=$val->EndDate;
		?>              
 <?php
			
					
$start = strtotime($start1);
$end = strtotime($end1);

$current = strtotime($val->cur);

$completed = (($current - $start) / ($end - $start)) * 100;


if ($completed>100)
	$completed=100;
	
	if ($completed<0)
		$completed=0;
 ?>
                    
                        <li>
                            <a href="<?php echo base_url().'login/adminpage';?>">
                                <div>
                                    <p>
                                        <strong>Project ID: <?php echo $ID;?></strong>
                                        <span class="pull-right text-muted"> </span>
                                    </p>
                                    
                                    
                                    
                                    
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo  $completed.'%';?>">
                                          <?php  echo floor($completed).'%';  ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
             <?php 
		}
             ?>           
 
                        
                        
                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="<?php echo base_url().'login/adminpage';?>">
                                <strong>See All Projects</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>                     <?php 
    foreach ($Name as $object){
        echo $object->FirstName.' '.$object->LastName ;
    }
    ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(). 'login/home' ;?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       <!--   <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        -->
                        <li>
                            <a href="<?php echo base_url().'login/editpage';?>"><i class="fa fa-fw fa-gear"></i> Edit Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(). 'login/logout'  ;?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <br><br>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">
<br>
                    <li>
                        <a href="adminpage"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
           
                    <li>

                        <a href="tables"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit" ></i>Forms<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                           <li  class="active">
                            	<a  href="<?php echo base_url(). 'login/formEmployee'  ;?>">Register New Employee</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(). 'login/formProject' ;?>">Add New Project</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(). 'login/formResource' ;?>">Allocate resource</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(). 'login/formWorking' ;?>">Working on</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(). 'login/formCost' ;?>">cost</a>
                            </li>
                              <li>
                                <a href="<?php echo base_url(). 'login/formSkill' ;?>">Add Skills</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(). 'login/formSkillEmployee' ;?>">Alocate Skill to Employee</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url(). 'login/formSkillProject' ;?>">Alocate Skill to Project</a>
                            </li>


          

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
        
<!--         -----------------////////////////\\\\\\\\\\\\\\\\\\--------------------------------    -->
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Register new employee
                           
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adminpage">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> New employee
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
            <div>
                <div class="row">
    
            
            <div class="inner-bg1" style="padding-left: 150px">
             <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Register new employee
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h2>Register</h2>
                                       <?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                    <div class="form-top-right">
                                        <span style="font-size:0.75em;" class="fa fa-pencil"></span>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                     <?php echo form_open(base_url().'login/admincreate_member')?>
                                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <?php echo form_input('FirstName', set_value('FirstName'), $attribute=array("class"=>"form-control input-sm", "id" => "FirstName", "placeholder"=>"First Name")); ?>                            
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <?php echo form_input('LastName', set_value('LastName'), $attribute=array("class"=>"form-control input-sm", "id" => "LastName", "placeholder"=>"Last Name")); ?>                            
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group">
                            <?php echo form_input('Email', set_value('Email'), $attribute=array("class"=>"form-control input-sm", "id" => "Email", "placeholder"=>"Email Address")); ?>
                            </div>
                                         <p>You will occasionally receive account related emails. We promise not to share with anyone.<p>

                                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <?php echo form_password('Password', set_value('Password'), $attribute=array("class"=>"form-control input-sm", "id" => "Password", "placeholder"=>"Password")); ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <?php echo form_password('Password_confirm', set_value('Conf_Password'), $attribute=array("class"=>"form-control input-sm", "id" => "Password", "placeholder"=>"Confirm Password")); ?>
                                    </div>
</div>
                   <div class="form-group">
                    <label for="country" class="col-sm-2 control-label">Job role</label>
                    <div class="col-sm-10">
                        <?php 
                      $options = array(
                          "" => "Select Job Role",
                          "Financial Advisor" => "Financial Advisor",
                          "Engineer" => "Engineer",
                          "Analyst" => "Analyst",
                          "Architect" => "Architect"
                      )
                    ?>
                    <?php echo form_dropdown('JobRole', $options, set_value('JobRole'), array("class" => "form-control input-sm", "id" => "JobRole"))?>
                   </div>
                   <br><br><br><br>
                    </div>
                    
                     <div class="form-group">
                    <label for="country" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                        <?php 
                      $options = array(
                          "" => "Select Gender",
                          "male" => "Male",
                          "female" => "Female"
                      )
                    ?>
                    <?php echo form_dropdown('Gender', $options, set_value('Gender'), array("class" => "form-control input-sm", "id" => "Gender"))?>
                   </div>
                    </div>
                      <br><br>
                     
                     <div class="form-group">
                    <label for="country" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-10">
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
                    <?php echo form_dropdown('Location', $options, set_value('Location'), array("class" => "form-control input-sm", "id" => "Location"))?>
                   
                    </div>
                    </div>
                    
                    <br><br>
                    
                     <div class="form-group">
                    <label for="country" class="col-sm-2 control-label">Preferred Location</label>
                    <div class="col-sm-10">
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
                    <?php echo form_dropdown('PreferredLoc', $options, set_value('PreferredLoc'), array("class" => "form-control input-sm", "id" => "Location"))?>
                
                    </div>
                    </div>
                    
                    <br><br>
                     
                   
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

                              
                 <div class="form-group">
                    <label class="control-label col-sm-3">Account Type</label>
                        <div class="col-sm-9">
                        
                       <?php  echo form_radio('Type','User');?>  User
                        &nbsp;&nbsp; &nbsp;&nbsp;
  					   <?php echo form_radio('Type','Admin');?>  Admin              
                        </div>
                        <br><br>
                 </div>
               
                <div class="col-sm-12">
                <center><p>By clicking register, you agree to have read and agreed to our Terms and Conditions.</p></center> 
                 
                <br><br>
                <center>
               <?php
 					echo form_submit('submit', 'Register', array("class"=>"btn btn-default btn-round-lg btn-lg", "id"=>"submit", "style" => "width:500px", "align-content"=>"center"));
          	   ?>
          	   </center>
              <?php echo form_close() ?>
               
                 </div>
           			
           			</div>
    </div>
                            
                
            </div>

        </div></div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
</div>
</div>
</div>
</div>

  

</body>

	  <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

</html>
