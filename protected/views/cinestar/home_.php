<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <link rel="icon"
          type="image/png"
          href="<?php echo Yii::app()->request->baseUrl?>/images/favicons.png" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_new.css">

    <!-- featherlight -->
    <link href="css/featherlight/featherlight.css" type="text/css" rel="stylesheet" />
    <link href="css/featherlight/featherlight.gallery.css" type="text/css" rel="stylesheet" />
    <!-- featherlight end -->

    <!-- slick start -->
    <link href="css/slick/slick.css" type="text/css" rel="stylesheet" />
    <link href="css/slick/slick-theme.css" type="text/css" rel="stylesheet" />
    <!-- slick end -->

    <title>Cinegold Plex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href='<?php echo Yii::app()->request->baseUrl?>/css/cinestar/font-awsome.css' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/stylecinemax.css">
 <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <!-- carousel -->
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-1.10.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/jquery.scrollbox.js"></script>

    <!-- slider files -->

    <link rel='stylesheet' id='camera-css'  href='<?php echo Yii::app()->request->baseUrl?>/css/cinestar/camera.css' type='text/css' media='all'>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl?>/js/cinestar/slider/jquery.mobile.customized.min.js'></script>

    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl?>/js/cinestar/slider/camera.js'></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
    <!--------->
	<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-104809918-1', 'auto');
    ga('send', 'pageview');
</script>
    <!------------------popuo weekly----------->
    <!-- overlay popup -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/dialog.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/dialog-sandra.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/css/cinestar/colorbox.css" />
    <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/modernizr.custom.js"></script>
    <!------------------popuo weekly----------->
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/function.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/classie.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/dialogFx.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/function.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

    <script src="<?php echo Yii::app()->request->baseUrl?>/js/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/featherlight/featherlight.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/featherlight/featherlight.gallery.js" type="text/javascript" charset="utf-8"></script>

    <script  src='<?php echo Yii::app()->request->baseUrl?>/js/cinestar/main.js'></script>
    <script src="<?php echo Yii::app()->request->baseUrl?>/js/jquery.colorbox-min.js"></script>




    <!--    temp thumb slider-->
    <link href="<?php echo Yii::app()->request->baseUrl?>/1/thumbs2.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl?>/1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo Yii::app()->request->baseUrl?>/1/thumbnail-slider.js" type="text/javascript"></script>
    <style>
        #footer_tags > a {
            color: #D3A323 !important;
        }
    </style>



    <script>
        // upcoming carousel function
        //$(function () {
        jQuery(function(){
            $('#demo5').scrollbox({
                direction: 'h',
                distance: 207,
                delay: 3,
                speed: 400000
            });
            $('#demo5-backward').click(function () {
                $('#demo5').trigger('backward');
                console.log("in onload backword ");
            });
            $('#demo5-forward').click(function () {
                $('#demo5').trigger('forward');
                console.log("in onload forword ");
            });
        });

        //slider function
        jQuery(function(){
            jQuery('#camera_wrap_2').camera({
                height: 'auto',
                loader: 'bar',
                pagination: true,
                thumbnails: false
            });

        });
	
        $(document).ready(function(){
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
		
            $(".menu_icon").click(function(){
                $(".secret_menu").toggle("slow");
                $(".bottom_header").toggle("slow");
            });
        });


        $(document).ready(function(){
            $('.weekly_deals_bottom').slick({
                autoplay: true,
                centerMode: true,
                centerPadding: '50px',
                cssEase : 'ease',
                mobileFirst : true,
                variableWidth : true

            });
            /*
             $('#renderhtmloftabs').slick({
             slidesToShow: 3,
             cssEase : 'ease',
             mobileFirst : true,
             autoplay: true,
             arrows: false,
             dots: true,
             centerMode: false,
             infinite: false
             });
             */
        });

    </script>

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!--BEGAN HEADER -->
<div class="wide_screen clearfix">

    <div class="col-sm-12 col-md-12 col-lg-12" >
<!--        <div class="col-md-3 col-xs-3 " style="padding: 2.4em 0 1.5em 8em; outline-style: none;">-->
        <div class="col-sm-6 col-md-6 col-lg-3" style="padding: 2% 0 1% 7%; outline-style: none;">
            <a href="<?php echo Yii::app()->request->baseUrl?>/">
