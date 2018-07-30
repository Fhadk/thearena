<!DOCTYPE html>
<html>
<head>
    <?php ?>
    <title>The Arena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
       <link href='<?php echo Yii::app()->request->baseUrl?>/css/cinestar/font-awsome.css' rel='stylesheet' type='text/css'>
       <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/stylecinemax.css">
       
       <!-- carousel -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-1.10.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/jquery.scrollbox.js"></script>

       <!-- slider files -->
       
      
       <!--------->
        <link rel='stylesheet' id='camera-css'  href='<?php echo Yii::app()->request->baseUrl?>/css/cinestar/camera.css' type='text/css' media='all'>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl?>/js/cinestar/slider/jquery.mobile.customized.min.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl?>/js/cinestar/slider/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl?>/js/cinestar/slider/camera.js'></script>
        <script  src='<?php echo Yii::app()->request->baseUrl?>/js/cinestar/main.js'></script>
       <!--------->
       
       <!------------------popuo weekly----------->
        <!-- overlay popup -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/dialog.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/dialog-sandra.css" />
	<script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/modernizr.custom.js"></script>
       <!------------------popuo weekly----------->
      <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/function.js"></script>
       <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/classie.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/dialogFx.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/function.js"></script>
        
        
        
<!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-1.9.1.min.js"></script>-->
      	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
                
                	
  

<script>

// upcoming carousel function
$(function () {
  $('#demo5').scrollbox({
    direction: 'h',
    distance: 149
  });
  $('#demo5-backward').click(function () {
    $('#demo5').trigger('backward');
  });
  $('#demo5-forward').click(function () {
    $('#demo5').trigger('forward');
  });

});


//slider function
jQuery(function(){

	

	jQuery('#camera_wrap_2').camera({
		height: 'auto',
		loader: 'bar',
		pagination: true,
		thumbnails: true
	});

});

</script>

</head>

<body>
	<div class="main">
		<div class="wrapper">
		
			<div class="header">
				<a class="cinestar" href="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/"></a>
				<a id="membersarealink" href="#" class="toplink">The Arena</a>
                                <a id="corporatelink" href="#" class="toplink">About</a>
                                <a id="corporatelink" href="#" class="toplink">Join</a>
                                <a id="corporatelink" href="#" class="toplink">Member Previlege</a>
                                <a id="corporatelink" href="#" class="toplink">Gallery</a>
                                <a id="corporatelink" href="#" class="toplink">Contact</a>
				<!--<div class="imaxbox">-->
					<!--<div class="sponsor"><img src="<?php // echo Yii::app()->request->baseUrl?>/images/sponsorlogo.png" height="32" /></div>-->
                                <!--</div>-->
			<div>	
                        </div>
				
				<div class="contactinfo">
					<h1>Buy Online Ticket</h1>
					<!--<a href="#" class="socialicon"><img src="<?php // echo Yii::app()->request->baseUrl?>/images/googleplus-header.png" width="24"></a>-->
					<a href="https://twitter.com/CineStar" class="socialicon" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl?>/images/twitter-header.png" width="24"></a>
					<a href="https://www.facebook.com/cinestar3d?ref=ts&fref=ts" class="socialicon" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl?>/images/facebook-header.png" width="24"></a>
				</div>
				
                
                <menu>
                   <label for="drop" class="toggle"><img src="/cinestar/images/menu-icon.png" />MAIN MENU</label>
                   <input type="checkbox" id="drop" />
                      <ul class="menu">
                         <li class="li_active"><a class="menulink" href="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/">HOME</a></li>
                         <li><a id="membersarealink" href="#" class="menulink">Members Area</a></li>
                         <li><a id="corporatelink" href="#" class="menulink">Corporate</a></li>
                         <li><a id="gallerycinestar" href="#" class="menulink">Gallery</a></li>
                         <li><a id="aboutus" href="#" class="menulink">About</a></li>
                         <li><a id="contactuscinestar" href="#" class="menulink">Contact</a></li>
                      </ul>
                </menu>
                
          
                
				<div class="topticker">                                    
					<p>
						Dear Valued Customers ! To Get The Daily Show Times "SMS Alerts" Please E-Mail Us Your Contact Number @ Info@thearena.pk.com <!-- a href="#">subscribesms@cinestar.com</a -->
					</p>
				</div><!-- topticker 
				
			</div><!-- header -->
			
		</div><!-- wrapper -->

		<div class="slider contactuspage aboutus">			
				<div class="fluid_container">
					<div class="camera_wrap camera_burgundy_skin" id="camera_wrap_2">                                        
                                            <?php                                             
                                            if(isset($slidersequence)){
                                                for($i=0;$i<count($slidersequence);$i++){
                                                ?>
                                            <div data-thumb="<?php echo $slidersequence[$i]['movie_img_path'];?>" data-src="<?php echo $slidersequence[$i]['slider_img_path'];?>">
		  					<div class="camera_caption moveFromRight">
								<div class="movie-title"><?php echo $slidersequence[$i]['movie_name']; ?></div>
								<div class="movie-details">
								<?php echo $slidersequence[$i]['movie_desc']; ?>
								</div>
								<a href="<?php echo $slidersequence[$i]['videolink']; ?>" class="watch-tailer" target="_blank"></a>
                                                                <!--<form action="http://online.cinestar.com.pk/CSERP/CustomerTicketing/Login.aspx">-->
                                                                    <!--<button href="#" target="_blank" class="booknow-slider"></button>-->
                                                                     <button  data-dialogbooknow="dialogbooknow_id" class="booknowjs booknow-slider"></button>
                                         <!-- booknow -->
                                                                <!--</form>-->								
		  					</div>
	 					</div>	 					
                                            <?php }} ?>

					</div><!-- fluid_container -->

				</div>
		</div><!-- slider -->
		
		<div class="nowshowing">
