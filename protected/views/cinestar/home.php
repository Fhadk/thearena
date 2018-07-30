<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="imgs/favicon.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#247b8f">
    <title>Arena</title>
    <link href="css/featherlight/featherlight.css" type="text/css" rel="stylesheet" />
    <link href="css/featherlight/featherlight.gallery.css" type="text/css" rel="stylesheet" />

    <!-- slick start -->
    <link href="css/slick/slick.css" type="text/css" rel="stylesheet" />
    <link href="css/slick/slick-theme.css" type="text/css" rel="stylesheet" />
    <!-- slick end -->

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/cinestar/arena/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/cinestar/arena/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/cinestar/arena/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/cinestar/arena/owl.theme.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/cinestar/arena/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="http://getbootstrap.com/getting-started/#download">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/cinestar/colorbox.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

    <style>
        #slider-thumbs table td img{
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
            -webkit-transition: height 1s;
            transition: height 1s;
        }
        #slider-thumbs table td img:hover {
            height: 400px !important;
            cursor: pointer;
            -webkit-transition: height 1s; /* Safari */
            transition: height 1s;
            -webkit-filter: none;
            filter: none;
        }
        #slider-thumbs table td img.active{
            height: 400px !important;
            -webkit-filter: none;
            filter: none;
        }
        #owl-demo_2 img, #owl-demo_dine_in img{
            width: 90% !important;
        }

        .slick-slide {
            /*text-align: center;*/
        }
        .slick-list{
            background-color: transparent !important;
        }
        .slick-dots{
            position: absolute;
            top: 0px;
            text-align: right;
            right: 30px;
            display: block;
        }
        .slick-dots li button:before{
            font-size: 18px;
            color: #c50505;
        }
        .slick-dots li.slick-active button:before{
            font-size: 18px;
            color: #c50505;
        }
        .slick-dots .active{
            background: #c50505;
        }

        /*.carousel-selector:hover{*/
            /*height: 420px !important;*/
        /*}*/
    </style>

</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl ?>"><img width="150" src="arena_images/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo Yii::app()->request->baseUrl ?>">Home</a></li>
                    <li><a href="dinein">Food & Drinks</a></li>
                    <li><a href="membership"> Membership </a></li>
                    <li ><a href="newsevents"> News & Events </a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Company <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="aboutus">About Us</a></li>
                            <li><a href="contactus">Contact Us</a></li>
                            <li><a href="careers">Careers</a></li>
                            <li><a href="faqs">FAQ's</a></li>
                        </ul>
                    </li>
                    <li class="head_social">
                        <a href="https://www.facebook.com/thearenabt"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/arena_cinema"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/thearenabt"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!--<div class="banner"></div>-->
<!--SLIDER-->
<div class="" id="carousel-bounding-box" style="position: relative;">
    <div class="carousel_thumbnail slide" id="myCarousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($slidersequence as $slider) {
//                if($i < 4){
                    ?>

                    <div class="item <?php if ($i == 0) echo 'active'; ?>" data-slide-number="<?php echo $i; ?>">
                        <div class="banner_bg1" style="background:url('<?php echo Yii::app()->getBaseUrl(true) . $slider['slider_img_path']; ?>') no-repeat;background-size:cover;background-position:center;">
                            <div class="banner_text">
                                <h1><?php echo $slider['movie_name']; ?></h1>
                                <p><?php echo $slider['movie_desc']; ?> </p>
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn">Book Ticket</button>
                                <a class='youtube watch_trailer_link' href="<?php echo $slider['videolink']; ?>">Watch Trailer</a>

                            </div>
                        </div>
                    </div>
                    <?php
//                }
                $i++;
            }
            ?>
        </div><!-- Carousel nav -->
        <a class="left carousel-control slider_control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control slider_control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <div style="max-height: 140px;
    overflow-y: hidden;margin-top:-140px;position:absolute;width:100%;" class="hidden-xs" id="slider-thumbs"><table style="" class="container">
            <tbody><tr>


                <?php
                $i = 0;
                $class = 'active';
                $width = 100/count($slidersequence);
                foreach ($slidersequence as $slider) {
//                    if($i < 4){
                        ?>
                        <td style="width:<?php echo $width;?>%;">
                            <a id="carousel-selector-<?php echo $i; ?>"><img class="carousel-selector banner-options <?php echo $class; ?>"  src="<?php echo Yii::app()->getBaseUrl(true) . $slider['movie_img_path']; ?>" style="
width: 100%;
    height: 320px;" id="carousel-selector-<?php echo $i; ?>"></a>
                        </td>

                        <?php
//                    }
                    $i = $i+1;
                    $class = '';
                }
                ?>

            </tr>
            </tbody></table></div>



