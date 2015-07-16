Modal = {};

Modal = {
  In: function($) {

    $(function() {

      Modal.Fn.init_modal();
    })
  },

  Fn: {

    init_modal: function() {
      
      $('.modal').css('display', 'none');

      $('[data-modal]').click(function() {

        Modal.Fn.showModal( $(this).data('modal'), $(this).data('modal-after') );
      });

      $('[data-modal-close]').click(function() {

        Modal.Fn.hideModal( $(this).data('modal-close'), $(this).data('modal-after') );
      });
    },

    showModal: function(elem, after_func) {
      
      after_func = after_func || '';
      var mwindow = $('[data-modal-id='+ elem +']');

      if( mwindow.length ) {
        $('html').addClass('__modal_open');
        $(mwindow[0]).css('display', 'inline-block');
      }

      if( after_func.length ) {

        App.Fn[after_func]();
      }
    },

    hideModal: function(elem, after_func) {
      
      after_func = after_func || '';
      var mwindow = $('[data-modal-id='+ elem +']');

      if( mwindow.length ) {
        $('html').removeClass('__modal_open');
        $(mwindow[0]).css('display', 'none');
      }

      if( after_func.length ) {

        App.Fn[after_func]();
      }
    }

  }
}

Modal.In(jQuery);