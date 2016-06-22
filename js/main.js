jQuery(document).ready(function(){
	$(".tabs-menu a").click(function(event) {
		event.preventDefault();
		$(this).parent().addClass("current");
		$(this).parent().siblings().removeClass("current");
		var tab = $(this).attr("href");
		$(".tab-content").not(tab).css("display", "none");
		$(tab).fadeIn();
	});
	function opentab(){
	var has = window.location.hash;
	$(".tabs-menu a[href="+ has +"]").click();
	}
	opentab();

	// products page slider js
	jQuery('.tab-content').each(function(){
		var id = jQuery(this).attr('id');
		$('#'+id+' .slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			Default: false,
			autoplay: true,
			asNavFor: '#'+id+' .slider-nav'
		});
		$('#'+id+' .slider-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			vertical: true,
			centerMode: true,
			focusOnSelect: true
		});
	});
});