(function($) {
    $(window).scroll(function() {
        var wScroll = $(this).scrollTop();
        if (wScroll >= 80) {
            $('.navbar').addClass('mb-navbar-fixed');
        } else {
            $('.navbar').removeClass('mb-navbar-fixed');
        }


    });

    if ($(window).scrollTop() >= 80) {
        $('.navbar').addClass('mb-navbar-fixed');
    } else {
        $('.navbar').removeClass('mb-navbar-fixed');
    }



    $(".navbar-nav .nav-link").click(function(e) {
        const targetEl = $(this).attr('href');
        if (targetEl != '#' && targetEl.startsWith('#')) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: ($(targetEl).offset().top - 70)
            }, 500);
        }
    });

    $('#to_top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    })


    window.setTimeout(() => {
        $('#wr_loading').fadeOut();
    }, 800)

    // window.setTimeout(() => {
    //     $('.mb-right-box-wrap').fadeIn(300);
    //     $('.mb-right-box-wrap').addClass('show');
    // }, 1500)

    window.addEventListener("scroll", handleToggleScrollToTop);

    function handleToggleScrollToTop(e) {
        const windowx = e.currentTarget;
        if (windowx.scrollY > 200) {
            // $('#to_top').fadeIn(300);
        } else {
            // $('#to_top').fadeOut(300);
        }
    }



})(jQuery);