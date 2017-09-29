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

  //photo sizes
  var cerW = $('.certificate_ithem').width(),
    cerH = cerW * 1.35,
    vidW = $('.yt_video').width(),
    vidH = vidW * (9 / 16);
  $('.certificate_ithem').css('height', cerH);

  $('.yt_video').css('height', vidH);


  var membW = $('.members-wrapp .member-img').width();
  $('.members-wrapp .member-img').css('height', membW);

//gallery sizes
  function autoRatio() {
    jQuery('.ratio').each(function() {
      var ratW = $(this).width(),
        ratCoef = $(this).data('ratio'),

        ratParent = $(this).parents('div');


      if ( ($(window).width() <= 992) && ( ratParent.hasClass( "galery-wrapp" )) ) {
        //alert('ratParent');
        ratCoef = .7;
      }


      var ratH = ratW * ratCoef;

      $(this).css('height', ratH);
    });

  }
  autoRatio();


  jQuery(window).resize(function(event) {
    autoRatio();
    cerW = $('.certificate_ithem').width();
    cerH = cerW * 1.35;
    vidW = $('.yt_video').width();
    vidH = vidW * (9 / 16);
    $('.certificate_ithem').css('height', cerH);

    $('.yt_video').css('height', vidH);

    var membW = $('.members-wrapp .member-img').width();
    $('.members-wrapp .member-img').css('height', membW);

  });



jQuery(document).bind('DOMSubtreeModified', function(e) {
  if (e.target.innerHTML.length > 0) {
    autoRatio();
  }
});


//Main Slider
  jQuery('#main-slider').owlCarousel({
    lazyLoad: true,
    items: 1,
    navText: '',
    slideSpeed: 5000,
    nav: true,
    //autoplay: true,
    autoplayHoverPause: true,
    loop: false,
    dots: false,
    smartSpeed: 1000,
  });

//mobmenu
  //if ($(window).width() <= 768) {
    $('#hamburger').click(function() {
      $('#hamburger').toggleClass('active');
      $('#overlay_mob').toggleClass('open');
      $(".nav-container").toggleClass('open');
    });

    $('#overlay_mob').click(function() {
      $('#overlay_mob').removeClass('open');
      $(".nav-container").removeClass('open');
      $('#hamburger').removeClass('active');
    });


    $('.headnav li.menu-item-has-children').append('<div class="holder"></div>');
    //$("#menu .current-menu-item").parents("li").addClass('open').children('ul').slideDown();
    //$("#menu .current-menu-item").addClass('open').children('ul').slideDown();

    var holderelement = $('.headnav li.menu-item-has-children > .holder');


    holderelement.on('click', function() {

      var element = $(this).parent('li');

      if (element.hasClass('open')) {
        element.removeClass('open');

        element.find('li').removeClass('open');
        element.find('ul').slideUp();
      } else {
        element.addClass('open');
        element.children('ul').slideDown();
        element.siblings('li').children('ul').slideUp();
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp();

      }
    });
  //}

  //Постраничная навигация с асинхронной подгрузкой постов в WordPress
  jQuery(function($) {
    var valueButton = $('#true_loadmore').text();
    $('#true_loadmore').click(function() {

      $(this).text( 'Loading...');
      var data = {
        'action': 'loadmore',
        'query': true_posts,
        'page': current_page
      };
      $.ajax({
        url: ajaxurl,
        data: data,
        type: 'POST',
        success: function(data) {
          if (data) {
            $('#loop-content').append(data);
            $('#true_loadmore').text(valueButton);
            current_page++;
            if (current_page == max_pages) $("#true_loadmore").remove();
          } else {
            $('#true_loadmore').remove();
          }
        }
      });

    });
  });

//loop-content






  var accordBtn = $('.member .green-btn.red');


  accordBtn.on('click', function() {


    var accordelement = $(this).siblings('.desc');

    if (accordelement.hasClass('open') || $(this).hasClass('active')) {
      $(this).removeClass('active');
      accordelement.removeClass('open');
      $('.member .desc').removeClass('open');
      $('.member .green-btn.red').removeClass('active');


    } else {
      $('.member .green-btn.red').removeClass('active');
      $('.member .desc').removeClass('open');
      $(this).addClass('active');
      accordelement.addClass('open');


    }
  });



});
