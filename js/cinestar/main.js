/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 /**
                                * resize and center the images
                                */
                                function resizeCenterImage($image){
                                    var theImage 	= new Image();
                                    theImage.src 	= $image.attr("src");
                                    var imgwidth 	= theImage.width;
                                    var imgheight 	= theImage.height;
                                    
                                    var containerwidth  = 460;
                                    var containerheight = 330;
                                    
                                    if(imgwidth	> containerwidth){
                                        var newwidth = containerwidth;
                                        var ratio = imgwidth / containerwidth;
                                        var newheight = imgheight / ratio;
                                        if(newheight > containerheight){
                                            var newnewheight = containerheight;
                                            var newratio = newheight/containerheight;
                                            var newnewwidth =newwidth/newratio;
                                            theImage.width = newnewwidth;
                                            theImage.height= newnewheight;
                                        }
                                        else{
                                            theImage.width = newwidth;
                                            theImage.height= newheight;
                                        }
                                    }
                                    else if(imgheight > containerheight){
                                        var newheight = containerheight;
                                        var ratio = imgheight / containerheight;
                                        var newwidth = imgwidth / ratio;
                                        if(newwidth > containerwidth){
                                            var newnewwidth = containerwidth;
                                            var newratio = newwidth/containerwidth;
                                            var newnewheight =newheight/newratio;
                                            theImage.height = newnewheight;
                                            theImage.width= newnewwidth;
                                        }
                                        else{
                                            theImage.width = newwidth;
                                            theImage.height= newheight;
                                        }
                                    }
                                    $image.css({
                                        'width'			:theImage.width,
                                        'height'		:theImage.height,
                                        'margin-top'	:-(theImage.height/2)-10+'px',
                                        'margin-left'	:-(theImage.width/2)-10+'px'	
                                    });
                                }
                                /////////////////////////////

setInterval(function() {
						$(function() {
							//custom animations to use
							//in the transitions
							var animations		= ['right','left'];
							var total_anim		= animations.length;
							//just change this to one of your choice
							var easeType		= 'swing';
							//the speed of each transition
							var animSpeed		= 3000;
							//caching
							var $hs_container	= $('#hs_container');
							var $hs_areas		= $hs_container.find('.hs_area');
							
							//first preload all images
							var hs_images          = $hs_container.find('img');
							var total_images    = hs_images.length;
							var cnt             = 0;
							hs_images.each(function(){
								var $this = $(this);
								$('<img/>').load(function(){
									++cnt;
									if(cnt == total_images){
										$hs_areas.each(function(){
											var $area 		= $(this);
											//when the mouse enters the area we animate the current
											//image (random animation from array animations),
											//so that the next one gets visible.
											//"over" is a flag indicating if we can animate 
											//an area or not (we don't want 2 animations 
											//at the same time for each area)
											//$area.data('over',true).bind('mouseenter',function(){
											
												//if($area.data('over')){
													//$area.data('over',false);
													//how many images in this area?
								var total		= $area.children().length;
						//visible image
					var $current 	= $area.find('img:visible');
						//index of visible image
						var idx_current = $current.index();
						//the next image that's going to be displayed.
						//either the next one, or the first one if the current is the last
			var $next		= (idx_current == total-1) ? $area.children(':first') : $current.next();
				//show next one (not yet visible)
				$next.show();
	//get a random animation
		var anim		= animations[Math.floor(Math.random()*total_anim)];
			switch(anim){
			//current slides out from the right
						case 'right':
			$current.animate({
			'left':$current.width()+'px'
	},
					animSpeed,
					easeType,
				function(){
$current.hide().css({
						'z-index'	: '1',
						'left'		: '0px'
                                                
									});
								$next.css('z-index','9999');
									$area.data('over',true);
											});
										break;
									//current slides out from the left
										case 'left':
											$current.animate({
										'left':-$current.width()+'px'
												},
											animSpeed,
											easeType,
										function(){
										$current.hide().css({
												'z-index'	: '1',
												'left'		: '0px'
                                                                                                
														});
											$next.css('z-index','9999');
											$area.data('over',true);
											});
												break;
										//current slides out from the top	
											case 'top':
											$current.animate({
											'top':-$current.height()+'px'
													},
											animSpeed,
											easeType,
											function(){
												$current.hide().css({
													'z-index'	: '1',
													'top'		: '0px'
													});
												$next.css('z-index','9999');
													$area.data('over',true);
													});
														break;
											//current slides out from the bottom	
												case 'bottom':
										$current.animate({
											'top':$current.height()+'px'
													},
											animSpeed,
											easeType,
											function(){
											$current.hide().css({
												'z-index'	: '1',
												'top'		: '0px'
													});
											$next.css('z-index','9999');
												$area.data('over',true);
											});
												break;
										//current slides out from the right	and fades out
											case 'rightFade':
												$current.animate({
											'left':$current.width()+'px',
												'opacity':'0'
												},
											animSpeed,
											easeType,
											function(){
											$current.hide().css({
											'z-index'	: '1',
					   					         'left'		: '0px',
											'opacity'	: '1'
											});
											$next.css('z-index','9999');
											$area.data('over',true);
											});
												break;
										//current slides out from the left and fades out	
										case 'leftFade':
											$current.animate({
										'left':-$current.width()+'px','opacity':'0'
													},
												animSpeed,
												easeType,
											function(){
											$current.hide().css({
											'z-index'	: '1',
											'left'		: '0px',
											'opacity'	: '1'
												});
											$next.css('z-index','9999');
										$area.data('over',true);
											});
												break;
											//current slides out from the top and fades out	
											case 'topFade':
											$current.animate({
												'top':-$current.height()+'px',
												'opacity':'0'
													},
													animSpeed,
													easeType,
													function(){
													$current.hide().css({
													'z-index'	: '1',
													'top'		: '0px',
													'opacity'	: '1'
													});
													$next.css('z-index','9999');
													$area.data('over',true);
												});
													break;
										//current slides out from the bottom and fades out	
												case 'bottomFade':
													$current.animate({
													'top':$current.height()+'px',
														'opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
												$current.hide().css({
												'z-index'	: '1',
												'top'		: '0px',
												'opacity'	: '1'
													});
												$next.css('z-index','9999');
												$area.data('over',true);
												});
													break;		
												default:
												$current.animate({
													'left':-$current.width()+'px'
													},
													animSpeed,
													easeType,
													function(){
													$current.hide().css({
														'z-index'	: '1',
														'left'		: '0px'
													});
												$next.css('z-index','9999');
												$area.data('over',true);
													});
													break;
											}	
											//}////
										//});
									});
										

					//when clicking the hs_container all areas get slided
					//(just for fun...you would probably want to enter the site
				//or something similar)
							$hs_container.bind('click',function(){
								$hs_areas.trigger('mouseenter');
								});
							}
						}).attr('src',$this.attr('src'));
					});			
							
					});
					}, 8000);
							
                             /////////////////////////////////
       'use strict';
// blank image data-uri bypasses webkit log warning (thx doug jones)
	var BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

// agar movie deactivate ho gaye hay ya delete ho jaye what i have to do then about the shotimes ?
var cellText = [];

$(document).on('click', '.complaints', function (e) {
  $('#somedialogcomp').addClass('dialog--open');
    
});
$(document).on('click', '.suggestions', function (e) {
  $('#somedialogsugg').addClass('dialog--open');
    
});
$(document).on('click', '.booknowjs', function (e) {
  $('#dialogbooknow_id').addClass('dialog--open');
//       $('#somedialogsms').removeClass('dialog--close');
      
    
});
$(document).on('click', '.weeklyclose', function (e) {

       $('#somedialogsugg').removeClass('dialog--open');
       $('#somedialogcomp').removeClass('dialog--open');
      

    
});
$(document).on('click', '.weeklyclosebooknow', function (e) {

       $('#dialogbooknow_id').removeClass('dialog--open');
      

    
});

