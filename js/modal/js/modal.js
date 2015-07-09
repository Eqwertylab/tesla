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

        Modal.Fn.showModal( $(this).data('modal') );
      });

      $('[data-modal-close]').click(function() {

        Modal.Fn.hideModal( $(this).data('modal-close') );
      });
    },

    showModal: function(elem) {
      
      var mwindow = $('[data-modal-id='+ elem +']');

      if( mwindow.length ) {
        $('html').addClass('__modal_open');
        $(mwindow[0]).css('display', 'inline-block');
      }

    },

    hideModal: function(elem) {
      
      var mwindow = $('[data-modal-id='+ elem +']');

      if( mwindow.length ) {
        $('html').removeClass('__modal_open');
        $(mwindow[0]).css('display', 'none');
      }
    }

  }
}

Modal.In(jQuery);