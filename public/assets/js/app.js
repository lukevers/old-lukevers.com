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
	 	 
	 	 $('#'+id).toggleClass('active');
	 	 $('#one').toggleClass('active');
	 });

	 $('#two').bind('click', function() {
	 	 var id = $('.active').attr('id');

	 	 $('.photo2').fadeIn();
 	 	 $('.photo').fadeOut(500);
	 	 
	 	 $('#'+id).toggleClass('active');
	 	 $('#two').toggleClass('active');
	 });

	 $('#three').bind('click', function() {
	 	 var id = $('.active').attr('id');
	 
 	 	$('.photo3').show();
 	 	$('.photo, .photo2').fadeOut(500);

	 	 $('#'+id).toggleClass('active');
	 	 $('#three').toggleClass('active');
	 });

	 // Navbar background
	 $(window).scroll(function() {
	 	if ($(window).scrollTop() >= 200)
	 		$('.navbar').css('background-color', 'rgba(0, 0, 0, .8');
	 	else $('.navbar').css('background-color', 'rgba(0, 0, 0, 0');
	 });

	 // Auto-slider
	 setInterval(function() {
	 	var id = $('.active').attr('id');
	 	switch (id) {
	 		case "one":
	 			$('.photo2').fadeIn();
	 			$('.photo').fadeOut(500);
	 			$('#'+id).toggleClass('fade active');
	 		 	$('#two').toggleClass('fade active');
	 			break;
	 		case "two":
	 			$('.photo3').show();
	 			$('.photo, .photo2').fadeOut(500);
	 			$('#'+id).toggleClass('fade active');
	 		 	$('#three').toggleClass('fade active');
	 			break;
	 		case "three":
	 			$('.photo').fadeIn();
	 			$('#'+id).toggleClass('fade active');
	 		 	$('#one').toggleClass('fade active');
	 			break;
	 		default:
	 			// if this happens, someone fucked shit up
	 			break;
	 	}
	 }, 3000);

});