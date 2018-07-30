<style>
    .banner_bg1{
        position: relative;
        min-height: 732px;
    }
    .banner_text {
        text-align: left;
        color: white;
        float: right; 
        background: rgba(0,0,0,0.6);
        min-height:732px;
        padding: 200px 20px 0 20px;
        max-width: 450px;
        margin-right: 30px;
    }
    .banner_text h1{
        font-size: 40px;
    }
    .banner_text p{
        font-size: 17px;
    }
    .cinestarabout{padding:25px 20px 0 20px;}
    .cus_tabs {border: none;margin-bottom: 20px;margin-top: 10px;text-align: center;}
    .cus_tabs > li{float: none;display: inline-block;}
    .cus_tabs > li.active > a, .cus_tabs > li.active > a:focus, .cus_tabs > li.active > a:hover {
        border: none !important;
        border-top: none !important;
        border-bottom: 4px solid #D3A323 !important;
        color: #D3A323;
        background: none !important;
    }
    .cus_tabs li a {
        text-transform: uppercase;
        font-size: 20px;
        border: none;
        background: none !important;
        color: #fff;
    }
    .cus_tabs > li > a:hover {
        border: none !important;
        border-top: none !important;
        border-bottom: 4px solid #D3A323 !important;
        color: #D3A323;
        background: none !important;
    }
    .cus_tabs > li > a:focus, .cus_tabs > li > a:hover {
        height: 42px !important;
    }
    .sub_tabs li a:hover{
        color: #fff !important;
    }
    .sub_tabs li.active a{
        color: #fff !important;
    }
    .sub_tabs{
        text-align: center;
    }
    .sub_tabs li:first-child{margin-left: 0;}
    .sub_tabs li{
        float: none !important;
        display: inline-block;
        margin-left: 80px;
    }
    /************SLIDER CSS*************/
    #theCarousel .carousel-inner .item .col-xs-4 a img{width: 100%;}
    #theCarousel .carousel-inner .item .col-xs-4 h3{color: white;font-size: 22px;}
    #theCarousel .carousel-inner .item .col-xs-4 p{color: #646464;}
    .carousel-control {
        top: 40%;
        width: 60px;
        height: 60px;
        background: #000;
        border-radius: 50%;
        line-height: 60px;
        text-align: center;
        border: 2px solid #eee;
        text-align: center;
    }
    .multi-item-carousel{
        .carousel-inner{
            > .item{
                transition: 500ms ease-in-out left;
            }
            .active{
                &.left{
                    left:-33%;
                }
                &.right{
                    left:33%;
                }
            }
            .next{
                left: 33%;
            }
            .prev{
                left: -33%;
            }
            @media all and (transform-3d), (-webkit-transform-3d) {
                > .item{
                    // use your favourite prefixer here
                    transition: 500ms ease-in-out left;
                    transition: 500ms ease-in-out all;
                    backface-visibility: visible;
                    transform: none!important;
                }
            }
        }
        .carouse-control{
            &.left, &.right{
                background-image: none;
            }
        }
    }

</style>
<div class="" id="carousel-bounding-box" style="position: relative;">
    <div class="carousel_thumbnail slide" id="myCarousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <?php
            if (isset($slidersequence)) {
                $a = 0;
                for ($i = 0; $i < count($slidersequence); $i++) {
                    ?>
                    <div class="<?php if ($a == 0) echo 'active'; ?> item" data-slide-number="<?php echo $a; ?>">
                        <div class="banner_bg1" style="background:url('<?php echo Yii::app()->getBaseUrl(true) . $slidersequence[$i]['sliderpath']; ?>') no-repeat;background-size:cover;background-position:center;">
                            <div class="banner_text">
                                <h1><?php echo $slidersequence[$i]['title']; ?></h1>
                                <p><?php echo $slidersequence[$i]['description']; ?> </p>    						
                            </div>
                        </div>
                    </div>	
                    <?php
                    $a++;
                }
            }
            ?>

        </div><!-- Carousel nav -->
        <a class="left carousel-control slider_control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left"></span>                                        
        </a>
        <a class="right carousel-control slider_control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right"></span>                                       
        </a> 
    </div>
