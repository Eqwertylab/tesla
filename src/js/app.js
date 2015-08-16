App = {};
App = {



  In: function($) {

    $(function() {

      // Сайдбар
      App.Fn.sidebar_mob();  

      // Обратный отсчет       
      App.Fn.init_countdown();

      // Всплывающие подсказки
      App.Fn.init_tooltip();

      // Плавная прокрутка
      App.Fn.init_smooth_scroll();

      App.Fn.faq();

      // Шестигранники
      App.Fn.hexagon();

      // Отзывы
      App.Fn.review();

      // Обработка форм
      App.Fn.init_form();

      // Видео
      App.Fn.init_video();

      // Фейковые уведомялки
      App.Fn.fake();

      // Живой сайт
      App.Fn.jivo();

      // Метрика
      App.Fn.yandex_metrika(document, window, "yandex_metrika_callbacks");

      // Обработка некоторых целей яндекса
      // и подготовка данных для их срабатывания
      App.Fn.yandex_target();
    })
  },


  
  Fn: {
    yandex_target: function() {

      // Установка значений целей для модальных окон
      $('[data-modal="edit"]').click(function() {
        
        var target = $(this).data('form');
        yaCounter31448083.reachGoal(target);
      });  


      // Цель: Ушли на скачивание приложения
      $('.fapp_link').click(function() {

        yaCounter31448083.reachGoal('bad-link');
      });   
    },

    yandex_metrika: function(d, w, c) {
      
      (w[c] = w[c] || []).push(function() {
          try {
              w.yaCounter31448083 = new Ya.Metrika({
                  id:31448083,
                  clickmap:true,
                  trackLinks:true,
                  accurateTrackBounce:true,
                  webvisor:true,
                  trackHash:true
              });
          } catch(e) { }
      });

      var n = d.getElementsByTagName("script")[0],
          s = d.createElement("script"),
          f = function () { n.parentNode.insertBefore(s, n); };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";

      if (w.opera == "[object Opera]") {
          d.addEventListener("DOMContentLoaded", f, false);
      } else { f(); }
    },

    jivo: function() {

      var widget_id = 'DKQFmehS7C';
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);
    },

    fake: function() {

      var TIME_MIN = 20000,      // Минимальное время перед показом
          TIME_MAX = 45000,     // Максимальное время перед показом
          TIME_SHOW = 4000,     // Время отображения
          TIME_PAUSE = 1000;    // Время перед запуском очередного отсчета 

      $.getJSON('fake.json')
        .done(function( data ) {

          App.Fake = data.fake.sort(function() {

            return Math.random() - 0.6;
          });

          fakeWork();
        });   

      function fakeWork() {

        var idx = App.FakeIdx++;

        if(App.Fake[idx] == undefined) {

          return false;
        }

        var fake = $('#fake');

        fake.find('#name').text(App.Fake[idx]['name']);
        fake.find('#city').text(App.Fake[idx]['city']);

        $('.fake').removeClass('bounceInUp animated rotateOutUpRight');

        var ran_delay = getRandom();

        setTimeout(function() {

          $('.fake').addClass('bounceInUp animated');

          removeFake();
        }, ran_delay);
      }

      function removeFake() {

        setTimeout(function() {

          $('.fake').addClass('rotateOutUpRight');

          setTimeout(fakeWork, TIME_PAUSE);
        }, TIME_SHOW);
      }

      function getRandom() {

        return Math.random() * (TIME_MAX - TIME_MIN) + TIME_MIN;
      }
    },

    init_video: function() {

      window.videojs.options.flash.swf = "video-js/video-js.swf"
      App.Fn.player = videojs('example_video_1', { "example_option": true }, function() {
        
      });
    },

    start_video: function() {

      console.log('Показываем видео');
      yaCounter31448083.reachGoal('video');

      setTimeout(function() {

        App.Fn.player.play();
      }, 1000);  
    },

    pause_video: function() {

      App.Fn.player.pause();
    },

    init_form: function() {


      /*
       * Валидация форм
       */
      
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

      /*
       * Отправка форм
       */
      $('form').ajaxForm({

        beforeSubmit: showRequest,
        complete: showResponse
      });

      function showRequest(formData, jqForm, options) { 

        if( !$(jqForm).find('input.error').length ) {

          var target = $(jqForm).data('form');


          console.log('Отправка формы: ' + target);
          yaCounter31448083.reachGoal(target);

          return true; 
        } else {

          return false
        }  
      } 

      function showResponse(responseText, statusText, xhr, $form) {

        console.log(responseText);
        yaCounter31448083.reachGoal('ty');

        // $('#answer_body').html(responseText);
        Modal.Fn.hideModal('edit');
        Modal.Fn.showModal('answer');

        setTimeout(function() {

          Modal.Fn.hideModal('answer');
        }, 5000)
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


      var time_arr = $('body').data('timer').split(',');

      for (var i = time_arr.length - 1; i >= 0; i--) {
        time_arr[i] = Number(time_arr[i]);
      };

      var final_time = new Date(
        time_arr[0],
        time_arr[1] - 1,
        time_arr[2],
        time_arr[3],
        time_arr[4]
      );

      var real_time = new Date();

      var timer = final_time - real_time / 1000 / 60 /60;

      var timerId =
      countdown(

        timer,

        function(ts) {

          $('.clock')
            .find('.hours').text(time_format(ts.hours));

          $('.clock')
            .find('.minutes').text(time_format(ts.minutes));

          $('.clock')
            .find('.seconds').text(time_format(ts.seconds));
        },

        countdown.HOURS|countdown.MINUTES|countdown.SECONDS);

      function time_format(time) {

        if(time < 10) {

          return "0" + time;
        } else {
          return time;
        }
      }
    },

    init_tooltip: function() {

      // Облако
      $('.tooltip').tooltipster({

        contentAsHTML: true,
        maxWidth: 300,
        position: 'bottom'
      });

      // Характеристики
      $('.tooltip2').tooltipster({
        animation: 'grow',
        contentAsHTML: true,
        maxWidth: 300,
        theme: 'tooltipster-noir',
        functionReady: function() {

          $('#spec_first').tooltipster('hide');
          $('#spec_first').tooltipster('option', 'autoClose', 'true');
        }   
      });

      $('#spec_first').tooltipster({

        positionTracker: true,
        maxWidth: 300,
        theme: 'tooltipster-noir',
        animation: 'grow',
        contentAsHTML: true,
        autoClose: false
      });

      $('#spec_first').tooltipster('show');
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
          SLIDER_DELAY_CLICK = 10000,                         // заджержка при клике
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

          --idx_active <= 0 ? idx_dir = count - 1 : idx_dir = idx_active;
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
  },


  FakeIdx: 0
}

App.In(jQuery);