/*============================
   js index
==============================

==========================================*/

(function ($) {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        speed: 4000,
        autoplay: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    /*================================
    Window Load
    ==================================*/
    $(window).on('load', function () {
        smoothScrolling($(".main-menu nav ul li a[href^='#']"), headerHeight);
        smoothScrolling($(".scrollup a[href^='#']"), 0);
        smoothScrolling($(".welcome-content .btn a[href^='#']"), 0);
        $('.slider-two').addClass('scontent_loaded');
        $('.slider-parallax').addClass('scontent_loaded');
        sliderLoadedAddClass();
        preloader()
    })



    /*================================
    Preloader
    ==================================*/
    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if ($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function () {});
        }
    }

    //slider
    $('.project-area .grid .test-popup-link').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*================================
     sticky-header
     ==================================*/
    $(window).scroll(function () {

        if ($(window).scrollTop() > 10) {
            $('.sticky-header').addClass('sticky'),
                $('.scrollup').addClass('show_hide');
        } else {
            $('.sticky-header').removeClass('sticky'),
                $('.scrollup').removeClass('show_hide');
        }

    });

    /*================================
     Gift-carousel
     ==================================*/
    function gift_carousel() {
        var owl = $(".Gift-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 0,
            navText: false,
            nav: false,
            items: 5,
            smartSpeed: 1000,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 3
                },
                480: {
                    items: 2
                },
                760: {
                    items: 4
                },
                1080: {
                    items: 4
                }
            }
        });
    }
    gift_carousel();

    /*================================
    slicknav
    ==================================*/
    $('#nav_mobile_menu').slicknav({
        prependTo: "#mobile_menu"
    });

    /*------------------------------------------
        = RSVP FORM SUBMISSION
    -------------------------------------------*/
    if ($("#rsvp-form").length) {
        $("#rsvp-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: "required",

                guest: {
                    required: true
                },

                events: {
                    required: true
                }

            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email",
                guest: "Select your number of guest",
                events: "Select your event list"
            },

            submitHandler: function (form) {
                $("#loader").css("display", "inline-block");
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(form).serialize(),
                    success: function () {
                        $("#loader").hide();
                        $("#success").slideDown("slow");
                        setTimeout(function () {
                            $("#success").slideUp("slow");
                        }, 3000);
                        form.reset();
                    },
                    error: function () {
                        $("#loader").hide();
                        $("#error").slideDown("slow");
                        setTimeout(function () {
                            $("#error").slideUp("slow");
                        }, 3000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }

    /*================================
    slider-area content effect
    ==================================*/
    function sliderLoadedAddClass() {
        $('.slider-two').addClass('scontent_loaded');
        $('.slider-parallax').addClass('scontent_loaded');
    }


    /*================================
      Isotope Portfolio
     ==================================*/
    $('.grid').imagesLoaded(function () {

        // filter items on button click
        $('.gallery-menu').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item',
            }
        });



    });

    $('.gallery-menu button').on('click', function () {
        $('.gallery-menu button').removeClass('active');
        $(this).addClass('active');
    });


    /*------------------------------------------
        = COUNTDOWN CLOCK
    -------------------------------------------*/


    /*================================
     Variable Initialize
    ==================================*/
    var headerHeight = $('.header-area').innerHeight();


    //. smooth scrolling
    function smoothScrolling($links, $topGap) {
        var links = $links;
        var topGap = $topGap;

        links.on("click", function () {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                    $("html, body").animate({
                        scrollTop: target.offset().top - topGap
                    }, 1000, "easeInOutExpo");
                    return false;
                }
            }
            return false;
        });
    }

    /*------------------------------------------
        = BACK TO TOP
    -------------------------------------------*/
    if ($(".scrollup").length) {
        $(".scrollup").on("click", function () {
            $("html,body").animate({
                scrollTop: 0
            }, 1000, "easeInOutExpo");
            return false;
        })
    }


    /* 6. Slick slider
	====================*/
    var slider = function () {
        if ($('.slick-gallery')) {
            $('.slick-gallery').slick({
                centerMode: false,
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true
                        }
                    }
                ]
            });
        }
        if ($('.slick-wishes')) {
            $('.slick-wishes').slick({
                dots: true,
                arrows: false
            });
        }
        if ($('.slick-gifts')) {
            $('.slick-gifts').slick({
                dots: true,
                arrows: false,
                slidesToShow: 5,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        }
    }
    var sliderNum = function () {
        var $slides = $('.slick-gallery .slick-slide').not('.slick-cloned');
        var $currentSlide = $('.slick-slide.slick-current').attr('data-slick-index');
        $('.gallery__slider-current').text(+$currentSlide + 1);
        $('.gallery__slider-all').text($slides.length);
    }
    $('.slick').on('afterChange', sliderNum);


    /*================================
    Magnific Popup
    ==================================*/
    if ($(".expand-img").length) {
        $('.expand-img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        $('.expand-video').magnificPopup({
            type: 'iframe',
            gallery: {
                enabled: true
            }
        });
    }
    /*------------------------------------------
        = WATER RIPPLE
    -------------------------------------------*/
    if ($(".ripple").length) {
        $('.ripple').ripples({
            resolution: 512,
            dropRadius: 20, //px
            perturbance: 0.04,
        });

        // Automatic drops
        setInterval(function () {
            var $el = $('.ripple');
            var x = Math.random() * $el.outerWidth();
            var y = Math.random() * $el.outerHeight();
            var dropRadius = 20;
            var strength = 0.04 + Math.random() * 0.04;

            $el.ripples('drop', x, y, dropRadius, strength);
        }, 400);
    }

    if ($(".particleground").length) {
        $('.particleground').particleground({
            dotColor: '#999999',
            lineColor: '#999999',
            particleRadius: 5,
            lineWidth: 2,
            curvedLines: true,
            proximity: 20,
            parallaxMultiplier: 10,
        });

    }


    /*------------------------------------------
        = VIDEO BACKGROUND
    -------------------------------------------*/
    if ($("#video-background").length) {
        $('#video-background').YTPlayer({
            showControls: false,
            playerVars: {
                modestbranding: 0,
                autoplay: 1,
                controls: 1,
                showinfo: 0,
                wmode: 'transparent',
                branding: 0,
                rel: 0,
                autohide: 0,
                origin: window.location.origin
            }
        });
    }

    /*------------------------------------------
        = POPUP YOUTUBE, VIMEO, GMAPS
    -------------------------------------------*/
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


    /*------------------------------------------
        = TOGGLE MUSUC BIX
    -------------------------------------------*/
    if ($(".music-box").length) {
        var musicBtn = $(".music-box-toggle-btn"),
            musicBox = $(".music-holder");

        musicBtn.on("click", function () {
            musicBox.toggleClass("toggle-music-box");
            return false;
        })
    }

    $(function () {
        slider();
        sliderNum();
        countdown();
        filledLabels();
        pageScroll();
        submitForm();
    });



}(jQuery));
