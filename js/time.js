/***************************************************************************************************************
||||||||||||||||||||||||||||        CUSTOM SCRIPT FOR corano                      |||||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************

01. Elements Animation
02. prealoader
03. Odometer JS
04. selectdropdown
05. LightBox
06. searchpopuptoggler
07. customcursoroverlay
08. sidemenutoggler 
09. update clock
10. isotope
11. Portfolio Tabs
12. scrolltotop
13. cart product increasing
14. pricefilter
15. owl-carousel


****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/


"use strict";


/*-----------------Elements Animation-----------------*/
if ($('.wow').length) {
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: false, // trigger animations on mobile devices (default is true)
        live: true // act on asynchronously loaded content (default is true)
    });
    wow.init();
}


function relogio() {
    var d = new Date();
    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();

    if (h < 10) {
        h = "0" + h;
    }
    if (m < 10) {
        m = "0" + m;
    }
    if (s < 10) {
        s = "0" + s;
    }

    document.getElementById("text").innerHTML = h + ":" + m + ":" + s;
    setTimeout('relogio()', 1000);
}


/*-----------------Elements Animation-----------------*/

function prealoader() { // makes sure the whole site is loaded 
    $('.preloader').fadeOut(); // will first fade out the loading animation 
    $('.preloader').delay(500).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(500);
}
/*-----------------Odometer JS-----------------*/

jQuery(window).scroll(startCounter);

function startCounter() {

    if (jQuery(window).scrollTop() > 0) {
        jQuery(window).off("scroll", startCounter);
        jQuery('.counter-value').each(function() {
            var $this = jQuery(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter) + '');
                }
            });
        });
    }
    if (jQuery(window).scrollTop() > 0) {
        jQuery(window).off("scroll", startCounter);
        jQuery('.counter-value-plus').each(function() {
            var $this = jQuery(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter) + '+');
                }
            });
        });
    }
}
startCounter();
/*-----------------Odometer JS-----------------*/
/*-----------------selectdropdown-----------------*/
function selectdropdown() {
    $("#country").selectmenu();
    $("#shopdropdown").selectmenu();
    $("#countrytwo").selectmenu();

}


/*-----------------LightBox-----------------*/
//LightBox / Fancybox
if ($('.lightbox-image').length) {
    $('.lightbox-image').fancybox({
        openEffect: 'fade',
        closeEffect: 'fade',
        helpers: {
            media: {}
        }
    });
}




/*-----------------searchpopuptoggler-----------------*/
function searchpopuptoggler() {
    if ($('.search-popup__toggler').length) {
        $('.search-popup__toggler').on('click', function(e) {
            $('.search-popup').addClass('active');
            e.preventDefault();
        });
    }
}
/*-----------------searchpopupoverlay-----------------*/

function searchpopupoverlay() {

    if ($('.search-popup__overlay').length) {
        $('.search-popup__overlay').on('click', function(e) {
            $('.search-popup').removeClass('active');
            e.preventDefault();
        });
    }
}

/*-----------------customcursoroverlay-----------------*/
function customcursoroverlay() {

    if ($('.custom-cursor__overlay').length) {

        // / cursor /
        var cursor = $(".custom-cursor__overlay .cursor"),
            follower = $(".custom-cursor__overlay .cursor-follower");

        var posX = 0,
            posY = 0;

        var mouseX = 0,
            mouseY = 0;

        TweenMax.to({}, 0.016, {
            repeat: -1,
            onRepeat: function() {
                posX += (mouseX - posX) / 9;
                posY += (mouseY - posY) / 9;

                TweenMax.set(follower, {
                    css: {
                        left: posX - 22,
                        top: posY - 22
                    }
                });

                TweenMax.set(cursor, {
                    css: {
                        left: mouseX,
                        top: mouseY
                    }
                });

            }
        });

        $(document).on("mousemove", function(e) {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            mouseX = e.pageX;
            mouseY = e.pageY - scrollTop;
        });
        $("button, a").on("mouseenter", function() {
            cursor.addClass("active");
            follower.addClass("active");
        });
        $("button, a").on("mouseleave", function() {
            cursor.removeClass("active");
            follower.removeClass("active");
        });
        $(".custom-cursor__overlay").on("mouseenter", function() {
            cursor.addClass("close-cursor");
            follower.addClass("close-cursor");
        });
        $(".custom-cursor__overlay").on("mouseleave", function() {
            cursor.removeClass("close-cursor");
            follower.removeClass("close-cursor");
        });
    }

}

