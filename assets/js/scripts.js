// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

jQuery(document).ready(function($) {
  var cerW = $('.certificate_ithem').width(),
    cerH = cerW * 1.35;
  $('.certificate_ithem').css('height', cerH);


  jQuery(window).resize(function(event) {
    cerW = $('.certificate_ithem').width();
    cerH = cerW * 1.35;
    $('.certificate_ithem').css('height', cerH);
  });

  jQuery('#main-slider').owlCarousel({
    lazyLoad: true,
    items: 1,
    navText: '',
    slideSpeed: 5000,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    loop: false,
    dots: false,
    smartSpeed: 1000,
  });



});
