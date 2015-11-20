/*
 * Copyright (c) 24/04/2013 ThemeMarket
 * Author: Azamat Umarov 
 * This file is made for SERENDIPITY
*/

	

// ----------------------------------------------------  CONTACT FORM
function submitForm(){
	"use strict";
	var msg;
	$.post('plugin/sendmail.php',$('#contactForm').serialize(), function(msg) {
		$(".alertMessage").html(msg);
	});
	// Hide previous response text
	$(msg).remove();
	// Show response message
	contactform.prepend(msg);
}

// -----------------------------------------------------  GALLERY SINGLE	
$(function($) {
	var $carousel = $('#carousel'),
		$pager = $('#pager');
	
	if($carousel){
		function getCenterThumb() {
			var $visible = $pager.triggerHandler( 'currentVisible' ),
				center = Math.floor($visible.length / 2);
			
			return center;
		}
	
		$carousel.carouFredSel({
			responsive: true,
			items: {
				visible: 1,
				width: 710,
				height: (400/710*100) + '%'
			},
			scroll: {
				fx: 'crossfade',
				easing : "linear", 
				duration : 1000,
				onBefore: function( data ) {
					var src = data.items.visible.first().attr( 'src' );
					src = src.split( '/large/' ).join( '/small/' );
	
					$pager.trigger( 'slideTo', [ 'img[src="'+ src +'"]', -getCenterThumb() ] );
					$pager.find( 'img' ).removeClass( 'selected' );
				},
				onAfter: function() {
					$pager.find( 'img' ).eq( getCenterThumb() ).addClass( 'selected' );
				}
			}
		});
		$pager.carouFredSel({
			width: '100%',
			auto: false,
			items: {
				visible: 'odd'
			},
			onCreate: function() {
				var center = getCenterThumb();
				$pager.trigger( 'slideTo', [ -center, { duration: 0 } ] );
				$pager.find( 'img' ).eq( center ).addClass( 'selected' );
			}
		});
		$pager.find( 'img' ).click(function() {
			var src = $(this).attr( 'src' );
			src = src.split( '/small/' ).join( '/large/' );
			$carousel.trigger( 'slideTo', [ 'img[src="'+ src +'"]' ] );
		});	
	}
	else{}

});

// ----------------------------------------------------  SUPER SIZED SLIDER
//$(function($){
//	"use strict";
//	
//	$.supersized({
//		slide_interval:5000,// Length between transitions
//		transition:1,// 0-None,1-Fade,2-Slide-Top,3-Slide-Right,4-Slide-Bottom,5-Slide-Left,6-Carousel-Right,7-Carousel Left
//		transition_speed:800,									   						
//		slide_links:'false',//Individual links for each slide (Options: false, 'num', 'name', 'blank')
//		slides:[{image:'img/shutterstock/9.jpg', title:'Image Credit: Colin Wojno'},
//				{image:'img/shutterstock/3.jpg', title:'Image Credit: Maria Kazvan'},
//				{image:'img/shutterstock/7.jpg', title:'Image Credit: Maria Kazvan'},  
//				{image:'img/shutterstock/8.jpg', title:'Image Credit: Maria Kazvan'},
//				{image:'img/shutterstock/10.jpg', title:'Image Credit: Colin Wojno'}]	
//	});
//});

// -----------------------------------------------------  HOVER EFFECT	
$(function() {
	"use strict";
	$(' .gallery-list > li ').each( function() { 
		$(this).hoverdir({
			hoverDelay : 75
		}); 
	});
	$(' #project-list > li ').each( function() { 
		$(this).hoverdir({
			hoverDelay : 75
		}); 
	});
	$(' #project2-list > li ').each( function() { 
		$(this).hoverdir({
			hoverDelay : 75
		}); 
	});
});	

