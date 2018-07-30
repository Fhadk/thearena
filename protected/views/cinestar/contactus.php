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
        .map-content p{
            font-size: 16px;
            color: #4b4b4b;
        }
        .map-content i{
            color: #c50505;
            font-size: 18px;
            padding-right: 10px;
        }
        .form input{
            width: 90%;
            border-radius: 0px;
            background: transparent;
        }
        .form textarea{
            width: 95%;
            border-radius: 0px;
            background: transparent;
        }
        .box_shadow_container button{
            border: 0px solid #fff;
            padding: 16px 35px;
            text-align: center;
            text-transform: uppercase;
            border-radius: 50px;
            font-size: 16px;
            color: white !important;
            background: #f73a4c;
            margin-right: 5px;
            text-transform: capitalize
        }
        .footer_sec button{
            background: #808080 !important;
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
                    <li class=""><a href="<?php echo Yii::app()->request->baseUrl ?>">Home</a></li>
                    <li><a href="dinein">Food & Drinks</a></li>
                    <li><a href="membership"> Membership </a></li>
                    <li ><a href="newsevents"> News & Events </a></li>
                    <li class="dropdown open">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Company <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li ><a href="aboutus">About Us</a></li>
                            <li class="active"><a href="contactus">Contact Us</a></li>
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
                <div class="banner_bg1" style="background:url('arena_images/Banners/Contact.png') no-repeat;background-size:cover;background-position:center;">
                    <div class="banner_text">
                        <h1>Get in Touch</h1>
                        <p style="padding-left: 15%;padding-right: 15%;">Interested in working with us? Let us know a bit about yourself and your project. We’ll review and get in touch to schedule a time to chat.</p>
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
                    <section class="showing_theater">
                        <h2 class="main_heading">Choose <span>Cinema</span></h2>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Islamabad</a></li>
                            <li><a data-toggle="tab" href="#menu1">Lahore</a></li>
                            <li><a data-toggle="tab" href="#menu2">Karachi</a></li>
                        </ul>

                        <div class="tab-content map-content" style="margin-top:40px;">
                            <div id="home" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><i class="fa fa-home"></i> The Arena-Road A, Phase IV, Bahria Town, Islamabad, Pakistan</p>
                                        <p><i class="fa fa-globe"></i> www.thearena.com.pk</p>
                                        <p><i class="fa fa-envelope"></i> Info@thearena.com.pk</p>
                                        <p><i class="fa fa-envelope"></i> membership@thearena.com.pk</p>
                                        <p><i class="fa fa-envelope"></i> career@thearena.com.pk</p>
                                        <p><i class="fa fa-phone"></i> +92 51 5731901-2-3</p>
                                        <p><i class="fa fa-phone"></i> +92 51 1111-(ARENA) (27362)</p>
                                    </div>
                                    <div class="col-md-8">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.1895067261134!2d73.12949871520183!3d33.54845228074605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5ddd56cd41eddcb!2sThe+Arena!5e0!3m2!1sen!2sus!4v1508049205485" style="height: 450px;width:100%;" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><i class="fa fa-home"></i> Phase 1 Bahria Orchard Raiwind Road, Lahore, Pakistan</p>
                                        <p><i class="fa fa-globe"></i> www.thearena.com.pk</p>
                                        <p><i class="fa fa-envelope"></i> Info@thearena.com.pk</p>
                                        <p><i class="fa fa-envelope"></i> membership@thearena.com.pk</p>
                                        <p><i class="fa fa-envelope"></i> career@thearena.com.pk</p>
                                        <p><i class="fa fa-phone"></i> +92 42 35451541-4</p>
                                        <p><i class="fa fa-phone"></i> 0320-6333377 </p>
                                    </div>
                                    <div class="col-md-8">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.3405761616423!2d74.2180953151457!3d31.321966131435694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ebfda231d903f37!2sThe+Arena%2C+Pakistan!5e0!3m2!1sen!2sus!4v1508049528134" style="height: 450px;width:100%;" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Not Found.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <hr style=" border: 2px solid #eee;">
        <div class="lightgrey_bg">
            <div class="row">
                <div class="col-md-12" style="padding-left: 20px;padding-right: 20px;padding-top: 40px;">
                    <div class="col-md-4">
                        <h2 class="main_heading">Follow<span> Us</span> </h2>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row col-md-12" style="margin-bottom: 10px;">
                                <a href="https://www.facebook.com/thearenabt">
                                    <div class="col-md-4">
                                        <img src="arena_images/Contact Social Media Icons/Contact-Facebook-C.png"/>
                                    </div>
                                    <div class="col-md-8">
                                        <p style="line-height: 3">Facebook</p>
                                    </div>
                                </a>
                            </div>
                            <div class="row col-md-12" style="margin-bottom: 10px;">
                                <a href="https://twitter.com/arena_cinema">
                                    <div class="col-md-4">
                                        <img src="arena_images/Contact Social Media Icons/Contact-Twitter-C.png"/>
                                    </div>
                                    <div class="col-md-8">
                                        <p style="line-height: 3">Twitter</p>
                                    </div>
                                </a>
                            </div>
                            <div class="row col-md-12" style="margin-bottom: 10px;">
                                <a href="https://www.instagram.com/thearenabt">
                                    <div class="col-md-4">
                                        <img src="arena_images/Contact Social Media Icons/Contact-Instagram-C.png"/>
                                    </div>
                                    <div class="col-md-8">
                                        <p style="line-height: 3">Instagram</p>
                                    </div>
                                </a>
                            </div>
                            <div class="row col-md-12" style="margin-bottom: 10px;">
                                <a>
                                    <div class="col-md-4">
                                        <img src="arena_images/Contact Social Media Icons/Contact-Youtube-C.png"/>
                                    </div>
                                    <div class="col-md-8">
                                        <p style="line-height: 3">Youtube</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h2 class="main_heading">Feed<span>back</span> </h2>

                        <form class="form contact-form" >
                            <div class="row col-md-12" style="margin-bottom: 10px;">
                                <div class="col-md-6" style="padding: 0px;">
                                    <label>Name:</label>
                                    <input type="text"
                                           data-name="name"
                                           data-validation-error="Name cannot be less than 2 characters."
                                           data-regex-pattern="^.{2,}$"
                                           class="jquery-validation form-control"
                                           type="text"
                                           name="name"
                                           id="name"/>
                                </div>
                                <div class="col-md-6" style="padding: 0px;">
                                    <label>E-mail:</label>
                                    <input type="text"
                                           data-name="email"
                                           data-validation-error="Email is invalid"
                                           data-regex-pattern='^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'
                                           class="jquery-validation form-control"
                                           type="text"
                                           name="email"
                                           id="email"/>
                                </div>
                            </div>
                            <div class="row col-md-12" style="margin-bottom: 10px;">
                                <div class="col-md-6" style="padding: 0px;">
                                    <label>Phone:</label>
                                    <input type="text"
                                           data-name="phone"
                                           data-validation-error="Phone no is invalid."
                                           data-regex-pattern="^.{9,}$"
                                           class="jquery-validation form-control"
                                           type="text"
                                           name="contactno"
                                           id="contactno"/>
                                </div>
                                <div class="col-md-6" style="padding: 0px;">
                                    <label>Subject:</label>
                                    <input type="text"
                                           data-name="subject"
                                           data-validation-error="Subject cannot be less than 2 characters."
                                           data-regex-pattern="^.{2,}$"
                                           class="jquery-validation form-control"
                                           type="text"
                                           name="subject"
                                           id="subject"/>
                                </div>
                            </div>
                            <div class="row col-md-12" style="margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <label>Message:</label>
                                    <textarea rows="5"
                                              data-name="message"
                                              data-validation-error="Message cannot be less than 10 characters."
                                              data-regex-pattern="^.{10,}$"
                                              style="background: #fff;margin-bottom: 20px;"
                                              class="jquery-validation form-control"
                                              type="text"
                                              name="txt"
                                              id="txt"></textarea>
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <div class="button-container text-center">
                                    <button style="text-transform: capitalize" type="button" class="btn js-contact-submit">Submit</button>
                                </div>
                            </div>
                        </form>
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


    $('.js-contact-submit').on('click',function () {
        name = $('input[name=name]').val();
        email = $('input[name=email]').val();
        contactno = $('input[name=contactno]').val();
        subject = $('input[name=subject]').val();
        txt = $('textarea[name=txt]').val();
        if(formValidation('.contact-form')) {
            contacturl = base_url + "/index.php/cinestar/ContactForm?name=" + name + "&contactno=" + contactno + "&email=" + email + "&subject=" + subject + "&txt=" + txt;
            $.ajax({
                url: contacturl, success: function (result) {
                    alert("Your query have been mailed.");
                    $('input[name=name]').val('');
                    $('input[name=email]').val('');
                    $('input[name=contactno]').val('');
                    $('input[name=subject]').val('');
                    $('textarea[name=txt]').val('');
                }
            });
        }
    });

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


    function bookticket(){
        window.location.href = $('[name=optradio]').val();
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