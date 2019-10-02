/*
##== Plugins Activation
		#= Sticky Header
		#= Table Sorter
		#= Mainmenu
		#= Hero slides
		#= Review / Testimonial slides
		#= widget Testimonial
		#= service  slides
		#= Agent-slides
		#= Agent-slides Style 2
		#= featured-slidess
		#= Brand slides
		#= Brand slider Style 2
		#= Case Studies Slides
		#= Blog Post Slides
		#= Case Studies Slides
		#= Creative Service Slider
		#= Project Isotope
		#= CountDown
		#= Scroll To Top
		#= Magnific image Popup
		#= magnific videos popup

##== Graph
		#= BarGraph
		#= BarGraph Style Two
		#= Polar Graph
		#= RadarChart

##== Custom Js
		#= Header search
		#= Offcanvas Menu

 ========== Js INDEX Table End ============
*/
(function ($) {
    "use strict";

	// Sticky Header
 		function sticky_header(){
	    	$(".sticky-on").sticky({topSpacing: 0});

	 		}
 		sticky_header();

	$(window).scroll(function(){
		if($(window).scrollTop() > 0){
			$('.big-logo').addClass('d-none ');
			$('.small-logo').removeClass('d-none').addClass('shadowed-logo')
		}
		else{
			$('.big-logo').removeClass('d-none');
			$('.small-logo').addClass('d-none')
		}
		return false;
	});

 		// Language switcher
	    /*function languageSwitcher() {
	        if ($("#polyglot-language-options").length) {
	            $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
	                effect: 'slide',
	                animSpeed: 150,
	                testMode: true,
	                onChange: function(evt) {
	                    // alert("The selected language is: " + evt.selectedItem);
	                }
	            });
	        };
	    }
	    languageSwitcher();*/


	    // Table Sorter
	    $('table').tablesorter({
          widgets        : ['zebra', 'columns'],
          usNumberFormat : false,
          sortReset      : true,
          sortRestart    : true
        });

	    // Hero slides
	    function hero_slider(){
	        $(".hero-slider").owlCarousel({
	            items: 1,
	            loop:true,
	            autoplay:false,
	            smartSpeed: 2000,
	            margin: 0,
	            dots:false,
	            nav: true,
	            navText:['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
	            responsive:{
	                0: {
	            		nav: false,
	                	dots:true
	                },
	                575: {
	            		nav: false,
	                	dots:true
	                },
	                800: {
	                	dots:false
	                },
	                1000: {
	                    dots:false
	                }, 
	                1400: {
	                    dots:false
	                }
	            }
	        });
	    }
	    hero_slider();

	   // Hero slides Style 2
        $("#hero-slider-style2").vegas({
        overlay: true,
        autoHeight: true,
        transition: 'fade',
        transitionDuration: 2000,
        delay: 4000,
        color: '#000',
        animation: 'random',
        animationDuration: 20000,
        slides: [
          {
            src: 'img/hero/image-4.jpg'
          },
          {
            src: 'img/hero/image-1.jpg'
          },
          {
            src: 'img/hero/image-2.jpg'
          }
        ]
      });


	   // Pricing Slider
      /*var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        loop: !0,
        mode:'horizontal',
        grabCursor: true,
        centeredSlides: !0,
        parallax: !0,
        grabCursor: true,
        spaceBetween: 0,
        effect: 'coverflow',
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate:  5,
          stretch: 0,
          depth: 98,
          modifier: 1,
          slideShadows : !1,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: !0
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });*/


    	// Home Six parallaxbg
    	$('#hero-slider-style6').parallax("50%", 0.5);
    	$('.service-style4').parallax("50%", 0.5);
    	$('.cta-section').parallax("50%", 0.4);
    	$('.funfact-review').parallax("50%", 0.4);

	    // Service Content Slides
	    function service_content_slides(){
	        $("#service-content-slides").owlCarousel({
	            items: 2,
	            loop:true,
	            smartSpeed: 2000,
	            autoplay:true,
	            stagePadding: 50,
	            margin: 20,
	            dots:false,
	            nav: false,
	            responsive:{
	                0: {
	                    items: 1,
	            		margin: 0,
	            		stagePadding: 0
	                },
	                767: {
	            		margin: 20,
	            		stagePadding: 0,
	                    items: 2
	                },
	                800: {
	                    items: 2
	                },
	                1000: {
	                    items: 2
	                },
	                1400: {
	                    items: 3
	                }
	            }
	        });
	    }
	    service_content_slides();


	    // Review / Testimonial slides
	    function testimonials_box(){
	        $(".testimonials-box").owlCarousel({
	            items: 1,
	            loop:false,
	            smartSpeed: 3000,
	            autoplay: true,
	            margin: 0,
	            dots:true,
	            nav: false,
	            navText:['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
	            responsive:{
	                800: {
	                    items:1
	                },
	                1000: {
	                    items: 1
	                }
	            }
	        });
	    }
	    testimonials_box();

	    // widget Testimonial
	    function widget_testimonial(){
	        $(".widget-testimonial").owlCarousel({
	            items: 1,
	            loop:false,
	            autoplay:false,
	            margin: 0,
	            dots:true,
	            nav: false
	        });
	    }
	    widget_testimonial();


	    //service  slides
	    function service_slider(){
	        $(".service-slider").owlCarousel({
	            items: 3,
	            loop: true,
	            smartSpeed: 2000,
	            autoplay:false,
	            margin: 30,
	            dots: true,
	            nav: false,
	            navText:['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
	            responsive:{
	                 0: {
	                    items:1
	                },
	                 640: {
	                    items:2
	                },
	                800: {
	                    items:2
	                },
	                1000: {
	                    items: 3
	                }
	            }
	        });
	    }
	    service_slider();


	    // Agent-slides
	    function js_agent_slides(){
	        $(".js-agent-slides").owlCarousel({
	            items: 1,
	            loop:false,
	            autoplay:false,
	            margin: 0,
	            smartSpeed: 2000,
	            dots:false,
	            nav: true,
	            navText:['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
	        });
	    }
	    js_agent_slides();



	    // Agent-slides Style 2
	    function js_agent_slides_style2(){
	        $(".js-agent-slides-style2").owlCarousel({
	            items: 2,
	            loop:false,
	            autoplay:true,
	            margin: 30,
	            smartSpeed: 3000,
	            dots:false,
	            nav: false,
	            navText:['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
	            responsive:{
	                0: {
	                    items:1
	                },
	                800: {
	                    items:2
	                },
	                1000: {
	                    items: 2
	                }
	            }
	        });
	    }
	    js_agent_slides_style2();

	    // featured-slidess
	    function featured_slides(){
	        $("#featured-slides").owlCarousel({
	            items: 3,
	            loop:false,
	            autoplay:false,
	            margin: 30,
	            smartSpeed: 2000,
	            dots:false,
	            nav: true,
	            navText:['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
	            responsive:{
	                480: {
	                    items:1
	                },
	                800: {
	                    items:2
	                },
	                1000: {
	                    items: 3
	                }
	            }
	        });
	    }
	    featured_slides();


	    // Review / Testimonial slides
	    function js_testimonial_slides(){
	        $("#js-testimonial-slides").owlCarousel({
	            items: 1,
	            loop:false,
	            autoplay:false,
	            margin: 0,
	            dots:true,
	            nav: false,
	            navText:['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
	        });
	    }
	    js_testimonial_slides();

	    // Brand slides
	    function brand_slides(){
	        $(".brand-slides").owlCarousel({
	            items: 5,
	            loop:false,
	            autoplay:false,
	            margin: 0,
	            dots:false,
	            nav: false,
	            responsive:{
	                0: {
	                    items:2
	                },
	                480: {
	                    items:2
	                },
	                800: {
	                    items:3
	                },
	                900: {
	                    items:4
	                },
	                1000: {
	                    items: 5
	                }
	            }
	        });
	    }
	    brand_slides();


	    // Brand slider Style 2
	    function brand_slider2(){
	        $(".brand-slider2").owlCarousel({
	            items: 3,
	            loop:true,
	            smartSpeed: 2000,
	            autoplay:true,
	            margin: 0,
	            dots:false,
	            nav: false,
	            responsive:{
	                0: {
	                    items:2
	                },
	                480: {
	                    items:2
	                },
	                800: {
	                    items:3
	                },
	                900: {
	                    items:3
	                },
	                1000: {
	                    items: 3
	                }
	            }
	        });
	    }
	    brand_slider2();

	    // Case Studies Slides
	    function case_studies_slides(){
	        $(".case-studies-slides").owlCarousel({
	            items: 1,
	            loop:false,
	            autoplay:false,
	            margin: 30,
	            dots:false,
	            smartSpeed: 2000,
	            slideTransition:10,
	            nav: true,
	            navText:['<i class="pe-7s-angle-left">', '<i class="pe-7s-angle-right"></i>'],
	            responsive:{
	                0: {
	                    items:1,
	            		nav: false,
	            		dots:true
	                },
	                767: {
	                    items:1,
	            		nav: false,
	            		dots:true
	                },
	                1000: {
	                    items: 1
	                }
	            }
	        });
	    }
	    case_studies_slides();

	    // Blog Post Slides
	    function feedback_slide(){
	        $("#feedbacks").owlCarousel({
	            items: 4,
	            loop:true,
	            autoplay:false,
	            margin: 40,
	            dots:false,
				center:false,
	            // smartSpeed: 2000,
	            slideTransition:10,
                stagePadding:20,
	            nav: true,
	            navText:['<span class="fa fa-chevron-left fa-2x"></span>','<span class="fa fa-chevron-right fa-2x"></span>'],
	            responsive:{
	                0: {
	                    items:1
	                },
	                480: {
	                    items:1
	                },
	                640: {
	                    items:1
	                },
	                800: {
	                    items:2
	                },
	                1000: {
	                    items: 3
	                },
					1400: {
						items: 4
					}
	            }
	        });
	    }
		feedback_slide();

    function license_slide(){
        $("#licenes").owlCarousel({
            items: 4,
            loop:true,
            autoplay:false,
            margin: 40,
            dots:false,
            center:true,
            // smartSpeed: 2000,
            slideTransition:10,
            stagePadding:20,
            nav: true,
            navText:['<span class="fa fa-chevron-left fa-2x"></span>','<span class="fa fa-chevron-right fa-2x"></span>'],
            responsive:{
                0: {
                    items:1
                },
                480: {
                    items:1
                },
                640: {
                    items:1
                },
                800: {
                    items:2
                },
                1000: {
                    items: 3,
					margin: 30
                },
                1400: {
                    items: 4
                }
            }
        });
    }
    license_slide();

	function blog_post_slide(){
		$(".blog-post-slide").owlCarousel({
			items: 8,
			loop:true,
			autoplay:false,
			margin: 30,
			dots:false,
			center:true,
			// smartSpeed: 2000,
			slideTransition:10,
			nav: true,
			navText:['<span class="fa fa-chevron-left fa-2x"></span>','<span class="fa fa-chevron-right fa-2x"></span>'],
			responsive:{
				0: {
					items:1
				},
				480: {
					items:2
				},
				640: {
					items:3
				},
				800: {
					items:3
				},
				1000: {
					items: 7
				},
				1400: {
					items: 7
				}
			}
		});
	}
	blog_post_slide();


		// Creative Service Slider

	    function creative_services_slider(){
	        $("#creative-services-slider").owlCarousel({
	            items: 3,
	            loop:false,
	            autoplay:false,
	            margin: 20,
	            dots:true,
	            smartSpeed: 2000,
	            slideTransition:10,
	            nav: false,
	            responsive:{
	                0: {
	                    items:1
	                },
	                480: {
	                    items:1
	                },
	                640: {
	                    items:1
	                },
	                767: {
	                    items:2
	                },
	                800: {
	                    items:2
	                },
	                1000: {
	                    items: 3
	                },
	                1400: {
	                    items: 4
	                }
	            }
	        });
	    }
	    creative_services_slider();



	    // Project Isotope
	    $('.project-area').imagesLoaded(function() {
	        // filter items on button click
	        $('.project-menu').on('click', 'span', function() {
	            var filterValue = $(this).attr('data-filter');
	            $grid.isotope({
	                filter: filterValue
	            });
	        });

	        //init Isotope
	        var $grid = $('.grid').isotope({
	            itemSelector: '.grid-item',
	            percentPosition: true,
	            masonry: {
	                // use outer width of grid-sizer for columnWidth
	                columnWidth: '.grid-item',
	            }
	        });
	    });

	    //for menu active class
	    $('.project-menu > span').on('click', function(event) {
	        $(this).siblings('.active').removeClass('active');
	        $(this).addClass('active');
	        event.preventDefault();
	    });


	    // CountDown
	    $('.counter').counterUp({
	        delay: 20,
	        time: 500
	    });


	    // Scroll To Top
		if ($('.scrolltop').length > 0) {
			 $(".scrolltop").on("click",function(){
				$('html,body').animate({scrollTop:0},1000);
			});

			$(window).scroll(function(){
				if($(window).scrollTop() > 700){
					$(".scrolltop").fadeIn();
				}
				else{
					$(".scrolltop").fadeOut();
				}
				return false;
			});
		}

		// Magnific image Popup
	    var imagePopup = $('.image-popup');
	    imagePopup.magnificPopup({
	        type: 'image',
	        tLoading: 'Loading image #%curr%...',
	        gallery: {
	            enabled: true
	        }
	    });

	    // Offcanvas Menu
	    $(".js-offcanvas-close").on("click",function(){
          $("#js_offcanvas_menu").css('right' , '-500px');
        });
	$("#canvas_modal").on("click",function(){
		$("#js_offcanvas_menu").css('right' , '-500px');
	});
	    $("#menu-button0").on("click",function () {
			$("#js_offcanvas_menu").css('right' , '0');
		});

        $("span#sidebar_menu_icon").on("click",function(){
            $("#js_offcanvas_menu").css('right' , '0');
        });
	$(".dropdown-menu li a").click(function(){
		var selText = $(this).text();
		$(this).parents('.btn-group').find('a.btn').html(selText);
	});
	var countFiles = 1,
		$body = $('body'),
		typeFileArea = [ 'png','jpg', 'jpeg', 'bmp','pdf'],
		coutnTypeFiles = typeFileArea.length;

	//create new element
	$body.on('click', '.files-wr label', function() {
		var wrapFiles = $('.files-wr'),
			// newFileInput;

		countFiles = wrapFiles.data('count-files') + 1;
		wrapFiles.data('count-files', countFiles);

		/*newFileInput = '<div class="one-file"><label for="file-' + countFiles + '"></label>' +
			'<input type="file" name="file-' + countFiles + '" id="file-' + countFiles + '"><div class="file-item hide-btn">' +
			'<span class="file-name"></span><span class="btn btn-del-file">x</span></div></div>';
		wrapFiles.prepend(newFileInput);*/
	});

	//show text file and check type file
	$body.on('change', 'input[type="file"]', function() {
		var $this = $(this),
			valText = $this.val(),
			fileName = valText.split(/(\\|\/)/g).pop(),
			fileItem = $this.parent().siblings('.file-item'),
			beginSlice = fileName.lastIndexOf('.') + 1,
			typeFile = fileName.slice(beginSlice),
			fileLarge = 'Слишком большой размер файла',
			fileMIME = 'Файл должен быть в формате .jpg, .jpeg, .bmp, .png, .pdf',
			osagoInput = $('#docs input[type=file]').val();

		fileItem.find('.file-name').text("Файл загружен");

		if (valText != '') {
			fileItem.removeClass('hide-btn');
			// fileItem.find($('.file-item span.hide-btn')).removeClass('hide-btn');
			fileItem.find($('.file-item span.hide-btn img.img_error')).addClass('d-none');
			fileItem.find($('.file-item span.hide-btn img.empty')).addClass('d-none');
			fileItem.find($('.file-item span.hide-btn img.img_ok')).removeClass('d-none');
			$this.parent().removeClass('refresh');

			for (var i = 0; i < coutnTypeFiles; i++) {


				if (typeFile === typeFileArea[i]) {

					// $this.parent().addClass('has-mach');
					fileItem.find($('.file-item span.hide-btn img.img_error')).addClass('d-none');
					fileItem.find($('.file-item span.hide-btn img.empty')).addClass('d-none');
					fileItem.find($('.file-item span.hide-btn img.img_ok')).removeClass('d-none');
					$this.parent().removeClass('refresh');

				}


			}
			if(typeFile !== 'jpg' && typeFile !== 'jpeg' && typeFile !== 'png' && typeFile !== 'bmp' && typeFile !== 'pdf'){
				fileItem.find($('.file-item span.hide-btn img.empty')).addClass('d-none');
				fileItem.find($('.file-item span.hide-btn img.img_ok')).addClass('d-none');
				fileItem.find($('.file-item span.hide-btn img.img_error')).removeClass('d-none');
				fileItem.find('.file-name').text(fileMIME).css('color','#EB5757','!important');
				$this.parent().addClass('refresh');
				$('button.submit').prop('disabled',true)
			}
			else {
				fileItem.find('.file-name').css('color','#828282','!important');
				$('button.submit').prop('disabled',false)
			}
		} else {
			fileItem.addClass('hide-btn');
		}
		fileItem.find('.file-name.file-large').text(fileLarge).css('color','#EB5757','!important');

		if($this[0].files[0].size > 10485760){
			fileItem.find($('.file-item span.hide-btn img.empty')).addClass('d-none');
			fileItem.find($('.file-item span.hide-btn img.img_ok')).addClass('d-none');
			fileItem.find($('.file-item span.hide-btn img.img_error')).removeClass('d-none');
			fileItem.find('.file-name').text("Ошибка загрузки");

				$this.parent().addClass('refresh');

		}

	});

	//remove file
	$body.on('click', '.btn-del-file', function() {
		var elem = $(this).closest('.one-file');
		elem.fadeOut(400);
		setTimeout(function() {
			elem.remove();
		}, 400);
	});

})(jQuery);