<!--                <img src="arena_images/logo-orignal.png" width="200" height="38" style="cursor:pointer !important;"/>-->
                <img src="arena_images/logo-orignal.png" width="200" height="38" style="cursor:pointer !important;"/>
            </a>
        </div>

<!--        <div class="col-sm-12 col-md-12 col-lg-12" id="menu_social_media_small" style="padding: 0px !important;" >-->
<!--            <div class="" style="position:relative; z-index: 5;">-->
<!--                <p style="padding: 1.7em 0em 1em; width: auto">-->
<!--                    <a href="https://www.facebook.com/cinegoldplex/" target="_blank"><img width="41" height="41" src="arena_images/icons/flat-facebook.png"></a>&nbsp;&nbsp;&nbsp;-->
<!--                    <a href="#"><img width="41" height="41" src="arena_images/icons/flat-twitter.png"></a></p>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-8 col-xs-8" style="width: 66.2%; padding: 0px;">-->
        <div class="col-sm-12 col-md-12 col-lg-8" style="padding: 0px;">
            <nav class="navbar top_header">
                <ul class="nav navbar-nav">
                    <li><a id="home" class="menu_selected" href="<?php echo Yii::app()->request->baseUrl?>/">Home</a></li>
                   <li><a id="showtiming" href="#">Showtimes</a></li>
		   <li><a id="dineIn" href="#">Dine In</a></li>
                    <li><a id="membersarealink" href="#">Membership</a></li>
                    <li><a id="gallerycinestar" href="#">Events</a></li>
                    <li><a id="join" href="#">Online booking</a></li>
                    <li class="dropdown"><a id='our_theater' class="dropbtn" href="#">Our Theater</a>
		    	<div class="dropdown-content">
    				<a id="aboutus" href="#">About Us</a>
    				<a id="contactuscinestar" href="#">Contact</a>
    				<a id="careers" href="#">Careers</a>
				<a id="faqs" href="#">FAQ</a>
  			</div>
		    </li>
                    
                </ul>
            </nav>
        </div>
        <!--        class="menu_selected"-->
        <div class="col-sm-6 col-md-6 col-lg-1" id="menu_social_media_large" style="padding: 0px !important;" >
            <div class="" style="position:relative; z-index: 5;">
                <p style="padding: 1.7em 0em 1em; width: auto">
                    <a href="https://www.facebook.com/cinegoldplexlahore/" target="_blank"><img width="41" height="41" src="arena_images/icons/flat-facebook.png"></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com/cinegold_plex"><img width="41" height="41" src="arena_images/icons/flat-twitter.png"></a></p>

            </div>
        </div>
    </div>
    <!--BEGAN HEADER -->
    <!--    <div class = "header">-->
    <!---->
    <!--        <div class="col-md-1"></div>-->
    <!--        <div class="navbar-header" style="float: left">-->
    <!--            <div class = "logo">-->
    <!--                <a href="--><?php //echo Yii::app()->request->baseUrl?><!--/">-->
    <!--                    <embed src="arena_images/logo-orignal.png" width="" height="" style="cursor:pointer !important;">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--        <nav class="navbar top_header" style="float: left">-->
    <!--            <ul class="nav navbar-nav">-->
    <!--                <li><a href="--><?php //echo Yii::app()->request->baseUrl?><!--/">Home</a></li>-->
    <!--                <li><a id="join" href="#">Join</a></li>-->
    <!--                <li><a id="membersarealink" href="#">Membership</a></li>-->
    <!--                <li><a id="gallerycinestar" href="#">Gallery</a></li>-->
    <!--                <li><a id="aboutus" href="#">About</a></li>-->
    <!--                <li><a id="contactuscinestar" href="#">Contact</a></li>-->
    <!--            </ul>-->
    <!--        </nav>-->
    <!---->
    <!--        <div class="BuyOnlineTicket" style="float: left" z-index: 5;">-->
    <!--            <span class = "right_header_">-->
    <!--                <img src="arena_images/fb-icon.png">-->
    <!--                <img src="arena_images/tw-icon.png">-->
    <!--            </span>-->
    <!--        </div>-->

    <div class="menu_icon" style="cursor: pointer">
        <label class="toggle2"><img src="images/menu-icon.png" >MAIN MENU</label>
    </div>

    <div class="secret_menu" >
        <ul class="secret_menu_list">
            <li class="secret_menu_item"><a style="color: #ffffff" href="<?php echo Yii::app()->request->baseUrl?>/">Home</a></li>
            <li class="secret_menu_item"><a style="color: #ffffff" id="showtiming" href="#">Showtimes</a></li>
	    <li class="secret_menu_item"><a style="color: #ffffff" id="dineIn" href="#">Dine In</a></li>
            <li class="secret_menu_item"><a style="color: #ffffff" id="membersarealink" href="#">Membership</a></li>
            <li class="secret_menu_item"><a style="color: #ffffff" id="gallerycinestar" href="#">Events</a></li>
            <li class="secret_menu_item"><a style="color: #ffffff" id="join" href="#">Online booking</a></li>
            <li class="secret_menu_item"><a style="color: #ffffff" id="aboutus" href="#">About Us</a></li>
            <li class="secret_menu_item"><a style="color: #ffffff" id="contactuscinestar" href="#">Contact</a></li>
	   <li class="secret_menu_item"><a style="color: #ffffff" id="careers" href="#">Careers</a></li>
	    <li class="secret_menu_item"><a style="color: #ffffff" id="faqs" href="#">FAQ</a></li>
    				
    				
				
        </ul>
    </div>
