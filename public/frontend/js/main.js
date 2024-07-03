(function ($) {
    "use strict";
 // Show loading bar on form submission
 $(document).on('submit', function (event) {
    var loadingBar = $('#loadingBar');
    loadingBar.css('width', '50%'); // Set width to 50% initially
    loadingBar.removeClass('hide'); // Show loading bar
    setTimeout(function () {
        loadingBar.css('width', '75%'); // Set width to 75% after a delay
    }, 2000); // Adjust delay as needed
});

// Hide loading bar when page is fully loaded
$(window).on('load', function () {
    var loadingBar = $('#loadingBar');
    setTimeout(function () {
        loadingBar.css('width', '100%'); // Set width to 100% after page load
        setTimeout(function () {
            loadingBar.css('opacity', '0'); // Hide loading bar after a delay
            setTimeout(function () {
                loadingBar.addClass('hide'); // Hide loading bar after opacity transition
            }, 200);
        }, 500); // Adjust delay as needed
    }, 1500); // Adjust delay as needed
});
    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();


    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow');
            } else {
                $('.fixed-top').removeClass('bg-white shadow');
            }
        } else {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('bg-white shadow').css('top', -45);
            } else {
                $('.fixed-top').removeClass('bg-white shadow').css('top', 0);
            }
        }
    });
    
    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });

})(jQuery);