$(document).on('click', '.members-area-dialogue', function (e) {
    
         $('#membersareadialogue').css('z-index', 999);
        e.preventDefault();
    
});

$(document).on('click', '.online-booking-dialogue', function (e) {
    
         $('#onlinebookingdialogue').css('z-index', 999);
        e.preventDefault();
    
});

$(document).on('click', '.sms-alert', function (e) {
  $('#somedialogsms').addClass('dialog--open');
       $('#somedialogsms').removeClass('dialog--close');
      
         $('.msgdiv').html('');
         $("input[name=contacttxt]").val('');
    

   
});

$(document).on('click', '.smsalertbtn ', function (e) {
     
    //$('.smsalertbtn').attr(' data-dialog-close');
//    $('#somedialogsms.dialog').removeClass('dialog--open');


   
   
     var contactno =$("input[name=contacttxt]").val();
    var location =$("#subscribeLocation").val();
     
    
  
        var filter = /^[0-9-+. ]+$/;
        if (filter.test(contactno) && contactno!='' && contactno.length ==11 &&contactno.charAt(0)=='0') {
            if($('.dialog--open').length){
                $('#somedialogsms.dialog').removeClass('dialog--open');
            }else{
                 $('#somedialogsms.dialog').removeClass('dialog--close');
            }
            
        }
        else {
            //$('.msgdiv').html('Please enter the correct phone number. (eg: 0300 1234567)');
            return false;
        }
     var subscribe = $(this).attr('id');
 

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#Smsalertpopup').data('smsalertpopup')+'?subscribe='+subscribe+'&contactno='+contactno+'&location='+location,
        dataType: 'html',
        
        success  : function(data) {
             //$('#somedialogsms.dialog').removeClass('dialog--close');
             $("input[name=contacttxt]").val('');
             $('#somedialogsms.dialog').removeClass('dialog--open');
            if($.trim(data)!=""){
               
               
                        
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '#join', function (e) {

    $("#home").removeClass('menu_selected');
  $.ajax({
    type:'GET',
    url      : $('#JoinPage').data('joinpage'),
    data:'',
    success: function(data){
        
               $('.aboutus').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').html('');
               $('.tabwarpper').removeClass('tabwarpper');
               $('.gallery_bottom').html('');
               $('.gallery_bottom').removeClass('gallery_bottom');
               $('.coming_soon_top').html('');
               $('.coming_soon_top').removeClass('coming_soon_top');
               $('.sliderright').empty('');
               $('.sliderright').removeClass('sliderright');
               $('.dayswrapper').html('');
               $('.now_showing').html('');
               $('.coming_soon_outer').html('');
               $('.coming_soon_outer').removeClass('coming_soon_outer');
               $(".hero").css("height", "auto");
               $('.coming_soon_outer').removeClass( "coming_soon_outer" )
               $('.now_showing').removeClass( "now_showing" )
               $('.aboutus').removeClass('slider');
               $('.aboutus').html(data);
    }
});
        e.preventDefault();

    
});

$(document).on('click', '#lhr_membership', function (e) {

    $("#home").removeClass('menu_selected');
    $.ajax({
        type:'GET',
        url      : $('#LhrMembership').data('lhrmember'),
        data:'',
        success: function(data){

            $('.aboutus').empty();
            $('.nowshowing').empty();
            $('.hideinfo').empty();
            $('.tabwarpper').html('');
            $('.tabwarpper').removeClass('tabwarpper');
            $('.gallery_bottom').html('');
            $('.gallery_bottom').removeClass('gallery_bottom');
            $('.coming_soon_top').html('');
            $('.coming_soon_top').removeClass('coming_soon_top');
            $('.sliderright').empty('');
            $('.sliderright').removeClass('sliderright');
            $('.dayswrapper').html('');
            $('.now_showing').html('');
            $('.coming_soon_outer').html('');
            $('.coming_soon_outer').removeClass('coming_soon_outer');
            $(".hero").css("height", "auto");
            $('.coming_soon_outer').removeClass( "coming_soon_outer" )
            $('.now_showing').removeClass( "now_showing" )
            $('.aboutus').removeClass('slider');
            $('.aboutus').html(data);
        }
    });
    e.preventDefault();


});

$(document).on('click', '#lhr_ticket', function (e) {

    $("#home").removeClass('menu_selected');
    $.ajax({
        type:'GET',
        url      : $('#LhrTicket').data('lhrticket'),
        data:'',
        success: function(data){

            $('.aboutus').empty();
            $('.nowshowing').empty();
            $('.hideinfo').empty();
            $('.tabwarpper').html('');
            $('.tabwarpper').removeClass('tabwarpper');
            $('.gallery_bottom').html('');
            $('.gallery_bottom').removeClass('gallery_bottom');
            $('.coming_soon_top').html('');
            $('.coming_soon_top').removeClass('coming_soon_top');
            $('.sliderright').empty('');
            $('.sliderright').removeClass('sliderright');
            $('.dayswrapper').html('');
            $('.now_showing').html('');
            $('.coming_soon_outer').html('');
            $('.coming_soon_outer').removeClass('coming_soon_outer');
            $(".hero").css("height", "auto");
            $('.coming_soon_outer').removeClass( "coming_soon_outer" )
            $('.now_showing').removeClass( "now_showing" )
            $('.aboutus').removeClass('slider');
            $('.aboutus').html(data);
        }
    });
    e.preventDefault();


});

$(document).on('click', '#membersarealink', function (e) {

    $("#home").removeClass('menu_selected');
  $.ajax({
    type:'GET',
    url      : $('#MemberPage').data('memberpage'),
    data:'',
    success: function(data){
        
               $('.aboutus').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').html('');
               $('.tabwarpper').removeClass('tabwarpper');
               $('.gallery_bottom').html('');
               $('.gallery_bottom').removeClass('gallery_bottom');
               $('.coming_soon_top').html('');
               $('.coming_soon_top').removeClass('coming_soon_top');
               $('.sliderright').empty('');
               $('.sliderright').removeClass('sliderright');
               $('.dayswrapper').html('');
               $('.now_showing').html('');
               $('.coming_soon_outer').html('');
               $('.coming_soon_outer').removeClass('coming_soon_outer');
               $(".hero").css("height", "auto");
               $('.coming_soon_outer').removeClass( "coming_soon_outer" )
               $('.now_showing').removeClass( "now_showing" )
               $('.aboutus').removeClass('slider');
               $('.aboutus').html(data);
    }
});
        e.preventDefault();

    
});

$(document).on('click', '#corporatelink', function (e) {
   
  $.ajax({
    type:'GET',
    url      : $('#CorporatePage').data('corporatepage'),
    data:'',
    success: function(data){
        
               $('.aboutus').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').html('');
               $('.tabwarpper').removeClass('tabwarpper');
               $('.gallery_bottom').removeClass('gallery_bottom');
               $('.coming_soon_top').removeClass('coming_soon_top');
               $('.sliderright').empty('');
               $('.sliderright').removeClass('sliderright');
               $('.dayswrapper').html('');
               $('.now_showing').html('');
               $('.coming_soon_outer').html('');
               $('.coming_soon_top').html('');
               $('.gallery_bottom').html('');
               $(".hero").css("height", "auto");
               $('.coming_soon_outer').removeClass( "coming_soon_outer" )
               $('.now_showing').removeClass( "now_showing" )
               $('.aboutus').removeClass('slider');
               $('.aboutus').html(data);
    }
});
        e.preventDefault();

    
});

$(document).on('click', '#weeklyview ', function (e) {

    e.preventDefault();
    
        var locationCombo=$('#locationid').val();
        var locationid =$('#locationid option:selected').attr('status');
        var locationname=$('#locationid').val();
        if(locationCombo=="All Locations"){
        locationname =$('.tab-selected').text();
        locationid = $('.tab-selected').data('locationid');
}else{
        locationname =$('.tab-selected').text();
        locationid = $('.tab-selected').data('locationid');
}
        
        var moviename =$(this).attr("data-moviename");
        
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#WeeklyView').data('weekly')+'?locationame='+locationid+'&moviename='+moviename,
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){
                var mostTDs = 0;
               $('.weeklytable').html('');
               $('.weeklytable').html(data);
               
               $('.weeklytable tr').each(function() {
                var thisTDs = $(this).find('td').length;
                if(thisTDs > mostTDs)
                    mostTDs = thisTDs;
            });

            $('.weeklytable tr').each(function() {
                var thisTDs = $(this).find('td').length;
                for(var i = thisTDs; i < mostTDs; i++) {
                    $('<td/>').html('&nbsp;').appendTo($(this));
                }
            });
           
               $('td:contains("Sunday")').parent('tr').addClass('disabled');
                $("tr th:contains('Sunday')").each(function(){
                      $(this).parent('tr').addClass('bluebg');
                });
               $('.weeklyheading').html('Weekly Schedule <span class="popupheadingweekly"> '+moviename+' ('+locationname+')</span>');
                        
            }
        }
    });
     e.preventDefault();
});