</div>
<!--END HEADER -->

<!--BEGAN SLIDER -->
<div class="container-fluid">
<!--jumbotron-->
<div class="row fox">
<div class = "hero">
<div class="slider contactuspage aboutus">
    <div class="fluid_container">
        <div class="camera_wrap camera_burgundy_skin" id="camera_wrap_2">
            <?php
            if(isset($slidersequence)){
                for($i=0;$i<count($slidersequence);$i++){ ?>
                    <div data-thumb="<?php echo Yii::app()->getBaseUrl(true) . $slidersequence[$i]['movie_img_path'];?>" data-src="<?php echo Yii::app()->getBaseUrl(true) . $slidersequence[$i]['slider_img_path'];?>">
                        <div class="camera_caption moveFromBottom" style="right:0px; visibility: visible; top: 0px;">
                            <!--                                            <div class="movie-title"><i>--><?php // echo $slidersequence[$i]['movie_name']; ?><!--</i></div>-->
                            <div class="movie-title"><?php  echo $slidersequence[$i]['movie_name']; ?></div>
                            <div class="movie-details">
                                <?php echo $slidersequence[$i]['movie_desc']; ?>
                                <?php //print_r($slidersequence[$i]['id']); echo '<br/>'; ?>
                                <div style="margin: 2em 0em;">
                                    
                                    <a id="detail" class='slider_btn' pk="<?php echo $slidersequence[$i]['id']; ?>" href="#">More Details</a>
                                    <a class='youtube slider_btn' href="<?php echo $slidersequence[$i]['videolink']; ?>">Watch Trailer</a>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php }} ?>
        </div><!-- fluid_container -->
    </div>

    <!--END SLIDER -->

    <div style="clear: both"></div>


    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12" id="main_container"  style="margin-top: -8%; padding: 0px 7.9%;">

    <!--BEGAN COMING SOON-->
    <div class="row" style="background: #000">

        <div class="theme_color theme_padding" style="font-family: myFirstFontBold"><h2>Coming Soon</h2><hr></div>

