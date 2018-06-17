$(document).ready(function() {
	$('#login').popup({color: '#333', opacity: 0.8});
	$('#register').popup({color: '#333', opacity: 0.8});
	$('#makezakaz').popup({color: '#333', opacity: 0.8});
	$('#cenazakaz').popup({color: '#333', opacity: 0.8});
	$('#removepasvord').popup({color: '#333', opacity: 0.8});

	$('#').popup({color: '#333', opacity: 0.8});

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

	$(document).ready(function ($) {
		$('#submenu').customScrollbar();

    });

    $(window).load(function(){
    	setTimeout(function(){
	    	if($("#scroll-content #activef").length){
	    		$('#submenu').customScrollbar("scrollTo", $("#submenu #activef"));	
	    	}
    	},2000);

    	$('#submenu .overview>li').on('click',function(){
    		var that = $(this);

    		setTimeout(function(){
		    	$('#submenu').customScrollbar("scrollTo", that);	
    		},1000);
    	});
    });

	$('.slider').bxSlider({slideWidth: 1000, pager: true, caption: false, auto: true });
    $('.slider2').bxSlider({
      	minSlides: 1,
        maxSlides: 3,
        slideWidth: 233,
        slideMargin: 15,
        pager: false,
        caption: true,
        nextText: '',
        prevText: '',
        auto: true,
        autoHover:true,
        responsive:true
	});




	var sm_label_height = $('#scroll-content .sm-label').height();
	var right_grid_height = $('#scroll-content .right').height()-sm_label_height;
	$('#scroll-content .submenu').height(right_grid_height);

	$('#submenu > li:last-child > a').click(function() {
			if($(this).attr('class')=='active'){
				$('#submenu').customScrollbar({customScrollbar:true});
		  		$('#submenu .viewport').delay(0).scrollTop($('#submenu .overview').height());
			}
 	});

});