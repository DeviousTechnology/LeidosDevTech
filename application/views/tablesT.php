<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Admin panel</title>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?php echo base_url()?>../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url()?>../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo base_url()?>../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php echo base_url()?>css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>               <?php 
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
           
                    <li  class="active">

                        <a href="tables"><i class="fa fa-fw fa-table"></i> Database</a>
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
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-11.5">
                        <h1 class="page-header">
                            Database
                        </h1>

                    </div>
                    
                    


<div class="container">
  <div class='row'>
    <div class='col-md-11'>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#one">
        <center> Employees </center>
        </a>
      </h4>
    </div>
    <div id="one" class="panel-collapse collapse ">
      <div class="panel-body">
<!--                                 <h2 align="center">Employee Table</h2> -->
                     <table style="width:100%">
                    <tr>
                        <!-- <table border="1"> -->
                         <tr>
                            <th>Employee ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Type</th>
                            <th>Email</th>
                            <th>Job Role</th>
                            <th>Location</th>
                            <th>Preferred Location</th>
                            <th>Available after</th>
                            <th>Interests</th>
                            <th colspan="2">Actions</th> 
                  </tr>
                                          <?php foreach($Emp as $row): ?>
                            <tr>   
                              <td><?php echo $row->EmployeeID;    ?></td>
                              <td><?php echo $row->FirstName;          ?></td>
                              <td><?php echo $row->LastName;         ?></td>
                               <td><?php echo $row->Gender;         ?></td>
                              <td><?php echo $row->Type;          ?></td>
                              <td><?php echo $row->Email;         ?></td>
                              
                              <td><?php echo $row->JobRole;       ?></td>
                              <td><?php echo $row->Location;      ?></td>
                              <td><?php echo $row->PreferredLoc;  ?></td>
                              <td><?php echo $row->AvailableAfter;?></td>
                              <td><?php echo $row->Interests;        ?></td>
                              <!--  
                              style="width=100%;background-color:#f7e7ce"
                              -->
                              <td>
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce">
                              <a href ="<?php echo site_url('Login/delete_emp/'.$row->EmployeeID);?>">Delete</a></button>
                              </td>
                              <td>
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce">
                              <a href ="<?php echo site_url('Login/Edit_emp_table/'.$row->EmployeeID);?>">Edit</a>
                              </button>
                              </td>
                            </tr>
                            <?php endforeach; ?>
            </table>
      </div>
    </div>
  </div>

 <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#two">
         <center>Projects</center>
        </a>
      </h4>
    </div>
    <div id="two" class="panel-collapse collapse">
      <div class="panel-body">
<!--        <h2 align="center">Project Table</h2> -->

                     <table style="width:100%">
                      <tr>
						    <th>Project ID</th>
						    <th>Name</th>
						    <th>Type</th>
						    <th>Description</th>
						    
						    <th>PrimaryLoc</th>

						    <th>SecondaryLoc</th>
						    
						    <th>Priority</th>
						    <th>StartDate</th>
						    <th>EndDate</th>
						    <th colspan="2">Actions</th>
                  </tr>
 
							              <?php foreach($Pro as $row): ?>
							<tr>   
							  <td><?php echo $row->ProjectID;    ?></td>
							  <td><?php echo $row->Name;          ?></td>
							  <td><?php echo $row->Type;          ?></td>
							  <td><?php echo $row->Description;         ?></td>
							  
							  <td><?php echo $row->PrimaryLoc;       ?></td>
							  <td><?php echo $row->SecondaryLoc;      ?></td>
							  
							  <td><?php echo $row->Priority;?></td>
							  <td><?php echo $row->StartDate;        ?></td>
							  <td><?php echo $row->EndDate;     ?></td>
							  
							  <td>
							  <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce">
							   <a href ="<?php echo site_url('Login/delete_pro/'.$row->ProjectID);?>">Delete</a>
							   </button>
							   </td>
							   <td>
							   <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce">
							  <a href ="<?php echo site_url('Login/Edit_pro_table/'.$row->ProjectID);?>">Edit</a>
							  </button>
							  </td>
							</tr>
							<?php endforeach; ?>
                 
              </table>
        </div>
    </div>
      </div>
   



  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#three">
          <center>Resources</center>
        </a>
      </h4>
    </div>
    <div id="three" class="panel-collapse collapse">
      <div class="panel-body">
<!--          <h2 align="center">Resource Table</h2> -->

                     <table align="center" style="width:50%">
                    <tr>
                        <th>ResourceID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Cost</th>
                        <th colspan="2">Actions</th>
                    </tr>
                                          <?php foreach($Res as $row): ?>
                            <tr>   
                              <td><?php echo $row->ResourceID;    ?></td>
                              <td><?php echo $row->Name;          ?></td>
                              <td><?php echo $row->Type;          ?></td>
                              <td><?php echo $row->Rcost;         ?></td>
                              

                              
                              <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              <a href ="<?php echo site_url('Login/delete_res/'.$row->ResourceID);?>">Delete</a>
                              </button>
                              </td>
                              <td align="center">
                              <button align="center" class= "btn btn-default" style="width=100%;background-color:#f7e7ce">
                              <a href ="<?php echo site_url('Login/Edit_res_table/'.$row->ResourceID);?>">Edit</a>
                              </button>
                              </td>
                            </tr>
                            <?php endforeach; ?>
                    
                    </table>
        </div>
    </div>
      </div>
   


 <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#four">

<center>Projects Allocation</center>
        </a>
      </h4>
    </div>
    <div id="four" class="panel-collapse collapse">
      <div class="panel-body">
