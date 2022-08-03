jQuery(document).ready(function($) {
  	/**
     * Global
     */
  	$('.dark-bg').on('click', function() {
    	$('.active').removeClass('active');
        $('.site').css('left', '0');
      	$('body').css({'overflow': 'auto', width: 'auto', height: 'auto'});
        $('html').css({overflow: 'auto'});
    })
  
  	$('.cb-btn').on('click', function(){
    	$('.cb').addClass('active')
      	$('.dark-bg').addClass('active')
    })
  
  	$('.cb-form__back').on('click', function() {
    	$('.cb-form__popup').removeClass('active')
    })
  
  	$('.cb-form__popup input[type="submit"]').on('click', function() {
    	$('.cb-form__popup').removeClass('active')
    })
  
  	$('.cb__close-btn').on('click', function() {
    	$('.cb').removeClass('active')
      	$('.dark-bg').removeClass('active')
      	$('.cb-form__popup').removeClass('active')
    })
  
  	$('.cb-form__popup-btn').on('click', function() {
    	$('.cb-form__popup').addClass('active')
    })

    /**
     * FRONT PAGE
     */

    if($('.front-page .intro-slider').length)
    {
        $('.front-page .intro-slider').slick({
            dots: true,
            infinite: true,
            speed: 1000,
            fade: true,
            cssEase: 'linear',
          	adaptiveHeight: true,
            arrows: true,
            prevArrow: '<button class="slider-btn slider-btn--prev"><span></span></button>',
            nextArrow: '<button class="slider-btn slider-btn--next"><span></span></button>',
            autoplay: true,
            autoplaySpeed: 2000,
        })
    }

	if(screen.availWidth > 968) {
    	$('.preview-slider').scrollingCarousel();
    } else {
    	$('.preview-slider').slick({
        
        })
    }	

    /**
     * SERVICES PAGE
     */

    if($('.services-page .services-intro__slider').length)
    {
        $('.services-page .services-intro__slider').slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
        })
    }

    if($('.services-page .services-page__cards-slider').length)
    {
        $('.services-page .services-page__cards-slider').slick({
            slidesToShow: 3,
            responsive: [
                {
                  breakpoint: 968,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 680,
                  settings: {
                    slidesToShow: 1
                  }
                }
            ]
        })
    }

    if($('.services-page .services-page__slider').length)
    {
        $('.services-page .services-page__slider').slick({
            slidesToShow: 3,
            responsive: [
                {
                  breakpoint: 968,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 680,
                  settings: {
                    slidesToShow: 1
                  }
                }
            ]
        })
    }

    /**
     * PROJECT POST
     */
    if($('.project-post-slider').length)
    {
        $('.project-post-slider').slick({
            arrows: true,
            prevArrow: '<button class="project-post-slider__control project-post-slider__control-prev"></button>',
            nextArrow: '<button class="project-post-slider__control project-post-slider__control-next"></button>',
            speed: 1000,
            fade: true,
            cssEase: 'linear',
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
        })
    }

    /**
     * PERSPECTIVE PAGE
     */
    if($('.perspective-page-slider').length)
    {
        $('.perspective-page-slider').slick({
            arrows: true,
            prevArrow: '<button class="perspective-page-slider__control perspective-page-slider__control-prev"></button>',
            nextArrow: '<button class="perspective-page-slider__control perspective-page-slider__control-next"></button>',
        })
    }

    /**
     * HEADER MENU
     */
    const headerNav = $('.header-bottom')
    const headerNavOffset = headerNav.offset()
    $(window).scroll(function() {
        if($(this).scrollTop() > headerNavOffset.top) {
            headerNav.addClass('fix')
            $('.header-top').css('padding-bottom', '57px');
        } else if($(this).scrollTop() < headerNavOffset.top + 57) {
            headerNav.removeClass('fix')
            $('.header-top').css('padding-bottom', '0');
        }
    })

    /**
     * LANG LIST
     */
    if($('.lang-active').length)
    {
        $('.lang-active').on('click', function() {
            const langList = $('.lang-list')
            langList.hasClass('active') ? langList.removeClass('active') : langList.addClass('active')
        })
    }
  
  	/**
     * Header Mobile Menu
     */
  	
  	if(screen.availWidth <= 968) {
      	const menuWrapper = $('.header-bottom');
    	$('.header-top__menu-btn').on('click', function() {
        	menuWrapper.addClass('active');
          	$('.site').css('position', 'relative');
          	$('.site').css('left', '400px');
          	$('body').css({'overflow': 'hidden', width: '100vw', height: '100vh'});
          	$('html').css({overflow: 'hidden'});
          	$('.dark-bg').addClass('active');
        })
      
      	$('.menu-item-has-children').on('click', function() {
        	$('.menu-item-has-children > .sub-menu').addClass('active')
          	$('.header-bottom__back-btn').addClass('active')
        })
      
      	$('.header-bottom__back-btn').on('click', function() {
        	$('.menu-item-has-children > .sub-menu').removeClass('active')
          	$('.header-bottom__back-btn').removeClass('active')
        })
      	
      	$('.header-bottom__close-svg').on('click', function() {
        	$('.active').removeClass('active');
        	$('.site').css('left', '0');
      		$('body').css({'overflow': 'auto', width: 'auto', height: 'auto'});
        	$('html').css({overflow: 'auto'});
        })
    }
  
  	if($('.project-post-slider').length) {
    	const slider = $('.project-post-slider')
        
        slider.on('click', function(e) {
          	if($(e.target).hasClass('project-post-slide__img')) {
              	const activeSlide = $(e.target).parents('.slick-slide').attr('data-slick-index')
                console.log(activeSlide)
            	slider.slick('unslick')
        		slider.addClass('full-screen active')
          		slider.slick({
            		arrows: true,
            		prevArrow: '<button class="project-post-slider__control project-post-slider__control-prev"></button>',
            		nextArrow: '<button class="project-post-slider__control project-post-slider__control-next"></button>',
            		speed: 1000,
            		fade: true,
            		cssEase: 'linear',
            		dots: true,
                  	initialSlide: activeSlide,
            	})
              	slider.slick('slickGoTo', activeSlide, true)
          		$('.dark-bg').addClass('active')
            }
        })
      
      	$('.project-post-slider__close-btn').on('click', function() {
        	if(slider.hasClass('full-screen')) {
            	slider.removeClass('full-screen active')
              	slider.slick('unslick')
          		slider.slick({
                	 arrows: true,
            		 prevArrow: '<button class="project-post-slider__control project-post-slider__control-prev"></button>',
            		 nextArrow: '<button class="project-post-slider__control project-post-slider__control-next"></button>',
            		 speed: 1000,
            		 fade: true,
            		 cssEase: 'linear',
            		 dots: true,
            		 autoplay: true,
            		 autoplaySpeed: 2000,
                })
              $('.dark-bg').removeClass('active')
            }
        })
      
      	$('.dark-bg').on('click', function(){
        	if(slider.hasClass('full-screen')) {
            	slider.removeClass('full-screen')
              	slider.slick('unslick')
          		slider.slick({
                	 arrows: true,
            		 prevArrow: '<button class="project-post-slider__control project-post-slider__control-prev"></button>',
            		 nextArrow: '<button class="project-post-slider__control project-post-slider__control-next"></button>',
            		 speed: 1000,
            		 fade: true,
            		 cssEase: 'linear',
            		 dots: true,
            		 autoplay: true,
            		 autoplaySpeed: 2000,
                })
            }
        })
    }
});
	