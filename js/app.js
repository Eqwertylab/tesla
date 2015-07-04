App = {};
App = {



  In: function($) {

    $(function() {

      App.Fn.sidebar_mob();
      App.Fn.init_countdown();
      App.Fn.init_tooltip();
      App.Fn.faq();
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

      $('.faq_item:first').addClass('__open');
      $('.faq_body').not('.faq_item:first-child .faq_body').css('display', 'none');

      $('.faq_header').click(function() {
        
        var wrap = $(this).closest('.faq_item');

        if(!wrap.hasClass('__open')) {

          $('.faq_item').removeClass('__open');

          $('.faq_body').slideUp();
          wrap.addClass('__open').find('.faq_body').slideDown();
        }
      });

    }
  }
}

App.In(jQuery);