// -----------------------------------------------------  VIDEO BACKGROUND	
$(function() {	

	$(window).resize(function () {
		window.win_w = $(window).width();
		window.win_h = $(window).height();
	});
	$(window).resize();
	function isiPhone(){
		return (
			(navigator.platform.indexOf("iPhone") != -1) ||
			(navigator.platform.indexOf("iPod") != -1)
		);
	}
	/* VIMEO BACKGROUND */
	if($("#video-vimeo").length){
		$("ul#supersized").css('visibility', 'hidden');
		$("#controls-wrapper").css('visibility', 'hidden');
		$(".mask").css('visibility', 'hidden');
		$("#footer").css('visibility', 'hidden');
	}
	
	/* SIMPLE VIDEO BACKGROUND */
	if($("#video-wrap").length){
		$("ul#supersized").css('display', 'none');
		$("ul#supersized").css('visibility', 'hidden');
		$("#controls-wrapper").css('display', 'none');
		$("#controls-wrapper").css('visibility', 'hidden');
		$(".mask").css('visibility', 'hidden');
		var deviceAgent = navigator.userAgent.toLowerCase();
		var agentID = deviceAgent.match(/(ipod|ipad)/);
		if (agentID) {
			jwplayer("video-wrap").setup({
				flashplayer: "media/player.swf",
				levels: [
					{file: "media/test.mp4"}
				],
				height: win_h-150,
				width: win_w,
				image: "img/shutterstock/3.jpg",
				'controlbar': 'none',
				'repeat': 'always',
				'autostart': 'true'
			});
			$('#video-wrap_wrapper, #video-wrap ').addClass('ipad');
		}
		else if(isiPhone()){
			jwplayer("video-wrap").setup({
				flashplayer: "media/player.swf",
				levels: [
				{file: "media/test.mp4"}
				],
				height: 740,
				width: win_w,
				image: "img/shutterstock/3.jpg",
				'controlbar': 'none',
				'repeat': 'always',
				'autostart': 'true'
			});
			$('#video-wrap_wrapper, #video-wrap ').addClass('ipad');
		}
		else {
			jwplayer("video-wrap").setup({
				flashplayer: "media/player.swf",
				file: "media/test.mp4",
				image: "img/shutterstock/3.jpg",
				'stretching': 'fill',
				'controlbar': 'none',
				icons:false,
				'repeat': 'always',
				height: win_h,
				width: win_w,
				'autostart': 'true'
			});
		}
	}
	
	/* YOUTUBE BACKGROUND */
	if($("#video-youtube").length){
		$("ul#supersized").css('display', 'none');
		$("ul#supersized").css('visibility', 'hidden');
		$("#controls-wrapper").css('display', 'none');
		$("#controls-wrapper").css('visibility', 'hidden');
		$(".mask").css('visibility', 'hidden');
		var deviceAgent = navigator.userAgent.toLowerCase();
		var agentID = deviceAgent.match(/(ipod|ipad)/);
		if (agentID) {
			jwplayer("video-youtube").setup({
				flashplayer: "media/player.swf",
				levels: [
					{file: "http://www.youtube.com/watch?v=6v2L2UGZJAM"}
				],
				height: win_h-150,
				width: win_w,
				image: "img/shutterstock/3.jpg",
				'controlbar': 'none',
				'repeat': 'always',
				'autostart': 'true'
			});
			$('#video-wrap_wrapper, #video-youtube ').addClass('ipad');
		}
		else if(isiPhone()){
			jwplayer("video-youtube").setup({
				flashplayer: "media/player.swf",
				levels: [
				{file: "http://www.youtube.com/watch?v=6v2L2UGZJAM"}
				],
				height: 740,
				width: win_w,
				image: "img/shutterstock/3.jpg",
				'controlbar': 'none',
				'repeat': 'always',
				'autostart': 'true'
			});
			$('#video-wrap_wrapper, #video-youtube ').addClass('ipad');
		}
		else {
			jwplayer("video-youtube").setup({
				flashplayer: "media/player.swf",
				file: "http://www.youtube.com/watch?v=6v2L2UGZJAM",
				image: "img/shutterstock/3.jpg",
				'stretching': 'fill',
				'controlbar': 'none',
				icons:false,
				'repeat': 'always',
				height: win_h,
				width: win_w,
				'autostart': 'true'
			});
		}
	}
});	

