<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="imgs/favicon.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:site_name" content="The Arena">
    <meta property="og:title" content="Get Arena Food & Drinks Deals">
    <meta property="og:description" content="With ham, eggs, cheese and arugula for perfect start of the dinner! only on RS. 422/-">
    <meta property="og:url" content="http://thearena.com.pk/sandbox/dinein">
    <meta property="og:image" content="http://thearena.com.pk/sandbox/cinestarimages/deal_img3.png">

    <meta name="theme-color" content="#247b8f">
    <title>Arena Food & Drinks</title>
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
        .box_shadow_container button{
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
        .owl-item{
            text-align: center !important;
        }
        .footer_sec button{
            background: #808080 !important;
        }
        .slick-slide {
            text-align: center;
        }
        .slick-list{
            background-color: transparent !important;
        }
        .slick-dots{
            position: absolute;
            top: 0px;
            text-align: right;
            right: 30px;
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


    <style>
        .menu-options{
            background: rgba(0,0,0,0.6);width: 100%;margin:0px;
        }
        .menu-options table{
            width: 100%;height: 150px;
        }
        .menu-options table td{
            text-align: center;
            cursor: pointer;
        }
        .menu-options table td p{
            margin-top: 10px;
            color:#808080;
        }
        .menu-options table td.active p{
            color:#fff;
        }
        .menu-options td img:nth-child(1){
            display: inline;
        }
        .menu-options td img:nth-child(2){
            display: none;
        }
        .menu-options td.active img:nth-child(1){
            display: none !important;
        }
        .menu-options td.active img:nth-child(2){
            display: inline !important;
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
                    <li class="active"><a href="dinein">Food & Drinks</a></li>
                    <li><a href="membership"> Membership </a></li>
                    <li ><a href="newsevents"> News & Events </a></li>
                    <li class="dropdown ">
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
            <div class="item active" data-slide-number="0">
                <div class="banner_bg1" style="background:url('arena_images/Banners/Food-drink.png') no-repeat;background-size:cover;background-position:center;">
                    <div class="banner_text">
                        <h1>Dine-In Full Service </h1>
                        <p style="padding-left: 15%;padding-right: 15%;"> The Arena DINE-IN features a full menu of fresh, handcrafted dishes to pair with your favorite drink. Your taste in movies is now tastier.</p>
                        <a target="_blank" href="pdf/menu.pdf" style="" type="button" class="btn">MENU</a>
                    </div>
                </div>
            </div>
        </div><!-- Carousel nav -->
    </div>

    <div style="position: absolute;bottom: 0px;width: 100%;" class="hidden-sm hidden-xs">
    <div class="container" style="padding: 0px;">
        <div class="row menu-options">
            <table>
                <tr>
                    <td class="active" data-category="1" data-name="Snacks">
                        <img style="margin-top: 10px;" src="arena_images/icons/Snacks-B.png"/>
                        <img style="margin-top: 10px;" src="arena_images/icons/Snacks-W.png"/>
                        <p>Snacks</p>
                    </td>
                    <td data-category="2" data-name="Drinks">
                        <img style="margin-top: 10px;" src="arena_images/icons/Drinks-B.png"/>
                        <img style="margin-top: 10px;" src="arena_images/icons/Drinks-W.png"/>
                        <p>Drinks</p>
                    </td>
                    <td data-category="3" data-name="Meals">
                        <img style="margin-top: 10px;" src="arena_images/icons/Meals-B.png"/>
                        <img style="margin-top: 10px;" src="arena_images/icons/Meals-W.png"/>
                        <p>Meals</p>
                    </td>
                    <td data-category="4" data-name="Treats">
                        <img style="margin-top: 10px;" src="arena_images/icons/Treats-B.png"/>
                        <img style="margin-top: 10px;" src="arena_images/icons/Treats-W.png"/>
                        <p>Treats</p>
                    </td>
                    <td data-category="5" data-name="Combo">
                        <img style="margin-top: 10px;" src="arena_images/icons/Combos-B.png"/>
                        <img style="margin-top: 10px;" src="arena_images/icons/Combos-W.png"/>
                        <p>Combo</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </div>
</div>


<!--SLIDER END-->
<div class="container" style="padding-left:0px;padding-right:0px;    margin-top: -10px;">

    <div class="box_shadow_container">
        <div class="lightgrey_bg">
            <div class="row">
                <div class="col-md-12" style="padding-left: 20px;padding-right: 20px;padding-top: 40px;">
                    <div class="col-md-8">
                        <h2 class="main_heading menu-text">Snacks<span></span> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="food" class="col-md-12" style="padding-left: 20px;padding-right: 20px;padding-top: 40px;">
                        <div id="owl-demo_dine_in">
                            <?php foreach ($dine_in as $dine) { ?>
                                <div class="item">
                                    <img src="<?php echo Yii::app()->getBaseUrl(true) . $dine['sliderpath']; ?>">
                                    <p style="text-align: center;padding-right: 15%;padding-left: 15%;margin-top: 20px;"><?php echo $dine['description']; ?> only on <span style="font-weight: bold;color:#c50505">RS. <?php echo $dine['price']; ?>/-</span></p>
                                </div>
                            <?php } ?>
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


    function bookticket(){
        window.location.href = $('[name=optradio]').val();
    }
    $(document).ready(function () {
        $(".youtube").colorbox({iframe: true, innerWidth: 640, innerHeight: 390});

    });

    $('.menu-options td').on('click', function () {
        $('.menu-options td').removeClass('active');
        $(this).addClass('active');

        var category = $(this).data('category');
        var name = $(this).data('name');
        $.get( base_url+"/cinestar/filterdinein?category="+category, function( data ) {
            debugger
            json = JSON.parse(data);

            $('.menu-text').text(name);

            var $owl = $('#owl-demo_dine_in');
            $owl.trigger('destroy.owl.carousel');
            $owl.html('');
            for(var i=0; i < json.length; i++){
                $owl.append(
                '<div class="item">' +
                '<img src="'+base_url+''+json[i].sliderpath+'"/>'+
                '<p style="text-align: center;padding-right: 15%;padding-left: 15%;margin-top: 20px;"> '+json[i].description+' just on <span style="font-weight: bold;color:#c50505">RS. '+json[i].price+'/-</span></p>' +
                '</div>');
            }
            $owl.removeClass('slick-initialized slick-slider slick-dotted');
            $owl.removeClass('owl-carousel owl-theme')
//            $owl.owlCarousel({
//                navigation: false,
//                pagination: true,
//                items: 3,
//                itemsDesktop: [1199, 3],
//                margin:10,
//                autoPlay:true,
//            });

            $owl.slick({
                slidesToShow: 3,
                dots: true,
                centerPadding: '60px',
                autoplay: true,
                margin: 10,
                autoplaySpeed: 7000,
                slidesToScroll: 1,
                prevArrow: "<i class='fa fa-chevron-left hidden' style='cursor:pointer;display: none;'></i>",
                nextArrow: "<i class='fa fa-chevron-right hidden' style='cursor:pointer;display: none;'></i>",
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            if(json.length == 0){
                $owl.html('No deals found.')
            }
        });
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
            items: 3,
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