<!--         <h2 align="center">Project Allocation Table</h2> -->
                     <table align="center" style="width:50%">
                    <tr>
                        <th>EmployeeID</th>
                        <th>ProjectID</th>
                        <th>PercentUtilisation</th>
                        <th colspan="2">Actions</th>
                    </tr>
                   <?php foreach($Wor as $row): ?>
                            <tr>   
                              <td><?php echo $row->EmployeeID;    ?></td>
                              <td><?php echo $row->ProjectID;          ?></td>
                            
                              <td><?php echo $row->PercentUtilisation;         ?></td>
                              

                              
                              <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              
                              <a href ="<?php echo site_url('Login/delete_alloc/'.$row->EmployeeID . '/' . $row->ProjectID);?>">Delete</a>
                                 </button>
                              </td>
                               <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              <a href ="<?php echo site_url('Login/Edit_Wor_table/'.$row->EmployeeID.'/'.$row->ProjectID);?>">Edit</a>
                              </button>
                              </td>
                            </tr>
                            <?php endforeach; ?>
                </table>
        </div>
    </div>
      </div>
   



  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#five">
          <center>Costs</center>
        </a>
      </h4>
    </div>
    <div id="five" class="panel-collapse collapse">
      <div class="panel-body">
<!--           <h2 align="center">Cost Table</h2> -->
                     <table align="center" style="width:70%">
                    <tr>
                        <th>ProjectID</th>
                        <th>ResourcesNeeded</th>
                        <th>Budget</th>
                        <th>RequiredHeadcount</th>
                        <th colspan="2">Actions</th>
                    </tr>
                   
                                          <?php foreach($Cost as $row): ?>
                            <tr>   
                              <td><?php echo $row->ProjectID;    ?></td>
                              <td><?php echo $row->ResourcesNeeded;          ?></td>
                              <td><?php echo $row->Budget;          ?></td>
                              <td><?php echo $row->RequiredHeadcount;         ?></td>
                              

                              
                            <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              <a href ="<?php echo site_url('Login/delete_cost/'.$row->ProjectID);?>">Delete</a>
                              </button>
                              </td>
                              
                              <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              
                              <a href ="<?php echo site_url('Login/Edit_Cost_table/'.$row->ProjectID);?>">Edit</a>
                              </button>
                              </td>
                            </tr>
                            <?php endforeach; ?>
                       
                </table>



        </div>
    </div>
      </div>

       <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#six">

<center>Skills</center>
        </a>
      </h4>
    </div>
    <div id="six" class="panel-collapse collapse">
      <div class="panel-body">
<!--         <h2 align="center">Skills</h2> -->
                     <table align="center" style="width:40%">
                    <tr>
                        <th>SkillID</th>
                        <th>Name</th>
                        <th colspan="2">Actions</th>
                        
                    </tr>
                                          <?php foreach($Ski as $row): ?>
                            <tr>   
                              <td><?php echo $row->SkillID;    ?></td>
                              <td><?php echo $row->Name;          ?></td>
                                                          

                              
                              
                              <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              <a href ="<?php echo site_url('Login/delete_skills/'.$row->SkillID);?>">Delete</a>
                              </button>
                              
                   
                            </tr>
                            <?php endforeach; ?>
                    
                    </table>
            
        </div>
    </div>
      </div>
             <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#seven">

   <center> Employee Skills</center>
           </a>
      </h4>
    </div>
    <div id="seven" class="panel-collapse collapse">
      <div class="panel-body">
<!--        <h2 align="center">Employees with skills</h2> -->
 
                     <table align="center" style="width:40%">
                    <tr>
                        <th>Employee ID</th>
                        <th>Skill ID</th>
                        <th>Skill level</th>
                        <th colspan="2">Actions</th>
                        
                    </tr>
                                          <?php foreach($emps as $row): ?>
                            <tr>   
                              <td><?php echo $row->EmployeeID;    ?></td>
                              <td><?php echo $row->SkillID;          ?></td>
                              <td><?php echo $row->SkillLevel;          ?></td>
                                                   
 
                               
                              <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              <a href ="<?php echo site_url('Login/delete_empskills/'.$row->EmployeeID.'/'.$row->SkillID);?>">Delete</a>
                              </button>
                              </td>
                              <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              <a href ="<?php echo site_url('Login/Edit_res_table/'.$row->EmployeeID);?>">Edit</a>
                               </button>
                              </td>
                            </tr>
                            <?php endforeach; ?>
                     
                    </table>
            
        </div>
    </div>
      </div>
       <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#eight">
       <center>   Project Skills </center>
        </a>
      </h4>
    </div>
    <div id="eight" class="panel-collapse collapse">
      <div class="panel-body">
<!--          <h2 align="center">Project Skills</h2> -->
 
                     <table align="center" style="width:35%">
                    <tr>
                        <th>Project ID</th>
                        <th>Skill ID</th>
                        <th colspan="2">Actions</th>
                         
                    </tr>
                                          <?php foreach($PS as $row): ?>
                            <tr>   
                              <td><?php echo $row->ProjectID;    ?></td>
                              <td><?php echo $row->SkillID;          ?></td>
                              
                              
                               
 
                               
                             
                             <td align="center">
                              <button class= "btn btn-default" style="width=100%;background-color:#f7e7ce; ">
                              <a href ="<?php echo site_url('Login/delete_projectskills/'.$row->ProjectID);?>">Delete</a>
                              </button>
                              </td>
                 
                            </tr>
                            <?php endforeach; ?>
                     
                    </table>
        </div>
    </div>
      </div>
   
      
   


  


  
                  <!-- /.row -->
</div>
                <div class="row">
         
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

</body>

</html>
