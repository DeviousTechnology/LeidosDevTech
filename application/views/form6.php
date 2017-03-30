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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>                 <?php 
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
                    <li >
                        <a href="adminpage"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
           
                    <li>

                        <a href="tables"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i>Forms<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                           <li>
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
                              <li class="active">
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
                            Add Skills
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="adminpage">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i>Skills
                            </li>
                        </ol>
                    </div>
                      <div class="inner-bg1" style="padding-left: 150px">
             <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Form
                            
                                    <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h2>Add Skills</h2>
                                       
                                    </div>
                                   
                                </div>
                     <div class="row">
   <div class="col-md-12">
          <div class="form-box">
                                <div class="form-top">
                                   
                                </div>
                                <div class="form-bottom">
                              <?php echo form_open(base_url().'login/create_skill')?>
                                 <?php echo $this->session->flashdata('msgsadminskill'); ?>
                                </div>
                                <div class="form-bottom">
                                   
        		<label for="country" class="col-sm-2 control-label txtblack">Skill Name</label>
          <div class="col-xs-6 col-sm-7 col-md-10">
                                    <div class="form-group">
                     <?php echo form_input('Name', set_value('Name'), $attribute=array("class"=>"form-control input-sm", "id" => "Name", "placeholder"=>"Skill Name")); ?>
                           
                                    </div>
                                </div>             
		
                     

                <br><br><br>      
    <center>
            <?php 
				echo form_submit('submit', 'Submit', array("class"=>"btn btn-default btn-round-lg btn-lg", "id"=>"submit"));
			?>
   </center>
		 <?php echo form_close(); ?>
      
		
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
