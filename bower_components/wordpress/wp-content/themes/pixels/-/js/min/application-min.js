$(document).ready(function() {

	// Add classes to dropdown anchors
	$('li.dropdown > a').addClass('dropdown-toggle').attr('data-toggle','dropdown');

	// Carousel active selector
	$("#carousel-slides .carousel__items figure.carousel__items__item:first-child").addClass('active');

	// Align Figures
	$("img.alignright").addClass('pull-right').addClass('inset');
	$("img.alignleft").addClass('pull-left').addClass('inset');

	// Style tables
	$("table").addClass('table').addClass('table--condensed');

	// Match Heights
	$('.music').matchHeight();
	$('blockquote.memories__memory').matchHeight();

});