//$(document).ready(function() {
//  
//});

//$(function() {
//        var limit = 30;
//        var chars = $(".divcharaterlimit").text(); 
//        if (chars.length > limit) {
//            var visiblePart = $("<span> "+ chars.substr(0, limit-1) +"</span>");
//            var dots = $("<span class='dots'>... </span>");
//            var hiddenPart = $("<span class='more'>"+ chars.substr(limit-1) +"</span>");
//            var readMore = $("<span class='read-more'>Read More</span>");
//            readMore.click(function() {
//                $(this).prev().remove(); // remove dots
//                $(this).next().show();
//                $(this).remove(); // remove 'read more'
//            });
//
//            $(".divcharaterlimit").empty()
//                .append(visiblePart)
//                .append(dots)
//                .append(readMore)
//                .append(hiddenPart);
//        }
//    });
$(document).on('click', '#smsbtn', function (e) {
    
    var phonenum=$('.smsinput').val();
    
  
    var filter = /^[0-9-+. ]+$/;
    if (filter.test(phonenum) && phonenum!='') {
        e.preventDefault();
    }
    else {
        
        $('.msgdiv').html('Must enter the correct phone number.');
        return false;
    }
    
  
  $.ajax({
    type:'GET',
    url      : $('#sms').data('smsalert') + '?smsnum=' + phonenum,
    data:'',
    success: function(data){
       
            $('.msgdiv').html('Mail has been sent.');
    }
});
        e.preventDefault();
});

$(document).on('click', '#contactuscinestar', function (e) {
    $("#home").removeClass('menu_selected');
//    $('#contactusopera').addClass('link-active')
//    $('#home').removeClass('link-active');
//    $('#home').addClass('link');
//    $('#galleryopera').removeClass('link-active')
  $.ajax({
    type:'GET',
    url      : $('#ContactUS').data('contactus'),
    data:'',
    success: function(data){
        
               $('.aboutus').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').html('');
               $('.tabwarpper').removeClass('tabwarpper');
               $('.gallery_bottom').html('');
               $('.gallery_bottom').removeClass('gallery_bottom');
               $('.coming_soon_top').html('');
               $('.coming_soon_top').removeClass('coming_soon_top');
               $('.sliderright').empty('');
               $('.sliderright').removeClass('sliderright');
               $('.dayswrapper').html('');
               $('.now_showing').html('');
               $('.coming_soon_outer').html('');
               $('.coming_soon_outer').removeClass('coming_soon_outer');
               $(".hero").css("height", "auto");
               $('.coming_soon_outer').removeClass( "coming_soon_outer" )
               $('.now_showing').removeClass( "now_showing" )
               $('.aboutus').removeClass('slider');
               $('.aboutus').html(data);
    }
});
        e.preventDefault();
});

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

$(document).on('click', '#contactusform', function(e) {

    var suggestiontype = $('#seggestiontype').val();
    var contactname = $("#contactname").val();
    var contactemail = $("#contactemail").val();
    var contactmsg = $("#contactmsg").val();
    var contactmobile = $("#contactmobile").val();
    
    
    var filter = /^[0-9-+. ]+$/;
    var regex = new RegExp("^[a-zA-Z ]+$");
    
    if(contactname==''){
        $('.errormsg').html('Please enter your name.');
        return false;
    }else
    
    if( !isValidEmailAddress( contactemail ) ) { 
        $('.errormsg').html('Please enter the correct email adress hint(sample@gmail.com).');
        return false;
    }else
    
     
    
    if (filter.test(contactmobile) && contactmobile!='') {
        e.preventDefault();
    }
    else {
        
        $('.errormsg').html('Please enter the correct phone number.');
        return false;
    }
    
    
    
    $.ajax({
        type: 'POST',
        url: $('#cont').data('con') + '?suggestiontype=' + suggestiontype + '&contactname=' + contactname + '&contactemail=' + contactemail + '&contactmobile=' + contactmobile + '&contactmsg=' + contactmsg,
        data: '',
        success: function(data) {
            $("#contactname").val('');
            $("#contactemail").val('');
            $("#contactmobile").val('');
            $("#contactmsg").val('');
            $('.errormsg').html('');
            $('#error').html('Mail has been sent.');
        }
    });
    e.preventDefault();
});

$(document).on('click', '#home', function (e) {
    console.log("home click");
    $("#home").addClass('menu_selected');
});

$(document).on('click', '#galleryid', function (e) {
   var albumname= $(this).attr('name');
  $.ajax({
    type:'GET',
    url      : $('#GalleryViewer').data('galleryviewer')+'?foldername='+albumname,
    data:'',
    success: function(data){
        
               $('.aboutus').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').html('');
               $('.tabwarpper').removeClass('tabwarpper');
               $('.gallery_bottom').html('');
               $('.gallery_bottom').removeClass('gallery_bottom');
               $('.coming_soon_top').html('');
               $('.coming_soon_top').removeClass('coming_soon_top');
               $('.sliderright').empty('');
               $('.sliderright').removeClass('sliderright');
               $('.dayswrapper').html('');
               $('.now_showing').html('');
               $('.coming_soon_outer').html('');
               $('.coming_soon_outer').removeClass('coming_soon_outer');
               $(".hero").css("height", "auto");
               $('.coming_soon_outer').removeClass( "coming_soon_outer" )
               $('.now_showing').removeClass( "now_showing" )
               $('.aboutus').removeClass('slider');
               $('.aboutus').html(data);
    }
});
        e.preventDefault();

    
});

