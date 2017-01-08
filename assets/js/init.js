jQuery(document).ready(function($) {
	$('.footerSidebar h5').click(function() {
		$('.footerSidebar h5').next('div').slideUp('slow');
		$('.footerSidebar h5').removeClass('active');

		if($(this).next('div').is(':hidden')) {
			$(this).addClass('active');
			$(this).next('div').slideDown('slow');
		} else {
			$(this).next('div').slideUp('slow');
		}
	});

	$('#triggerMobileMenu').click(function() {
		if ($('#mobileMenu').is(':hidden')) {
			$('#mobileMenu').fadeIn();
		} else {
			$('#mobileMenu').fadeOut();
		}
	})

	$('#closeMobileMenu').click(function() {
		$('#mobileMenu').fadeOut();
	})
});