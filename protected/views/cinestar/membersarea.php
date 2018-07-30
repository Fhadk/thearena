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

        .points-table{
            width: 100%;
            border-color: #979797;
        }

        .points-table td{
            width: 50%;
            /*border: 1px solid #979797;*/
            text-align: center;
            padding: 5px;
            box-shadow: 1px 1px 5px #979797;
        }

        p{
            color: #4b4b4b;
            font-size: 16px;
        }
        /*.carousel-selector:hover{*/
        /*height: 420px !important;*/
        /*}*/
    </style>
    <style>
        .box_shadow_container .btn{
            border: 0px solid #fff;
            padding: 10px 25px;
            text-align: center;
            text-transform: uppercase;
            border-radius: 50px;
            font-size: 16px;
            color: white !important;
            background: #f73a4c;
            margin-right: 5px;
            text-transform: capitalize
        }
        .box_shadow_container .col-md-4{
            min-height: 220px;
        }
        .box_shadow_container .col-md-4 .button-container{
            position: absolute;
            bottom: 10px;
            width: 100%;
            padding-right: 20px;
        }
        .footer_sec button{
            background: #808080 !important;
        }
        .our-partners{
            padding: 0px;
        }
        .our-partners .col-md-6{
            border: 3px solid #eee;background: #fafafa;margin-bottom: 2%;
        }

        .desktop-left{
            text-align: left;
        }

        .desktop-right{
            text-align: right;
        }

        .points-table .col-md-6{
            border: 1px solid #979797;
            margin-bottom: 1%;
            box-shadow: 1px 1px 5px #888888;
            padding: 5px;
        }

        .points-table p{
            margin: 0px;
        }

        @media screen and (min-width: 992px) {
            .our-partners .left-partner {
                margin-right: 1%;
                width: 49%;
            }

            .our-partners .right-partner {
                margin-left: 1%;
                width: 49%;
            }

            .points-table .left-point{
                margin-right: 0.5%;
                width: 49.5%;
            }
            .points-table .right-point{
                margin-left: 0.5%;
                width: 49.5%;
            }
        }

        @media screen and (max-width: 992px) {
            .desktop-left{
                text-align: center;
            }

            .desktop-right{
                text-align: center;
            }
        }



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
                    <li class=""><a href="<?php echo Yii::app()->request->baseUrl ?>">Home</a></li>
                    <li><a href="dinein">Food & Drinks</a></li>
                    <li class="active"><a href="membership"> Membership </a></li>
                    <li ><a href="newsevents"> News & Events </a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Company <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li ><a href="aboutus">About Us</a></li>
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
            <div class="item active" data-slide-number="0">
                <div class="banner_bg1" style="background:url('arena_images/Banners/Member.png') no-repeat;background-size:cover;background-position:center;">
                    <div class="banner_text">
                        <h1>Join the Arena Membership</h1>
                        <p style="color:white;padding-left: 15%;padding-right: 15%;"> The Arena also facilitates its valued customers with The Arena Exclusive membership. The Arena exclusive    members can avail following benefits.</p>
                    </div>
                </div>
            </div>
        </div><!-- Carousel nav -->
    </div>


</div>