$(document).on('click', '#dineIn', function (e) {

    $("#home").removeClass('menu_selected');

    $.ajax({
        type:'GET',
        url : $('#DINEIN').data('dinein'),
        data:'',
        success: function(data){
            $('.aboutus').empty();
            $('.nowshowing').empty();
            $('.hideinfo').empty();
            $('.tabwarpper').html('');
            $('.tabwarpper').removeClass('tabwarpper');
            $('.gallery_bottom').html('');
            $('.gallery_bottom').removeClass('gallery_bottom');
            $('.coming_soon_top').html('');
            $('.coming_soon_top').removeClass('coming_soon_top');
            $('.sliderright').empty('');
            $('.sliderright').removeClass('sliderright');
            $('.dayswrapper').html('');
            $('.now_showing').html('');
            $('.coming_soon_outer').html('');
            $('.coming_soon_outer').removeClass('coming_soon_outer');
            $(".hero").css("height", "auto");
            $('.coming_soon_outer').removeClass( "coming_soon_outer" )
            $('.now_showing').removeClass( "now_showing" )
            $('.aboutus').removeClass('slider');
            $('.aboutus').html(data);
        }
    });
    e.preventDefault();

});
$(document).on('click', '#showtiming', function (e) {

    $("#home").removeClass('menu_selected');

    $.ajax({
        type:'GET',
        url : $('#ShowTiming').data('showtiming'),
        data:'',
        success: function(data){
            $('.aboutus').empty();
            $('.nowshowing').empty();
            $('.hideinfo').empty();
            $('.tabwarpper').html('');
            $('.tabwarpper').removeClass('tabwarpper');
            $('.gallery_bottom').html('');
            $('.gallery_bottom').removeClass('gallery_bottom');
            $('.coming_soon_top').html('');
            $('.coming_soon_top').removeClass('coming_soon_top');
            $('.sliderright').empty('');
            $('.sliderright').removeClass('sliderright');
            $('.dayswrapper').html('');
            $('.now_showing').html('');
            $('.coming_soon_outer').html('');
            $('.coming_soon_outer').removeClass('coming_soon_outer');
            $(".hero").css("height", "auto");
            $('.coming_soon_outer').removeClass( "coming_soon_outer" )
            $('.now_showing').removeClass( "now_showing" )
            $('.aboutus').removeClass('slider');
            $('.aboutus').html(data);
        }
    });
    e.preventDefault();

});

$(document).on('click', '#gallerycinestar', function (e) {

    $("#home").removeClass('menu_selected');
  $.ajax({
    type:'GET',
    url      : $('#GalleryFolder').data('galleryfolder'),
    data:'',
    success: function(data){
        
               $('.aboutus').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').html('');
               $('.tabwarpper').removeClass('tabwarpper');
               $('.gallery_bottom').html('');
               $('.gallery_bottom').removeClass('gallery_bottom');
               $('.coming_soon_top').html('');
               $('.coming_soon_top').removeClass('coming_soon_top');
               $('.sliderright').empty('');
               $('.sliderright').removeClass('sliderright');
               $('.dayswrapper').html('');
               $('.now_showing').html('');
               $('.coming_soon_outer').html('');
               $('.coming_soon_outer').removeClass('coming_soon_outer');
               $(".hero").css("height", "auto");
               $('.coming_soon_outer').removeClass( "coming_soon_outer" )
               $('.now_showing').removeClass( "now_showing" )
               $('.aboutus').removeClass('slider');
               $('.aboutus').html(data);
    }
});
        e.preventDefault();

    
});

$(document).on('click', '.sliderupdate', function (e) {
    var exsist=HasDupe();
    if(exsist==true){
        e.preventDefault();
        alert("Duplicate slider sequence exsist.");
    }
    
});

$(document).on('click', '#updatelbtn', function (e) {

  var password1 = $("#password1").val();
  var password2 = $("#password2").val();
   if($("#oldpas").val()==''){
         $("#error").text("Old password field is empty.");
         e.preventDefault();
  }
  if($("#username").val()==''){
         $("#error").text("Please enter the valid username.");
         e.preventDefault();
  }
  if($("#password1").val()=='' && $("#password2").val()==''){
         $("#error").text("Please enter change password fields");
         e.preventDefault();
  }else{
       if(password1 == password2  ) {
          $('#updateform').submit();    
    }
    else {
        $("#error").text("Please enter the matched password.");  
        e.preventDefault();
    }
      
  }
    
});

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

$(document).on('click', '#forgotbtn', function (e) {


 
  if($("#username").val()==''){
         $("#error").text("Please enter the valid username.");
         e.preventDefault();
  }
  if(!isValidEmailAddress($("#email").val())){
         $("#error").text("Please enter change password fields");
         e.preventDefault();
  }else{
      
    
      
  }
    
});

$(document).on('click', '#suggestionbtn ', function (e) {
    
    e.preventDefault();
var suggestionnametxt=$("input[name=suggestionnametxt]").val();
var suggestionemailtxt=$("input[name=suggestionemailtxt]").val();
var suggestionnumbertxt=$("input[name=suggestionnumbertxt]").val();
var suggestionLocation=$("#suggestionLocation").val();
var suggestionmsgtxt=$("textarea[name=suggestionmsgtxt]").val();

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#Suggestionpopup').data('suggestionpopup')+'?suggestionnametxt='+suggestionnametxt+'&suggestionemailtxt='+suggestionemailtxt+'?suggestionnumbertxt='+suggestionnumbertxt+'&suggestionmsgtxt='+suggestionmsgtxt+'&suggestionlocation='+suggestionLocation,
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){
               
               
                        
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '.feedbackclose', function (e) {
   
  //  $('#somedialogsms').removeClass('dialog--close')
   // $('#somedialogsms').addClass('dialog--open')
});

$(document).on('click', '#complainbtn ', function (e) {
   $('#somedialogcomp').hide(400);
    e.preventDefault();
    var complainnametxt =$("input[name=complainnametxt]").val();
     var complainemailtxt =$("input[name=complainemailtxt]").val();
     var complaincontacttxt =$("input[name=complaincontacttxt]").val();
     var complainLocation =$("#complainLocation").val();
     var complainmsgtxt =$("textarea[name=complainmsgtxt]").val();
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#Complainpopup').data('complainpopup')+'?complainnametxt='+complainnametxt+'&complainemailtxt='+complainemailtxt+'&complaincontacttxt='+complaincontacttxt+'&complainmsgtxt='+complainmsgtxt+'&complainlocation='+complainLocation,
        dataType: 'html',
        success  : function(data) {
            $('#somedialogsms').hide(400);
            if($.trim(data)!=""){
                
               
               
                        
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '#aboutus ', function (e) {

    $("#home").removeClass('menu_selected');
    e.preventDefault();

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#AboutUs').data('aboutus'),
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){

               $('.aboutus').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').html('');
               $('.tabwarpper').removeClass('tabwarpper');
               $('.gallery_bottom').html('');
               $('.gallery_bottom').removeClass('gallery_bottom');
               $('.coming_soon_top').html('');
               $('.coming_soon_top').removeClass('coming_soon_top');
               $('.sliderright').empty('');
               $('.sliderright').removeClass('sliderright');
               $('.dayswrapper').html('');
               $('.now_showing').html('');
               $('.coming_soon_outer').html('');
               $('.coming_soon_outer').removeClass('coming_soon_outer');
               $(".hero").css("height", "auto");
               $('.coming_soon_outer').removeClass( "coming_soon_outer" )
               $('.now_showing').removeClass( "now_showing" )
               $('.aboutus').removeClass('slider');
               $('.aboutus').html(data);
                        
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '#contactus ', function (e) {
    e.preventDefault();

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#ConatctUs').data('contactus'),
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){
               
               $('.contactuspage').empty();
               $('.wrapper').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').empty();
               $('.dayswarpper').empty();
               $('.now_showing').empty();
               $('.contactuspage').removeClass('slider');
               $('.contactuspage').html(data);
                        
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '#careers ', function (e) {
   
    $("#home").removeClass('menu_selected');
    e.preventDefault();

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#Careers').data('careers'),
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){
               
               $('.contactuspage').empty();
               $('.wrapper').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').empty();
               $('.dayswarpper').empty();
               $('.now_showing').empty();
               $('.contactuspage').removeClass('slider');
               $('.contactuspage').html(data);
                        
            }
        }
    });
     e.preventDefault();
});
$(document).on('click', '#faqs ', function (e) {
   
    $("#home").removeClass('menu_selected');
    e.preventDefault();

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#FAQS').data('faqs'),
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){
               
               $('.contactuspage').empty();
               $('.wrapper').empty();
               $('.nowshowing').empty();
               $('.hideinfo').empty();
               $('.tabwarpper').empty();
               $('.dayswarpper').empty();
               $('.now_showing').empty();
               $('.contactuspage').removeClass('slider');
               $('.contactuspage').html(data);
                        
            }
        }
    });
     e.preventDefault();
});

