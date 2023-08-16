function fix_height() {
    $(".contactus-image img").css({
        'height': ($(".form-section").height() + 'px')
    });
    //home page version-4 key features height
    $(".extra-core-features-image img").css({
        'height': ($(".extra-core-features-text").height() + 'px')
    });


    //blog page height
    $(".blog-gradient-right").css({
        'height': ($(".blog_post-container").height() + 'px')
    });

    $("img.v2-banner").parent().imagesLoaded(function () {
        $(".image-caption-1").css({
            'height': ($("img.v2-banner").height() + 'px')
        });

        var htc_s = $('.header .top-container').outerHeight(true) + 'px';
        console.log(htc_s);
        $('.image-caption-1 .container').css('padding-top', htc_s);
    });

}
var home_page_slider; //loader
$(window).load(function () {
    //home page v1,v2,v3,v4,v5 banner height
    fix_height();

    //loader
    $('body').addClass('loaded');
    $('.loader').fadeOut(400);
    var wow = new WOW({
        offset: 0,
        mobile: false
    });
    wow.init();

    //progress bar
    $('.progress .progress-bar').css("width",
        function () {
            return $(this).attr("aria-valuenow") + "%";
        }
    )
    $('.progress .skill').each(function () {
        var me = $(this);
        var perc = me.attr("data-percentage");
        me.text((perc) + '%');
        var cwidth = jQuery(this).css("width");
        me.css({
            "left": 'calc(' + perc + '% - ' + cwidth + ' + 8px)'
        });

    });
});

$(document).ready(function () {
    fix_height();
    home_page_slider = $("#slider").owlCarousel({
        navigation: true,
        slideSpeed: 200,
        paginationSpeed: 400,
        singleItem: true,
        rewindSpeed: 1000,
        autoWidth: true,
        autoPlay: true
    });

    $(window).resize(function () {
        fix_height();
        //home_page_slider.trigger('refresh.owl.carousel');
    });

    $('#registrationForm').formValidation();
    var affixnav = $('.affixnav');
    // home slider

    //testimonials carousel
    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: true,
        navigationText: [''],
        slideSpeed: 1000,
        singleItem: true,
        autoPlay: true
    });
    //team members carousel
    $('.owl-team-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        items: 3,
        autoPlay: true,
        itemsDesktop: [1000, 3], // 2 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // betweem 900px and 601px
        itemsTablet: [700, 1], // 2 items between 600 and 480
        itemsMobile: [479, 1], // 1 item between 479 and 0
    })
    //blog carousel
    $('.owl-blog-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoPlay: true,
        items: 2,
        itemsDesktop: [1000, 2], // 2 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // betweem 900px and 601px
        itemsTablet: [700, 1], // 2 items between 600 and 480
        itemsMobile: [479, 1], // 1 item between 479 and 0
    })
    //client logo carousel
    $('.owl-logo-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        items: 4,
        autoPlay: true,
        itemsDesktop: [1000, 4], // 2 items between 1000px and 901px
        itemsDesktopSmall: [900, 3], // betweem 900px and 601px
        itemsTablet: [700, 2], // 2 items between 600 and 480
        itemsMobile: [479, 2], // 1 item between 479 and 0
    })
    //blog widget gallery slider 
    $('#blog_slider_gallery').owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    })
    //affix nav animation
    affixnav.on('affix.bs.affix', function () {
        if (!affixnav.hasClass('affix')) {
            affixnav.addClass('animated fadeInDown');
        }
    });

    affixnav.on('affix-top.bs.affix', function () {
        affixnav.removeClass('animated fadeInDown');
        $('.navbar-collapse').collapse('hide');
    });
    //contact image


    //Portfolio showcase
    $('.grid').each(function () {
        var $container = $(this);
        $container.imagesLoaded(function () {
            $container.isotope({
                layoutMode: 'packery',
                itemSelector: '.grid-item',
                percentPosition: true,
                packery: {
                    gutter: '.gutter-sizer',
                }
            });

        });
    });

    //Portfolio page showcase
    $('.portfolio-grid').each(function () {
        var $container = $(this);
        $container.imagesLoaded(function () {
            $container.isotope({
                layoutMode: 'packery',
                itemSelector: '.grid-item',
                percentPosition: true,
                packery: {
                    gutter: 30,
                }
            });

        });
    });

    //Portfolio showcase filter
    $('.filter li').on('click', function () {
        $('.filter .active').removeClass('active');
        $(this).closest('li').addClass('active');
        var selector = $(this).attr('data-filter');
        $('.portfolio-grid').isotope({
            filter: selector,
            animationOptions: {
                duration: 500,
                queue: false
            }
        });
        return false;
    });

    //accordion
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
        $(this).siblings('.panel-heading').find('.icon').removeClass("dripicons-chevron-down").addClass("dripicons-chevron-up");
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
        $(this).siblings('.panel-heading').find('.icon').removeClass("dripicons-chevron-up").addClass("dripicons-chevron-down");

    });



    //counter number rolling
    $('.count-number').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 1000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

})