</div>

<!--SLIDER END-->
<div class="container" style="padding-left:0px;padding-right:0px;">


    <div class="box_shadow_container">
        <div class="lightgrey_bg">
            <div class="movie_sec">
                <h2 class="main_heading">Fourthcoming<span> Movies</span> </h2>
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <?php
                    $i = 0;
                    foreach ($upcomingmovies as $upcoming_movie) {
                        ?>
                        <div class="item">
                            <img src="<?php echo Yii::app()->getBaseUrl(true) . $upcoming_movie['img_url']; ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <section class="showing_theater">
                <h2 class="main_heading">Showing <span>in Theaters</span></h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a class="all-theater-tab main-tab" data-toggle="tab" href="#home">All Theaters <span><i class="fa fa-long-arrow-down"></i></span></a></li>
                    <li>
                        <a class="current-date-tab main-tab" data-toggle="tab" href="#date1"> <?php echo date('D M d') ?> <span>
                                <i class="fa fa-long-arrow-down"></i></span>
                        </a>

                        <ul class="nav nav-tabs hidden sub-date-tab">
                            <li class="active"><a style="padding-left: 0px;margin-right:5px;font-size:10px;" data-toggle="tab" href="#date1"><?php echo date('D M d') ?></a></li>
                            <li><a style="padding-left: 0px;margin-right:5px;font-size:10px;" data-toggle="tab" href="#date2"> <?php echo date('D M d',strtotime("+1 days")) ?></a></li>
                            <li><a style="padding-left: 0px;margin-right:5px;font-size:10px;" data-toggle="tab" href="#date3"><?php echo date('D M d',strtotime("+2 days")) ?></a></li>
                        </ul>

                    </li>
                    <li>
                        <a class="all-movie-tab main-tab" data-toggle="tab" href="#movie1">All Movies <span><i class="fa fa-long-arrow-down"></i></span></a>
                        <ul class="nav nav-tabs  sub-movie-tab hidden">
                            <?php $i = 0; foreach($movie_names as $name): $i++;?>
                            <li class="<?php if($i == 1){ ?>active<?php }?>"><a style="padding-left: 0px;margin-right:5px;font-size:10px;" data-toggle="tab" href="#movie<?php echo $i;?>"><?php echo $name ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </li>
                </ul>

                <div class="tab-content" style="margin-top:40px;">
                    <div id="home" class="tab-pane fade in active">
                        <div class=" all-theater-slick owl-carousel owl-theme">
                            <?php for($i=0; $i < count($movielist); $i++){ ?>
                            <div class="item">
                                <div class="movie_img">
                                    <img style="    width: 120px;height: 160px;" src="<?php echo Yii::app()->getBaseUrl(true).$movielist[$i][0]['movie_img_path']; ?>">
                                </div>
                                <div class="movie_description">
                                    <h2><?php echo $movielist[$i][0]['movie_name']; ?></h2>
                                    <span class="digital">Degital <?php echo $movielist[$i][0]['movie_type']; ?></span>
                                    <h1><i class="fa fa-star"></i><?php echo $movielist[$i][0]['rating']; ?><span>/10</span></h1>
<!--                                    <p><i class="fa fa-clock-o"></i> 02h 21 min </p>-->
                                    <p><i class="fa fa-share-square-o"></i><?php echo date('d M Y') ?></p>
<!--                                    <p> Action, Adventure, Fantasy </p>-->
                                </div>
                                <div class="clearfix"></div>
                                <div class="site_in_city">
                                    <h2>The Arena Islamabad</h2>
                                    <p>
                                        <?php
                                        for($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                            if($movielist[$i]['showtiming'][$k]['location_id'] == 1) {
                                                $time = date("h:i A",strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                if ($i == 0) { ?>
                                                    <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                <?php } else { ?>
                                                    <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                <?php }
                                            }
                                        }?>
                                    </p>
                                    <h2>The Arena Lahore</h2>
                                    <p>
                                        <?php
                                        for($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                            if($movielist[$i]['showtiming'][$k]['location_id'] == 3) {
                                                $time = date("h:i A",strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                if ($i == 0) { ?>
                                                    <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                <?php } else { ?>
                                                    <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                <?php }
                                            }
                                        }?>
                                    </p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class=" all-theater-slick owl-carousel owl-theme">
                            <?php for($i=0; $i < count($movielist); $i++){ ?>
                                <div class="item">
                                    <div class="movie_img">
                                        <img style="    width: 120px;height: 160px;" src="<?php echo Yii::app()->getBaseUrl(true).$movielist[$i][0]['movie_img_path']; ?>">
                                    </div>
                                    <div class="movie_description">
                                        <h2><?php echo $movielist[$i][0]['movie_name']; ?></h2>
                                        <span class="digital">Degital <?php echo $movielist[$i][0]['movie_type']; ?></span>
                                        <h1><i class="fa fa-star"></i><?php echo $movielist[$i][0]['rating']; ?><span>/10</span></h1>
                                        <!--                                    <p><i class="fa fa-clock-o"></i> 02h 21 min </p>-->
                                        <p><i class="fa fa-share-square-o"></i><?php echo date('d M Y') ?></p>
                                        <!--                                    <p> Action, Adventure, Fantasy </p>-->
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="site_in_city">
                                        <h2>The Arena Islamabad</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                                if($movielist[$i]['showtiming'][$k]['location_id'] == 1) {
                                                    $time = date("h:i A",strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                        <h2>The Arena Lahore</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                                if($movielist[$i]['showtiming'][$k]['location_id'] == 3) {
                                                    $time = date("h:i A",strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Dummy Data2</h3>
                        <p>Some content in menu.</p>
                    </div>
                    <div id="date1" class="tab-pane fade">
                        <div class=" all-theater-slick owl-carousel owl-theme">
                            <?php for($i=0; $i < count($movielist); $i++){ ?>
                                <div class="item">
                                    <div class="movie_img">
                                        <img style="    width: 120px;height: 160px;" src="<?php echo Yii::app()->getBaseUrl(true).$movielist[$i][0]['movie_img_path']; ?>">
                                    </div>
                                    <div class="movie_description">
                                        <h2><?php echo $movielist[$i][0]['movie_name']; ?></h2>
                                        <span class="digital">Degital <?php echo $movielist[$i][0]['movie_type']; ?></span>
                                        <h1><i class="fa fa-star"></i><?php echo $movielist[$i][0]['rating']; ?><span>/10</span></h1>
                                        <!--                                    <p><i class="fa fa-clock-o"></i> 02h 21 min </p>-->
                                        <p><i class="fa fa-share-square-o"></i><?php echo date('d M Y') ?></p>
                                        <!--                                    <p> Action, Adventure, Fantasy </p>-->
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="site_in_city">
                                        <h2>The Arena Islamabad</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                                if($movielist[$i]['showtiming'][$k]['location_id'] == 1) {
                                                    $time = date("h:i A",strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                        <h2>The Arena Lahore</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                                if($movielist[$i]['showtiming'][$k]['location_id'] == 3) {
                                                    $time = date("h:i A",strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="date2" class="tab-pane fade">
                        <div class=" all-theater-slick owl-carousel owl-theme">
                            <?php for($i=0; $i < count($movielist_nextday); $i++){ ?>
                                <div class="item">
                                    <div class="movie_img">
                                        <img style="    width: 120px;height: 160px;" src="<?php echo Yii::app()->getBaseUrl(true).$movielist_nextday[$i][0]['movie_img_path']; ?>">
                                    </div>
                                    <div class="movie_description">
                                        <h2><?php echo $movielist_nextday[$i][0]['movie_name']; ?></h2>
                                        <span class="digital">Degital <?php echo $movielist_nextday[$i][0]['movie_type']; ?></span>
                                        <h1><i class="fa fa-star"></i><?php echo $movielist_nextday[$i][0]['rating']; ?><span>/10</span></h1>
                                        <!--                                    <p><i class="fa fa-clock-o"></i> 02h 21 min </p>-->
                                        <p><i class="fa fa-share-square-o"></i><?php echo date('d M Y',strtotime("+1 days")) ?></p>
                                        <!--                                    <p> Action, Adventure, Fantasy </p>-->
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="site_in_city">
                                        <h2>The Arena Islamabad</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist_nextday[$i]['showtiming']); $k++) {
                                                if($movielist_nextday[$i]['showtiming'][$k]['location_id'] == 1) {
                                                    $time = date("h:i A",strtotime($movielist_nextday[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                        <h2>The Arena Lahore</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist_nextday[$i]['showtiming']); $k++) {
                                                if($movielist_nextday[$i]['showtiming'][$k]['location_id'] == 3) {
                                                    $time = date("h:i A",strtotime($movielist_nextday[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="date3" class="tab-pane fade">
                        <div class=" all-theater-slick owl-carousel owl-theme">
                            <?php for($i=0; $i < count($movielist_secondnextday); $i++){ ?>
                                <div class="item">
                                    <div class="movie_img">
                                        <img style="    width: 120px;height: 160px;" src="<?php echo Yii::app()->getBaseUrl(true).$movielist_secondnextday[$i][0]['movie_img_path']; ?>">
                                    </div>
                                    <div class="movie_description">
                                        <h2><?php echo $movielist_secondnextday[$i][0]['movie_name']; ?></h2>
                                        <span class="digital">Degital <?php echo $movielist_secondnextday[$i][0]['movie_type']; ?></span>
                                        <h1><i class="fa fa-star"></i><?php echo $movielist_secondnextday[$i][0]['rating']; ?><span>/10</span></h1>
                                        <!--                                    <p><i class="fa fa-clock-o"></i> 02h 21 min </p>-->
                                        <p><i class="fa fa-share-square-o"></i><?php echo date('d M Y',strtotime("+2 days")) ?></p>
                                        <!--                                    <p> Action, Adventure, Fantasy </p>-->
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="site_in_city">
                                        <h2>The Arena Islamabad</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist_secondnextday[$i]['showtiming']); $k++) {
                                                if($movielist_secondnextday[$i]['showtiming'][$k]['location_id'] == 1) {
                                                    $time = date("h:i A",strtotime($movielist_secondnextday[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                        <h2>The Arena Lahore</h2>
                                        <p>
                                            <?php
                                            for($k = 0; $k < count($movielist_secondnextday[$i]['showtiming']); $k++) {
                                                if($movielist_secondnextday[$i]['showtiming'][$k]['location_id'] == 3) {
                                                    $time = date("h:i A",strtotime($movielist_secondnextday[$i]['showtiming'][$k]['showdateetime']));
                                                    if ($i == 0) { ?>
                                                        <span><?php echo explode(' ',$time)[0]; ?> <sub> <?php echo explode(' ',$time)[1]; ?> </sub></span>
                                                    <?php } else { ?>
                                                        <span style="position:relative;left:20px;"><?php echo explode(' ',$time)[0]; ?> <sub><?php echo explode(' ',$time)[1]; ?></sub></span>
                                                    <?php }
                                                }
                                            }?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

<!--                    //All movies tabs-->
                    <?php for($movie=0; $movie < count($movie_names); $movie++) {?>
                    <div id="movie<?php echo ($movie+1); ?>" class="tab-pane fade">
                        <div class=" all-theater-slick owl-carousel owl-theme">
                            <?php
                            for($i=0; $i < count($movielist); $i++) {
                                if ($movie_names[$movie] == $movielist[$i][0]['movie_name']) {
                                    ?>

                                    <div class="item">
                                        <div class="movie_img">
                                            <img style="    width: 120px;height: 160px;"
                                                 src="<?php echo Yii::app()->getBaseUrl(true) . $movielist[$i][0]['movie_img_path']; ?>">
                                        </div>
                                        <div class="movie_description">
                                            <h2><?php echo $movielist[$i][0]['movie_name']; ?></h2>
                                            <span class="digital">Degital <?php echo $movielist[$i][0]['movie_type']; ?></span>
                                            <h1><i class="fa fa-star"></i><?php echo $movielist[$i][0]['rating']; ?>
                                                <span>/10</span></h1>
                                            <!--                                    <p><i class="fa fa-clock-o"></i> 02h 21 min </p>-->
                                            <p><i class="fa fa-share-square-o"></i><?php echo date('d M Y') ?></p>
                                            <!--                                    <p> Action, Adventure, Fantasy </p>-->
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="site_in_city">
                                            <h2>The Arena Islamabad</h2>
                                            <p>
                                                <?php
                                                for ($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                                    if ($movielist[$i]['showtiming'][$k]['location_id'] == 1) {
                                                        $time = date("h:i A", strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                        if ($i == 0) { ?>
                                                            <span><?php echo explode(' ', $time)[0]; ?>
                                                                <sub> <?php echo explode(' ', $time)[1]; ?> </sub></span>
                                                        <?php } else { ?>
                                                            <span style="position:relative;left:20px;"><?php echo explode(' ', $time)[0]; ?>
                                                                <sub><?php echo explode(' ', $time)[1]; ?></sub></span>
                                                        <?php }
                                                    }
                                                } ?>
                                            </p>
                                            <h2>The Arena Lahore</h2>
                                            <p>
                                                <?php
                                                for ($k = 0; $k < count($movielist[$i]['showtiming']); $k++) {
                                                    if ($movielist[$i]['showtiming'][$k]['location_id'] == 3) {
                                                        $time = date("h:i A", strtotime($movielist[$i]['showtiming'][$k]['showdateetime']));
                                                        if ($i == 0) { ?>
                                                            <span><?php echo explode(' ', $time)[0]; ?>
                                                                <sub> <?php echo explode(' ', $time)[1]; ?> </sub></span>
                                                        <?php } else { ?>
                                                            <span style="position:relative;left:20px;"><?php echo explode(' ', $time)[0]; ?>
                                                                <sub><?php echo explode(' ', $time)[1]; ?></sub></span>
                                                        <?php }
                                                    }
                                                } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }?>
                        </div>
                    </div>
                    <?php } ?>


                </div>
            </section>
        </div>
        <section>
            <div class="latest_prom">
                <h2 class="main_heading">Latest <span>Promotion</span></h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#member">Members Only</a></li>
                    <li><a data-toggle="tab" href="#food">Foods & Drinks</a></li>
                </ul>

                <div class="tab-content" style="margin-top:20px;">
                    <div id="member" class="tab-pane fade in active">
                        <div id="owl-demo_2">
                            <?php $count = 0; foreach ($brand_partners as $partner) { $count++; ?>
                                <div class="item">
                                    <img src="<?php echo Yii::app()->getBaseUrl(true) . $partner['img_url']; ?>" style="height:160px;">
                                    <p style="
text-align: center;
    font-size: 18px;
    line-height: 2;color:#4b4b4b;font-weight:300;">Promotion <?php echo $count;?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="food" class="tab-pane fade">
                        <div id="owl-demo_dine_in">
                            <?php foreach ($dine_in as $dine) { ?>
                                <div class="item">
                                    <img src="<?php echo Yii::app()->getBaseUrl(true) . $dine['sliderpath']; ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news_event">
            <div class="">
                <h2 class="main_heading">News <span>& Events</span></h2>
                <div class="" style="margin-top:30px;">
                    <div id="owl-demo_3">
                        <?php for ($i = 0; $i < count($results); $i++) { ?>
                            <div class="item">
                                <div class="movie_img" style="margin-right:20px;">
                                    <img style="height:160px;width:100px;" src="<?php echo Yii::app()->getBaseUrl(true) . $resultsfilename[$i]; ?>">
                                </div>
                                <div class="event_description" style="height:150px;">
                                    <h5><?php echo $results[$i]; ?></h5>
                                    <a onclick="get_images(this)" id="<?= $results[$i]; ?>" name="<?php echo $results[$i]; ?>"  class="album-cont_tem" href="javascript:void(0)" style="position:absolute;bottom:0px;">
                                        View more</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="main" style="display: none">
                <h2 id="gallery_heading"></h2>
            </div>
        </section>
        <footer>
            <div class="footer_section">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer_sec">
                            <h2 class="footer_head"><span>SMS Alert </span>for Showtimes</h2>
                            <p>Please enter your mobile number for SMS aler in the text box.</p>
                            <div class="form-group sms-form">
                                <div style="max-width: 250px">
                                    <input type="text" class="form-control jquery-validation" placeholder="03XX XXXX XXX"
                                           name="number"
                                           placeholder="Type your Contact Number"
                                           data-name="contact number"
                                           data-validation-error="Contact number cannot be less than 10 digits."
                                           data-regex-pattern="^.[0-9]{10,}$">
                                    <div class="text-center clearfix">
                                        <button type="button" class="pull-left js-add-number">Subscribe</button>
                                        <button type="button" class="pull-right js-remove-number">Unsubscribe</button>
                                    </div>
                                </div>
                                <h6>Enter correct phonr number. (eg: 03XX XXX XXX)</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 clearfix">
                        <div class="follow_us">
                            <h2 class="footer_head"><span>Get </span>in Touch</h2>
                            <p>You are always welcome to contact us.</p>
                            <a href="https://www.facebook.com/thearenabt"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
                            <a href="https://twitter.com/thearenabt"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
                            <a href="#"><img src="arena_images/instagram.png"> <span>Instagram</span></a>
                            <a href="#"><i class="fa fa-youtube"></i> <span>Youtube</span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2 class="footer_head"><span>Arena </span> Everywhere</h2>
                        <p>Download the our mobile app today to get Show-times & tickets on the go !</p>
                        <div class="download_app">
                            <a href="https://play.google.com/store/apps/details?id=com.totalsoft.thearena"><img src="arena_images/google_play.png"></a>
                            <a href="#"><img src="arena_images/app_store.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="bottom_bar">
            <p>Copyright 2017 The Arena Cinema Design & Developed by TotalSoft</p>
        </div>
        <!--main_caontainer End-->
    </div>
</div>
<!--        <script src="<?php echo Yii::app()->request->baseUrl ?>/js/cinestar/arena/jquery-3.1.1.min.js"></script>-->
<script src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-1.10.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/cinestar/arena/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/cinestar/arena/owl.carousel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.colorbox-min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/featherlight/featherlight.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/featherlight/featherlight.gallery.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo Yii::app()->request->baseUrl?>/js/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content" style="margin-top: 120px">
            <div class="modal-header" style="background:#f73a4c;color:white;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Book Ticket</h4>
            </div>
            <div class="modal-body">
                <div class="radio">
                    <label><input type="radio" name="optradio" value="http://lhr.thearena.com.pk/ArenaERP/CustomerTicketing/Login.aspx" checked>Lahore</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="http://isb.thearena.com.pk/ArenaERP/Customerticketing/Login.aspx">Islamabad</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background:#f73a4c;color:white;" data-dismiss="modal" onclick="bookticket()">Book</button>
            </div>
        </div>

    </div>
</div>



</body>
<script>

    base_url = "<?php echo Yii::app()->getBaseUrl(true); ?>";

    // Form Validation
    function formValidation(identifier){
        validate = true;
        $(identifier).find('.jquery-validation').each(function(){
            if($(this).val().length == 0 ){
                alert('Kindly fill '+$(this).attr('data-name')+'...');
                validate = false;
                return false;
            }
            if( !(new RegExp($(this).data('regex-pattern'))).test( $(this).val() ) ){
                alert($(this).data('validation-error'));
                validate = false;
                return false;
            }
        });
        return validate;
    }


    $('.js-add-number').on('click',function () {
        var number = $('input[name=number]').val();
        if(formValidation('.sms-form')){
            $.ajax({url: base_url+"/index.php/cinestar/SubscribeNumber?subscribe=1&contactno="+number+"&location=All", success: function(result){
                alert("Your number is added for SMS Alerts.");
                $('input[name=number]').val('');
            }});
        }
    });

    $('.js-remove-number').on('click',function () {
        var number = $('input[name=number]').val();
        if(formValidation('.sms-form')){
            $.ajax({url: base_url+"/index.php/cinestar/SubscribeNumber?subscribe=0&contactno="+number+"&location=All", success: function(result){
                alert("Your number is removed for SMS Alerts.");
                $('input[name=number]').val('');
            }});
        }
    });

    $('.main-tab').on('click',function () {
       if($(this).hasClass("current-date-tab") ){
           $('.sub-date-tab').removeClass('hidden');
           $('.sub-date-tab li').removeClass('active');
           $('.sub-date-tab>li:eq(0)').addClass('active');
       }
       else{
           $('.sub-date-tab').addClass('hidden');
       }

       if($(this).hasClass('all-movie-tab')){
           $('.sub-movie-tab').removeClass('hidden');
           $('.sub-movie-tab li').removeClass('active');
           $('.sub-movie-tab>li:eq(0)').addClass('active');
       }
       else{
           $('.sub-movie-tab').addClass('hidden');
       }

    });


    function bookticket(){
        window.open($('[name=optradio]:checked').val() );
    }
    $(document).ready(function () {
        $(".youtube").colorbox({iframe: true, innerWidth: 640, innerHeight: 390});

    });
</script>


<style type="text/css" media="screen">
    * { margin: 0; padding: 0; }
    #main {
        margin: 0 auto;
        width: 10px;
    }
    div.pp_pic_holder{
        /*top: 0px !important;*/
        /*position: fixed;*/
    }
    #fullResImage{
        /*max-height: 400px;*/
        /*max-width: 500px;*/
    }
</style>
<script>
    $(document).ready(function () {

        $('.banner-options').on('click',function () {
            $('.banner-options').removeClass('active');
            $(this).addClass('active');
        });

        $("#owl-demo").owlCarousel({
            items: 4,
            margin:10,
            autoPlay:true,
        });

        $("#owl-demo_2").owlCarousel({
            navigation: false,
            pagination: true,
            items: 4,
            itemsDesktop: [1199, 3],
            margin:10,
            autoPlay:true,
        });
        $("#owl-demo_dine_in").owlCarousel({
            navigation: false,
            pagination: true,
            items: 4,
            itemsDesktop: [1199, 3],
            margin:10,
            autoPlay:true,
        });

        $("#owl-demo_3").owlCarousel({
            navigation: false,
            pagination: true,
            items: 4,
            itemsDesktop: [1199, 3],
            margin:10,
            autoPlay:true,
        });

        $("#overview").click(function (event) {
            $(".border_grey").show();
        });
        $("#doctor").click(function (event) {
            $(".border_grey").show();
            $(".view_appointment ").hide();
        });


        $('#myCarousel').carousel({
            interval: 5000,
            items: 1,
        });


        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('a[data-slide="prev"]').click(function (event) {
            $('#myCarousel').carousel('prev');
            event.preventDefault();
        });

        $('a[data-slide="next"]').click(function (event) {
            $('#myCarousel').carousel('next');
            event.preventDefault();
        });


        $('.all-theater-slick').owlCarousel({
            navigation: false,
            pagination: true,
            items: 3,
            itemsDesktop: [1199, 3],
            margin:10,
            autoPlay:true,
        });

    });
</script>
<script type="text/javascript" charset="utf-8">

    function get_images(ele) {
        var base_url = '<?php echo Yii::app()->request->baseUrl ?>';
        $("#main").empty();
        var folder = ele.id
        var url = base_url + "/index.php/Cinestar/GalleryViewer";
        $fields = {'foldername': folder};
        $.post(url, $fields, function (response) {
            if (response.success) {
                $("gallery_heading").val(folder);
                var ul = '<ul class="gallery clearfix">';
                $.each(response.filename, function (i, el) {
                    var id = '';
                    var display = 'none';
                    if (i == 0) {
                        id = 'first_image';
                        display = 'block';
                    }
                    var img_path = base_url + '/gallery/' + folder + '/' + el;
                    ul += '<li style="display:' + display + '"><a href="' + img_path + '" rel="prettyPhoto[gallery2]" title="">';
                    ul += '<img id="' + id + '" src="' + img_path + '" width="60" height="60" alt=""/>';
                    ul += '</a></li>';
                });
                ul += '</ul>';

                $("#main").html(ul);
                myFunction();
            }
        }, 'json');
    }

    function myFunction() {
        $("area[rel^='prettyPhoto']").prettyPhoto();
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: true});
        setTimeout(function () {
            $("#first_image").trigger('click');
        }, 500);
    }





</script>
</html>