(function($) {

	'use strict';

	function templateDefaultInitEffects() {


		// sidebar
		$('.background-color.blue').velocity({left: '-15px'}, {duration: 0, delay: 0, complete:function(){
			$('.top-bg .inner').velocity('fadeIn');
		}});
		// sidebar
		$('.background-color.red').velocity({left: '-15px'}, {duration: 0, delay: 0, complete:function(){
			$('.middle-bg .inner').velocity('fadeIn');
		}});
		$('.background-color.brown').velocity({left: '-15px'}, {duration: 0, delay: 0, complete:function(){
			$('.bottom-bg .inner').velocity('fadeIn');
		}});


		// page content
		$('.custom-page-content').velocity('transition.slideLeftIn', {delay: 1300});
	}

	function wieZijnWeInitEffects () {

		// sidebar
		$('.background-color.brown').velocity({left: '-15px'}, {duration: 0,delay: 0, complete:function(){

			var nop = 0;
			$('.inner').velocity('fadeIn');
		}});

		// page content
		$('.employees-container').velocity('transition.slideLeftIn', {duration: 300, delay: 100, complete:function(){

			//var nop = 0;
			$('.employee-background').velocity('fadeIn', {duration: 200});
		}});



	}

	function bankruptcyArciveInitEffects () {


		var the_delay = 0;
		$('.alphabet-entry').each( function() {
			$(this).velocity('transition.slideLeftBigIn', {delay:the_delay});
			the_delay += 150;
		});

	}

	function bankruptcySingleInitEffects () {

		// sidebar
		$('.background-color.brown').velocity({left: '-15px'}, {duration: 0,delay: 0, complete:function(){
			$('.inner').velocity('fadeIn');
		}});


		// page content
		$('.bankruptcy-item-single').velocity('transition.fadeIn', {delay: 1000});


	}

	function newsArchiveInitEffects () {
		var the_delay = 0;
		$('.news-item').each( function() {
			$(this).velocity('transition.expandIn', {delay:the_delay});
			the_delay += 100;
		});
	}

	function newsSingleInitEffects () {

		// sidebar
		$('.background-color.red').velocity({left: '-15px'}, {duration: 0, delay: 0, complete:function(){
			$('.top-bg .inner').velocity('fadeIn');
		}});
		$('.background-color.red').velocity({left: '-15px'}, {duration: 0, delay: 0, complete:function(){
			$('.middle-bg .inner').velocity('fadeIn');
		}});
		$('.background-color.brown').velocity({left: '-15px'}, {duration: 0, delay: 0, complete:function(){
			$('.bottom-bg .inner').velocity('fadeIn');
		}});


		// page content
		$('.news-item-single').velocity('transition.slideLeftIn', {delay: 1300});

	}

	function searchPageInitEffects () {


		var the_delay = 0;
		$('.category-container').each( function() {
			$(this).velocity('transition.slideLeftIn', {delay:the_delay});
			the_delay += 100;
		});
	}

	function contactPageInitEffects () {


	}

	function headerSingleFadeIn() {

		$('.header-single-image-container').velocity('fadeIn');

	}




	function velocityInitEffects() {
		var varPart = 8/10;


		// determine page:
		if ($('.standard-page').length) {

			// default page
			templateDefaultInitEffects();

		}
		else if ($('.wie-zijn-we').length) {
			// wie zijn we page
			//headerSingleFadeIn();
			wieZijnWeInitEffects();

		}
		else if ($('.bankruptcy-archive').length) {
			// faillissementen archief
			//headerSingleFadeIn();
			bankruptcyArciveInitEffects();

		}
		else if ($('.bankruptcy-single').length) {
			// faillissementen single
			//headerSingleFadeIn();
			bankruptcySingleInitEffects();

		}
		else if ($('.category-nieuws,.page-news-overview').length) {
			// nieuws archief
			//headerSingleFadeIn();
			newsArchiveInitEffects();

		}
		else if ($('.single-post').length) {
			// nieuws single
			//headerSingleFadeIn();
			newsSingleInitEffects();

		}
		else if ($('.search-page').length) {
			// search
			//headerSingleFadeIn();
			searchPageInitEffects();

		}
		else if ($('.page-contact').length) {
			// contact
			//headerSingleFadeIn();
			contactPageInitEffects();

		}


		if ($('.header-single-image-container').length && $('.header-single-image-container').css('opacity') === 0){
			headerSingleFadeIn();
		}
	}


	$(window).load(function() {

	});

	$( document ).ready(function() {
		velocityInitEffects();


	});

	$("a").click(function(event){
		var linkLocation = $(this).attr('href');
		if (  !(linkLocation.indexOf("#") > -1 || $(this).hasClass('file'))) {

			var nop = 0;
			//event.preventDefault();
			//velocityOutEffects();
			//window.location = linkLocation;
			// $(".header-single-image-container,#page-content,.header-slider-container").velocity({ opacity: 0},{duration: 300, complete: function() {


			// }});
		}
	});


})(jQuery);
