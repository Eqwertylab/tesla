App = {};
App = {



  In: function($) {

    $(function() {

      App.Fn.sidebar_mob();
      App.Fn.init_countdown();
      App.Fn.init_tooltip();
      App.Fn.faq();
      App.Fn.hexagon();
    })
  },


  
  Fn: {
    
    sidebar_mob: function() {

      $('#nav_mob_toggle, #curtain, .menu_mob a').click(function() {

        $('html').toggleClass('open');
      });
    },

    init_countdown: function() {

      var TIMER = 6;

      var now = new Date();
      var old = now.setHours( now.getHours() + TIMER );

      var timerId =
      countdown(

        old,

        function(ts) {

          $('.clock')
            .find('.hours').text(time_format(ts.hours));

          $('.clock')
            .find('.minutes').text(time_format(ts.minutes));

          $('.clock')
            .find('.seconds').text(time_format(ts.seconds));


          function time_format(time) {

            if(time < 10) {

              return "0" + time;
            } else {
              return time;
            }
          }

        },

        countdown.HOURS|countdown.MINUTES|countdown.SECONDS);
    },

    init_tooltip: function() {
      $('.tooltip').tooltipster({

        contentAsHTML: true,
        maxWidth: 300,
        position: 'bottom'
      });
    },

    faq: function() {

      $('.faq_item:first-child').addClass('__open');
      $('.faq_body').not('.faq_item:first-child .faq_body').css('display', 'none');

      $('.faq_header').click(function() {
        
        var wrap = $(this).closest('.faq_item');
        var mega_wrap = wrap.closest('.faq_list');

        if(!wrap.hasClass('__open')) {

          mega_wrap.find('.faq_item').removeClass('__open');

          mega_wrap.find('.faq_body').slideUp();
          
          wrap.addClass('__open').find('.faq_body').slideDown();
        }
      });
    },

    hexagon: function() {

      $('.hexagon g').hover(function() {

        var desc_id = $(this).closest('.ex_item').addClass('__hover').data('descid');
        $('.ex_inner').removeClass('__active zoomIn animated');
        $('.ex_inner[data-desc="'+desc_id+'"]').addClass('__active zoomIn animated');
      }, function() {

        $(this).closest('.ex_item').removeClass('__hover');
        $('.ex_inner').removeClass('__active zoomIn animated');
        $('.ex_inner.__image').addClass('__active zoomIn animated');
      });
    }
  }
}

App.In(jQuery);