<!--SLIDER END-->
<div class="container" style="padding-left:0px;padding-right:0px;    margin-top: -10px;">


    <div class="box_shadow_container">
        <div class="lightgrey_bg">
            <div class="row">
                <div class="col-md-12" style="padding-left: 20px;padding-right: 20px;padding-top: 40px;">
                    <div class="col-md-12">
                        <h2 class="main_heading">Join Arena <span>Membership</span> </h2>
                        <p style="line-height: 2;">
                            • Online Ticket Purchase
                            <br>• An Exclusive Helpdesk
                            <br>• Special Ticketing Counter (Queue Free)
                            <br>• Point Generation System (Maximize Benefits by Maximum Visit)
                        </p>

                        <div class="col-md-12 points-table" style="margin-bottom: 10px;">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-12">
                                    <div class="col-md-6 text-center left-point">
                                        <p>OFFERS</p>
                                    </div>
                                    <div class="col-md-6 text-center right-point">
                                        <p>POINTS</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6 text-center left-point">
                                        <p>1 free Ticket</p>
                                    </div>
                                    <div class="col-md-6 text-center right-point">
                                        <p>200</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6 text-center left-point">
                                        <p>2 free Ticket</p>
                                    </div>
                                    <div class="col-md-6 text-center right-point">
                                        <p>300</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6 text-center left-point">
                                        <p>1 free VIP Box</p>
                                    </div>
                                    <div class="col-md-6 text-center right-point">
                                        <p>600</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <p style="line-height: 2;">
                            • Invites For Special Screenings/ Premiers.
                            <br>• Weekly Movie Schedule (sms/email)
                            <br>• Bi-Monthly Email of Movie Journal (Upcoming / Now Showing / Ratings / Reviews)
                            <br>• Affiliate / Partner’s Offers and Discounts.
                            <br>• Prepaid System
                            <br>• You Will Receive Contest Updates, Access to Special Contests and the Opportunity to Participate in all Contests Held at The Arena.
                            <br>• Renewal Reward (2 Free Tickets
                        </p>

                        <div class="col-md-6">
                            <div class="button-container desktop-right">
                                <a style="text-transform: capitalize;margin-bottom: 10px;" type="button" href="http://isb.thearena.com.pk/ArenaERP/Customers/CustomerRegistration.aspx?CType=Customer" target="_blank" class="btn">Register to Arena Islamabad</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="button-container desktop-left">
                                <a style="text-transform: capitalize;margin-bottom: 10px;" type="button" href="http://lhr.thearena.com.pk/ArenaERP/Customers/CustomerRegistration.aspx?CType=Customer" target="_blank" class="btn">Register to Arena Lahore</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr style=" border: 2px solid #eee;">
        <div class="lightgrey_bg">
            <div class="row">
                <div class="col-md-12" style="padding-left: 20px;padding-right: 20px;padding-top: 40px;">
                    <div class="col-md-12">
                        <h2 class="main_heading">Member <span>Privilege</span> </h2>
                        <p style="line-height: 2;">The Arena also provides Membership for their customers. Membership card holder will avail number of benefits from The Arena. Members get discount offers at The Arena Cinema. Members can avail benefits like free ticket every Wednesday on buying a ticket by a friend or family, on-line ticket purchase, queue free Members ticketing counter, weekly movie schedule via email and Daily movie schedule via SMS, renewal reward, invitations on special screening, prepaid system-pay, and get special discount on our international and national branding partners which includes:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lightgrey_bg">
            <div class="row">
                <div class="col-md-12 " style="padding-left: 20px;padding-right: 20px;padding-top: 40px;">
                    <div class="col-md-12">
                        <h2 class="main_heading">Our <span>Partners</span> </h2>
                        <div class="col-md-12 our-partners">
                            <div class="col-md-6 left-partner">
                                <div class="col-md-5">
                                    <img src="arena_images/OPTP 2.png" style="width: 100%"/>
                                </div>
                                <div class="col-md-7">
                                    <h4 style="color: #333">One Potato Two Potato</h4>
                                    <p>5% off on all deals </p>
                                    <p><i class="fa fa-home"></i> M. M. Alam Rd, Lahore</p>
                                    <p><i class="fa fa-phone"></i> 0333 8116561 </p>
                                </div>
                            </div>
                            <div class="col-md-6 right-partner">
                                <div class="col-md-5">
                                    <img src="arena_images/The Hot Spot.png" style="width: 100%"/>
                                </div>
                                <div class="col-md-7">
                                    <h4 style="color: #333">The Hot Spot</h4>
                                    <p>10% off on all deals </p>
                                    <p><i class="fa fa-home"></i> HQ 8. Street 13. Islamabad</p>
                                    <p><i class="fa fa-phone"></i> (051) 2610841 </p>
                                </div>
                            </div>
                            <div class="col-md-6 left-partner">
                                <div class="col-md-5">
                                    <img src="arena_images/Pangaea.png" style="width: 100%"/>
                                </div>
                                <div class="col-md-7">
                                    <h4 style="color: #333">Pangaea Restaurant</h4>
                                    <p>15% off on all deals  </p>
                                    <p><i class="fa fa-home"></i> 18 Margalla Ave, Islamabad</p>
                                    <p><i class="fa fa-phone"></i> (051) 8311065 </p>
                                </div>
                            </div>
                            <div class="col-md-6 right-partner">
                                <div class="col-md-5">
                                    <img src="arena_images/Wang Fu.png" style="width: 100%"/>
                                </div>
                                <div class="col-md-7">
                                    <h4 style="color: #333">Wang Fu</h4>
                                    <p>15% off on all deals </p>
                                    <p><i class="fa fa-home"></i> 18 Margalla Ave, Islamabad</p>
                                    <p><i class="fa fa-phone"></i> (051) 8311065 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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



<!-- Modal -->
<div id="registerModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content" style="margin-top: 120px">
            <div class="modal-header" style="background:#f73a4c;color:white;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
                <div class="radio">
                    <label><input type="radio" name="optradio" value="http://lhr.thearena.com.pk/ArenaERP/Customers/CustomerRegistration.aspx?CType=Customer" checked>Lahore</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="http://isb.thearena.com.pk/ArenaERP/Customers/CustomerRegistration.aspx?CType=Customer">Islamabad</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background:#f73a4c;color:white;" data-dismiss="modal" onclick="register()">Submit</button>
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


    function register(){
        window.open( $('[name=optradio]:checked').val() );
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

        $('a[data-slide="prev"]').click(function (event) {
            $('#myCarousel').carousel('prev');
            event.preventDefault();
        });

        $('a[data-slide="next"]').click(function (event) {
            $('#myCarousel').carousel('next');
            event.preventDefault();
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