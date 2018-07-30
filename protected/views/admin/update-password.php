<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
        
        
	<title>Opera Admin - Update Password</title>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/css/theme.css">
<!--  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/js/bootstrap-datetimepicker.min.js">-->
<!-- / Include Custom CSS-->

<!-- Include Java Scripts Libraries -->
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-1.9.1.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/main.js"></script>
	<!-- CSS -->
      
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/style.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/custom.css" media="all" /> 
	t>
        
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
              <h4>Update Password</h4>  <hr />
            </div>

			<div class="col_12">
                           	<!-- form -->
                <form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/authenticate" method="POST">

                    <div class="col_4"><!-- empty --></div>

                  <div class="col_4 column">
                      <label id="error" style="display: none;" class="error" for="text6">Username and Password should not be empty.</label>	
                     
                      <label id="error" class="error" for="text6"></label>	
                          
                    <label for="text2">Old Password:</label>
                    <input id="oldpas"name="oldpas" type="password" placeholder="Old Password:"  value="">
                    <label for="text2">New Password:</label>
                    <input id="password1"name="password1" type="password" placeholder="New Password:"  value="">

                    <label for="textarea1">Confirm Password</label>
                    <input id="password2" name="password2" type="password" placeholder="Confirm Password"value="" >

                    <button class="medium orange" id="updatelbtn">Update</button>
                    <button class="medium orange" id="loginbtn">Cancel</button>
                    
                    <hr />
                    
                    
                    <a href="#">Forgot Password</a>
                    
                    

                  </div>

                </form>
                <!-- form end -->

			</div>
		</div>
	<!-- End Add New Movie -->

	</div>
</body>
</html>