function getDetail(id){

    var movie_id = $(id).attr('pk');
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#MovieDetail').data('detail'),
        dataType: 'html',
        data    : {'movie_id':movie_id},
        success  : function(response) {

            if($.trim(response)!=""){

                $('.contactuspage').empty();
                $('.wrapper').empty();
                $('.nowshowing').empty();
                $('.hideinfo').empty();
                $('.tabwarpper').empty();
                $('.dayswarpper').empty();
                $('.now_showing').empty();
                $('.contactuspage').removeClass('slider');
                $('.aboutus').html(response);

            }
        }
    });
}


$(document).on('click', '#detail', function (e) {


    e.preventDefault();

    var movie_id = $(this).attr('pk');

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#MovieDetail').data('detail'),
        dataType: 'html',
        data    : {'movie_id':movie_id},
        success  : function(response) {

            if($.trim(response)!=""){

                $('.contactuspage').empty();
                $('.wrapper').empty();
                $('.nowshowing').empty();
                $('.hideinfo').empty();
                $('.tabwarpper').empty();
                $('.dayswarpper').empty();
                $('.now_showing').empty();
                $('.contactuspage').removeClass('slider');
                $('.aboutus').html(response);

            }
        }
    });
    e.preventDefault();
});

$(document).ready( function() {
    
        // When site loaded, load the Popupbox First
       
    
        $('.main').click( function() { 
            if(!$('.popupdropdown')){
                
            unloadPopupBox();
        }
        });
        
        $('#container').click( function() {
            unloadPopupBox();
        });

        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#popup_box').fadeOut("slow");
            $("#container").css({ // this is just for style        
                "opacity": "1"  
            }); 
        }    
        
        function loadPopupBox() {    // To Load the Popupbox
            $('#popup_box').fadeIn("slow");
            $("#container").css({ // this is just for style
                "opacity": "0.3"  
            });         
        }   
        
        
        $(document).on('click', '.weeklyopera ', function (e) {

            alert("in weeklyopea");
            $('#popup_box').show();
     loadPopupBox();
    e.preventDefault();
    
         
        var locationid = 1;
        
        
   
      
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#WeeklyView').data('weekly')+'?locationid='+locationid,
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){
                var mostTDs = 0;
               $('.weeklytable').html('');
               $('.weeklytable').html(data);
               
               $('.weeklytable tr').each(function() {
                var thisTDs = $(this).find('td').length;
                if(thisTDs > mostTDs)
                    mostTDs = thisTDs;
            });

            $('.weeklytable tr').each(function() {
                var thisTDs = $(this).find('td').length;
                for(var i = thisTDs; i < mostTDs; i++) {
                    $('<td/>').html('&nbsp;').appendTo($(this));
                }
            });
           
               $('td:contains("Sunday")').parent('tr').addClass('disabled');
                $("tr th:contains('Sunday')").each(function(){
                      $(this).parent('tr').addClass('bluebg');
                });
                $('#dialog').dialog('open');
                       
            }
        }
    });
     e.preventDefault();
});
        
    });

$('#open').click(function() {
    

});

//jQuery(document).ready(function() {
//    jQuery("#dialog").dialog({
//        autoOpen: false,
//        modal: true,
//        open: function(){
//            jQuery('.ui-widget-overlay').bind('click',function(){
//                jQuery('#dialog').dialog('close');
//            })
//        }
//    });
//}); 

