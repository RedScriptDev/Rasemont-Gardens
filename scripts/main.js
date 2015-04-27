'use strict';
$(document).ready(function(){

$('<select />').appendTo('.page--nav__mobile');

	// Create default option 'Go to...'
	$('<option />', {
	   'selected': 'selected',
	   'value'   : '',
	   'text'    : 'Go to...'
	}).appendTo('.page--nav__mobile select');

	// Populate dropdown with menu items
	$('.page--nav li a').each(function() {
	 var el = $(this);
	 $('<option />', {
	     'value'   : el.attr('href'),
	     'text'    : el.text()
	 }).appendTo('.page--nav__mobile select');
	});

	$(".page--nav__mobile select").change(function() {
  	window.location = $(this).find("option:selected").val();
	});

	$('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'mfp-fade'
	});

	formHandle();


 var feed = new Instafeed({
        get: 'user',
        userId: 2051226617,
        accessToken: '2051226617.467ede5.20fabe68cc504f4e97ce7c7d7ec3ccdb',
        template: '<a href="{{link}}" data-time="{{model.created_time}}"><img src="{{image}}" title="{{caption}}" /></a>',
        resolution: 'standard_resolution'     
      });

    // init feed
    feed.run();
});



	

