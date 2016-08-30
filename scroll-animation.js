/**
 * Scroll animation for portfolio.
 */
(function($){

	var currentScroll = -1,
	browserMobile = false;

	curtains();

	$(window).load(function(){
		$('.projects_holder_outer').removeClass('masonry_with_space');
		resetPortfolioItems();

		resetProtfoliioSizes();

		$(window).scroll(function(){
			scrollContent();
		});
	});

	$(window).resize(function() {
		setTimeout(function(){
			resetProtfoliioSizes();
		}, 1000);
		clearTimeout();
	});


	function scrollContent(){
		var totalScroll = $(document).height() - $(window).height();

		if(browserMobile){
			newScroll = $(window).scrollTop();
		} else {
			if(whichBrs() == 'Safari' || whichBrs() == 'Chrome'){
				newScroll = $('body').scrollTop();
			}
			else {
				newScroll = $('html,body').scrollTop();
			}
		}

		// Show Flip Images
		jQuery('.portfolio_main_holder .mix').each(function(){
			if(newScroll + $(window).height() >= $(this).offset().top + 50
				&& currentScroll < newScroll)
					$(this).addClass('animated');
			if(!browserMobile
				&& newScroll + $(window).height() <= $(this).offset().top + 250
				&& currentScroll > newScroll)
				$(this).removeClass('animated');
		});

		currentScroll = newScroll;
		resetPortfolioItems();
	}


	function curtains() {

		var totalScroll = $(document).height() - $(window).height();

		if(browserMobile){
			newScroll = $(window).scrollTop();
		} else {
			if(whichBrs() == 'Safari' || whichBrs() == 'Chrome'){
				newScroll = $('body').scrollTop();
			}
			else {
				newScroll = $('html,body').scrollTop();
			}
		}

		$(window).scroll(function(){

		})

		// $('.full_width_inner > div.vc_row.section').css('min-height', $(window).height());

		// Show Flip Images
		// jQuery('.full_width_inner > div.vc_row.section:not(.mapadisplay)').each(function(){
		// 	var i = 1;
		// 	if(newScroll + $(window).height() >= $(this).offset().top + $(window).height()
		// 		&& currentScroll < newScroll) {
		// 			$(this).addClass('fixed_section').css('transform', 'translateY(-'+ totalScroll - (totalScroll - 1) +'px)');
		// 	}

		// 	if(!browserMobile
		// 		&& newScroll + $(window).height() <= $(this).offset().top + $(window).height()
		// 			&& currentScroll > newScroll) {
		// 				$(this).removeClass('fixed_section').css('transform', 'translateY(0px)');
		// 				i = 1;
		// 	}
		// });


	}


	function whichBrs() {
		var agt=navigator.userAgent.toLowerCase();
		if (agt.indexOf("opera")       != -1) return 'Opera';
		if (agt.indexOf("staroffice")  != -1) return 'Star Office';
		if (agt.indexOf("webtv")       != -1) return 'WebTV';
		if (agt.indexOf("beonex")      != -1) return 'Beonex';
		if (agt.indexOf("chimera")     != -1) return 'Chimera';
		if (agt.indexOf("netpositive") != -1) return 'NetPositive';
		if (agt.indexOf("phoenix")     != -1) return 'Phoenix';
		if (agt.indexOf("firefox")     != -1) return 'Firefox';
		if (agt.indexOf("chrome")      != -1) return 'Chrome';
		if (agt.indexOf("safari")      != -1) return 'Safari';
		if (agt.indexOf("skipstone")   != -1) return 'SkipStone';
		if (agt.indexOf("msie")        != -1) return 'Internet Explorer';
		if (agt.indexOf("netscape")    != -1) return 'Netscape';
		if (agt.indexOf("mozilla/5.0") != -1) return 'Mozilla';
		if (agt.indexOf('\/')          != -1) {
			if (agt.substr(0,agt.indexOf('\/')) != 'mozilla') {
				return navigator.userAgent.substr(0,agt.indexOf('\/'));
			} else return 'Netscape';
		} else if (agt.indexOf(' ') != -1)
			return navigator.userAgent.substr(0,agt.indexOf(' '));
		else return navigator.userAgent;
	}


	function resetPortfolioItems() {
		$('.portfolio_main_holder .mix').each(function(){
			$(this).attr('style', '' );
			$(this).removeClass('mix_all').removeClass('show');
		});
	}



	function resetProtfoliioSizes() {
		var i = 1; // Start with 1
		$('.portfolio_main_holder .mix').each(function(){
			var first    = $(this),
			second       = $(this).next('.mix'),
			third        = $(this).next().next('.mix'),
			firstHeight  = first.outerHeight(true),
			secondHeight = second.outerHeight(true),
			thirdHeight  = third.outerHeight(true);

			if ( i == 1 && firstHeight > secondHeight ) {
				// Set the hieght for third element
				third.height(firstHeight - secondHeight);
			}

			// Reset count if on third element. otherwise iterate
			i == 3 ? i = 1 : i++;
		});

		return false;
	}

})(jQuery);