$(document).on('click', '#tabs ', function (e) {
    
    e.preventDefault();
//        return 0;
        var locationid =$(this).attr('name');
        $('.tab-selected').addClass('removetab');
        $(this).addClass('removetab');
        $('.removetab').removeClass('tab-selected');
        $(this).addClass('tab-selected');
        var  calenerdate=$('.day-selected').attr('name');
        var movienameCombo=$("#moviename").val();
        var locationCombo=$("#locationid").val();
//        $("#moviename").val($("#moviename option:first").val());
//        $("#locationid").val($("#locationid option:first").val());
        if(movienameCombo=='All Movies'){
            movienameCombo='All Movies';
        }else{
            movienameCombo='All Movies';
        }
       
        if(locationCombo=='All Locations'){
            locationCombo=$(this).attr('name');
        }

    var screen = $('#lounge').attr('name');
    if(screen == 'red'){
        screen = 2;
    }else{
        screen = 1;
    }

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#SearchMovie').data('search')+'?locationame='+locationid+'&calenerdate='+calenerdate+'&moviename='+movienameCombo+'&tabs=tabs'+'&screen='+screen,
        dataType: 'html',
        success  : function(data) {
            
            if($.trim(data)!=""){
                
               $('#renderhtmloftabs').html('');
               $('#renderhtmloftabs').html(data);
                        
            }else{
                
                $('#renderhtmloftabs').html("<div class='col-md-12 noresults'>Sorry, there is no movie found in current selection.</div>");
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '#searchedtabs ', function (e) {
    
    e.preventDefault();
    
         
        var  calenerdate=$('.day-selected').attr('name');
        var movienameCombo=$('#moviename').val();
        var locationCombo=$('#locationid').val();
        if(movienameCombo=='Select'){
            movienameCombo;
        }
        if(locationCombo=='Select'){
            locationCombo
        }

    var screen = $('#lounge').attr('name');
    if(screen == 'red'){
        screen = 2;
    }else{
        screen = 1;
    }


    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#SearchMovie').data('search')+'?moviename='+movienameCombo+'&locationame='+locationCombo+'&calenerdate='+calenerdate+'&screen='+screen,
        dataType: 'html',
        success  : function(data) {
            if($.trim(data)!=""){
               $('#renderhtmloftabs').html('');
               $('#renderhtmloftabs').html(data);
                        
            }else{
                $('#renderhtmloftabs').html("<div class='col-md-12 noresults'>Sorry, there is no movie found in current selection.</div>");
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '#widgetdate ', function (e) {
    e.preventDefault();
         $('.day-selected').addClass('day');
         $('.day-selected').addClass('day1');
         $('.day1').removeClass('day-selected');
         $(this).removeClass('day');
         $(this).addClass('day-selected');
        var calenerdate=$(this).attr('name');
        var movienameCombo=$('#moviename').val();
        var locationCombo=$('#locationid').val();
        if(locationCombo=='' || locationCombo=='All Locations'){
            locationCombo=$('.tab-selected').text();
        }
        if(movienameCombo=='All Movies'){
            movienameCombo;
        }else{
            movienameCombo='All Movies'
        }
        if(locationCombo=='All Locations'){
            locationCombo
        }else{
            locationCombo = $('.tab-selected').text()
        }

    var screen = $('.selected').attr('name');
    if(screen == 'red'){
        screen = 2;
    }else{
        screen = 1;
    }

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#SearchMovie').data('search')+'?moviename='+movienameCombo+'&locationame='+locationCombo+'&calenerdate='+calenerdate+'&screen='+screen,
        dataType: 'html',
        success  : function(data) {

            if($.trim(data)!=""){
               //$('#renderhtmloftabs').html('');
               $('#now_showing').html('');
               //$('#renderhtmloftabs').html(data);
               $('#now_showing').html(data);

            }else{
                $('#now_showing').html("<div class='col-md-12 noresults'>Sorry, there is no movie found in current selection.</div>");
            }
        }
    });
     e.preventDefault();
});

$(document).on('click', '#lounge ', function (e) {
    e.preventDefault();

    var lounge = $(this).attr('name');
    var remove= '';
    var screen = '';
    if(lounge == 'gold'){
        remove = 'red';
        screen = 1;
    }else{
        remove = 'gold';
        screen = 2;
    }

    $('.lounge').removeClass(remove+'_lounge_selected');
    $('.lounge').removeClass('selected');

    $(this).addClass(lounge+'_lounge_selected');
    $(this).addClass('selected');


    var movienameCombo=$('#moviename').val();
    if(movienameCombo=='All Movies'){
        movienameCombo;
    }else{
        movienameCombo='All Movies'
    }

    var calenerdate=$('.day-selected').attr('name');
    var locationCombo=$('#locationid').val();
    locationCombo = $('.tab-selected').text()

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#SearchMovie').data('search')+'?moviename='+movienameCombo+'&locationame='+locationCombo+'&calenerdate='+calenerdate+'&screen='+screen,
        dataType: 'html',
        success  : function(data) {

            if($.trim(data)!=""){
                //$('#renderhtmloftabs').html('');
                $('#now_showing').html('');
                //$('#renderhtmloftabs').html(data);
                $('#now_showing').html(data);

            }else{
                $('#now_showing').html("<div class='col-md-12 noresults'>Sorry, there is no movie found in current selection.</div>");
            }
        }
    });
    e.preventDefault();
});

$(document).on('click', '#searchmovie', function () {

    var lounge = $('#lounge').attr('name');
    var screen = '';
    if(lounge == 'gold'){
        screen = 1;
    }else{
        screen = 2;
    }

        var calenerdate=$('.day-selected').attr('name');
        var movienameCombo=$('#moviename').val();
        var locationCombo=$('#locationid').val();
var flag =false;
        if(movienameCombo=='All Movies'){
            movienameCombo;
        }
        if(locationCombo=='All Locations'){
            locationCombo=$('.tab-selected').attr('name');
flag =true;
        }
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#SearchMovie').data('search')+'?moviename='+movienameCombo+'&locationame='+locationCombo+'&calenerdate='+calenerdate+'&screen='+screen,
        dataType: 'html',
        success  : function(data) {
            if(locationCombo!='All Locations' && flag !=true){
                $('.tabwarpper').hide();
            }else{
               $('.tabwarpper').show(); 
            }
            if($.trim(data)!=""){
               $('#renderhtmloftabs').html('');
               $('#renderhtmloftabs').html(data);
                        
            }else{
                
                $('#renderhtmloftabs').html("<div class='col-md-12 noresults'>Sorry, there is no movie found in current selection.</div>");
            }
        }
    });
});

$(document).on('click', '#addmoviebtn', function (e) {

    if ($('#status').val()==0&&$('#rating').val()==''&&$('#moviename').val()==''&&$('#moviedetail').val()==''){
        $('#error').text('please enter the required fields');
         e.preventDefault();
    }


});

$(document).on('click', '#loginbtn', function (e) {
 
    if ($('#username').val()==''){
        $('#error').show();
         e.preventDefault();
    }else
    if ($('#password').val()==''){
        $('#error').show();
         e.preventDefault();
    }

});

$(document).on('change', '#inactivity', function (e) {
    

    $('#activate').submit();
    

});

$(document).on('click', '#deactivatebtn', function(e) {

        e.preventDefault();
    var checkstr = confirm('Now showing movie list Deactivate button ("Deactivate movie will turn off this movie from main slider. Are you sure you want to deactivate this movie?")');
    if (checkstr == true) {
        var rowid = $(this).closest('tr').attr('id');
        
        var xhr = $.ajax({
            type: "POST",
            cache: false,
            url: $('#Inactivity').data('inactivity') + '?inactivity=' + '0' + '&rowid=' + rowid,
            dataType: 'text',
            success: function(data) {
                if ($.trim(data) != "") {
                    
                    if (data.toLowerCase().indexOf("false") >= 0) {
                        $('#' + rowid + ' td:nth-child(4)').html('<td class="center">       Inactive   <button id="activebtn" class="small">Activate</button></td>');

                    } else {
                        alert('unable to delete the record');
                    }

                }
            }
        });
    } else {
        return false;
    }
    

});

$(document).on('click', '#activebtn', function (e) {
    
    
    

    //    //        e.preventDefault();
        var rowid=$(this).closest('tr').attr('id');
         
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#Inactivity').data('inactivity')+'?inactivity='+'1'+'&rowid='+rowid,
        dataType: 'text',
      
        
        success  : function(data) {
            if($.trim(data)!=""){
                
                if(data.toLowerCase().indexOf("true") >= 0){
                     $('#'+rowid+' td:nth-child(4)').html('<td class="center">       Activate   <button  id="deactivatebtn" class="small green">Deactivate</button></td>');
                  
                }else{
                    alert('unable to delete the record');
                }
            	 
            }
        }
    });
    e.preventDefault();

});

$(document).on('click', '#editbtn1', function (e) {
    
    
    

    //    //        e.preventDefault();
        var rowid=$(this).closest('tr').attr('id');
         
        $('#hiddenrowid').val(rowid);
        

});

$(document).on('click', '#editupcoming', function (e) {
    
    
    

    //    //        e.preventDefault();
        var rowid=$(this).closest('tr').attr('id');
         
        $('#hiddenrowid').val(rowid);

});

$(document).on('click', '#editbrandpartner', function (e) {
    var rowid=$(this).closest('tr').attr('id');
    $('#hiddenrowid').val(rowid);

});



$(document).on('click', '#deleteupcoming', function (e) {
    
    //        e.preventDefault();
        var deleteid=$(this).closest('tr').attr('id');
        var locationid=$('#locationid').val();
         
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#DeleteRow').data('deleterow')+'?rowid='+deleteid+'&locationid='+locationid,
        dataType: 'text',
        data: {"deletion":deleteid},
        data     : {},
        success  : function(data) {
            if($.trim(data)!=""){
                
                if(data.toLowerCase().indexOf("true") >= 0){
                  $('#'+deleteid).remove();  
                }else{
                    alert('unable to delete the record');
                }
            	 
            }
        }
    });
    e.preventDefault();
});

$(document).on('click', '#deletebrandpartner', function (e) {

    var deleteid=$(this).closest('tr').attr('id');

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#DeleteRow').data('deleterow')+'?rowid='+deleteid,
        dataType: 'text',
        data: {"deletion":deleteid},
        data     : {},
        success  : function(data) {
            if($.trim(data)!=""){

                if(data.toLowerCase().indexOf("true") >= 0){
                    $('#'+deleteid).remove();
                }else{
                    alert('unable to delete the record');
                }

            }
        }
    });
    e.preventDefault();
});



