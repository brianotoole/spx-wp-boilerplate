// Nav.js
// full screen nav
$(document).ready(function() {
  var trigger = $('#js-nav-toggle');
  var isClosed = false;
  trigger.click(function() {
    $('#js-nav-mobile').toggleClass('nav-open');
    $('#js-nav-toggle').toggleClass('active');
  });
});
