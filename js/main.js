(function($) {
    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Savile = {
        // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages

                UTIL.mobileNav();
                UTIL.loadCarousels();
                UTIL.activeClassToNav();

                var body = $('body');

                body.find('#hero-down').on('click', function() {
                    UTIL.goToSection('#intro');
                });
                body.find('#space-down').on('click', function() {
                    UTIL.goToSection('#main');
                });
                body.find('#hero-downloads').on('click', function() {
                    UTIL.goToSection('#downloads');
                });
                body.find('#down-schedule').on('click', function() {
                    UTIL.goToSection('#floor-plans');
                });
                body.find('#down-floor').on('click', function() {
                    UTIL.goToSection('#space-plans');
                });
                body.find('.backtop').on('click', function() {
                    UTIL.goToSection('#savile');
                });

                //UTIL.scrollTo();
                //if(body.hasClass('contact')) {

                //} else {
                    UTIL.scrollHandlers();
                //}

            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'Building': {
            init: function() {
                // JavaScript to be fired on the home page
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // About us page, note the change from about-us to about_us.
        'Accomodation': {
            init: function() {
                // JavaScript to be fired on the about us page
                UTIL.activeClassToNavByData();
            }
        },
        'Gallery': {
            init: function() {
                 $('#hero-down, .backtop').remove();
            }
        },
        'Contact': {
            init: function() {
                UTIL.activeClassToNavByData();
                 $('#hero-down, .backtop').remove();
            }
        },
    };
    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Savile;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },

        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        },

        activeClassToNavByData : function() {
        //adds class to active nav based on
            $(window).scroll(function(){
                var scrollTop = $(document).scrollTop();
                var anchors = $('body').find('section');

                //change to data attr to avoid redirect
                for (var i = 0; i < anchors.length; i++){
                    if (scrollTop > $(anchors[i]).offset().top - 50 && scrollTop < $(anchors[i]).offset().top + $(anchors[i]).height() - 50) {
                        $('nav ul li a[data-page-type="' + $(anchors[i]).attr('id') + '"]').addClass('active');
                    } else {
                        $('nav ul li a[data-page-type="' + $(anchors[i]).attr('id') + '"]').removeClass('active');
                    }
                }

            });

        },

        //adds active
        activeClassToNav: function() {
          console.log(location.pathname.split("/")[2]);
            //main menu
          $('nav>ul>li>a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
            //sub menu
          $('nav>ul>li>ul>li>a[data-page-type="' + location.pathname.split("/")[2] + '"]').addClass('active');
        },

        goToSection: function(id) {
            $('html, body').animate({
                scrollTop: $(id).offset().top - 50
            }, 1000);
        },

        loadCarousels: function() {
            //initialise carousel for hero images
            $("#hero-carousel").owlCarousel({
                autoPlay : 3000,
                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
            //initialise carousel for main section gallery
            $("#main-carousel, #main-carousel-2").owlCarousel({
                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
            $("#floor-carousel, #gallery-carousel").owlCarousel({
                navigation: true, // Show paginaion
                pagination: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
        },

        scrollHandlers: function() {

                var easing = {
                    // no easing, no acceleration
                    linear: function(t) {
                        return t;
                    },
                };

                // header minifies on scroll
                var scrolltimeout = null;
                var scrolldelta = Math.round(document.body.scrollTop || document.documentElement.scrollTop || 0);
                var scrolltemp = 0;
                var prevscroll = window.scrollY;
                var down = document.querySelectorAll('.down')[0];
                down.hider = false;
                down.trigger = 150;
                var heroimage = document.querySelectorAll('#hero img')[0];

                function downCheck() {
                    if (!down.hider) {
                        if (scrolldelta > down.trigger) {
                            down.classList.add('fade');
                            setTimeout(function() {
                                down.classList.add('hide');
                            }, 500);
                            down.hider = true;
                        }
                    } else {
                        if (scrolldelta < down.trigger) {
                            down.classList.remove('hide');
                            setTimeout(function() {
                                down.classList.remove('fade');
                            }, 100);
                            down.hider = false;
                        }
                    }
                }

                window.onscroll = function() {
                    scrolltemp = document.body.scrollTop || document.documentElement.scrollTop || 0;
                    scrolltemp = prevscroll - scrolltemp;
                    scrolldelta -= scrolltemp;
                    var herotemp = scrolldelta / 2.4;
                    if (herotemp < 0) {
                        herotemp = 0;
                    }
                    downCheck();
                    heroimage.style.transform = 'translateY(' + herotemp + 'px)';

                    prevscroll = document.body.scrollTop || document.documentElement.scrollTop || 0;
                };

                downCheck();

        },

        scrollTo: function(Y, duration, easingFunction, callback) {
            var start = Date.now();
            var from = document.body.scrollTop || document.documentElement.scrollTop || 0;

            if (from === Y) {
                return; /* Prevent scrolling to the Y point if already there */
            }

            function min(a, b) {
                return a < b ? a : b;
            }

            function scroll() {
                var currentTime = Date.now(),
                    time = min(1, ((currentTime - start) / duration)),
                    easedT = easingFunction(time);

                var tempscroll = (easedT * (Y - from)) + from;
                document.body.scrollTop = tempscroll;
                document.documentElement.scrollTop = tempscroll;

                if (time < 1) {
                    requestAnimationFrame(scroll);
                } else {
                    if (callback) {
                        callback();
                    }
                }
            }
            requestAnimationFrame(scroll);
        },

        /*
          Slidemenu
        */
        mobileNav : function () {

            var $body = $('body'), 
            $menu_trigger = $body.find('.menu-trigger')[0];

            if ( typeof $menu_trigger !== 'undefined' ) {   
                $menu_trigger.addEventListener('click', function() {
                    //modify to body has class / add class
                    $body.toggleClass('menu-active');
                });
            }

        }

    };
    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.