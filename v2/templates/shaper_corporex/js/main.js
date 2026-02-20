/* ====================================
   ACYMAILING CONFIGURATION VARIABLES
   ==================================== */
var acymailing = Array();
acymailing['NAMECAPTION'] = 'Name';
acymailing['NAME_MISSING'] = 'Please enter your name';
acymailing['EMAILCAPTION'] = 'E-mail';
acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';

jQuery(function($){
	/* ====================================
	   MAIN MENU INITIALIZATION
	   ==================================== */
	function mainmenu() {
		$('.sp-menu').spmenu({
			startLevel: 0,
			direction: 'ltr',
			initOffset: {
				x: 0,
				y: 15
			},
			subOffset: {
				x: 0,
				y: 0
			},
			center: 0
		});
	}

	mainmenu();

	$(window).on('resize', function () {
		mainmenu();
	});

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

/* ====================================
   MODERN CAROUSEL SLIDER INITIALIZATION
   ==================================== */
(function() {
	function initCarousel() {
		// DEBUG: Add visible marker that JS is running
		document.body.setAttribute('data-carousel-running', 'true');
		console.log('=== CAROUSEL INIT STARTING ===');
		
		var sliderTrack = document.getElementById('sliderTrack');
		var prevBtn = document.getElementById('prevBtn');
		var nextBtn = document.getElementById('nextBtn');
		var sliderDots = document.getElementById('sliderDots');
		
		console.log('sliderTrack:', sliderTrack ? 'FOUND' : 'NOT FOUND');
		console.log('sliderDots:', sliderDots ? 'FOUND' : 'NOT FOUND');
		
		if (!sliderTrack || !sliderDots) {
			console.log('Slider elements not found');
			return;
		}
		
		var slides = sliderTrack.querySelectorAll('.slider-slide');
		var totalSlides = slides.length;
		var currentSlide = 0;
		var autoplayInterval;
		
		console.log('Carousel initialized with ' + totalSlides + ' slides');

		// Create dots
		function createDots() {
			console.log('Creating', totalSlides, 'dots');
			for (var i = 0; i < totalSlides; i++) {
				var dot = document.createElement('div');
				dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
				dot.setAttribute('data-slide', i);
				sliderDots.appendChild(dot);
			}
			console.log('Dots created. Dots container has', sliderDots.children.length, 'children');
		}

		// Update carousel
		function updateSlider() {
			var slidePercentage = 100 / totalSlides;
			var transformValue = 'translateX(-' + (currentSlide * slidePercentage) + '%)';
			sliderTrack.style.transform = transformValue;
			console.log('Applied transform:', transformValue, 'to slide', currentSlide);
			
			var dots = document.querySelectorAll('.slider-dot');
			for (var i = 0; i < dots.length; i++) {
				if (i === currentSlide) {
					dots[i].classList.add('active');
				} else {
					dots[i].classList.remove('active');
				}
			}
		}

		// Navigate to slide
		function goToSlide(n) {
			currentSlide = (n + totalSlides) % totalSlides;
			updateSlider();
		}

		// Next/prev functions
		function nextSlide() {
			goToSlide(currentSlide + 1);
		}

		function prevSlide() {
			goToSlide(currentSlide - 1);
		}

		// Autoplay
		function startAutoplay() {
			autoplayInterval = setInterval(nextSlide, 5000);
		}

		function stopAutoplay() {
			clearInterval(autoplayInterval);
		}

		// Setup event listeners
		if (prevBtn) {
			console.log('Attaching previous button handler');
			prevBtn.onclick = function() {
				console.log('Previous button clicked');
				prevSlide();
				stopAutoplay();
				startAutoplay();
			};
		}
		
		if (nextBtn) {
			console.log('Attaching next button handler');
			nextBtn.onclick = function() {
				console.log('Next button clicked');
				nextSlide();
				stopAutoplay();
				startAutoplay();
			};
		}

		// Dot click handlers
		var dots = sliderDots.querySelectorAll('.slider-dot');
		for (var i = 0; i < dots.length; i++) {
			(function(index) {
				dots[index].onclick = function() {
					goToSlide(index);
					stopAutoplay();
					startAutoplay();
				};
			})(i);
		}

		// Pause on hover
		var sliderWrapper = sliderTrack.parentElement;
		if (sliderWrapper) {
			sliderWrapper.onmouseenter = stopAutoplay;
			sliderWrapper.onmouseleave = startAutoplay;
		}

		// Start
		createDots();
		updateSlider();
		startAutoplay();
		console.log('=== CAROUSEL FULLY INITIALIZED WITH', totalSlides, 'SLIDES ===');
	}

	// Run when DOM is ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initCarousel);
	} else {
		initCarousel();
	}
})();

/* ====================================
   FLOATING TO-TOP BUTTON FUNCTIONALITY
   ==================================== */
document.addEventListener('DOMContentLoaded', function () {
	const toTopBtn = document.getElementById('sp-go-to-top');
	const toTopLink = document.querySelector('.sp-totop');
	
	if (!toTopBtn) return;

	// Show/hide button on scroll
	window.addEventListener('scroll', function () {
		if (window.pageYOffset > 300) {
			toTopBtn.classList.add('visible');
		} else {
			toTopBtn.classList.remove('visible');
		}
	});

	// Smooth scroll to top
	toTopLink.addEventListener('click', function (e) {
		e.preventDefault();
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	});
});

/* ====================================
   RESPONSIVE MENU TOGGLE
   ==================================== */
document.addEventListener('DOMContentLoaded', function() {
	var menuToggle = document.getElementById('menuToggle');
	var mainMenu = document.getElementById('sp-main-menu');
	var menuItems = mainMenu ? mainMenu.querySelectorAll('a') : [];
	
	// Toggle menu when hamburger is clicked
	if (menuToggle) {
		menuToggle.addEventListener('click', function(e) {
			e.stopPropagation();
			menuToggle.classList.toggle('active');
			mainMenu.classList.toggle('active');
		});
	}
	
	// Close menu when a menu item is clicked
	menuItems.forEach(function(item) {
		item.addEventListener('click', function() {
			if (window.innerWidth <= 768) {
				menuToggle.classList.remove('active');
				mainMenu.classList.remove('active');
			}
		});
	});
	
	// Close menu when clicking outside
	document.addEventListener('click', function(e) {
		if (window.innerWidth <= 768) {
			if (!e.target.closest('#sp-menu-wrapper')) {
				menuToggle.classList.remove('active');
				mainMenu.classList.remove('active');
			}
		}
	});
});