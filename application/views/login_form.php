<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Oxygen'>


      <link rel="stylesheet" href="<?php echo base_url();?>css/pstyle.css">

  
</head>

<body>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700" rel="stylesheet" type="text/css"/>
<link href="http://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>


  <div id="large-header" class="large-header">
  <div id="overlay">
    <canvas id="demo-canvas">
    </canvas>
    <h1 class="main-title">
    <div class="signin cf">
      <div class="avatar"><img src="<?php echo base_url();?>css/img/leidosdevtech.png"></div>
     
 <?php echo form_open('login/validate_credentials'); ?>  
                                <?php if (isset($account_created)) { ?>
                      <h3><?php echo $account_created; ?></h3>
                          <?php } else { ?>
                    <?php } ?>
                    
                    <?php if (isset($error_message)) { ?>
                      <h3><?php echo $error_message; ?></h3>
                          <?php } else { ?>
                    <?php } ?>

<form role="form" action="" method="post">
          <div class="inputrow">

<?php echo form_input('Email', set_value('Email'), $attribute=array("class"=>"form-username form-control", "id" => "form-username", "placeholder"=>"Email Address...")); ?>

            <label class="ion-person" for="name"></label>
          </div>
          <div class="inputrow">
           <?php echo form_password('Password', set_value('Password'), 	$attribute=array("class"=>"form-password form-control", "id" => "form-password", "placeholder"=>"Password")); ?>
            <label class="ion-locked" for="pass"></label>
          </div>
            <!--<label><img src="img/devtech.png"></label>-->
       
	<?php 
         echo form_submit('submit', 'Login');
	?>
       <?php 
                                echo form_close();
        ?>

  
                              <div class="alert " role="alert">
                      <?php echo validation_errors();?>
                    </div>
      </div>
    </h1>
  </div>
  </div>









  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  <script src='http://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='http://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='http://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>

    <script src="<?php echo base_url();?>js/index.js"></script>

</body>
</html>
