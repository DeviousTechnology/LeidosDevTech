
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DevTech</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/footer.css">
        
       <!-- JS -->
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
       
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">
  


<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>



    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 10%;
      margin: auto;
  }
  </style>
    </head>

      <body bgcolor="lightgray">
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
          </button><a class="navbar-brand" href="#"> <img alt="Brand" src="<?php echo base_url();?>assets/img/leidos.png"></a>
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
           

          </ul>


        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->

    </nav>
    
 
        
    
 <?php
//  echo form_open('Login/resAll');

// //  echo form_input(array('name'=>'search'));
// //echo "<input name='search' type='text' size='30' onkeyup='Welcome/execute_search' >";
// echo form_input(array("name" => "search","id" => "search", "placeholder"=>"Projects", "onkeyup"=>"showResult(this.value)"));
// echo form_submit('search_submit','Search');
// //echo "<ul id='finalResult'></ul>";

 ?>

<div class="banner-job">
    <div class="banner-overlay"></div>
    <div class="container text-center">
      <!--<div class="col-sm-9">-->
              <div class="col-md-12">
                        <br>
                        <u><b><p style="font-size:48px;;padding-right:40px"><font color="#C0B283">Resource Allocation</font></p></b></u>
                        <br>   
                 
                  
            <?php
        echo form_open('Login/resAll', $attribute=array("class"=>"navbar-form navbar-center"));
        echo '<div class="form-group">';
        echo form_input(array("class"=>"form-control","name"=>"g", "style"=>"width:300px","name" => "search","id" => "search", "placeholder"=>"Search Projects", "onkeyup"=>"showResult(this.value)"));
       echo ' ';
        echo form_submit('search_submit','Search', $attribute=array("class"=>"btn btn-default btn-round-lg btn-lg","style"=>"margin-left:10px;"));
        echo '</div>';
        echo form_close();
     
        
        foreach ($EmpID as $val){
        	 $Eid= $val->EmployeeID;
        	//$Pid= $val->ProjectID;
        }
        
        ?>
      
          
       
<!--          name="g"  -->

        <!-- <a  style="width:100px" class="btn btn-default btn-round-lg btn-lg" type="submit">Go!<i class="icon-edit icon-white"></i></a>-->
        <!--new button-->              
          </div><!-- category-change -->         
      </div><!-- banner-form -->
    </div><!-- container -->
  </div><!-- banner-section -->


   
  <div class="page">
<div class="container"><h2></h2></div>

<div id="exTab2" class="container"> 
<ul class="nav nav-tabs">
      <li class="active">
        <a  href="#1" data-toggle="tab"><h3>All Projects</h3></a>
      </li>
      <li>
      <a href="#2" data-toggle="tab"><h3>Recommended</h3> </a>
      </li>
      <li>
      <a href="#3" data-toggle="tab"><h3>Popular </h3></a>
      </li>

            <li>
      <a href="#4" data-toggle="tab"><h3>Unpopular</h3></a>
      </li>
            <li>
      <a href="#5" data-toggle="tab"><h3>Recent</h3> </a>
      </li>
    </ul>

      <div class="tab-content ">
        <div class="tab-pane active" id="1">
          <h3>All Projects</h3>
            <div class="col-sm-15"style="color:black;padding:20px;">
        
        <?php 

        
        if ($results!=NULL){
        
        //echo form_open('login/adminpage');
        
        foreach ($results as $val){ 
          
        echo '<div class="row">';
          
        echo '<div class="col-md-12" style="background-color:white;color:black;padding:30px;align=left;border: 1px solid black;">';
          $Pid=$val['ProjectID'];
        echo '<h4><b>';
        echo $val['Name'];
        echo '</b></h4>';
        
        echo '<p style="background-color:white;color:black">';
        echo $val['Description'];
        echo '</p>';
        
        echo '<ul>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'Start Date:   ';
        echo $val['StartDate'];
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'End Date:   ';
        echo $val['EndDate'];
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-map-marker">';
        echo 'Location:   ';
        echo $val['PrimaryLoc'];
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-tags">';
        echo 'Type:   ';
        echo $val['Type'];
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-lightbulb-o">';
        echo 'Skills Required:   ';
        echo $val['SkillsReq'];
        echo '</li>';
      
      
        echo '</ul>';
        
       // echo '<a  style="width:100px" class="btn btn-default btn-round-lg btn-lg" type="submit">Enroll!<i class="icon-edit icon-white"></i></a>
//             //'; 
//         echo '<button class="btn btn-default btn-round-lg btn-lg">';
//         foreach ($enrollment as $vall){
//         	$enrolled=$vall->ProjectID;
        
    //if ($enrolled != $val['ProjectID']){
        echo '<a class="btn btn-default btn-round-lg btn-lg" href ="'; 
        echo site_url('Login/Enroll/'.$Eid.'/'.$val['ProjectID']);
        //echo  $EID;
        //echo $Pid;
        echo '">Enroll</a>';
///         echo '</button>';	
//}
        echo '</div>';
        
       
        
        echo '</div>';
        echo '<br>';
        
        
        } 
        
        }else //foreach ($res as $val)
           
          if ($res == 404)
            echo "No Results found";
          
        
        
       // echo form_close();
        
        ?>
      
      
    </div>
