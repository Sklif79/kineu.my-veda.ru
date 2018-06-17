$(document).ready(function() {


    $('.mobile-btn').click(function () {
        $('#head .menu').toggleClass('open');
        $('html').toggleClass('page-noscroll');

        $('.close_menu').click(function () {
            $('#head .menu').removeClass('open');
            $('html').removeClass('page-noscroll');
        });
        return false;
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest("#head .menu.open").length) {
            $("#head .menu.open").removeClass('open');
            $("html").removeClass('page-noscroll');
        }
        e.stopPropagation();
    });


    var arrow = '<span class="arrow"></span>';
    $('#head .menu > ul > li > ul').before(arrow);
    $('#head .menu > ul > li .arrow').click(function(){
        $(this).next().slideToggle();
    });
    var close = '<span class="close_menu"></span>';
    $('#head .menu > ul').before(close);



    $('.image').each(function () {

        var big_img = $(this).find('.image_slider img');
        var nav_a = $(this).find('.image_slider a');
        var nav_img = $(this).find('.image_slider a');

        $(this).find('.image_slider_nav .item_nav').on('mouseenter',function(e){
            e.preventDefault();

            if($(big_img).attr('src') != $(this).find("img").data('bigimg')){
                $(big_img).attr('src', $(this).find("img").data('bigimg'));
                $(nav_a).attr('href', $(this).find("img").data('bigimg'));
            }

            $('.image_slider_nav .item_nav').removeClass('active');
            $(this).addClass('active');
        });
    });


    $('.article li').each(function(){
        var title = $(this).find('.info .indexa');
        var title_text = $(this).find('.info .indexa').text();
        if(title_text.length > 30){
            $(title).next().addClass('overflow_hidden');
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
            $('#toup').show();
        } else {
            $('#toup').hide();
        }
    });

    $(document).on('click', '#toup', function () {
        $('html, body').animate({scrollTop: 0}, 500);
    });

    var sliderOdd = $('.nodes:nth-of-type(odd) .slider2').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 3000,
        asNavFor: '.slider2',
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    var sliderEven = $('.nodes:nth-of-type(even) .slider2').attr('dir','rtl').slick({
        slidesToShow: 3,
        slidesToScroll: -1,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 3000,
        asNavFor: '.slider2',
        pauseOnHover: false,
        rtl: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.slider2').hover(
        function () {
            $('.slider2').slick('slickPause');
    },
        function () {
            $('.slider2').slick('slickPlay');
    })
});