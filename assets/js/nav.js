// Nav.js
// Mobile nav
$(document).ready(function() {
  var trigger = $('#js-nav-toggle');
  var isClosed = false;
  trigger.click(function() {
    $('#js-nav-mobile').toggleClass('nav-open');
    $('#js-nav-toggle').toggleClass('active');
  });
});

// Header on scroll
$(window).on('scroll', function() {
  var el = $('.header');
  var scroll = $(window).scrollTop();
  var heroHeight = $('#js-header-scroll-to').outerHeight();
  var breakpoint = 768;
  if ( scroll >= heroHeight && $(window).width() >= breakpoint) {
    el.addClass('scrolled');
  } else {
    el.removeClass('scrolled');
  }
});