$(document).on('click', '#deleterow', function (e) {
    
      var checkstr =  confirm('Are you sure you want to delete?');
            if(checkstr == true){
              // do your code
            
    
    //        e.preventDefault();
        var deleteid=$(this).closest('tr').attr('id');
         
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#DeleteRow').data('deleterow')+'?delettion='+deleteid,
        dataType: 'text',
        data:{"deletion":deleteid},
        data     : {
        },
        
        success  : function(data) {
            if($.trim(data)!=""){
               
                if(data.toLowerCase().indexOf("true") >= 0){
                  $('#'+deleteid).remove();  
                }else{
                    alert('unable to delete the record');
                }
            	 
            }
        }
    });
    }else{
            return false;
            }
    e.preventDefault();
});
$(document).on('click', '#deletebtn', function (e) {
    
    //        e.preventDefault();
        var deleteid=$(this).closest('tr').attr('id');
        var moviename=$('#'+deleteid+' td:nth-child(2)').find('h5').html();
        
          var checkstr =  confirm("Are you sure you want to delete this movie? Delete will also remove all the schedule (show times on all locations) againest this movie.");
            if(checkstr == true){
         
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#DeleteRow').data('deleterow')+'?rowid='+deleteid+'&moviename='+moviename,
        dataType: 'text',
        data:{"deletion":deleteid},
        /*data     : {
        },*/
        
        success  : function(data) {
            if($.trim(data)!=""){
                
                if(data.toLowerCase().indexOf("true") >= 0){
                  $('#'+deleteid).remove();  
                }else{
                    alert('unable to delete the record');
                }
            	 
            }
        }
    });
            }else{
                return false;
            }
    e.preventDefault();
});
$(document).on('change', '.datepickersub', function (e) {
    
    $('#newrow').submit();// form id 
        
         
   
    
});
$(document).on('click', '.copyschedule', function (e) {
    $('#newrow1').submit();// form id
});

$(document).on('click', '#editbtn', function (e) {
     
     cellText = [];
    var editrow=$(this).closest('tr').attr('id');
    $('#'+editrow+' td').each(function() {
     cellText.push($(this).html());
});         
            
       
    var moviename= $('#' + editrow + ' td:first').text() ;
    var movieday= $('#' + editrow + ' td:nth-child(2)').text() ;
    var moviedate= $('#' + editrow + ' td:nth-child(3)').text() ;
    
             
$(document).on('click', '#editdata', function (e) {
        
    var editrowid=$(this).closest('tr').attr('id');
    //             $(this).children('.saveshowtimecombo').find("input.member_nm").val($(this).val());
    var $row =  $('#'+editrowid);
    var moviecombo     = $row.find('#saveshowtimecombo').val();
    var dayscombo      = $row.find('#daysname').val();
    var griddatepicker = $row.find('#griddatepicker').val();
    var timefromgrid   = $row.find('#text2').val();
    var showorder      = $row.find('#showorder').val();
    var screen         = $row.find('#screen').val();
    var locationid     = $('#locationid').val();

    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#EditRow').data('editrow')+'?editrowid='+editrowid+'&moviecombo='+moviecombo+'&dayscombo='+dayscombo+'&griddatepicker='+griddatepicker+'&timefromgrid='+timefromgrid+'&locationid='+locationid+'&showorder='+showorder+'&screen='+screen+'',
        dataType: 'text',
        success  : function(data) {
            if($.trim(data)!=""){
              $row.html('<td>'+moviecombo+'</td><td>'+dayscombo+'</td><td>'+griddatepicker+'</td><td>'+timefromgrid+'</td><td>'+showorder+'</td><td>'+screen+'</td><td class="center"><button id="editbtn" class="small blue">Edit</button><button id="deleterow" class="small red">Delete</button></td>');
            }	
        }
    });
    
    e.preventDefault();
    
});
/*$(document).on('click', '#editdata', function (e) {
        
             var editrowid=$(this).closest('tr').attr('id');
//             $(this).children('.saveshowtimecombo').find("input.member_nm").val($(this).val());
               
             var moviecombo= $('#'+editrowid).find('#saveshowtimecombo').val();
             var dayscombo=$('#'+editrowid).find('#daysname').val();
             var griddatepicker=$('#'+editrowid).find('#griddatepicker').val();
             var timefromgrid=$('#'+editrowid).find('#text2').val();
             var locationid=$('#locationid').val();
             
         
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#EditRow').data('editrow')+'?editrowid='+editrowid+'&moviecombo='+moviecombo+'&dayscombo='+dayscombo+'&griddatepicker='+griddatepicker+'&timefromgrid='+timefromgrid+'&locationid='+locationid+'',
        dataType: 'text',
        
       
        
        success  : function(data) {
            if($.trim(data)!=""){
                
                
                    
                   $('#'+editrowid).html('<td>'+moviecombo+'</td><td>'+dayscombo+'</td><td>'+griddatepicker+'</td><td>'+timefromgrid+'</td><td class="center"><button id="editbtn" class="small blue">Edit</button><button id="deleterow" class="small red">Delete</button></td>');

                  
                
            }	
        }
    });
    
    e.preventDefault();
    
});*/
    var location  = getUrlParameter('locationid');
  $('#'+editrow+' td:first').html('<select name="saveshowtimecombo" id="saveshowtimecombo" >\n\</select>');
  $('#'+editrow+' td:nth-child(3)').html('<input type="text" name="griddatepicker" value="'+cellText[2]+'" id="griddatepicker">');
  $('#'+editrow+' td:nth-child(4)').html('<input name="showtime" id="text2" value="'+cellText[3]+'" type="text" placeholder="Time" class="timeinput" />');
  $('#'+editrow+' td:nth-child(2)').html('<select id="daysname" name="Todays_Day">\n\
<option value="Monday">Monday</option><option value="Tuesday">Tuesday</option> \n\
   <option value="Wednesday">Wednesday</option> <option value="Thursday">Thursday</option> \n\
<option value="Friday">Friday</option> <option value="Saturday">Saturday</option>  <option value="Sunday">Sunday</option></select>');
  //  if(location == 2 || location == 5){
        var _selectOpt ='<option checked value="1">1</option><option value="2">2</option>';
        $('#'+editrow+' td:nth-child(5)').html('<select name="showorder" id="showorder">'+_selectOpt+'</select>');
        $('#'+editrow+' td:nth-child(6)').html('<select name="screen" id="screen">'+_selectOpt+'</select>');
  //  }
  $('#'+editrow+' td:last').html('<button id="editdata" class="small green " >Save</button><button id="cancelsaving" class="small canceledit">Cancel</button>');
     var myArray =$("#moviedropdown option").map(function() {return $(this).val();}).get();
        for (var i=0;i<myArray.length;i++){
        $('#saveshowtimecombo').append(new Option(myArray[i], myArray[i]));
    }
    
       $('#'+editrow).find('#saveshowtimecombo').val(moviename);
            $('#'+editrow).find('#daysname').val(movieday);
             $('#'+editrow).find('#griddatepicker').val(moviedate);