<!--        <div style="float:;padding-top:0px;">-->
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
			
                        <?php for($i=0;$i<count($upcomingmovies);$i++){ 
                        
                        ?>
                            <li>
                             <a class="thumb" href="<?php echo Yii::app()->getBaseUrl(true) .$upcomingmovies[$i]['img_url'];?>" width="80" height="200"></a>
 				
                                <div id="info_container" class="" style="background: rgb(0,0,0);opacity: 0.7;height:295px; position:
                                                    absolute;width: 100%; border-color: #D3A323; margin-top: -33.6em;">
                                    <div style="text-align: center; color: #ffffff; padding:5% 0%;">
                                        <h4 style="line-height: 1.2; font-family: myFirstFontBold;"><?php echo $upcomingmovies[$i]['movie_title']; ?></h4>
                                    </div>
					
                                    <div style="text-align: center; color: #ffffff; margin-top: 30%;">
					
                                        <a href="javascript::void(0)"><img class="data_img" onclick="playvideo('<?php echo $upcomingmovies[$i]['id']; ?>');" src="<?php echo Yii::app()->getBaseUrl(true)?>/images/play_button.png" /></a>
					<a id="<?php echo $upcomingmovies[$i]['id']; ?>" class="youtube" href="<?php echo $upcomingmovies[$i]['external_url']; ?>">click</a>
                                    </div>

                                    

                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
<!--        </div>-->

        <div class="theme_color theme_padding" style="font-family: myFirstFontBold"><h2>Locations</h2><hr></div>

        <!--BEGAN CITIES-->
        <div class="theme_color theme_padding">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tabwarpper row" style="height: 33px;">
                        <div class="tabwarpper_inner">
                            <?php
                            for($i=0;$i<count($locations);$i++){
                                echo '<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><a id="tabs" data-locationid="'.$locations[$i]['id'].'" class="tab"  href="" name="'.$locations[$i]['location_name'].'">'.$locations[$i]['location_name'].'</a></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="tabwarpper" style="height: 47px">
                    <div class="gold_lounge" style="margin: 3px 27%">
                        <a id="lounge" data-locationid="" class="tab lounge gold_lounge_selected selected"  href="" name="gold" style="width: 40%; height: 41px;">Gold Lounge</a>
                    </div>
                    <div class="red_lounge" style="margin: 0 27%">
                        <a id="lounge" data-locationid="" class="tab lounge"  href="" name="red" style="width: 40%; height: 41px;">Red Lounge</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <!--END CITIES-->

    </div>
    <!--END COMING SOON-->

    <!--BEGAN DAYS -->
    <div class="row">
        <div class="dayswrapper col-sm-6 col-md-6 col-lg-3" >
            <a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' -1 day'))?>'  class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' -1 day'))))
            {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" href="">
                <span class="dayname"><?php echo date('D', strtotime('-1 day'));?>-</span>
                <span class="date"><?php echo date('d', strtotime('-1 day'));?>-</span>
                <span class="month"><?php echo date('M', strtotime('-1 day'));?></span>

            </a><!-- day -->

            <a id="widgetdate" name='<?php echo date('Y-m-d')?>'
               class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d')))
               {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" href="#">
                <span class="dayname"><?php echo date('D');?>-</span>
                <span class="date"><?php echo date('d');?>-</span>
                <span class="month"><?php echo date('M');?></span>
            </a><!-- day -->

            <a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +1 day'))?>'
               class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +1 day'))))
               {echo 'day-selected';} else{echo 'day';}}else
               {echo'day';}?>"
               href="">
                <span class="dayname"><?php echo date('D', strtotime(' +1 day'));?>-</span>
                <span class="date"><?php echo date('d', strtotime(' +1 day'));?>-</span>
                <span class="month"><?php echo date('M', strtotime(' +1 day'));?></span>

            </a><!-- day -->

            <a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +2 day'))?>'
               class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +2 day'))))
               {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
               href="#">
                <span class="dayname"><?php echo date('D', strtotime(' +2 day'));?>-</span>
                <span class="date"><?php echo date('d', strtotime(' +2 day'));?>-</span>
                <span class="month"><?php echo date('M', strtotime(' +2 day'));?></span>

            </a><!-- day -->

            <a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +3 day'));?>'
               class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +3 day'))))
               {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
               href="">
                <span class="dayname"><?php echo date('D', strtotime(' +3 day'));?>-</span>
                <span class="date"><?php echo date('d', strtotime(' +3 day'));?>-</span>
                <span class="month"><?php echo date('M', strtotime(' +3 day'));?></span>

            </a><!-- day -->

            <a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +4 day'));?>'
               class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +4 day'))))
               {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
               href="">
                <span class="dayname"><?php echo date('D', strtotime(' +4 day'));?>-</span>
                <span class="date"><?php echo date('d', strtotime(' +4 day'));?>-</span>
                <span class="month"><?php echo date('M', strtotime(' +4 day'));?></span>
            </a><!-- day -->

            <a id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +5 day'))?>'
               class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +5 day'))))
               {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
               href="#">
                <span class="dayname"><?php echo date('D', strtotime(' +5 day'));?>-</span>
                <span class="date"><?php echo date('d', strtotime(' +5 day'));?>-</span>
                <span class="month"><?php echo date('M', strtotime(' +5 day'));?></span>

            </a><!-- day -->

        </div>
    </div>
    <!--END DAYS-->

    <!--BEGANS SHOWS-->
    <div class="row temp1" style="background: #000">
        <div class = "now_showing" id="now_showing">

            <?php for($i=0;$i<count($movielist);$i++){  ?>

                <div class="col-md-4" style="margin:0 0 2.2em 0;">
                    <div class="col-md-6" id="loc_img">
                        <img src="<?php echo (Yii::app()->getBaseUrl(true) . $movielist[$i][0]['movie_img_path'])?Yii::app()->getBaseUrl(true) . $movielist[$i][0]['movie_img_path']:Yii::app()->getBaseUrl(true) . '/images/not_found.jpg';?>" width="166" height="250" />
                      <!--  <div id="info_container_loc" class="" style="
                                                        background: rgb(0,0,0);opacity: 0.7;
    height: 254px; position: absolute;width: 93%; border-color: #D3A323; border: solid 4px #D3A323;margin-top: -23em;">
                            <div style="text-align: center; color: #ffffff; padding:1em;">
                                <h4 style="line-height: 1.2; font-family: myFirstFontBold;"><?php echo $movielist[$i][0]['movie_name']; ?></h4>
                            </div>

                        </div> -->

                    </div>
                    <div class="col-md-6" style="padding: 5px 0px 5px 11px;">
                        <h4 style="line-height: 1.2"><?php echo @$movielist[$i][0]['movie_name'];?><span style="background: #D59B18; border-radius: 20px; text-transform: uppercase; margin: 2px; font-size: 14px;  padding: 2px;"><?php echo @$movielist[$i][0]['movie_type'];?></span></h4>
                        <div class="imdbrate">
                            <?php
                            $rating = @$movielist[$i][0]['rating'];
                            $red = (int)($rating/2);
                            $half = ($rating%2);
                            $white = 5 - ($red+$half);
                            for($z=0 ; $z<$red ; $z++){ ?>
                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-gold.png';?>" />
                            <?php }
                            for($z=0 ; $z<$half ; $z++){ ?>
                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-half.png';?>" />
                            <?php }
                            for($z=0 ; $z<$white ; $z++){ ?>
                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-white.png';?>" />
                            <?php }?>
                        </div><br>

                        <!--SHOW TIME-->
                        <?php
                        $screen1 = false;
                        $screen2 = false;
                        $showTime = '';
                        //$showTimeS1 = '<div class="scree1 screen-show"><p>Screen 1</p>';
                        $showTimeS1 = '<div class="scree1 screen-show">';
                        $showTimeS2 = '<div class="scree2 screen-show">';
                        for($j=0;$j<count($movielist[$i]['showtiming']);$j++) {
                            $time = strtotime($movielist[$i]['showtiming'][$j]['showdateetime']);
                            $formateddate = date("M d, y", $time);
                            $formatedtime = date("h:i a", $time);

                            if ($movielist[$i]['showtiming'][$j]['screen'] == 1) {
                                $screen1 = true;
                                $showTimeS1 .= "<div class='time'><a href='javascript:void(0)'>$formatedtime</a></div>";
                            } elseif ($movielist[$i]['showtiming'][$j]['screen'] == 2) {
                            	
                                $screen2 = true;
                                $showTimeS2 .= "<div>$formatedtime</div>";
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
                        <!--SHOW TIME-->

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    <!--END SHOWS-->

    </div>
    </div>
</div>

</div><!-- slider -->
</div><!--End Row------>
<!-- right slider end-->

</div>




<div style="clear: both"></div>

<!-- BEGAIN COMMON FOOTER   -->

<div class="col-sm-12 col-md-12 col-lg-12" style="padding: 0 7%">

    <div class="">
        <!-- BEGAN FOOTER -->
        <div class="row" style="background: #343434; padding-bottom: 2em;">
            <div class="col-md-4">
                <div class="theme_color theme_padding" ><h2>Contact <span style="color: white !important;">Us</span></h2>
                    <div class="theme_font_color">
                        <p>you are always welcome to contact us using details provided below.</p>

                        <ul id="footer_li" >
                            <li class="row" style="margin: 0px;">
                                <span class="col-xs-12 col-sm-2 col-md-5 col-lg-4" style="padding:0px;"><img src="arena_images/home-icon.png"> Address : </span>
                                <span class="col-xs-12 col-sm-10 col-md-7 col-lg-8" style="padding:0px;">Main Boulevard, Garden City, Near Phase 7, Bahria Town, Islamabad</span></li>
                            <li class="row" style="margin: 0px">
                                <span class="col-xs-12 col-sm-2 col-md-5 col-lg-4" style="padding: 0px;"><img src="arena_images/email-icon.png"> E-mail : </span>
                                <span class="col-xs-12 col-sm-10 col-md-7 col-lg-8" style="padding: 0px;">info@cinegoldplex.com</span></li>
                            <li class="row" style="margin: 0px">
                                <span class="col-xs-12 col-sm-2 col-md-5 col-lg-4" style="padding: 0px;"><img src="arena_images/phone-icon.png"> Phone : </span>
                                <span class="col-xs-12 col-sm-10 col-md-7 col-lg-8" style="padding: 0px"> 051-5706441, 051-5706442</span></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="tag_cloud_event_categories theme_font_color theme_color theme_padding"><h2>Event <span style="color: white !important;">Categories</span></h2>
                    <div id="footer_tags" style="color: #D3A323">
                <a href="http://www.cinegold.businessclout.com/event_categories/action/" class="tag-link-12 tag-link-position-1" title="28 topics" style="font-size: 16pt;">Action</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/adventure/" class="tag-link-13 tag-link-position-2" title="23 topics" style="font-size: 15.51724137931pt;">Adventure</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/animation/" class="tag-link-14 tag-link-position-3" title="6 topics" style="font-size: 12.318965517241pt;">Animation</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/biography/" class="tag-link-15 tag-link-position-4" title="4 topics" style="font-size: 11.413793103448pt;">Biography</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/comedy/" class="tag-link-16 tag-link-position-5" title="14 topics" style="font-size: 14.310344827586pt;">Comedy</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/comingsoon/" class="tag-link-31 tag-link-position-6" title="7 topics" style="font-size: 13.620689655172pt;">ComingSoon</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/crime/" class="tag-link-17 tag-link-position-7" title="4 topics" style="font-size: 11.413793103448pt;">Crime</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/drama/" class="tag-link-18 tag-link-position-8" title="21 topics" style="font-size: 15.275862068966pt;">Drama</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/family/" class="tag-link-33 tag-link-position-9" title="6 topics" style="font-size: 12.318965517241pt;">Family</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/fantasy/" class="tag-link-34 tag-link-position-10" title="8 topics" style="font-size: 12.922413793103pt;">Fantasy</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/front-page-slider/" class="tag-link-19 tag-link-position-11" title="3 topics" style="font-size: 10.810344827586pt;">front page slider</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/history/" class="tag-link-38 tag-link-position-12" title="4 topics" style="font-size: 11.413793103448pt;">History</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/horror/" class="tag-link-39 tag-link-position-13" title="2 topics" style="font-size: 10.086206896552pt;">Horror</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/musical/" class="tag-link-21 tag-link-position-14" title="1 topic" style="font-size: 9pt;">Musical</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/romance/" class="tag-link-22 tag-link-position-15" title="9 topics" style="font-size: 13.224137931034pt;">Romance</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/romantic-drama-film/" class="tag-link-36 tag-link-position-16" title="1 topic" style="font-size: 9pt;">Romantic drama film</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/sci-fi/" class="tag-link-23 tag-link-position-17" title="5 topics" style="font-size: 11.896551724138pt;">Sci-Fi</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/sports/" class="tag-link-32 tag-link-position-18" title="1 topic" style="font-size: 9pt;">Sports</a>
                <a href="http://www.cinegold.businessclout.com/event_categories/thriller/" class="tag-link-24 tag-link-position-19" title="9 topics" style="font-size: 13.224137931034pt;">Thriller</a>
                    </div>
                </div>

                <div class="theme_color theme_padding" ><h2>Cinema <span style="color: white !important;">App</span></h2>
                    <div class="theme_font_color">
                        <p>Download the our mobile app today to get Get Show-times & tickets on the go !</p>
                    </div>
                    <div >
                        <a href="https://play.google.com/store/apps/details?id=com.totalsoft.cinegoldplex" target="_blank">
                            <span><img src="arena_images/google-play.png"></span>
                        </a>
                        <a href="https://itunes.apple.com/us/app/cinegoldplex/id1159169409?mt=8" target="_blank">
                            <span><img src="arena_images/app-store.png"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="theme_color theme_padding"><h2>Follow <span style="color: white !important;">Us @ FB</span></h2></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                    <div class="fb-page"
                         data-href="https://www.facebook.com/cinegoldplex/"
                         data-width="350"
                         data-hide-cover="false"
                         data-show-facepile="true"
                         data-show-posts="false"></div></div>
            </div>

        </div>
        <!-- END FOOTER -->

        <!-- BEGAN FOOTER COPYRIGHT -->
        <div class="row footer">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <a href="<?php echo Yii::app()->request->baseUrl?>/">
                    <img src="arena_images/Footer-logo.png" height="26" style="cursor:pointer !important;"/>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><p style="font-family: myFirstFontBold">&#169; Copyright 2016 Cinegold Plex Designed & Developed by Softideo</p></div>
        </div>
        <!-- END FOOTER COPYRIGHT -->
    </div>
</div>


<!-- END COMMON FOOTER   -->

<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true) . '/js/tinycarousel.min.js'?>"></script>
<!-- /build -->


<script type="text/javascript">
    $(document).ready(function()
    {

        $('#slider1').tinycarousel();
        $('li.overview').featherlightGallery({
            openSpeed: 300,
            previousIcon: '&#9664;',     /* Code that is used as previous icon */
            nextIcon: '&#9654;',         /* Code that is used as next icon */
            galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
            galleryFadeOut: 300          /* fadeOut speed before slide is loaded */
        });

    });
</script>



<input type="hidden" id="GalleryFolder" data-galleryfolder='<?php echo $this->createUrl('cinestar/Gallery')?>' />
<input type="hidden" id="ShowTiming" data-showtiming='<?php echo $this->createUrl('cinestar/ShowTiming')?>' />
<input type="hidden" id="GalleryViewer" data-galleryviewer='<?php echo $this->createUrl('cinestar/GalleryViewer')?>' />
<input type="hidden" id="MemberPage" data-memberpage='<?php echo $this->createUrl('cinestar/MembersArea')?>' />
<input type="hidden" id="JoinPage" data-joinpage='<?php echo $this->createUrl('cinestar/JoinUs')?>' />
<input type="hidden" id="CorporatePage" data-corporatepage='<?php echo $this->createUrl('cinestar/Corporate')?>' />
<input type="hidden" id="SearchMovie" class="vertical" data-search="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/SearchMovie" ><!------------------popuo weekly javascript----------->
<input type="hidden" id="MovieDetail" class="vertical" data-detail="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/MovieDetail" ><!------------------popuo weekly javascript----------->
<input type="hidden" id="LhrMembership" class="vertical" data-lhrmember="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/LhrMembership" ><!------------------popuo weekly javascript----------->
<input type="hidden" id="LhrTicket" class="vertical" data-lhrticket="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/LhrTicket" ><!------------------popuo weekly javascript----------->



<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/classie.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/dialogFx.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl?>/js/cinestar/function.js"></script>

<!------------------popuo weekly javascript----------->
<input type="hidden" id="ContactUS" data-contactus='<?php echo $this->createUrl('cinestar/ContactUs')?>' />
<input type="hidden" id="WeeklyView" class="vertical" data-weekly="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/WeeklyData" >
<input type="hidden" id="ConatctUs" class="vertical" data-contactus="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/ContactUs" >
<input type="hidden" id="AboutUs" class="vertical" data-aboutus="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/AboutUs" >
<input type="hidden" id="Careers" class="vertical" data-careers="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/Careers" >
<input type="hidden" id="FAQS" class="vertical" data-faqs="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/FAQ" >
<input type="hidden" id="DINEIN" class="vertical" data-dinein="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/DineIn" >
<input type="hidden" id="Complainpopup" class="vertical" data-complainpopup="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/ContactForm" >
<input type="hidden" id="Smsalertpopup" class="vertical" data-smsalertpopup="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/SubscribeNumber" >
<input type="hidden" id="Suggestionpopup" class="vertical" data-suggestionpopup="<?php echo Yii::app()->request->baseUrl?>/index.php/cinestar/ContactForm" >
<input type="hidden" id="cont" data-con='<?php echo $this->createUrl('cinestar/ContactForm')?>' />

<script>
    /*
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
     */
    function get_my_movie(id){
        console.log("remove comments below me to make it work");
        return false;
    }
	function playvideo(id){
        $('#'+id).trigger('click');
        return false;
    }
</script>

</body>
</html> 