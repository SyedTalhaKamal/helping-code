$(window).load(function() {

	'use strict';
	$("#pageloader").delay(1200).fadeOut("slow");
	$(".loader-item").delay(700).fadeOut();

});


$(document).ready(function() {	
	"use strict";

    // Nav Toggle
	$('.nav-toggle').on('click', function(e) {
		e.preventDefault();
		$('body').toggleClass('nav-open');
	});
	
	$("html, #nav").niceScroll({
		cursorwidth:"7px",
		cursorborderradius:"5px",
		cursorborder:"none",
		cursorborderradius:"0",
		zindex:"100000"
	});
	
	// Masonary Grid Portfolio
    $('#js-grid-masonry-projects').cubeportfolio({
        filters: '#js-filters-masonry-projects',
        loadMore: '#js-loadMore-masonry-projects',
        loadMoreAction: 'click',
        layoutMode: 'grid',
        defaultFilter: '*',
        animationType: 'quicksand',
        gapHorizontal: 35,
        gapVertical: 25,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1500,
            cols: 5
        }, {
            width: 1100,
            cols: 4
        }, {
            width: 800,
            cols: 3
        }, {
            width: 480,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        caption: 'zoom',
        displayType: 'fadeIn',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;

            $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    timeout: 30000
                })
                .done(function(result) {
                    t.updateSinglePage(result);
                })
                .fail(function() {
                    t.updateSinglePage('AJAX Error! Please refresh the page!');
                });
        },
    });
	
	/* hide #back-top first */
	$("#back-top").hide();		
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});	
		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});	

	// Close Nav
	$('#nav .nav-toggle').on('click', function(e) {
		e.preventDefault();
		$('body').removeClass('nav-open');
	});
	//Shrink Header
	    $(function() {
	        var shrinkHeader = 130;
	        $(window).scroll(function() {
	            var scroll = getCurrentScroll();
	            if (scroll >= shrinkHeader) {
	                $('header').addClass('scroll');
	            } else {
	                $('header').removeClass('scroll');
	            }
	        });

	        function getCurrentScroll() {
	            return window.pageYOffset || document.documentElement.scrollTop;
	        }
	    });
	$('.navbar-nav').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 750
	});
	
	$('.skillbar').appear();
		$('.skillbar').on('appear', function () {			
		$(this).find('.skillbar-bar').animate({
			width: $(this).attr('data-percent')
		}, 3000);			
	});
	
	/* Conter */
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	
	// Flickr Photostream
	$('#basicuse').jflickrfeed({
		limit: 12,
		qstrings: {
			id: '52617155@N08'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
	
	/* Client Logo */
	$('#client-logo').owlCarousel({
		items: 1,
		loop:true,
		autoplay: true,
		margin: 10,
		autoHeight: true,
		nav:false,
		dots:true,
		loop: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 5
			}
		}
	});
	
	$(function() {
        var formAnimatedInput = $('.form-animate-fields .wrap');

        formAnimatedInput.each(function() {
            //var $this = $('.form-input');

            $('.form-input').on('focus', function() {
                //$('.form-input').parent.addClass('is-filled');
				 $(this).closest('.form-field').find('.wrap').addClass('is-filled');
            });
			
			//var listElements = $( "li" ).css( "color", "blue" );
//			$('.form-input').on( "click", function( event ) {
//			  $( '.wrap' ).closest( '' ).toggleClass( "is-filled" );
//			});

            $('.form-input').on('blur', function() {
                if ($('.form-input').val().length == 0) {
                    //$('.form-input').removeClass('is-filled');
					$(this).closest('.form-field').find('.wrap').removeClass('is-filled');
                }
            });
        });
    });
	
	/* Team Slider */
	$('#team-slider').owlCarousel({
		items: 1,
		loop:true,
		autoplay: false,
		margin: 10,
		autoHeight: true,
		nav:true,
		navText: ['&#xf104;', '&#xf105'],
		dots:false,
		loop: true
	});
	
	// Piecharts
	jQuery('#pie-charts').waypoint(function(direction) {
		jQuery('.chart').easyPieChart({
			barColor: "#59585b",
			onStep: function(from, to, percent) {
				jQuery(this.el).find('.percent').text(Math.round(percent));
			}
		});
	}, {
		offset: function() {
			return jQuery.waypoints('viewportHeight') - jQuery(this).height() + 200;
		}
	});
	
	// Open Video
	jQuery('.play-video').on('click', function(e) {
		var videoContainer = jQuery('.video-box');
		videoContainer.prepend('<iframe src="http://player.vimeo.com/video/7449107" width="500" height="281" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
		videoContainer.fadeIn(300);
		e.preventDefault();
	});
	// Close Video
	jQuery('.close-video').on('click', function(e) {
		jQuery('.video-box').fadeOut(400, function() {
			jQuery("iframe", this).remove().fadeOut(300);
		});
	});
	
	// Animated Tabs
    $('#js-grid-tabs').cubeportfolio({
        filters: '#js-filters-tabs',
        defaultFilter: '.wd',
        animationType: 'rotateSides',
        gridAdjustment: 'default',
        displayType: 'default',
        caption: '',
    });
	
	
	
	// Contact Form
	jQuery("#contact_form").validate({
		meta: "validate",
		submitHandler: function(form) {

			var s_name = $("#name").val();
			var s_lastname = $("#lastname").val();
			var s_email = $("#email").val();
			var s_phone = $("#phone").val();
			var s_suject = $("#subject").val();
			var s_comment = $("#comment").val();
			$.post("contact.php", {
					name: s_name,
					lastname: s_lastname,
					email: s_email,
					phone: s_phone,
					subject: s_suject,
					comment: s_comment
				},
				function(result) {
					$('#sucessmessage').append(result);
				});
			$('#contact_form').hide();
			return false;
		},
		/* */
		rules: {
			name: "required",

			lastname: "required",
			// simple rule, converted to {required:true}
			email: { // compound rule
				required: true,
				email: true
			},
			website: {
				required: true,
			},
			comment: {
				required: true
			},
			subject: {
				required: true
			}
		},
		messages: {
			name: "Please enter your name.",
			lastname: "Please enter your last name.",
			email: {
				required: "Please enter email.",
				email: "Please enter valid email"
			},
			website: "Please enter a website.",
			comment: "Please enter a comment."
		},
	}); 
	
	$(".btn-settings").on("click", function() {
        $(this).parent().toggleClass("active")
    }), $(".color-list div").on("click", function() {
        if ($(this).hasClass("active")) return !1;
        $("link.color-scheme-link").remove(), $(this).addClass("active").siblings().removeClass("active");
        var e = $(this).attr("data-src"),
            i = $('<link class="color-scheme-link" rel="stylesheet" />');
        i.attr("href", e).appendTo("head")
    }), $(".reset").on("click", function() {
        if ($(".color-list div").removeClass("active"), $(this).hasClass("active")) return !1;
        $("link.color-scheme-link").remove();
        var e = $(this).attr("data-src"),
            i = $('<link class="color-scheme-link" rel="stylesheet" />');
        i.attr("href", e).appendTo("head")
    }), $(".reset span").on("click", function() {
        var e = $(this).attr("class");
        $("body").attr("class", e)
    })

});

