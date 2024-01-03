$(document).ready(function () {

    // Mobile Nav
    $("#menu1").metisMenu();
    // MObile Nav End

    // Side menubar
    $("#close-btn, .toggle-btn").click(function () {
        $("#mySidenav, .body-bg").toggleClass("active");
    });

    // Explore Category
    $('#explore-category').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        navText: ["<i class='las la-angle-left'></i>", "<i class='las la-angle-right'></i>"],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    })

    // Explore Category End

    // Popular Category
    $('.popular-categories').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: true,
        navText: ["<i class='las la-angle-left'></i>", "<i class='las la-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    // Popular Category End

    // Latest Bikes
    $('#latest-bikes').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: true,
        navText: ["<i class='las la-angle-left'></i>", "<i class='las la-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    // Latest Bikes End

    // Details Page Slider

    $(window).load(function () {
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 200,
            itemMargin: 15,
            minItems:5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
    // Detaila Page Slider End

    // Scroll Top Js
    $(function () {
        $(window).on("scroll", function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $(".go-top").addClass("active");
            if (scrolled < 600) $(".go-top").removeClass("active");
        });
        $(".go-top").on("click", function () {
            $("html, body").animate({ scrollTop: "0" }, 300);
        });
    });

    if ($(".wow").length) {
        var wow = new WOW({
            mobile: false,
        });
        wow.init();
    }
    // Scroll Top Js ENd

    // Price Rnage

      // Price Range End


    //   Checkbox Click Active Class
    // $('#hidden-form').click(function(){
    //     $('.hidden-form').prop('checked', true).slideDown('slow');
    // });
    // $('.not-hidden').click(function(){
    //     $('.hidden-form').prop('checked', true).slideUp('slow');
    // });
    // Checkbox Click Active Class End


});
