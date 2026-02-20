jQuery(function($){
	$(window).on('scroll', function(){
		if( $(window).scrollTop()>300 ){
			//$('#sp-menu-wrapper').addClass('menu-fixed');
		} else {
			///$('#sp-menu-wrapper').addClass('menu-fixed-out').removeClass('menu-fixed');
			//$('#sp-menu-wrapper').removeClass('menu-fixed');
		}
	});
	
	$('.sp-main-menu-toggler').on('click', function(e){
		e.preventDefault();
	});

	$('.sp-main-menu-toggler').appendTo('#sp-menu');
	$('.sp-mobile-menu').appendTo('#menu');


	$('.sp-animated-number-wrapper').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$(this).find('.sp-animated-number').each(function () {
				var $this = $(this);
				$({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter));
					}
				});
			});
			$(this).unbind('inview');
		}
	});

	//Inview
	$('.sp-animation').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$(this).addClass('sp-inview');
		} else {
			$(this).removeClass('sp-inview').removeClass('sp-animation');
		}
	});

    //Remove empty article
    var content_area = $('article.post').find('.entry-content');
    if( content_area.length ) {

    	if (!content_area.html().trim().length) {
    		$('#sp-main-body-wrapper').remove();
    	};

    }

});