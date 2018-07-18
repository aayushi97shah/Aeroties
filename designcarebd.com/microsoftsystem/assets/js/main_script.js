/* ----------------------------------------------------------------------------------------
* Author        : Theme Fair
* Template Name : Advance Business Consulting and Professional Services HTML Template
* File          : Advance main JS file
* Version       : 1.0
* ---------------------------------------------------------------------------------------- */

    
/* INDEX
----------------------------------------------------------------------------------------

01. Preloader js

02. change Menu background on scroll js 

03. Navigation js

04. Home Page Slider Settings 

05. Smooth scroll to anchor

06. Portfolio js  

07. Magnific Popup js  

08. Testimonial js 

09. Owl slider js for blog  

10. Client js 

11. Scroll-to-top   

13. Ajax Contact Form js

-------------------------------------------------------------------------------------- */



(function($) {
'use strict';
	
		var advance = $(window);

    /*-------------------------------------------------------------------------*
     *                  01. Preloader js                                       *
     *-------------------------------------------------------------------------*/
		advance.on( 'load', function(){

		  $('#preloader').delay(300).fadeOut('slow',function(){
			$(this).remove();
		  });    

		}); // $(window).on end
		
		
		
    /*-------------------------------------------------------------------------*
     *             02. change Menu background on scroll js                     *
     *-------------------------------------------------------------------------*/
		advance.on('scroll', function () {
		  var menu_area = $('.menu-area');
		  if (advance.scrollTop() > 0) {
			  menu_area.addClass('sticky-menu');
		  } else {
			  menu_area.removeClass('sticky-menu');
		  }
		}); // $(window).on('scroll' end
		


				
    /*-------------------------------------------------------------------------*
     *                   04. Navigation js                                     *
     *-------------------------------------------------------------------------*/
		$(document).on('click', '.navbar-collapse.in', function (e) {
		  if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
			  $(this).collapse('hide');
		  }
		});

		$('body').scrollspy({
		  target: '.navbar-collapse',
		  offset: 195
		});

				// Mainmenu JS
    	$('.mobile-menu').meanmenu();
		
		
		
	/*-------------------------------------------------------------------------*
     *                   04. Home Page Slider Settings                           *
     *-------------------------------------------------------------------------*/
		 $('#carousel-example-generic').carousel({
			interval: 5000
		  }); 
		
		
		
    /*-------------------------------------------------------------------------*
     *                   05. Smooth scroll to anchor                           *
     *-------------------------------------------------------------------------*/
		$('a.smooth_scroll').on("click", function (e) {
		  e.preventDefault();
		  var anchor = $(this);
		  $('html, body').stop().animate({
			  scrollTop: $(anchor.attr('href')).offset().top - 50
		  }, 1000);
		});
		
		
		

		
    /*-------------------------------------------------------------------------*
     *                  06. Portfolio js                                       *
     *-------------------------------------------------------------------------*/
      $('.portfolio').mixItUp();
	  
     	 

      
    /*-------------------------------------------------------------------------*
     *                  07. Magnific Popup js                                  *
     *-------------------------------------------------------------------------*/
      	$('.work-popup').magnificPopup({
          type: 'image',
          gallery: {
              enabled: true
          }
		  
      	});


      	$('.popup-youtube, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
      	});
		
		
		
    /*-------------------------------------------------------------------------*
     *                  08. Testimonial js                                     *
     *-------------------------------------------------------------------------*/
		$(".testimonial-list").owlCarousel({
			singleItem      : true,
			autoPlay        : true,
			pagination      : true,
			navigation      : true,
			navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
		});
		

		
    /*-------------------------------------------------------------------------*
     *                    09. Owl slider js for blog                                    *
     *-------------------------------------------------------------------------*/
		$(".owl-single-slider").owlCarousel({
			items               : 1,
			itemsDesktop        : [1199, 1],
			itemsDesktopSmall   : [980, 1],
			itemsTablet         : [768, 1],
			itemsMobile         : [479, 1],
			pagination          : true,
			navigation          : false,
			autoPlay			: true,
			navigationText 		: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', 
								  '<i class="fa fa-angle-right" aria-hidden="true"></i>']
	  	});
		
		
	/*-------------------------------------------------------------------------*
     *                       10. Client js                                     *
     *-------------------------------------------------------------------------*/
		$(".owl-client").owlCarousel({
			items               : 6,
			autoPlay            : true,
			itemsDesktop        : [1199, 4],
			itemsDesktopSmall   : [980, 3],
			itemsTablet         : [768, 3],
			itemsMobile         : [479, 2],
			pagination          : false,
			navigation          : false,
			autoHeight          : true,
		});

      
    /*-------------------------------------------------------------------------*
     *                       11. Scroll-to-top                           *
     *-------------------------------------------------------------------------*/	
		advance.on( 'scroll', function () {
			var top_top = $('#scroll-to-top');
			if (advance.scrollTop() > 500) {
				top_top.fadeIn();
			} else {
				top_top.fadeOut();
			}
		});
        /*END SCROLL TO TOP*/


		
    /*-------------------------------------------------------------------------*
     *                  13. Ajax Contact Form js                               *
     *-------------------------------------------------------------------------*/
		// Get the form.
		var form = $('#ajax-contact');

		// Get the messages div.
		var formMessages = $('#form-messages');

		// Set up an event listener for the contact form.
		$(form).on('submit', function(e) {
		  // Stop the browser from submitting the form.
		  e.preventDefault();

		  // Serialize the form data.
		  var formData = $(form).serialize();

		  // Submit the form using AJAX.
		  $.ajax({
			  type: 'POST',
			  url: $(form).attr('action'),
			  data: formData
		  })
		  .done(function(response) {
			  // Make sure that the formMessages div has the 'success' class.
			  $(formMessages).removeClass('error');
			  $(formMessages).addClass('success');

			  // Set the message text.
			  $(formMessages).text(response);

			  // Clear the form.
			  $('#name').val('');
			  $('#email').val('');
			  $('#phone').val('');
			  $('#subject').val('');
			  $('#message').val('');

		  })
		  .fail(function(data) {
			  // Make sure that the formMessages div has the 'error' class.
			  $(formMessages).removeClass('success');
			  $(formMessages).addClass('error');

			  // Set the message text.
			  if (data.responseText !== '') {
				  $(formMessages).text(data.responseText);
			  } else {
				  $(formMessages).text('Oops! An error occured and your message could not be sent.');
			  }
		  });

		});
		
		

		
        /*-------------------------------------------------------------------------*
         *                   14. MailChimp js                                    *
         *-------------------------------------------------------------------------*/
		$('#mc-form').ajaxChimp({
			language: 'en',
			callback: mailChimpResponse,

			// ADD YOUR MAILCHIMP URL BELOW HERE!
			url: 'http://coderspoint.us14.list-manage.com/subscribe/post?u=e5d45c203261b0686dad32537&amp;id=d061f39c51'
			
		});

		function mailChimpResponse(resp) {
			if (resp.result === 'success') {
			  $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
			  $('.mailchimp-error').fadeOut(400);

			} else if(resp.result === 'error') {
			  $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
			}  
		};
	
		
	/*-------------------------------------------------------------------------*
     *                  15. skill area js                                      *
     *-------------------------------------------------------------------------*/
	 
		$('#skill_area').skill();



})(jQuery);