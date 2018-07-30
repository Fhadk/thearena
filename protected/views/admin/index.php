<!DOCTYPE html>
<html>
<head>
	<!-- META -->
        
        
	<title>The Arena Admin - Add Upcoming Movie</title>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/css/theme.css">
<!--  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/js/bootstrap-datetimepicker.min.js">-->
<!-- / Include Custom CSS-->

<!-- Include Java Scripts Libraries -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/main.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/style.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/custom.css" media="all" /> 
	
	<!-- Javascript -->
	<!--<script type="text/javascript" src="cinestarjs/jquery-1.9.1.min.js"></script>-->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/kickstart.js"></script>
</head>
<body>
	<div class="layout1000">
	
	<!-- Start Header -->
		<div class="col_12">
			<div class="logo" style="margin: 0 auto !important;"></div>
		</div>
	


			<div class="col_12 center">
              <h4>Admin Login</h4>  <hr />
            </div>

			<div class="col_12">
                           	<!-- form -->
                <form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/authenticate" method="POST">

                    <div class="col_4"><!-- empty --></div>

                  <div class="col_4 column">
                      <label id="error" style="display: none;" class="error" for="text6">Username and Password should not be empty.</label>	
                      <?php
                      if(isset($loginstatus)){
                          if($loginstatus==false){
                      ?>
                      <label id="error" class="error" for="text6">Username and Password must be correct.</label>	
                          <?php }} ?>
                    <label for="text2">Login ID</label>
                    <input id="username"name="username" type="text" placeholder="Login ID"  value=""/>

                    <label for="textarea1">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter Password"value="" />

                    <button class="medium orange" id="loginbtn">Login</button>
                    
                    <hr />
                    
                    
                    <a href="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/UpdatePassword">Forgot Password</a>
                    
                    <a href="#"  style="float: right;">Change Password</a>

                  </div>

                </form>
                <!-- form end -->

			</div>
		</div>
	<!-- End Add New Movie -->

	</div>
</body>
</html>
