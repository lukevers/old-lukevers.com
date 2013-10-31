$(document).ready(function() {
	 // Parallax
	 $.stellar({
	 	 horizontalScrolling: false,
    	 verticalOffset: 0
     });
	 
	 // Slider controls
	 $('#one').bind('click', function() {
	 	 var id = $('.active').attr('id');

	 	 $('.photo').fadeIn();
	 	 
	 	 $('#'+id).toggleClass('fade active');
	 	 $('#one').toggleClass('fade active');
	 });

	 $('#two').bind('click', function() {
	 	 var id = $('.active').attr('id');

	 	 $('.photo2').fadeIn();
 	 	 $('.photo').fadeOut(500);
	 	 
	 	 $('#'+id).toggleClass('fade active');
	 	 $('#two').toggleClass('fade active');
	 });

	 $('#three').bind('click', function() {
	 	 var id = $('.active').attr('id');
	 
 	 	$('.photo3').show();
 	 	$('.photo, .photo2').fadeOut(500);

	 	 $('#'+id).toggleClass('fade active');
	 	 $('#three').toggleClass('fade active');
	 });

	 // Auto-slider

});