<!--			<div class="movie-filter">
				<label>Movie</label>
                                <input type="hidden" id="SearchMovie" class="vertical" data-search="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/SearchMovie" >
                                <select id="moviename" name="moviename" class="listbox">
					<option>All Movies</option>
					<?php
//                                        for($i=0;$i<count($movieCombo);$i++){                                            
//                                            echo '<option>'.$movieCombo[$i]['movie_name'].'</option>';
//                                        }
                                        ?>
				</select>

				<label>Location</label>
                               
				<select id="locationid" name="locationame" class="listbox">
                                    <option>All Locations</option>
                                    <?php
//                                    for($i=0;$i<count($locations);$i++){
//                                      echo '<option status="'.$locations[$i]['id'].'" value"'.$locations[$i]['id'].'">'.$locations[$i]['location_name'].'</option>';                                          
//                                    }
                                    ?>
				
				</select>
                                <button id="searchmovie">Search</button>
                              
				
                                
			</div> -->
                    <!-- movie-filter -->
                        
                        
                        <div class="tabwarpper">
                            <?php
                                    for($i=0;$i<count($locations);$i++){
                                      echo '<a id="tabs" data-locationid="'.$locations[$i]['id'].'" class="tab"  href="" name="'.$locations[$i]['location_name'].'">'.$locations[$i]['location_name'].'</a>';  
                                        
                                    }
                                    ?>
