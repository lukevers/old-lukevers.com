$(document).ready(function() {
	// Links menu
	$('.links').bind('click', function() {
		
	});

	// Center logo
	$(window).resize(function(){
		$('.logo').css({
			position:'absolute',
			left: ($(window).width() 
			- $('.logo').outerWidth())/2,
			top: ($(window).height() 
			- $('.logo').outerHeight())/2
		});	
	});
	$(window).resize();
	$(window).resize();

	// Parallax
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 0
	});
});