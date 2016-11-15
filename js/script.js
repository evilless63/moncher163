$(document).ready(function() {
	$('#wrapperForFullpagePlugin').fullpage({
		anchors:['welcome', 'shares'],
		verticalCentered: false
	});

	$('#wrapperForFullpagePluginUslugi').fullpage({
		anchors:['servises', 'servisesInfo'],
		verticalCentered: false
	});

	$('.welcomeSlider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});

	$('.sharesSlider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		arrows: false,
		dots: true
	});

	$('.fancyBoxImg').fancybox({
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});

	$('.serviseNode').hover(function() {
		var nodeText =  $( this ).attr( "attrText" );
		$( this ).append("<span class='nodeTextInfo'>" + nodeText + "</span>");
		$( this ).append("<div class='nodeTextInfoButtonWrapper'><a class='nodeTextInfoButton' href='#servisesInfo'>узнать больше</a></div>");
	}, function(){	
		$( this ).empty();
	});

});