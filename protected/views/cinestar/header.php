<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metronic Frotnend | Homepage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/theme/plugins/revolution_slider/css/rs-style.css" media="screen">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/theme/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen">
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/css/style-metronic.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/css/themes/orange.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl?>/theme/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->

    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
<!-- BEGIN STYLE CUSTOMIZER -->
<!--<div class="color-panel hidden-sm">-->
<!--    <div class="color-mode-icons icon-color"></div>-->
<!--    <div class="color-mode-icons icon-color-close"></div>-->
<!--    <div class="color-mode">-->
<!--        <p>THEME COLOR</p>-->
<!--        <ul class="inline">-->
<!--            <li class="color-blue current color-default" data-style="blue"></li>-->
<!--            <li class="color-red" data-style="red"></li>-->
<!--            <li class="color-green" data-style="green"></li>-->
<!--            <li class="color-orange" data-style="orange"></li>-->
<!--        </ul>-->
<!--        <label>-->
<!--            <span>Header</span>-->
<!--            <select class="header-option form-control input-small">-->
<!--                <option value="default" selected>Default</option>-->
<!--                <option value="fixed">Fixed</option>-->
<!--            </select>-->
<!--        </label>-->
<!--    </div>-->
<!--</div>-->
<!-- END BEGIN STYLE CUSTOMIZER -->

<!-- BEGIN HEADER -->
<div class="header navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN LOGO (you can use logo image instead of text)-->
            <a class="navbar-brand logo-v1" href="index.html">
                <img src="assets/img/logo_blue.png" id="logoimg" alt="">
            </a>
            <!-- END LOGO -->
        </div>

        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li><!--class="active"-->
                <li><a href="#">Showtimes</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Memebership</a></li>
                <li><a href="#">Online booking</a></li>
                <li><a id="aboutus" href="#">About</a></li>
                <li><a href="#">Contact</a></li>
<!--                <li class="menu-search">-->
<!--                    <span class="sep"></span>-->
<!--                    <i class="icon-search search-btn"></i>-->
<!---->
<!--                    <div class="search-box">-->
<!--                        <form action="#">-->
<!--                            <div class="input-group input-large">-->
<!--                                <input class="form-control" type="text" placeholder="Search">-->
<!--                                    <span class="input-group-btn">-->
<!--                                        <button type="submit" class="btn theme-btn">Go</button>-->
<!--                                    </span>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </div>
        <!-- BEGIN TOP NAVIGATION MENU -->
    </div>
</div>
<!-- END HEADER -->