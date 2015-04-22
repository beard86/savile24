(function($) {
    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Savile = {
        // All pages
        'common': {
            init: function() {


                UTIL.loadCarousels();
                var bodyWrap = $('body');
                bodyWrap.find('.down').on('click', function() {
                    UTIL.goToSection('#intro');
                });
                bodyWrap.find('.backtop').on('click', function() {
                    UTIL.goToSection('#hero');
                });

                // JavaScript to be fired on all pages
                //UTIL.scrollTo();
                  $('nav>ul>li>a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');


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
        'about_us': {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        },
        'contact': {
            init: function() {}
        },
        'example-page': {
            init: function() {

            }
        }
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
        goToSection: function(id) {
            $('html, body').animate({
                scrollTop: $(id).offset().top
            }, 1000);
        },
        loadCarousels: function() {
            //initialise carousel for hero images
            $("#hero-carousel").owlCarousel({
                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
            //initialise carousel for main section gallery
            $("#main-carousel").owlCarousel({
                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
        },
        downCheck: function() {

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

        }
    };
    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.