/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

function openPortfolio() {
    if ($('#expand-portfolio').hasClass('open')) {
        $('#expand-portfolio').html('<small class="pull-right">Expand &nbsp;<i class="fa fa-plus"></i></small>');
        $('#expand-portfolio').removeClass('open');
        $('.entry-content .dropdown').removeClass('fade-in');
        $('.entry-content').slideUp(200);
    } else {
        $('#expand-portfolio').addClass('open');
        $('#expand-portfolio').html('<small class="pull-right">Collapse &nbsp;<i class="fa fa-minus"></i></small>');

        $('.entry-content').slideDown(200, function() {
            $(this).find('.dropdown').addClass('fade-in');
        });
    }
}

(function($) {

    // Use this variable to set up the common and page specific functions. If you 
    // rename this variable, you will also need to rename the namespace below.
    var Roots = {
        // All pages
        common: {
            init: function() {
                // JavaScript to be fired on all pages
                // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
                $('.dropdown').on('show.bs.dropdown', function(e) {
                    $(this).find('.dropdown-menu').first().fadeIn();
                });

                // ADD SLIDEUP ANIMATION TO DROPDOWN //
                $('.dropdown').on('hide.bs.dropdown', function(e) {
                    $(this).find('.dropdown-menu').first().fadeOut();
                });

                $('#trigger-open').on('click', function(e) {
                    console.log(e.target);
                    if (!$(e.target).is('small') && !$(e.target).is('i')) {
                        e.preventDefault();
                        openPortfolio();
                    }
                });

                $('#expand-portfolio').on('click', function(e) {
                    e.preventDefault();
                    openPortfolio();
                });

                cbpBGSlideshow.init(1);

                $(".boxer").boxer({
                    mobile: true
                });

                $(".toggle-sidenav").on('click', function(e) {
                    e.preventDefault();
                    $('#side-nav').toggleClass('open');
                });

                $(".navbar-toggle").on('click', function(e) {
                    $('.top-nav').find('.navbar-brand').toggleClass('invert');
                });
            }
        },
        // Home page
        home: {
            init: function() {

                $slideshow = $('#cbp-bislideshow');

                // $plauseBtn = $("#cbp-bipause");
                // $slideshow.imagesLoaded(function() {
                //     console.log('images loaded');
                //     $plauseBtn.trigger("click");
                //     setTimeout(function() {
                //         $plauseBtn.trigger("click");
                //         console.log('time up');
                //     }, 5100);
                // });

                // $plauseBtn.on('click', function() {
                //     console.log('clicked');
                // });

                $slideshow.imagesLoaded(function() {

                    $("body").delay(1000).queue(function() {

                        $(this).addClass("animate-1").dequeue();
                        $(this).delay(4000).queue(function() {

                            $(this).removeClass("animate-1").dequeue();
                            $(this).delay(1000).queue(function() {
                                $(this).addClass("animate-2").dequeue();
                                $(this).delay(4000).queue(function() {
                                    $(this).removeClass("animate-2").dequeue();
                                    $(this).delay(1000).queue(function() {
                                        $(this).addClass("animate-3").dequeue();
                                    });
                                });

                            });
                        });

                    });

                });
            }
        }

    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var namespace = Roots;
            funcname = (funcname === undefined) ? 'init' : funcname;
            if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            UTIL.fire('common');

            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
            });
        }
    };

    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
