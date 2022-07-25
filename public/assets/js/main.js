$(window).on('load', () => {

    //_________FEEDBACK _____________

    $('.feedback-open').click(e => {
        e.preventDefault()
        $('.feedback').fadeIn(700)
    })
    
    $('.feedback-close').click(e => {
        e.preventDefault()
        $('.feedback').fadeOut(700)
    })
    

    $('.feedback').click(e => {
        let div = $('.feedback-content')
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.feedback').fadeOut(600);
        }
    })


    //_______MAIN ARROW___________

    $('.main-btn').click(() => {
        $('html').animate({
            scrollTop: $(window).height()/1.08
        }, 1000);
    })

    //_______CONSORT GALLERY___________

    $('.consort-list li').click(function() {
        let index = $(this).index()
        consortIndex = index

        $('.consort-gallery__img img').css('z-index', '2').addClass('hide')
        $('.consort-gallery__img img').eq(index).css('z-index', '3').fadeIn(400).removeClass('hide')

        setTimeout(() => {
            $('.consort-gallery__img .hide').hide() 
        }, 400)
    })

    let consortIndex = 0
    let consortLength = $('.consort-list li').length

    setInterval(() => {
        consortIndex++
        if(consortIndex == consortLength) {
            consortIndex = 0
        }
        $('.consort-gallery__img img').css('z-index', '2').addClass('hide')
        $('.consort-gallery__img img').eq(consortIndex).css('z-index', '3').fadeIn(400).removeClass('hide')

        setTimeout(() => {
            $('.consort-gallery__img .hide').hide() 
        }, 400)
    }, 3000)


    // _________EXP CAROUSEL____________

    $('.exp-gallery__carousel').owlCarousel({
        dots: false,
        nav: false,
        loop: true,
        smartSpeed: 700,
        items: 1,
        autoWidth: true,
        autoplay: true,
        autoplayTimeout: 4000,
    })


    $('.exp-gallery__arrows .arrow-left').click(() => {
        $('.exp-gallery__carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.exp-gallery__arrows .arrow-right').click(() => {
        $('.exp-gallery__carousel').trigger('next.owl.carousel', [700]);
    })




    // _________PROJECTS CAROUSEL____________

    $('.projects-carousel').owlCarousel({
        dots: false,
        nav: false,
        smartSpeed: 1500,
        autoplay: true,
        autoplayTimeout: 7000,
        items: 1,
        loop: true,
    })


    $('.projects-carousel__arrows .arrow-left').click(() => {
        $('.projects-carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.projects-carousel__arrows .arrow-right').click(() => {
        $('.projects-carousel').trigger('next.owl.carousel', [700]);
    })

    // ________DIAG___________

    let currentDiag = 0
    setInterval(() => {
        currentDiag++
        if(currentDiag == 6) {
            currentDiag = 1
        }
        $('.management-item').removeClass('active')
        $(`${'.management-item'+currentDiag}`).addClass('active')
    }, 2000)


    //_______TIME COUNTER_________


    let countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

    let x = setInterval(function() {

        let now = new Date().getTime();

        let distance = countDownDate - now;

        let months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30))
        let days = Math.floor(distance % (1000 * 60 * 60 * 24 * 30) / (1000 * 60 * 60 * 24))
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
        let seconds = Math.floor((distance % (1000 * 60)) / 1000)

        $('.invest-counter .month span').text(months)
        $('.invest-counter .day span').text(days)
        $('.invest-counter .hour span').text(hours)
        $('.invest-counter .minute span').text(minutes)
        $('.invest-counter .sec span').text(seconds)

    }, 1000)


    //___________FOOTER-TOP___________

    $('.footer-top').click(() => {
        $('html').animate({
            scrollTop: 0
        }, 2000);
    })


    // PARALLAX

    $('.jarallax').jarallax()


    // _________PROJECTS CAROUSEL____________

    $('.location-info__carousel').owlCarousel({
        dots: false,
        nav: false,
        loop: true,
        smartSpeed: 1500,
        autoplay: true,
        autoplayTimeout: 4000,
        items: 1,
    })


    $('.location-info__arrows .arrow-left').click(() => {
        $('.location-info__carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.location-info__arrows .arrow-right').click(() => {
        $('.location-info__carousel').trigger('next.owl.carousel', [700]);
    })



    // ____________BUTTON ANIMATION_____________
	

	if($(window).width() > 768.98) {

		$(document).on('mousemove touch', function(e){  
		  $('.invest-already__btn').each(function() {
		    magnetize(this, e); 
		  });
		});

		function magnetize(el, e){
		  var mX = e.pageX,
		      mY = e.pageY;
		  const item = $(el);
		  
		  const customDist = item.data('dist') * 20 || 120;
		  const centerX = item.offset().left + (item.width()/2);
		  const centerY = item.offset().top + (item.height()/2);
		  
		  var deltaX = Math.floor((centerX - mX)) * -0.35;
		  var deltaY = Math.floor((centerY - mY)) * -0.35;
		  
		  var distance = calculateDistance(item, mX, mY);
		    
		  if(distance < customDist){
		    TweenMax.to(item, 0.5, {y: deltaY, x: deltaX, scale:1.1});
		    item.addClass('magnet');
		  }
		  else {
		    TweenMax.to(item, 0.6, {y: 0, x: 0, scale:1});
		    item.removeClass('magnet');
		  }
		}

		function calculateDistance(elem, mouseX, mouseY) {
		  return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
		}
	}


    //_________SOLUTION-INVEST _____________

    $('.solution__btn').click(e => {
        e.preventDefault()
        $('.solution-invest').fadeIn(700)
    })
    
    $('.solution-invest__close').click(e => {
        e.preventDefault()
        $('.solution-invest').fadeOut(700)
    })
    

    $('.solution-invest').click(e => {
        let div = $('.solution-invest__content')
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.solution-invest').fadeOut(600);
        }
    })


    // _________NEWS CAROUSEL____________

    $('.news-carousel').owlCarousel({
        dots: false,
        nav: false,
        loop: true,
        smartSpeed: 700,
        items: 1,
        autoWidth: true,
        autoplay: true,
        autoplayTimeout: 4000,
    })


    $('.news__arrows .arrow-left').click(() => {
        $('.news-carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.news__arrows .arrow-right').click(() => {
        $('.news-carousel').trigger('next.owl.carousel', [700]);
    })


    $('.header-news').click(function(e) {
        e.preventDefault()
        let id = $(this).attr('href')
        $('html').animate({
            scrollTop: $(id).offset().top
        }, 1000);
        $('.mobile-menu').slideUp(600)
    });




    //__________WOW____________

    new WOW({
        offset: 50,
        mobile: false, 
    }).init();


    //_______NICESCROLL___________

    if($(window).width() > 768) {
        $('body').niceScroll({
            scrollspeed: 80,
        });
    }


    //________MOBILE-MENU____________

    $('.header-mobile').click(() => {
        $('.mobile-menu').slideDown(600)
    })

    $('.mobile-menu__close').click(() => {
        $('.mobile-menu').slideUp(600)
    })
    


})