
//Dropdown Menus
$(".dropdown").hover(
  function () {
    $(this).addClass('open');
  }, 
  function () {
    $(this).removeClass('open');
  }
  );



//Search

  var openSearch = $('.open-search'),
    SearchForm = $('.full-search'),
    closeSearch = $('.close-search');

    openSearch.on('click', function(event){
      event.preventDefault();
      if (!SearchForm.hasClass('active')) {
        SearchForm.fadeIn(300, function(){
          SearchForm.addClass('active');
        });
      }
    });

    closeSearch.on('click', function(event){
      event.preventDefault();

      SearchForm.fadeOut(300, function(){
        SearchForm.removeClass('active');
        $(this).find('input').val('');
      });
    });


//WOW Scroll Spy
var wow = new WOW({
    //disabled for mobile
    mobile: false
});
wow.init();


//Owl Carousel
$('#clients-scroller').owlCarousel({
    items:4,
    itemsTablet:3,
    margin:90,
    stagePadding:90,
    smartSpeed:450,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTablet: [767,2],
    itemsTabletSmall: [480,2],
    itemsMobile : [479,1],
});

//Color Client
$('#color-client-scroller').owlCarousel({
    items:4,
    itemsTablet:3,
    margin:90,
    stagePadding:90,
    smartSpeed:450,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTablet: [767,2],
    itemsTabletSmall: [480,2],
    itemsMobile : [479,1],
});

//Owl Carousel
$('#testimonial-item').owlCarousel({
    autoPlay: 5000,
    items:3,
    itemsTablet:3,
    margin:90,
    stagePadding:90,
    smartSpeed:450,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTablet: [767,2],
    itemsTabletSmall: [480,2],
    itemsMobile : [479,1],
});

//Dark Testimonial Carousel
$('#testimonial-dark').owlCarousel({
    autoPlay: 5000,
    items:3,
    itemsTablet:3,
    margin:90,
    stagePadding:90,
    smartSpeed:450,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTablet: [767,2],
    itemsTabletSmall: [480,2],
    itemsMobile : [479,1],
});

// Single Testimonial
$('#single-testimonial-item').owlCarousel({
  singleItem: true,
  autoPlay: 5000,
    items: 1,
    itemsTablet: 1,
    margin:90,
    stagePadding:90,
    smartSpeed:450,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTablet: [767,2],
    itemsTabletSmall: [480,2],
    itemsMobile : [479,1],
    stopOnHover: true,
});

// Image Carousel
$("#image-carousel").owlCarousel({
  autoPlay: 3000, //Set AutoPlay to 3 seconds
  items : 4,
  itemsDesktop : [1170,3],
  itemsDesktopSmall : [1170,3]
 
});

// Slider Carousel
$("#carousel-image-slider").owlCarousel({
  navigation : false, // Show next and prev buttons
  slideSpeed : 300,
  paginationSpeed : 400,
  singleItem:true,
  pagination: false,
  autoPlay: 3000,
});


 //About owl carousel Slider
  $(document).ready(function(){
    /*=== About us ====*/
    $('#carousel-about-us').owlCarousel({   
        navigation: true, // Show next and prev buttons
        navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        slideSpeed: 800,
        paginationSpeed: 400,
        autoPlay: true,
        singleItem: true,
        pagination : false,
        items : 1,
        itemsCustom : false,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
    });

});

//MixitUp
$(function(){
  $('#portfolio-list').mixItUp();
});

// Testimonial
$('testimonial-carousel').carousel();
$('a[data-slide="prev"]').click(function () {
    $('#testimonial-carousel').carousel('prev');
});

$('a[data-slide="next"]').click(function () {
    $('#testimonial-carousel').carousel('next');
});

//CounterUp
  jQuery(document).ready(function( $ ) {
      $('.counter').counterUp({
          delay: 1,
          time: 800
      });
  });

// Progress Bar
$('.skill-shortcode').appear(function() {
  $('.progress').each(function() {
    $('.progress-bar').css('width', function() {
      return ($(this).attr('data-percentage') + '%')
    });
  });
}, {
  accY: -100
});


 // Back Top Link
  var offset = 200;
  var duration = 500;
  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $('.back-to-top').fadeIn(400);
    } else {
      $('.back-to-top').fadeOut(400);
    }
  });
  $('.back-to-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 600);
    return false;
  })

  // registration form
function toggleResetPswd(e){
  e.preventDefault();
  $('#logreg-forms .form-signin').toggle() // display:block or none
  $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
  e.preventDefault();
  $('#logreg-forms .form-signin').toggle(); // display:block or none
  $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
  // Login Register Form
  $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
  $('#logreg-forms #cancel_reset').click(toggleResetPswd);
  $('#logreg-forms #btn-signup').click(toggleSignUp);
  $('#logreg-forms #cancel_signup').click(toggleSignUp);
})

 