//             $('#'+editrow).find('#text2').val(cellText[3]);
    //if (cellText[4] != ""){
        $('#'+editrow).find('#showorder').val(cellText[4]);
    //}
    //if (cellText[5] != ""){
        $('#'+editrow).find('#screen').val(cellText[5]);
   // }



     $("#griddatepicker").datepicker({dateFormat: 'M dd, yy'});
        $('#text2').timepicker({
            'timeFormat': 'h:i:s A',
            'step': function(i) {
                return (i % 2) ? 15 : 15;
            }
        });
        
        $(document).on('click', '.canceledit', function (e) {
    var editrow=$(this).closest('tr').attr('id');
    
     $('#'+editrow+' td:first').html(cellText[0]);
  $('#'+editrow+' td:nth-child(3)').html(cellText[2]);
  $('#'+editrow+' td:nth-child(4)').html(cellText[3]);
  $('#'+editrow+' td:nth-child(5)').html(cellText[4]);
  $('#'+editrow+' td:nth-child(6)').html(cellText[5]);
  $('#'+editrow+' td:nth-child(7)').html("<button id='editbtn' class='small blue'>Edit</button>	<button id='deleterow' class='small red'>Delete</button>");
  $('#'+editrow+' td:nth-child(2)').html(cellText[1]);
  
    e.preventDefault();
});

    //        e.preventDefault();
    
//        var editrow=$(this).closest('tr').attr('id');
//         
//    var xhr =  $.ajax({
//        type     : "POST",
//        cache    : false,
//        url      : $('#EditRow').data('editrow')+'?editrow='+editrow,
//        dataType: 'text',
//        data:{"deletion":deleteid},
//        data     : {
//        },
//        
//        success  : function(data) {
//            if($.trim(data)!=""){
//                alert(data)
//                if(data.toLowerCase().indexOf("true") >= 0){
//                  $('#'+deleteid).remove();  
//                }else{
//                    alert('unable to delete the record');
//                }
//            	 
//            }
//        }
//    });


    e.preventDefault();
});

$(document).ready(function() {
//    $("#password2").keyup(validate);
//    $(document).on('click', '.datepickersearch ', function (e) {





$(document).on('click', '#savefoldername', function (e) {

               
      var foldername= $('#foldername').val();
      if(foldername==''){
          
          $('#error').html('Please enter the folder name.');
      }
      
      var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#CreateFolder').data('createfolder')+'?foldername='+foldername,
        dataType: 'text',
        
       
        
        success  : function(data) {
           
            
                
                
                   
                   $('#newrowinsert').html('<td><a href="/opera/index.php/Admin/GalleryViewer?foldername='+data+'">'+data+'</a></td><td class="center"><button id="deletefolder" class="small red">Delete</button></td>'); 
                   $('#newrowinsert').attr('id', data);
                  
                
           
        }
    });
    
    e.preventDefault();
    
});
$(document).on('click', '#deletefolder', function (e) {

        var checkstr =  confirm('Are you sure you want to delete the folder ?');
            if(checkstr == true){         
      var foldername= $(this).closest('tr').attr('id');
      
      
      var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#DeleteFolder').data('deletefolder')+'?foldername='+foldername,
        dataType: 'text',
        
       
        
        success  : function(data) {
           $('#'+foldername).remove();
            	
        }
    });
            }else{
                return false;
            }
    e.preventDefault();
    
});
$(document).on('click', '#deleteimage', function (e) {

        var checkstr =  confirm('Are you sure you want to delete the folder ?');
            if(checkstr == true){         
      var imagename= $(this).closest('tr').attr('id');
      var result=imagename.split('.');
      
      var foldername= $('#foldername').val();
      $('.'+result[0]).remove();
      
      var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#DeleteFile').data('deletefile')+'?imagename='+imagename+'&foldername='+foldername,
        dataType: 'text',
        
       
        
        success  : function(data) {
           
            	
        }
    });
            }else{
                return false;
            }
    e.preventDefault();
    
});







$(document).on('focus', '#datepicker', function (e) {
    
        $('#datepicker').datepicker();
    });
$(document).on('focus', '#fromdatepicker', function (e) {
    
        $('#fromdatepicker').datepicker();
    });

   // $('#datepicker').datepicker();
//    });
    $("#tabs").addClass("tab-selected");
  	 
//        $("#deleterow").click(function(e){				
//		alert(123);
//        e.preventDefault();
//        var deleteid=$(this).closest('tr').attr('id');
//         alert(deleteid);
//    var xhr =  $.ajax({
//        type     : "POST",
//        cache    : false,
//        url      : $('#DeleteRow').data('deleterow'),
//        dataType: 'text',
//        data:{"deletion":deleteid},
//        data     : {
//        },
//        
//        success  : function(data) {
//            if($.trim(data)!=""){
//                alert(data);
//            	 
//            }
//        }
//    });
//    });

  
    
   
     
    
    $(".createfolder").on("click",function(e){
        
       if($('#foldername').length ){
            return false;
        }
       if($('#foldername').val()==''){
            alert('Please enter the folder name.')
        }
      
       $("#gridcinemax > tbody ").before('<tr id="newrowinsert"><td><input id="foldername" name="foldername" type="text" placeholder="Folder Name" />\n\
</td>\n\
<td class="center"><button id="savefoldername" class="small green" >Save</button><button id="cancelsaving" class="small">Cancel</button></td>\n\<td></td></tr>');
						
       e.preventDefault();
        });
    
    $(".addtime").on("click",function(e){
        var location  = getUrlParameter('locationid');
       if($('#saveshowtimecombo').length){
            return false;
        }
        var date1=$('#datepicker').val();
        
        var d =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][(new Date(date1)).getDay()];
        
        var html = '';
        html += '<tr><td><select name="saveshowtimecombo" id="saveshowtimecombo" ></select></td>';
        html += '<td><input id="daysname" name="Todays_Day" value="'+d+'"/></td>';
        html += '<td class="center">  <input type="text" name="griddatepicker" id="griddatepicker" value="'+date1+'"></td>';
        html += '<td class="center"><input name="showtime" id="text2" type="text" placeholder="Time" class="timeinput" /></td>';
        //if(location == 2 || location == 5){
            var _selectOpt ='<option value="1">1</option><option value="2">2</option>';
            html += '<td class="center"><select name="showorder" id="showorder">'+_selectOpt+'</select></td>';
            html += '<td class="center"><select name="screen" id="screen">'+_selectOpt+'</select></td>';
       // }
        html += '<td class="center"><button id="savedata" class="small green" >Save</button><button id="cancelsaving" class="small">Cancel</button></td>\n\<td></td></tr>';

        html += '';
        
       $("#gridcinemax > tbody  ").before(html);
						
						
	
        var myArray =$("#moviedropdown option").map(function() {return $(this).val();}).get();
        for (var i=0;i<myArray.length;i++){
        $('#saveshowtimecombo').append(new Option(myArray[i], myArray[i]));
    }
        
        $("#daysname").val(d);
       // $("#griddatepicker").datepicker({dateFormat: 'M dd, yy'});
        $('#text2').timepicker({
            'timeFormat': 'h:i:s A',
            'step': function(i) {
                return (i % 2) ? 15 : 15;
            }
        });
 $("#cancelsaving").on("click",function(e){				
		
        
        $(this).closest('tr').remove();
        e.preventDefault();
    });

    e.preventDefault();
});

 

});

$( document ).ajaxStop(function() {
//    $('#somedialogsms.dialog').removeClass('dialog--close');
  //$( "div" ).text( "Triggered ajaxStop handler.ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd" );
});
$( document ).ajaxStart(function() {
  //$( "div" ).text( "Triggered ajaxStop handler.ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd" );
});
function HasDupe(){
    var a = $('.sliderdropdown').map(function(i,o) {
        return $(o).val();
    });
    return (a.length != $.unique(a).length);
}

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}