$(function(){
	// -----------------------------------------------------  FLEXSLIDER
	jQuery('.flexslider').flexslider({
		animation: 'fade',
		controlNav: false,
		slideshowSpeed: 4000,
		animationDuration: 300
	});	
})
	
$(document).ready(function($){
		
	"use strict";
	
	
	meTo();
	$(window).resize(function(e) {
       meTo();
    });

	function meTo(){
		var H = $(window).height(); 
		var getWrap = $('.body-wrapper');
		getWrap.css('min-height', H);
	}

// -----------------------------------------------------  UI ELEMENTS
	$( "#accordion" ).accordion({
		heightStyle: "content"
	});
	
	$( "#tabs" ).tabs();
	
	$("#tooltip").tooltip({
		position:{
			my: "center bottom-5",
			at: "center top"	
		}	
	});

// -----------------------------------------------------  PROGRESS BAR
	$('.percent p').fadeOut(400);
	function diagram(){
		$('.progress:in-viewport').each(function(){
			var progressBar = $(this),
			progressValue = progressBar.find('.percent').attr('data-value');
			if (!progressBar.hasClass('animated')) {
				progressBar.addClass('animated');
				progressBar.find('.percent').delay(500).animate({
					width: progressValue + "%"
				}, 1200, function() {
					progressBar.find('.percent p').fadeIn(400);
				});
			}
		});	
	}
	diagram();
	$(window).scroll(function() {
		diagram();
	});
// -----------------------------------------------------  CONTENT ANIMATIONS

	$('.sidebar').animate({right:-100+"px", opacity:0}, 1, function(){
		$('.sidebar').animate({right:0+"px", opacity:1}, 1400, "easeInOutBack");	
	});
	$('.main').animate({left:-100+"px", opacity:0}, 1, function(){
		$('.main').animate({left:0+"px", opacity:1}, 1400, "easeInOutBack");	
	});
	$('.contactcircle').animate({top:-100+"px", opacity:0}, 1, function(){
		$('.contactcircle').animate({top:0+"px", opacity:1}, 1400, "easeInOutBack");	
	});
	
	
	
// -----------------------------------------------------  NOTIFICATIONS CLOSER
	$('span.closer').click(function(e){
		e.preventDefault();
		$(this).parent('.notifications').stop().slideToggle(500);
	});

// -----------------------------------------------------  SCROLL TO TOP
	$("a[href='#top']").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

// -----------------------------------------------------  DEVICE MENU TOGGLE
	$('.menu-toggle a').click(function(e){
		e.preventDefault();
		$('.menu-device').stop().slideToggle(500);
	});
	
	$('.menu-device ul li a').bind('click',function(){
		$('.menu-device').stop().slideToggle(500);
	});

// -----------------------------------------------------  NAV SUB MENU(SUPERFISH)
	$('#nav ul.sf-menu').superfish({
		delay: 250,
		animation: {opacity:'show', height:'show'},
		speed: 'slow',
		autoArrows: true,
		dropShadows: false
	});

// -----------------------------------------------------  FANCYBOX	
	$('.fancybox').fancybox({
		resizeOnWindowResize: false	
	});



// -----------------------------------------------------  GALLERY ISOTOPE
	// Needed variables
	var $container = $(".gallery-list");
	var $filter = $(".gallery-filter");
		
	// Run Isotope  
	$container.isotope({
		filter				: '*',
		layoutMode   		: 'masonry',
		animationOptions	: {
		duration			: 750,
		easing				: 'linear'
	   }
	});	
	
	// Isotope Filter 
	$filter.find('a').click(function(){
	  var selector = $(this).attr('data-filter');
		$container.isotope({ 
		filter				: selector,
		animationOptions	: {
		duration			: 750,
		easing				: 'linear',
		queue				: false}
	  });
	  return false;
	});	
	
	// Copy categories to item classes
	$filter.find('a').click(function() {
		$filter.find('a').removeClass('current');
		$(this).addClass('current');
	});

// -----------------------------------------------------  PROJECT ISOTOPE
	// Needed variables
	var $container2 = $("#project-list");
	var $filter2 = $("#project-filter");
		
	// Run Isotope  
	$container2.isotope({
		filter				: '*',
		layoutMode   		: 'masonry',
		animationOptions	: {
		duration			: 750,
		easing				: 'linear'}
	});	
	
	// Isotope Filter 
	$filter2.find('a').click(function(){
	  var selector = $(this).attr('data-filter');
		$container2.isotope({ 
		filter				: selector,
		animationOptions	: {
		duration			: 750,
		easing				: 'linear',
		queue				: false}
	  });
	  return false;
	});	
	
	// Copy categories to item classes
	$filter2.find('a').click(function() {
		$filter2.find('a').removeClass('current');
		$(this).addClass('current');
	});

// -----------------------------------------------------  PROJECT 2 ISOTOPE
	// Needed variables
	var $container3 = $("#project2-list");
	var $filter3 = $("#project2-filter");
		
	// Run Isotope  
	$container3.isotope({
		filter				: '*',
		layoutMode   		: 'masonry',
		animationOptions	: {
		duration			: 750,
		easing				: 'linear'}
	});	
	
	// Isotope Filter 
	$filter3.find('a').click(function(){
	  var selector = $(this).attr('data-filter');
		$container3.isotope({ 
		filter				: selector,
		animationOptions	: {
		duration			: 750,
		easing				: 'linear',
		queue				: false}
	  });
	  return false;
	});	
	
	// Copy categories to item classes
	$filter3.find('a').click(function() {
		$filter3.find('a').removeClass('current');
		$(this).addClass('current');
	});

	
	
// -----------------------------------------------------  NICE SCROLL
	$("html").niceScroll({cursorborder:"",cursorcolor:"#353535"});

// -----------------------------------------------------  FLICKR FEED
	$('#basicuse').jflickrfeed({
		limit: 10,
		qstrings: {
			id: '52617155@N08'
		},
		itemTemplate: 
		'<li>' +
			'<a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}"  /></a>' +
		'</li>'
	});	

// -----------------------------------------------------  TWITTER FEED
	jQuery('#tweets').tweetable({
		username: 'envato', 
		time: true,
		rotate: false,
		speed: 4000, 
		limit: 3,
		replies: false,
		position: 'append',
		failed: "Sorry, twitter is currently unavailable for this user.",
		html5: true,
		onComplete:function($ul){
			jQuery('time').timeago();
		}
	});
	
// -----------------------------------------------------  TESTIMONIAL	
	$('.testimonial-wrapper').cycle({
		fx: 'fade',
		timeout:5000 
	});

// -----------------------------------------------------  TOGGLE WIDGET	
	$("div.dropdown").hide();
	$("div.titbox").click(function(){
		$(this).toggleClass("active").next("div.dropdown").slideToggle("slow");
		return true;
	});
	
	

// -----------------------------------------------------  GOOGLE MAP		
	var myLatlng = new google.maps.LatLng(22.545691024470916,88.36103660688478);
	var myOptions = {
	  center:myLatlng,
	  zoom:16,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"),  myOptions);
	var marker = new google.maps.Marker({
	  position: myLatlng,
	  map: map,
	  title:"Click Me for more info!"
	});
	
	var infowindow = new google.maps.InfoWindow({});
	
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.setContent("Write here some description"); //sets the content of your global infowindow to string "Tests: "
		infowindow.open(map,marker); //then opens the infowindow at the marker
	});
	marker.setMap(map);
	
	
});
