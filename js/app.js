App = {};
App = {



  In: function($) {

    $(function() {

      App.Fn.sidebar_mob();
    })
  },


  
  Fn: {
    
    sidebar_mob: function() {

      $('#nav_mob_toggle, #curtain, .menu_mob a').click(function() {

        $('html').toggleClass('open');
      });
    }
  }
}

App.In(jQuery);