/*-----------------sidemenutoggler-----------------*/
function sidemenutoggler() {
    if ($('.side-menu__toggler').length) {
        $('.side-menu__toggler').on('click', function(e) {
            $('.side-menu__block').addClass('active');
            e.preventDefault();
        });
    }
}

/*-----------------sidemenublockoverlay-----------------*/
function sidemenublockoverlay() {

    if ($('.side-menu__block-overlay').length) {
        $('.side-menu__block-overlay').on('click', function(e) {
            $('.side-menu__block').removeClass('active');
            e.preventDefault();
        });
    }
}
/*-----------------update clock-----------------*/
function update() {

    $('#clock').html(moment().format('D. MMMM YYYY H:mm:ss'));
}

setInterval(update, 1000);
/*-----------------isotope-----------------*/
// use document.ready instead of window.load
// window.load waits for all resources to be loaded first,
// can be a long time
/*jQuery(function() {
    // now doc is ready, make selection
    // use another selector, not .isotope,
    // since that is dynamically added in Isotope v1
    var $container = jQuery('#filter_container');
    // use imagesLoaded, instead of window.load
    $container.imagesLoaded(function() {
        $container.isotope({
            itemSelector: '.grid-item',
            animationOptions: {
                duration: 500,
                easing: 'linear',
                queue: false
            }
        });
    })
});*/
/*-----------------Portfolio Tabs-----------------*/
if ($('.product_tabs').length) {
    $('.product_tabs .product_tab_btns .p_tab_btn').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('data-tab'));

        if ($(target).hasClass('actve-tab')) {
            return false;
        } else {
            $('.product_tabs .product_tab_btns .p_tab_btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            $('.product_tabs .p_tabs_content .p_tab').removeClass('active-tab');
            $(target).addClass('active-tab');
        }
    });
}


//Update Header Style and Scroll to Top

function scrolltotop() {

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#scroll').fadeIn();
            } else {
                $('#scroll').fadeOut();
            }
        });
        $('#scroll').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });

}



scrolltotop();
/*-----------------scrollnav-----------------*/
function scrollnav() {
    //Add One Page nav
    if ($('.scroll-nav').length) {
        $('.scroll-nav ul').onePageNav();
    }
}

function scrollnavone() {
    //Add One Page nav
    if ($('.scroll-navone').length) {
        $('.scroll-navone ul').onePageNav();
    }
}

function scrollnavtwo() {
    //Add One Page nav
    if ($('.scroll-navtwo').length) {
        $('.scroll-navtwo ul').onePageNav();
    }
}
$(document).ready(function() {

    var CurrentUrl= document.URL;
    var CurrentUrlEnd = CurrentUrl.split('/').filter(Boolean).pop();
    console.log(CurrentUrlEnd);
    $( "#nav .nav_item a" ).each(function() {
          var ThisUrl = $(this).attr('href');
          var ThisUrlEnd = ThisUrl.split('/').filter(Boolean).pop();

          if(ThisUrlEnd == CurrentUrlEnd){
          $(this).closest('.nav_item').addClass('active')
          }
    });

});
/*-----------------pricefilter-----------------*/

function pricefilter() {
    if ($('#slider-range').length) {
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
    }
}


/*-----------------cart---product---increasing--------------*/


$('.add').click(function() {
    if ($(this).prev().val() < 20) {
        $(this).prev().val(+$(this).prev().val() + 1);
    }
});
$('.sub').click(function() {
    if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});



/*--------------//single_items Carousel------------------*/