</div>
        
        <div class="tab-pane" id="2">
          <h3>Match-Making Projects</h3>
          
                 <div class="col-sm-15"style="color:black;padding:20px;">
        
        <?php 
        
       // echo form_open('login/adminpage');
        
        foreach ($AI as $object){ 
          
        echo '<div class="row">';
          
        echo '<div class="col-md-12" style="background-color:white;color:black;padding:30px;align=left;border: 1px solid black;">';
          
        echo '<h4><b>';
        echo $object->Name;
        echo '</b></h4>';
        
        echo '<p style="background-color:white;color:black">';
        echo $object->Description;
        echo '</p>';
        
        echo '<ul>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'Start Date:   ';
        echo $object->StartDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'End Date:   ';
        echo $object->EndDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-map-marker">';
        echo 'Location:   ';
        echo $object->PrimaryLoc;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-tags">';
        echo 'Type:   ';
        echo $object-> Type;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-lightbulb-o">';
        echo 'Skills Required:   ';
        echo $object-> SkillsReq;
        echo '</li>';
      
        echo '</ul>';
        
        echo '<a class="btn btn-default btn-round-lg btn-lg" href ="';
        echo site_url('Login/Enroll/'.$Eid.'/'.$object->ProjectID);
        echo '">Enroll</a>';
        
        echo '</div>';
        
       
        
        echo '</div>';
        echo '<br>';
        }
        
        //echo form_close();
        
        ?>
      
      
    </div>
        </div>
        
                <div class="tab-pane " id="3">
          <h3>Most Enrolled Projects</h3>
            <div class="col-sm-15"style="color:black;padding:20px;">
        
        <?php 
        
       // if (popular!=NULL){
        
      //  echo form_open('login/adminpage');
        
        foreach ($popular as $val){ 
          
        echo '<div class="row">';
          
        echo '<div class="col-md-12" style="background-color:white;color:black;padding:30px;align=left;border: 1px solid black;">';
          
        echo '<h4><b>';
        echo $val->Name;
        echo '</b></h4>';
        
        echo '<p style="background-color:white;color:black">';
        echo $val->Description;
        echo '</p>';
        
        echo '<ul>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'Start Date:   ';
        echo $val->StartDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'End Date:   ';
        echo $val->EndDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-map-marker">';
        echo 'Location:   ';
        echo $val->PrimaryLoc;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-tags">';
        echo 'Type:   ';
        echo $val->Type;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-lightbulb-o">';
        echo 'Employees Enrolled:   ';
        echo $val->count;
        echo '</li>';
      
      
        echo '</ul>';
        
        echo '<a class="btn btn-default btn-round-lg btn-lg" href ="';
        echo site_url('Login/Enroll/'.$Eid.'/'.$val->ProjectID);
        echo '">Enroll</a>';
        
        echo '</div>';
        
        echo '<br><br>';
        
        echo '</div>';
        echo '<br>';
        
        } 
        
