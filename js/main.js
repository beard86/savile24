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

                $('#hero-down').on('click', function() {
                    UTIL.goToSection('#intro');
                });
                $('#specs-down').on('click', function() {
                    UTIL.goToSection('#main');
                });
                $('#space-down').on('click', function() {
                    UTIL.goToSectionSpecs('#area-schedule');
                });
                $('#hero-downloads').on('click', function() {
                    UTIL.goToSection('#downloads');
                });
                $('.backtop').on('click', function() {
                    UTIL.goToSection('#savile');
                });

                UTIL.scrollHandlers();

                $('.video-container').on('click', function() {
                        $(this).children('img').fadeOut('fast');
                        $(this).addClass('video-size');
                });
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'Building': {
            init: function() {
                // JavaScript to be fired on the Building pages
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        'Accomodation': {
            init: function() {
                // JavaScript to be fired on the Accomodation page
                UTIL.activeClassToNavByData();
                $('#down-schedule').on('click', function() {
                    UTIL.goToSection('#floor-plans');
                });
                $('#down-floor').on('click', function() {
                    UTIL.goToSection('#space-plans');
                });
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
        'Location': {
            init: function() {
            //Hotspots
            $('#hotspot-list').find('h3').on('click', function() { // Toggle the lists of occupiers on the location slides 
                //first run, both are hidden
                var $el = $('#hotspot-list');

                if (!$el.data('first')) {
                    $el.data('first', true);
                    $(this).next('div').slideToggle();
                    $(this).find('span').addClass('underline');
                    $('.' + $(this).attr('data-type') + '-hotspots').show(); // :/
                }
                else {

                    $el.find('div').each(function() {
                        $(this).slideToggle();
                    });
                    $('#hotspot-list').find('h3 span').toggleClass('underline');
                    $('.occupiers-hotspots, .culture-hotspots').toggle();
                }
            });

                // this code is real bad, but at least its not dealing with string comprehension!!
                // could chuck the occupiers and culture into two arrays. to condense this into two functions
                // why does he use find so much?! it's so slow!!!!

                $('.occupiers > ul > li').hover(function() {
                    $('.occupiers-hotspots > span').eq($(this).attr('data-override')-1).addClass('hilight');
                }, function() {
                    $('.occupiers-hotspots > span').removeClass('hilight');
                });

                $('.culture > ul > li').hover(function() {
                    $('.culture-hotspots > span').eq($(this).attr('data-override')-1).addClass('hilight');
                }, function() {
                    $('.culture-hotspots > span').removeClass('hilight');
                });
                
                $('.occupiers-hotspots > span').hover(function() {
                    $(this).addClass('hilight');
                    var index = $(this).index()+1;
                    $('.occupiers > ul').find('li[data-override='+index+']').addClass('hilight');
                }, function() {
                    $(this).removeClass('hilight');
                    $('.occupiers > ul > li').removeClass('hilight');
                });

                $('.culture-hotspots > span').hover(function() {
                    $(this).addClass('hilight');
                    var index = $(this).index()+1;
                    $('.culture > ul').find('li[data-override='+index+']').addClass('hilight');
                }, function() {
                    $(this).removeClass('hilight');
                    $('.culture > ul > li').removeClass('hilight');
                });


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

        activeClassToNavByData : function() {
        //adds class to active nav based on
            $(window).scroll(function(){
                var scrollTop = $(document).scrollTop();
                var anchors = $('body').find('section');

                //change to data attr to avoid redirect
                for (var i = 0; i < anchors.length; i++){
                    if (scrollTop > $(anchors[i]).offset().top - 60 && scrollTop < $(anchors[i]).offset().top + $(anchors[i]).innerHeight() - 60) {
                        $('nav ul li a[data-page-type="' + $(anchors[i]).attr('id') + '"]').addClass('active');
                    } else {
                        $('nav ul li a[data-page-type="' + $(anchors[i]).attr('id') + '"]').removeClass('active');
                    }
                }

            });
            //FIX FOR SECTIONS ON LARGE SCREENS NOT TESTED YET...
            // http://stackoverflow.com/questions/8393442/highlight-active-link-when-using-scrollto-based-on-current-view
           /* var sections = {},
                _height  = $(window).height(),
                i        = 0;

            // Grab positions of our sections 
            $('section').each(function(){
                sections[this.name] = $(this).offset().top;
            });

            $(document).scroll(function(){
                var pos = $(this).scrollTop();

                // Look in the sections object and see if any section is viewable on the screen. 
                // If two are viewable, the lower one will be the active one. 
                for(i in sections){
                    if(sections[i] > pos && sections[i] < pos + _height){
                        $('a').removeClass('active');
                        $('#nav_' + i).addClass('active');
                    }  
                }
            });*/

        },

        //adds active
        activeClassToNav: function() {
            var primaryNav = $('nav>ul>li');
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
        goToSectionSpecs: function(id) {
            $('html, body').animate({
                scrollTop: $(id).offset().top
            }, 1000);
        },

        loadCarousels: function() {
            //initialise carousel for hero images
            $("#hero-carousel").owlCarousel({
                autoPlay : 7000,
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
            $("#gallery-carousel, #space-carousel").owlCarousel({
                navigation: true, // Show paginaion
                pagination: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                addClassActive:true
            });

            var spacesCarousel =  $("#space-carousel");
            spacesCarousel.owlCarousel({
                navigation: true, // Show paginaion
                pagination: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
             function addClassBold(that) {
                $('ul li').removeClass('bold');
                $(that).addClass('bold');
            }
            $('.jumpToZero').click(function(){
                spacesCarousel.trigger('owl.goTo', 2);
                addClassBold(this);
            });
            $('.jumpToOne').click(function(){
                spacesCarousel.trigger('owl.goTo', 3);
                addClassBold(this);
            });
            $('.jumpToTwo').click(function(){
                spacesCarousel.trigger('owl.goTo', 0);
                addClassBold(this);
            });
            $('.jumpToThree').click(function(){
                spacesCarousel.trigger('owl.goTo', 1);
                addClassBold(this);
            });
            var floorCarousel =  $("#floor-carousel");
            floorCarousel.owlCarousel({
                navigation: true, // Show paginaion
                pagination: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                addClassActive:true
            });
            $('.schedule > .ctrl').click(function() {
                $('.schedule > .ctrl').removeClass('bold');
                $(this).addClass('bold');
                var clickIndex = $(this).index() - 1;
                console.log(clickIndex);
                floorCarousel.trigger('owl.goTo', clickIndex);
                //if click
            })

           $('.owl-buttons > div').click(function() {
                    var activeIndex = $('#floor-carousel .owl-wrapper .owl-item.active').index();
                    var floorList = $('body').find('.schedule .ctrl');
                        floorList.removeClass('bold');
                        floorList.eq(activeIndex).addClass('bold');
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
                var heroimage = document.querySelectorAll('#hero img');

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
                    for (var i = 0; i < heroimage.length; i++) {
                        heroimage[i].style.transform = 'translateY(' + herotemp + 'px)';
                    };

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