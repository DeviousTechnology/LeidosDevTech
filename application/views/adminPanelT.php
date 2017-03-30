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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    <?php 
    foreach ($Name as $object){
        echo $object->FirstName.' '.$object->LastName ;
    }
    ?> 
    <b class="caret"></b></a>
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
                    <li class="active">
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
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
            
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                   
   
          
                <!-- /.row -->
<!--  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                          
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
               

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
           -->
           <!--          <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    --> 
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Total Overview</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Admin</th>
                                                <th>Users</th>
                                                <th>Employees Enrolled</th>
                                                <th>Employess Not Enrolled</th>
                                                
                                                
                                                	 <th>Completed projects</th>
                                                <th>On going projects</th>
                                               
                                                
                                                  <th>Employees</th>
                                                <th>Projects</th>
                                                <th>Resources</th>
                                                <th>Cost</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                                foreach ($TotalEmp as $val)
                                                	$tot=  $val->total;
                                                ?>
                                            <tr>
                                                <td> <?php 
                                                foreach ($TotalAdmin as $val)
                                                	echo $val->total;
                                                ?></td>
                                                <td><?php 
                                                foreach ($TotalUser as $val)
                                                	echo $val->total;
                                                ?></td>
                                                <td><?php 
                                                foreach ($TotalWork as $val)
                                                	echo $work= $val->total;
                                                ?></td>
                                                <td><?php 
                                          
                                                echo $tot-$work;
                                                
                                                ?></td>
                                                <?php 
                                                foreach ($TotalEmp as $val)
                                                	//echo $val->total;
                                                ?>
                                                
                                                 <td>
                                                <?php 
//                                                 $count = mysql_fetch_array($TotalEmp);
//                                                 echo $count[0];
                                                //echo $TotalEmp[0]
                                                foreach ($ComPro as $val)
                                                	echo $val->total;
                                                ?>
                                                </td>
                                                <td>
                                                <?php 
                                                foreach ($UndPro as $val)
                                                	echo $val->total;
                                                ?>
                                                </td>
                                                
												   <?php 
                                                foreach ($TotalPro as $val)
                                                	//echo $val->total;
                                                ?>
												
                                                
                                                
                                                
                                                                                                <td>
                                                												   <?php 
                                                foreach ($TotalEmp as $val)
                                                	echo $val->total;
                                                ?></td>
                                                <td>												   <?php 
                                                foreach ($TotalPro as $val)
                                                	echo $val->total;
                                                ?></td>
                                                <td>												   <?php 
                                                foreach ($TotalRes as $val)
                                                	echo $val->total;
                                                ?></td>
                                                <td>												   <?php 
                                                foreach ($TotalCost as $val)
                                                	echo $val->total;
                                                ?></td>
                                            </tr>
                                       
                                            
                                    
                                        </tbody>
                                    </table>
                                </div>
                             
                            </div>
                            
                            
						     
                            
                            
                        </div>
                        
                  
                   
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Projects Overview</h3>
                            </div>
                            <div class="panel-body">
                  
            
                     <div class="row">
                     
                     <!--  
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-danger">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon-hourglass"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
					Danger : <label class="label label-danger">323</label>
					</h3>
					<p>
						 Oranı:
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon-hourglass"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 success : <label class="label label-success"> 323</label>
					</h3>
					<p>
						Ortalama Oranı :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon-hourglass"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 primary : <label class="label label-primary"> 323</label>
					</h3>
					<p>
						Ortalama Oranı:
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon-hourglass"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						İnfo : <label class="label label-info"> 323</label>
					</h3>
					<p>
						Kullanma Oranı:
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		
		
		
		
		-->

		
		<?php 
		foreach ($ProBar as $val){
		
		?>
		
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon-hourglass"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Project ID: <label class="label label-primary"> <?php echo " ".$val->ProjectID;?></label>
					</h3>
					<p>
						Start Date:<?php echo " ".$start1=$val->StartDate;?>
						<br> 
						End Date:<?php echo " ".$end1=$val->EndDate;?>
						<br>
                        <div class="progress">
                        
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
                        
             <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo  $completed.'%';?>" >
                  <?php  
              
                  echo floor($completed).'%'; ?> 
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		
		
		<?php }?>
		
		
		
		
		      

          
		
		
        </div>
</div>
                
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris-data.js"></script>

</body>

</html>