//         }else{ //foreach ($res as $val)
           
//           if ($res == 404){
//             echo "No Results found";
//           }
        
       // }
       // echo form_close();
        
        ?>
      
      
    </div>
</div>



                <div class="tab-pane " id="4">
          <h3>Least Enrolled Projects</h3>
            <div class="col-sm-15"style="color:black;padding:20px;">
        
        <?php 
        
       // if (popular!=NULL){
        
      //  echo form_open('login/adminpage');
        
        foreach ($Unpopular as $val){ 
          
        echo '<div class="row">';
          
        echo '<div class="col-md-12" style="background-color:white;color:black;padding:30px;align=left;border: 1px solid black;">';
          
        echo '<h4><b>';
        echo $val->Name;
        echo '</b></h4>';
        
        echo '<p style="background-color:white;color:black">';
        echo $val->Description;
        echo '</p>';
        
        echo '<ul>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'Start Date:   ';
        echo $val->StartDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'End Date:   ';
        echo $val->EndDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-map-marker">';
        echo 'Location:   ';
        echo $val->PrimaryLoc;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-tags">';
        echo 'Type:   ';
        echo $val->Type;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-lightbulb-o">';
        echo 'Employees Enrolled:   ';
        echo $val->count;
        echo '</li>';
      
      
        echo '</ul>';
        
        echo '<a class="btn btn-default btn-round-lg btn-lg" href ="';
        echo site_url('Login/Enroll/'.$Eid.'/'.$val->ProjectID);
        echo '">Enroll</a>';
        
        echo '</div>';
        
        echo '<br><br>';
        
        echo '</div>';
        echo '<br>';
        
        } 
        
//         }else{ //foreach ($res as $val)
           
//           if ($res == 404){
//             echo "No Results found";
//           }
        
       // }
       // echo form_close();
        
        ?>
      
      
    </div>
</div>



        <div class="tab-pane " id="5">
          <h3>Latest Projects</h3>
            <div class="col-sm-15"style="color:black;padding:20px;">
        
        <?php 
        
       // if ($results!=NULL){
        
       // echo form_open('login/adminpage');
        
        foreach ($recent as $val){ 
          
        echo '<div class="row">';
          
        echo '<div class="col-md-12" style="background-color:white;color:black;padding:30px;align=left;border: 1px solid black;">';
          
        echo '<h4><b>';
        echo $val->Name;
        echo '</b></h4>';
        
        echo '<p style="background-color:white;color:black">';
        echo $val->Description;
        echo '</p>';
        
        echo '<ul>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'Start Date:   ';
        echo $val->StartDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-clock-o">';
        echo 'End Date:   ';
        echo $val->EndDate;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-map-marker">';
        echo 'Location:   ';
        echo $val->PrimaryLoc;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-tags">';
        echo 'Type:   ';
        echo $val->Type;
        echo '</li>';
        echo '&nbsp&nbsp';
        echo '<li class=" fa fa-lightbulb-o">';
        echo 'Skills Required:   ';
        echo $val->SkillsReq;
        echo '</li>';
      
      
        echo '</ul>';
        
        echo '<a class="btn btn-default btn-round-lg btn-lg" href ="';
        echo site_url('Login/Enroll/'.$Eid.'/'.$val->ProjectID);
        echo '">Enroll</a>';
        
        echo '</div>';
        
        echo '<br><br>';
        
        echo '</div>';
        echo '<br>';
        
        } 
        

        
        ?>
      
      
    </div>
</div>
      </div>
  </div>
</div>
<hr></hr>
    
     </div>

        <!-- Footer -->
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