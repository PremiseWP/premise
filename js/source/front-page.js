(function($){
	$(document).ready(function(){

		// animate logo
		$(window).load(function(){
			setTimeout(function(){
				$( '.svg-logo' ).addClass( 'show' );
			}, 20 );
		});

		// animate featured content
		$( '.featured .col3' ).premiseScroll({
			offset: 150,
			onScroll: function(){
				$(this).animate({
					opacity: 1,
				}, 2000 );
				this.stopScroll();
			},
		});

		// gmap
		$( '#gmap' ).premiseGoogleMap({
			center: 'Chicago, IL',
			key: 'AIzaSyB2AYysQgEI_yXe3JUHkDhDIoJFs6LudDg',
		});

		// scroll down to section
		$( '.scroll-to-section' ).click(function(e){
			e.preventDefault();
			$('body').animate({
				scrollTop: $( $(this).attr( 'href' ) ).offset().top
			}, 1000 );
			return false;
		});

	});
}(jQuery));