function singleitems() {
    if ($('.single_items').length) {

        $('.single_items').owlCarousel({

            loop: true,

            margin: 30,

            nav: false,

            dots: false,

            autoplay: true,

            slideTransition: 'linear',

            autoplaySpeed: 1000,

            autoplayHoverPause: true,

            navText: ['<span class="icon flaticon-left-arrow"></span>', '<span class="icon flaticon-next"></span>'],

            responsive: {

                0: {

                    items: 1

                },

                600: {

                    items: 1

                },

                768: {

                    items: 1

                },

                1024: {

                    items: 1

                },

                1200: {

                    items: 1

                }

            }

        });

    }
}
/*--------------one_items------------------*/
function mainslider() {
    if ($('.main_slider').length) {
        $('.main_slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            center: false,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            active: true,
            smartSpeed: 1000,
            autoplayTimeout: 7000,
            navText: ['<span class="clearfix prev flaticon-left"></span>', '<span class="clearfix flaticon-right"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 1
                },

                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    }
}
function mainslidertwo() {
    if ($('.main_slider_two').length) {
        $('.main_slider_two').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            center: false,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            active: true,
            smartSpeed: 1000,
            autoplayTimeout: 7000,
            navText: ['<span class="clearfix prev flaticon-left"></span>', '<span class="clearfix flaticon-right"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 1
                },

                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    }
}
/*--------------four_items------------------*/
function fouritems() {
    if ($('.four_items').length) {
        $('.four_items').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            center: false,
            autoplay: true,
            smartSpeed: 3000,
            autoplayTimeout: 4000,
            navText: ['<span class="clearfix prev flaticon-left-arrow"></span>', '<span class="clearfix flaticon-next"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },

                1200: {
                    items: 3
                },
                1400: {
                    items: 4
                }
            }
        });
    }
}


/*--------------three_items_center------------------*/
function threeitemscenter() {
    if ($('.three_items_center').length) {
        $('.three_items_center').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            center: true,
            autoplay: true,
            smartSpeed: 3000,
            autoplayTimeout: 4000,
            navText: ['<span class="clearfix prev flaticon-left-arrow"></span>', '<span class="clearfix flaticon-next"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },

                1000: {
                    items: 3
                },
                1200: {
                    items: 3,
                    margin: 0,
                }
            }
        });
    }
}
/*--------------three_items------------------*/
function threeitems() {
    if ($('.three_items').length) {
        $('.three_items').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            center: false,
            autoplay: true,
            smartSpeed: 3000,
            autoplayTimeout: 4000,
            navText: ['<span class="clearfix prev flaticon-left-arrow"></span>', '<span class="clearfix flaticon-next"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },

                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }
}


/*--------------three_items------------------*/
function threeitemsnoloop() {
    if ($('.three_items_noloop').length) {
        $('.three_items_noloop').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            dots: false,
            center: false,
            autoplay: false,
            smartSpeed: 3000,
            autoplayTimeout: 4000,
            navText: ['<span class="clearfix prev flaticon-left-arrow"></span>', '<span class="clearfix flaticon-next"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },

                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }
}

/*--------------two_items------------------*/
function twoitems() {
    if ($('.two_items').length) {
        $('.two_items').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            center: false,
            autoplay: true,
            smartSpeed: 3000,
            autoplayTimeout: 4000,
            navText: ['<span class="clearfix prev flaticon-left-arrow"></span>', '<span class="clearfix flaticon-next"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },

                1000: {
                    items: 3
                },
                1200: {
                    items: 2
                }
            }
        });
    }
}
/*--------------one_items------------------*/
function oneitems() {
    if ($('.one_items').length) {
        $('.one_items').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            center: false,
            autoplay: true,
            smartSpeed: 3000,
            autoplayTimeout: 4000,
            navText: ['<span class="clearfix prev flaticon-left-arrow"></span>', '<span class="clearfix flaticon-next"></span>'],

            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 1
                },

                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    }
}

function flexslideractivation() {
$('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 140,
    itemMargin: 30,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
}
if ($('.swiper-three').length) {
var swiper = new Swiper('.swiper-three', {


    spaceBetween: 15,
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      clickable: true,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,

        },
        768: {
          slidesPerView: 2,

        },
        1024: {
          slidesPerView: 3,
  
        },
      }
  });
};
// Dom Ready Function
jQuery(document).on('ready', function() {
    (function($) {
        oneitems();
        singleitems();
        twoitems();
        threeitems();
        threeitemsnoloop();
        threeitemscenter();
        fouritems();
        mainslider();
        flexslideractivation();
        selectdropdown();
        pricefilter();
        searchpopuptoggler();
        searchpopupoverlay();
        customcursoroverlay();
        sidemenutoggler();
        sidemenublockoverlay();
        scrollnav();
        mainslidertwo();
        scrollnavone();
        scrollnavtwo();
    })(jQuery);
});

/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */



// Instance Of Fuction while Window Load event
jQuery(window).on('load', function() {
    (function($) {
        prealoader();


    })(jQuery);
});