</div>
<div class="wrapper col-md-12" style="margin: 1em 0 0; padding: 0 7.3em">
    <div class="cinestarabout">
        <h2 class="theme_color" style="border-bottom: 1px solid #adadad;line-height: 45px;font-weight: bold;">MENU</h2>
        <ul id="mytabs" class="nav nav-tabs cus_tabs">
            <li class="active"><a data-toggle="tab" href="#islamabad" aria-expanded="true">Rawalpindi</a></li>
            <li class=""><a data-toggle="tab" href="#lahore" aria-expanded="false">Lahore</a></li>
            <li class=""><a data-toggle="tab" href="#karachi" aria-expanded="false">Karachi</a></li>
        </ul>
        <div class="tab-content">
            <div id="islamabad" class="tab-pane fade active in">
                <ul id="mytabs" class="nav nav-tabs cus_tabs sub_tabs">
                    <li class="active"><a data-toggle="tab" href="#snacks" aria-expanded="true">snacks</a></li>
                    <li class=""><a data-toggle="tab" href="#drink" aria-expanded="false">drinks</a></li>
                    <li class=""><a data-toggle="tab" href="#meals" aria-expanded="false">meals</a></li>
                    <li class=""><a data-toggle="tab" href="#treats" aria-expanded="false">treats</a></li>
                    <li class=""><a data-toggle="tab" href="#combos" aria-expanded="false">combos</a></li>
                </ul>
                <div class="tab-content">
                    <div id="snacks" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="drink" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel2">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel2" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="meals" class="tab-pane fade">
                         <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel3">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel3" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel3" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="treats" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel4">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel4" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel4" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="combos" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel5">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel5" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel5" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lahore" class="tab-pane fade">
                  <ul id="mytabs" class="nav nav-tabs cus_tabs sub_tabs">
                    <li class="active"><a data-toggle="tab" href="#snacks1" aria-expanded="true">snacks</a></li>
                    <li class=""><a data-toggle="tab" href="#drink1" aria-expanded="false">drinks</a></li>
                    <li class=""><a data-toggle="tab" href="#meals1" aria-expanded="false">meals</a></li>
                    <li class=""><a data-toggle="tab" href="#treats1" aria-expanded="false">treats</a></li>
                    <li class=""><a data-toggle="tab" href="#combos1" aria-expanded="false">combos</a></li>
                </ul>
                <div class="tab-content">
                    <div id="snacks1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel6">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel6" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel6" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="drink1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel7">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel7" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel7" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="meals1" class="tab-pane fade">
                         <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel8">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel8" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel8" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="treats1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel9">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel9" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel9" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="combos1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel10">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel10" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel10" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="karachi" class="tab-pane fade">
               <ul id="mytabs" class="nav nav-tabs cus_tabs sub_tabs">
                    <li class="active"><a data-toggle="tab" href="#snacks2" aria-expanded="true">snacks</a></li>
                    <li class=""><a data-toggle="tab" href="#drink2" aria-expanded="false">drinks</a></li>
                    <li class=""><a data-toggle="tab" href="#meals2" aria-expanded="false">meals</a></li>
                    <li class=""><a data-toggle="tab" href="#treats2" aria-expanded="false">treats</a></li>
                    <li class=""><a data-toggle="tab" href="#combos2" aria-expanded="false">combos</a></li>
                </ul>
                <div class="tab-content">
                    <div id="snacks2" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel11">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel11" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel11" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="drink2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel12">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel12" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel12" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="meals2" class="tab-pane fade">
                         <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel13">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel13" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel13" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="treats2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel14">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel14" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel14" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="combos2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 20px;">
                                <div class="carousel slide multi-item-carousel" id="theCarousel15">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4">
                                                <a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a>
                                                <h3>Auguest Deal <span class="pull-right">Rs.359/-</span></h3>
                                                <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img2.png" class="img-responsive"></a></div>
                                        </div>
                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img3.png" class="img-responsive"></a></div>
                                        </div>
                                        <!-- add  more items here -->
                                        <!-- Example item start:  -->

                                        <div class="item">
                                            <div class="col-xs-4"><a href="#1"><img src="<?php echo Yii::app()->request->baseUrl ?>/arena_images/deal_img1.png" class="img-responsive"></a></div>
                                        </div>

                                        <!--  Example item end -->
                                    </div>
                                    <a class="left carousel-control" href="#theCarousel15" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#theCarousel15" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#overview").click(function (event) {
            $(".border_grey").show();
        });
        $("#doctor").click(function (event) {
            $(".border_grey").show();
            $(".view_appointment ").hide();
        });


        $('#myCarousel').carousel({
            interval: 5000
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

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel').carousel('next');
            event.preventDefault();
        });
        
         $('#myCarousel2').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel2').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel2').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel3').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel3').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel3').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel4').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel4').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel4').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel5').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel5').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel5').carousel('next');
            event.preventDefault();
        });
        
        //////////////////////////////////////////////////////////////////
        
         $('#myCarousel6').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel6').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel6').carousel('next');
            event.preventDefault();
        });
        
         $('#myCarousel7').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel7').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel7').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel8').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel8').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel8').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel9').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel9').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel9').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel10').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel10').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel10').carousel('next');
            event.preventDefault();
        });
        
        /////////////////////////////////////////////////////////////////
        
         $('#myCarousel11').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel11').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel11').carousel('next');
            event.preventDefault();
        });
        
         $('#myCarousel12').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel12').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel12').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel13').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel13').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel13').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel14').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel14').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel14').carousel('next');
            event.preventDefault();
        });
        
        $('#myCarousel15').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

        $('#carousel-bounding-box a[data-slide="prev"]').click(function (event) {
            $('#myCarousel15').carousel('prev');
            event.preventDefault();
        });

        $('#carousel-bounding-box a[data-slide="next"]').click(function (event) {
            $('#myCarousel15').carousel('next');
            event.preventDefault();
        });
        
        /////////////////////////////////////////////////////////////////
    });

    $('.multi-item-carousel').carousel({
        interval: false
    });

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
    $('.multi-item-carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
</script>