<!--				<a href="#" class="tab-selected">IMAX Lahore</a>
				<a href="#" class="tab">Cinestar Lahore</a>
				<a href="#" class="tab">Cinestar Taj Lahore</a>
				<a href="#" class="tab">Cinestar Multan</a>
				<a href="#" class="tab">Cinestar Gold Class</a>
				<a href="#" class="tab">Cinestar Xinhua Mall</a>
				<a href="#" class="tab">Coming Soon</a>
				<a href="#" class="tab">Coming Soon</a>-->
                        </div>
                        <!-- tabwrapper -->                        
                        
                        
			<?php
                        
                        $dayNames = array(
                                            0=>'Sunday',
                                            1=>'Monday', 
                                            2=>'Tuesday', 
                                            3=>'Wednesday', 
                                            4=>'Thursday', 
                                            5=>'Friday', 
                                            6=>'Saturday', 
                                         );
                        ?>

                        
                        
                        <div class="dayswrapper" >
                            <a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' -1 day'))?>'  class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' -1 day'))))
                                    {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" href="">					
					<span class="dayname"><?php echo date('l', strtotime(' -1 day'));?>,</span>
                                        <span class="month"><?php echo date('M', strtotime(' -1 day'));?></span>
                                        <span class="date"><?php echo date('d', strtotime(' -1 day'));?></span>
				</a><!-- day -->
				
				<a id="widgetdate" name='<?php echo date('Y-m-d')?>' 
                                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d')))
                                       {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" href="#">
					<span class="dayname"><?php echo date('l');?>,</span>
                                        <span class="month"><?php echo date('M');?></span>
                                        <span class="date"><?php echo date('d');?></span>
				</a><!-- day -->
				
				<a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +1 day'))?>' 
                                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +1 day'))))
        {echo 'day-selected';} else{echo 'day';}}else
            {echo'day';}?>" 
                                   href="">
					<span class="dayname"><?php echo date('l', strtotime(' +1 day'));?>,</span>
                                        <span class="month"><?php echo date('M', strtotime(' +1 day'));?></span>
                                        <span class="date"><?php echo date('d', strtotime(' +1 day'));?></span>
				</a><!-- day -->
				
				<a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +2 day'))?>' 
                                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +2 day'))))
        {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" 
                                   href="#">
					<span class="dayname"><?php echo date('l', strtotime(' +2 day'));?>,</span>
                                        <span class="month"><?php echo date('M', strtotime(' +2 day'));?></span>
                                        <span class="date"><?php echo date('d', strtotime(' +2 day'));?></span>
				</a><!-- day -->
				
				<a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +3 day'));?>' 
                                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +3 day'))))
        {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
                                   href="">
					<span class="dayname"><?php echo date('l', strtotime(' +3 day'));?>,</span>
                                        <span class="month"><?php echo date('M', strtotime(' +3 day'));?></span>
                                        <span class="date"><?php echo date('d', strtotime(' +3 day'));?></span>
				</a><!-- day -->
				
				<a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +4 day'));?>'
                                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +4 day'))))
        {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" 
                                   href="">
					<span class="dayname"><?php echo date('l', strtotime(' +4 day'));?>,</span>
                                        <span class="month"><?php echo date('M', strtotime(' +4 day'));?></span>
                                        <span class="date"><?php echo date('d', strtotime(' +4 day'));?></span>
				</a><!-- day -->
				
				<a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +5 day'))?>'
                                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +5 day'))))
        {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
                                   href="#">
					<span class="dayname"><?php echo date('l', strtotime(' +5 day'));?>,</span>
                                        <span class="month"><?php echo date('M', strtotime(' +5 day'));?></span>
                                        <span class="date"><?php echo date('d', strtotime(' +5 day'));?></span>
				</a><!-- day -->
				
			</div><!-- dayswrapper -->
                        
			
                        <div id="renderhtmloftabs" >
			<?php
                        
                        for($i=0;$i<count($movielist);$i++){                            
                        ?>
                        <div id='movierender'>
			<div class="movie">
				<div class="movie-img">                                    
                                    <img src="<?php echo ($movielist[$i][0]['movie_img_path'])?$movielist[$i][0]['movie_img_path']:Yii::app()->getBaseUrl(true) . '/images/not_found.jpg';?>" width="140" height="160" />
                                </div>
				
				<div class="details">
					<div id="movieName" class="title">
					<?php echo $movielist[$i][0]['movie_name'];?>
					</div>
				
					<div class="description">
                                        <?php // echo $movielist[$i][0]['movie_desc'];?>                                            
					</div>
					
					<div class="imdbrate">
                                            
                                        <?php
                                        $rating = $movielist[$i][0]['rating'];
                                        $red = (int)($rating/2);
                                        $half = ($rating%2);
                                        $white = 5 - ($red+$half);
                                        for($i=0 ; $i<$red ; $i++){ ?>
                                            <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-red.png';?>" />
                                        <?php } 
                                        for($i=0 ; $i<$half ; $i++){ ?>
                                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-half.png';?>" />
                                        <?php }
                                        for($i=0 ; $i<$white ; $i++){ ?>
                                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-white.png';?>" />
                                        <?php }
                                        
//                                        echo $movielist[$i][0]['rating'];?></div>
                                        <?php // if($movielist[$i][0]['movie_type']=='2d'){ ?>
					<!--<div class="tag2d"></div>-->
                                        <?php // } else { ?>
					<!--<div class="tag3d"></div>-->
                                        
                                        <?php // } ?>
				</div><!-- details -->
				
				<div class="schedule">
                                    <?php
									$screen1 = false;
									$screen2 = false;
									$showTime = '';
									$showTimeS1 = '<div class="scree1 screen-show"><p>Screen 1</p>';
									$showTimeS2 = '<div class="scree2 screen-show"><p>Screen 2</p>';
                                    for($j=0;$j<count($movielist[$i]['showtiming']);$j++) {
										$time = strtotime($movielist[$i]['showtiming'][$j]['showdateetime']);
										$formateddate = date("M d, y", $time);
										$formatedtime = date("h:i A", $time);

										if ($movielist[$i]['showtiming'][$j]['screen'] == 1) {
											$screen1 = true;
											$showTimeS1 .= "<div class='time'>$formatedtime</div>";
										} elseif ($movielist[$i]['showtiming'][$j]['screen'] == 2) {
											$screen2 = true;
											$showTimeS2 .= "<div class='time'>$formatedtime</div>";
										} else {
											$showTime .= "<div class='time'>$formatedtime</div>";
										}
									}
									$showTimeS1 .= '</div><div style="clear:both"></div>';
									$showTimeS2 .= '</div>';

									echo $showTime;
									if($screen1)
										echo $showTimeS1;
									if($screen2)
										echo $showTimeS2;


                                        ?>
					  <div class="weekly"><button id="weeklyview" data-moviename="<?php echo $movielist[$i][0]['movie_name'];?>" data-dialog<?php echo $i?>="somedialog<?php echo $i?>"  name="somedialog" class="weekly">View Weekly Schedule</button>

					<div id="somedialog<?php echo $i?>" class="dialog" name="somedialog">
						<div class="dialog__overlay"></div>
						<div class="dialog__content" style="width:900px;">

							<button class="weeklyclose" data-dialog-close=""></button>

							<div class="weeklyheading">
								Weekly Schedule
                                                                <span id="popupheading"></span>
							</div>	
						
							<table id="weeklytbl"  class="weeklytable" border="0" cellspacing="0" cellpadding="0">
								
							</table>
							
						</div>
					</div>
                                        </div>
					<script>
                                        
                                        </script>
				</div>
                                <!-- schedule -->
<!--                                <div class=" booknow">
                                        <button  data-dialogbooknow="dialogbooknow_id" class="booknowjs "></button>					
					<div class="text"><span>MEMBERS</span> can Book Ticket/s Online.</div>
				</div>-->
                                <!-- booknow -->
			
                                <div id="dialogbooknow_id" class="dialog">
						<div class="dialog__overlay"></div>
							<div class="dialog__content">
							<button class="weeklyclosebooknow" data-dialog-close=""></button>
							<div class="feedback">Online Booking</div>	
							<form class="feedback-form">
                                                            <span><a class="booknowbtn" href="http://online.cinestar.com.pk/CSERP/CustomerTicketing/Login.aspx" target="_blank">CS Township</a></span>  
                                                            <!--<a class="booknowbtn" href="http://online.cinestar.com.pk/CSERP/CustomerTicketing/Login.aspx" target="_blank">CS TAJ</a>-->
                                                            <a class="booknowbtn" href="#">CS TAJ</a>
                                                            <!--<a  class="booknowbtn" href="http://online.cinestar.com.pk/CSERP/CustomerTicketing/Login.aspx" target="_blank">CS Multan</a>-->
                                                            <a  class="booknowbtn" href="#">CS Multan</a>
                                                                <input type="hidden"  data-dialog-close=""> 
							</form>
				
                                                    </div>
						</div>
					</div>
                                <!-- booknow -->
			</div>
			  
			<!-- movie -->
       
       
                           <script>
                           (function() {

                                    var dlgtrigger<?php echo $i?> = document.querySelector( '[data-dialog<?php echo $i?>]' ),
                                            somedialog<?php echo $i?> = document.getElementById( dlgtrigger<?php echo $i?>.getAttribute( 'data-dialog<?php echo $i?>' ) ),
                                            dlg<?php echo $i?> = new DialogFx( somedialog<?php echo $i?> );

                                    dlgtrigger<?php echo $i?>.addEventListener( 'click', dlg<?php echo $i?>.toggle.bind(dlg<?php echo $i?>) );

                            })();
                           </script>
                        <?php } ?>
		
			<!-- movie -->
		
		</div><!-- nowshowing -->
                </div>
		
		<div class="darkgrey">
			<div class="wrapper hideinfo">

				<div class="upcoming">
                                    <div id="upcoming">
                                        <h1>Upcoming</h1>
                                    </div>
					
					
					<button id="demo5-backward" class="leftarrow"></button>
					
					<div id="demo5" class="scroll-img">
					<ul>
                                            <?php
                                             for($i=0;$i<count($upcomingmovies);$i++){
                                                
                                            ?>
						<li class="moviewrapper">
							<div class="poster"><img src="<?php echo $upcomingmovies[$i]['img_url'];?>" width="127" height="200" /></div>
                                                        <!--<div class="upcoming-title"><?php // echo $upcomingmovies[$i]['movie_title'];?></div>-->
						</li><!-- moviewrapper -->

                                             <?php } ?>

					</ul>
					</div>

					<button id="demo5-forward" class="rightarrow"></button>

				</div><!-- upcoming -->
				
				<div class="talktous">
<!--					<h1>Talk to us</h1>
					a href="https://play.google.com/store/apps/details?id=com.totalsoft.cinestar&hl=en" class="sms-alert">sms alerts</a
                                      <button  data-dialogsms="somedialogsms" class="sms-alert sms-alert1">sms alerts</button>
    				<div id="somedialogsms" class="dialog">
						<div class="dialog__overlay"></div>
						<div class="dialog__content">
							<button class="weeklyclose" data-dialog-close=""></button>
							<div class="feedback">SMS Alerts</div>	
							<form class="feedback-form">
								<label>Your Name</label>
                                                                <input name="smsnametxt" type="text" value="">
								<label>Location</label>
								<select id="subscribeLocation" class="locations-cls" name="location">
									<option value="Cinestar Township">Cinestar Township</option>
									<option value="Cinestar TAJ">Cinestar TAJ</option>
									<option value="Cinestar Multan">Cinestar Multan</option>
									<option value="Cinestar Xinhua Mall">Cinestar Xinhua Mall</option>
								</select>

								<label>Your Contact Number</label>
                                                                <input name="contacttxt" type="text" value="">
                                                                <label>Please enter the correct phone number. (eg: 03XX XXXX XXX)</label>
                                                                <div class="msgdiv"></div>
                                                                <select value="SubsribeMe" name="subsribe" type="text" value="">
                                                                    <option value="SubsribeMe">Subsribe Me</option>
                                                                <option>Unsubsribe Me</option>
                                                                </select>
                                                                <input id="1"  class="smsalertbtn" type="button" value="Subscribe" > 
                                                                <input id="0" class="smsalertbtn" type="button" value="UnSubscribe" style="margin-left: 15px;"  > 
                                                                <input type="hidden"  data-dialog-close> 
							</form>

						</div>
					</div> sms 					
				
                                        <button  data-dialogsugg="somedialogsugg" class="suggestions">Suggestions</button>
					<div id="somedialogsugg" class="dialog">
						<div class="dialog__overlay"></div>
						<div class="dialog__content">
							<button class="weeklyclose" data-dialog-close=""></button>
							
							<div class="feedback">Suggestion</div>	
							<form class="feedback-form">
								<label>Your Name</label>
                                                                <input name="suggestionnametxt" type="text" value="">
								<label>Your Email</label>
                                                                <input name="suggestionemailtxt" type="text" value="">
								<label>Your Contact Number</label>
                                                                <input name="suggestionnumbertxt" type="text" value="">
								<label>Location</label>
								<select id="suggestionLocation" class="locations-cls" name="suggestionlocation">
									<option value="Cinestar Township">Cinestar Township</option>
									<option value="Cinestar TAJ">Cinestar TAJ</option>
									<option value="Cinestar Multan">Cinestar Multan</option>
									<option value="Cinestar Xinhua Mall">Cinestar Xinhua Mall</option>
								</select>
								<label>Suggestion</label>
                                                                <textarea name="suggestionmsgtxt" rows="4" ></textarea>
								<input id="suggestionbtn" type="button" value="Submit" data-dialog-close="">
							</form>

						</div>
					</div> suggestions 		
                                        <button  data-dialogcomp="somedialogcomp" class="complaints">Complaints</button>
					<div id="somedialogcomp" class="dialog">
						<div class="dialog__overlay"></div>
						<div class="dialog__content">
							<button class="weeklyclose" data-dialog-close=""></button>
							<div class="feedback">Complain</div>	
							<form class="feedback-form">
								<label>Your Name</label>
                                                                <input name="complainnametxt" type="text" value="">
								<label>Your Email</label>
                                                                <input name="complainemailtxt" type="text" value="">
								<label>Your Contact Number</label>
                                                                <input name="complaincontacttxt" type="text" value="">
								<label>Location</label>
								<select id="complainLocation" class="locations-cls" name="complainlocation">
									<option value="Cinestar Township">Cinestar Township</option>
									<option value="Cinestar TAJ">Cinestar TAJ</option>
									<option value="Cinestar Multan">Cinestar Multan</option>
									<option value="Cinestar Xinhua Mall">Cinestar Xinhua Mall</option>
								</select>
								<label>Suggestion</label>
                                                                <textarea name="complainmsgtxt" rows="4" resize="false"></textarea>
								<input id="complainbtn" type="button" value="Submit" data-dialog-close="">
							</form>

						</div>
					</div> complaints 	
				</div>-->
                                
                                <!-- talktous -->

                                <div class="weekly_deals">
                                    
                                    <div class="weekly_deals_title">
                                        <div class="deals_left">WEEKLY DEALS </div>
                                        <div class="deals_right"> </div>
                                    </div>
                                    <div class="weekly_deals_body">
                                        <div class="weekly_deal_image">
                                            <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/promo-banner.png';?>" />
                                        </div>
                                    </div>
                                </div>
                                
                                
			</div> 
		</div>  
		
                
                
                
                
		<div class="wrapper footer">
			<div class="quicklinks">
				<h1>Quick Links</h1>
				<ul>
					<li><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/">Home</a></li>
					<li><a id="membersarealink" href="#">Members Area</a></li>
					<li><a  id="corporatelink" href="#">Corporate</a></li>
					<li><a id="gallerycinestar" href="#">Gallery</a></li>
					<li><a id="aboutus" href="#">About</a></li>
                                        <li><a id="contactuscinestar"  href="#">Contact</a></li>
				</ul>
			</div><!-- quicklinks -->
			
			<div class="contact">
				<h1>Contact Us</h1>
				
				<div class="phone">+92 42 35157460-2, +92 42 35157460-1, 111-246-362</div><!-- phone -->
				
				<div class="mail">
					<div class="left">
					General Information :<br />

<!--					Advertising :<br />
					General Information :<br />
					Web master :<br />
					Careers :<br />
-->
					</div>
					<div class="right">
					<a href="mailto:info@cinestar.com.pk">info@cinestar.com.pk</a>

<!--
					<a href="mailto:adv@cinestar.com.pk">adv@cinestar.com.pk</a>
					<a href="mailto:inq@cinestar.com.pk">inq@cinestar.com.pk</a>
					<a href="mailto:web@cinestar.com.pk">web@cinestar.com.pk</a>
					<a href="mailto:Careers@cinestar.com.pk">Careers@cinestar.com.pk</a>
-->
					</div>
				</div><!-- mail -->
				
				<div class="home">Plot # 13/2 Civic Center Township Lahore.</div>
				
			</div><!-- contact -->
			
			<div class="apps">
				<h1>Get Cinestar Apps</h1>
                                <a href="https://play.google.com/store/apps/details?id=com.totalsoft.cinestar" target="_blank" class="google"></a>
				<a href="#" class="apple"></a>
			</div><!-- apps -->
			
		</div><!-- wrapper -->
		
		<div class="darkgrey">
			<div class="wrapper">
				<div class="copyright">&copy; Copyright 2015. All Rights Reserved. CINESTAR - PAKISTAN. Powered By: <a href="http://www.softideo.com" target="_blank" style="color: rgba(255,255,255,1);">Softideo.com</a></div>
			</div><!-- wrapper -->
		</div><!-- darkgrey -->

	</div><!-- main -->
        <input type="hidden" id="GalleryFolder" data-galleryfolder='<?php echo $this->createUrl('cinestar/Gallery')?>' />
      <input type="hidden" id="GalleryViewer" data-galleryviewer='<?php echo $this->createUrl('cinestar/GalleryViewer')?>' />
      <input type="hidden" id="MemberPage" data-memberpage='<?php echo $this->createUrl('cinestar/MembersArea')?>' />
      <input type="hidden" id="CorporatePage" data-corporatepage='<?php echo $this->createUrl('cinestar/Corporate')?>' />

<!------------------popuo weekly javascript----------->
       
       
       <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/classie.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/dialogFx.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/function.js"></script>
        
       <!------------------popuo weekly javascript----------->
       <input type="hidden" id="ContactUS" data-contactus='<?php echo $this->createUrl('cinestar/ContactUs')?>' />
        <input type="hidden" id="WeeklyView" class="vertical" data-weekly="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/WeeklyData" >
        <input type="hidden" id="ConatctUs" class="vertical" data-contactus="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/ContactUs" >
        <input type="hidden" id="AboutUs" class="vertical" data-aboutus="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/AboutUs" >
        <input type="hidden" id="Complainpopup" class="vertical" data-complainpopup="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/ContactForm" >
        <input type="hidden" id="Smsalertpopup" class="vertical" data-smsalertpopup="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/SubscribeNumber" >
        <input type="hidden" id="Suggestionpopup" class="vertical" data-suggestionpopup="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/ContactForm" >
        <input type="hidden" id="cont" data-con='<?php echo $this->createUrl('cinestar/ContactForm')?>' />
        <script>
        
                (function() {

    var dlgtrigger = document.querySelector( '[data-dialogmembersarea]' ),
		somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialogmembersarea' ) ),
		dlg = new DialogFx( membersareadialogue );

	dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();
        (function() {

	var dlgtrigger = document.querySelector( '[data-dialogonlinebooking]' ),
		somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialogonlinebooking' ) ),
		dlg = new DialogFx( onlinebookingdialogue );

	dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();
        
        (function() {

	var dlgtrigger = document.querySelector( '[data-dialogsms]' ),
		somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialogsms' ) ),
		dlg = new DialogFx( somedialogsms );

	dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();
        (function() {

	var dlgtrigger = document.querySelector( '[data-dialogbooknow]' ),
		somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialogbooknow' ) ),
		dlg = new DialogFx( dialogbooknow_id );

	dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();

(function() {

	var dlgtrigger = document.querySelector( '[data-dialogsugg]' ),
		somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialogsugg' ) ),
		dlg = new DialogFx( somedialogsugg );

	dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();
(function() {

	var dlgtrigger = document.querySelector( '[data-dialogbooknow]' ),
		somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialogbooknow' ) ),
		dlg = new DialogFx( dialogbook_now_id );

	dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();

(function() {

	var dlgtrigger = document.querySelector( '[data-dialogcomp]' ),
		somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialogcomp' ) ),
		dlg = new DialogFx( somedialogcomp );

	dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();
        </script>
</body>
</html>

 