
// For responsive
var mq767 = window.matchMedia( "(max-width: 767px)" ); 
var mq1199 = window.matchMedia( "(max-width: 1199px)" ); 

$(document).ready(function () {
    $(window).scroll(function () {        
        if($(this).scrollTop() > 100) { 
            $('.navbar').addClass('navbar-scrolled');
            $('.img-brand').removeClass('img-brand');
            $('.navbar-brand img').addClass('img-shrink');
        } else {
            $('.navbar').removeClass('navbar-scrolled');
            $('.img-shrink').removeClass('img-shrink');
            $('.navbar-brand img').addClass('img-brand');
        }

        $(".navbar-brand").toggleClass("navbar-brand-shrink", $(this).scrollTop() > 100);
    });
});

//Mobile-menu
$('.mobile-menu .m-toggle').on('click', function(){
    $('.mobile-menu').toggleClass('opened');
});
$('.mobile-menu .overlay').on('click', function(){
    $('.mobile-menu.opened').removeClass('opened');
});

// Partners slick
$(document).ready(function(){
    $('#partner').slick({
      slidesToShow: 3,
      slidesToScroll: 2,
      autoplay: true,
      arrows: false,
      autoplaySpeed: 3500,
      focusOnSelect: true,
      responsive: [
          {
              breakpoint: 1025,
              settings: {
                  slidesToShow: 5,
                  slidesToScroll: 1
              }
          },
          {
              breakpoint: 961,
              settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1
              }
          },
          {
              breakpoint: 769,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
              }
          },
          {
              breakpoint: 481,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
          }
      ]
    });
});

$(document).ready(function(){
    const url = window.location.pathname;
    var pages = $('a.nav-link').val();

    if (url.includes(pages)) {
        $('a.nav-link.active').removeClass('active');
        $('a.nav-link').val(pages).addClass('active');
        
    }

    $('a.nav-link').on('click', function(){
        $('a.nav-link.active').removeClass('active');
        $(this).addClass('active');
    })
})

// Wow JS
wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
})
wow.init();