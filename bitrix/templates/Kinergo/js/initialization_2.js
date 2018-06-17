$(document).ready(function() {
	$('#login').popup({color: '#333', opacity: 0.8});
	$('#register').popup({color: '#333', opacity: 0.8});
	$('#makezakaz').popup({color: '#333', opacity: 0.8});
	$('#cenazakaz').popup({color: '#333', opacity: 0.8});

	$('.cenazakaz_open').click(function() {
		var tex=$(this).attr('namem');
		$('#TextTovar').html('Меня заинтересовал товар '+tex+' прошу выслать подробную информацию на мою электронную почту');
		var mal=$('#user_dan').attr('user_mail');
		$('#form_emal_cen').val(mal);
	});

	$('.submenu > li > a').click(function(event) {
		if($(this).attr('href') == "#")
		{
			event.preventDefault();
			jQuery(this).next('ul').slideToggle('slow', function() {
				$('#submenu').customScrollbar("resize", true)
			});
			jQuery(this).toggleClass('active');
		}
	});	


	var sm_label_height = $('#scroll-content .sm-label').height();
	var right_grid_height = $('#scroll-content .right').height()-sm_label_height;
	$('#scroll-content .submenu').height(right_grid_height);

	$(document).ready(function ($) {
		$('#submenu').customScrollbar();
    });

	$('.slider').bxSlider({slideWidth: 1000, pager: true, caption: false, auto: true });
	// $('.slider2').bxSlider({minSlides: 3, maxSlides: 3, slideWidth: 233, slideMargin: 15, pager: false, caption: true, nextText: '', prevText: '', auto: true});

});