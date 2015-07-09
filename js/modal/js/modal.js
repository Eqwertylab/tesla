$(function() {
	
	$('.modal').css('display', 'none');

	$('[data-modal]').click(function() {

		showModal( $(this).data('modal') );
	});

	$('[data-modal-close]').click(function() {

		hideModal( $(this).data('modal-close') );
	});


	if( $('[data-modal-id="login"]').length ) {

		showModal('login');
	}

	function showModal(elem) {

		var mwindow = $('[data-modal-id='+ elem +']');

		if( mwindow.length ) {
			$('html').addClass('__modal_open');
			$(mwindow[0]).css('display', 'inline-block');
		}
	}

	function hideModal(elem) {

		var mwindow = $('[data-modal-id='+ elem +']');

		if( mwindow.length ) {
			$('html').removeClass('__modal_open');
			$(mwindow[0]).css('display', 'none');
		}
	}
});


