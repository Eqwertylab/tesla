App = {};
App = {



  In: function($) {

    $(function() {

      App.Fn.sidebar_mob();
      App.Fn.init_countdown();
      App.Fn.init_tooltip();
      App.Fn.init_smooth_scroll();
      App.Fn.faq();
      App.Fn.hexagon();
      App.Fn.review();
      App.Fn.init_form();
    })
  },


  
  Fn: {
    init_form: function() {

      var valid_option = {

        rules: {

          phone: {

            required: true
          }
        },

        errorPlacement: function(error, element) { }
      }

      var validator1 = $('#form1').validate(valid_option);
      var validator2 = $('#form2').validate(valid_option);
      var validator3 = $('#form3').validate(valid_option);

      $('form').ajaxForm({

        beforeSubmit: showRequest,
        success: showResponse
      });

      function showRequest(formData, jqForm, options) { 

        if( !$(jqForm).find('input.error').length ) {

          return true; 
        } else {

          return false
        }  
      } 


      function showResponse(responseText, statusText, xhr, $form) {

        $('#answer_body').html(responseText);
        Modal.Fn.hideModal('edit');
        Modal.Fn.showModal('answer');
        /*
        alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
        '\n\nThe output div should have already been updated with the responseText.'); 
        */
      }
    },

    init_smooth_scroll: function() {

      $('.header_mob a, .header a, .menu_mob a').smoothScroll({
         offset: -40,
         scrollElement: $('.wrapper')
      });
    },
    
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
        $('.ex_inner').removeClass('__active');
        $('.ex_inner[data-desc="'+desc_id+'"]').addClass('__active');
      }, function() {

        $(this).closest('.ex_item').removeClass('__hover');
        $('.ex_inner').removeClass('__active');
        $('.ex_inner.__image').addClass('__active');
      });
    },

    review: function() {
      var $slides_node = $('.slides'),
          $slides_arr = $('.slide'),
          count = $slides_arr.size(),                         // кол-во слайдов
          idx = 1,                                            // счетчик слайдов
          SLIDER_DELAY = 5000,                                // заджержка
          SLIDER_DELAY_CLICK = 10000,                          // заджержка при клике
          timer,                                              // указатель на таймер
          $control = $('.control_nav').find('li'),            // выбор слайда
          idx_control,                                        // внутрений счетчик для выбора слайда
          $dir = $('.direction_nav').find('li'),              // следующий / предыдущий слайд
          idx_dir,                                            // внутрений счетчик
          idx_active,
          slide_delay;                                        // время задержки текущего слайда

      var timer = setTimeout(slide, SLIDER_DELAY);

      // обработка выбора слайда
      $control.click(function(event) {
        $control.removeClass('active');
        $(this).addClass('active');
        idx_control = $(this).index();
        
        clearTimeout(timer);
        slide(idx_control);
      });

      // обработка кликов вперед / назад
      $dir.click(function(event) {
        idx_active = $slides_node.children('.active').index();
        if( $(this).hasClass('next') ) {
          ++idx_active >= count ? idx_dir = 0 : idx_dir = idx_active;
        }
        if( $(this).hasClass('before') ) {
          --idx_active < 0 ? idx_dir = count - 1 : idx_dir = idx_active;
        }

        clearTimeout(timer);
        slide(idx_dir, SLIDER_DELAY_CLICK);
      });

      function slide(set_idx, slide_delay) {
        !slide_delay ? slide_delay = SLIDER_DELAY : false;
        set_idx ? idx = set_idx : false;
        $slides_arr.removeClass('active');
        $control.removeClass('active');
        idx >= count ? idx = 0 : false;    
        $($control[idx]).addClass('active');
        $($slides_arr[idx++]).addClass('active');
        
        clearTimeout(timer);
        timer = setTimeout(slide, slide_delay);
      }
    }
  }
}

App.In(jQuery);