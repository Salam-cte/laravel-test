<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
{{-- <title>Matensa</title> --}}

    {!! SEO::generate() !!}
    
    <!-- Vendor CSS Files -->
     <!-- Vendor CSS Files -->
     <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css?=v11')}}">
     <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/transition.css')}}">
	

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <link rel="stylesheet" type="text/css" href="https://nashio.github.io/star-rating-svg/src/css/star-rating-svg.css" media="print" onload="this.media='all'" >

</head>
<?php $method = Route::currentRouteName(); ?>

<body  class="page-<?php echo $method;?> <?php if($method == '') {?>page-load home-page<?php } ?> page_onload">

<div class="main-content">
     @include('blocks.header') 
    @yield('content')
    @include('blocks.footer')   
</div>
    <!-- Vendor JS Files -->
    <script>
        var loading_text = 'Loading...';
    </script>
  

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/head.js')}}"></script>
    <script src="https://nashio.github.io/star-rating-svg/src/jquery.star-rating-svg.js"></script>
	
   <!--  <script src="{{ asset('js/jquery-2.2.1.min.js')}}"></script>-->
	<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <script src="{{asset('js/jquery.scrollify.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>


    </body>
    <script>
        // if ($(window).width() < 960) {
        //     // $('.inner-menu-header').css('visibility','hidden');
        //     $('.inner-menu-header').css('float','none');

        //     $('.logo').css('text-align','center');
        // }
        $('.slider-container').slick({
        dots: false,
        infinite: true,
        arrows: false,
        speed: 700,
        fade: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        cssEase: 'linear',
        responsive: [
        {
        breakpoint: 1024,
        settings: {
        slidesToShow: 2,
        infinite: true,
        dots: false
        }
        },
        {
        breakpoint: 600,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
        }]
        
        });

        $(".stars").starRating({
            totalStars: 5,
            starSize: 25,
            emptyColor: 'lightgray',
            activeColor: '#FF5F7E',
            readOnly: true,
            useGradient: false
        });
		
		
		var click=true;
		let dots = 9;
		let sliderElem = document.querySelector('.slider');
		let dotElems = sliderElem.querySelectorAll('.slider__dot');
		let indicatorElem = sliderElem.querySelector('.slider__indicator');

		Array.prototype.forEach.call(dotElems, dotElem => {
            
			dotElem.addEventListener('click', e => {
				let currentPos = parseInt(sliderElem.getAttribute('data-pos'));
        
				let newPos = parseInt(dotElem.getAttribute('data-pos'));

				let newDirection = newPos > currentPos ? 'right' : 'left';
				let currentDirection = newPos < currentPos ? 'right' : 'left';

				indicatorElem.classList.remove(`slider__indicator--${currentDirection}`);
				indicatorElem.classList.add(`slider__indicator--${newDirection}`);
				sliderElem.setAttribute('data-pos', newPos);
			});
		});

        function doScrollDotsEffect(){

			var WindowHeight = $(window).height();
			var scrollTop = $(window).scrollTop();
			$('.slider__slide').each(function () {
				var Obj = $(this);
				var ObjTopPos = Obj.offset().top-WindowHeight*0.5;
				var ObjTopPosMax=ObjTopPos+Obj.height();
				var currentPost=$('#first');
				if($('.change-dots-style').length>0){
					var currentPost=$('.change-dots-style');
				}
				if (scrollTop >= ObjTopPos &&  scrollTop<ObjTopPosMax) {
					if (!Obj.hasClass('change-dots-style')) {
						let currentPos = parseInt(currentPost.attr('data-pos'));
						$('.slider__slide').removeClass('change-dots-style');
						Obj.addClass('change-dots-style');
						let newPos = parseInt(Obj.attr('data-pos'));
						let newDirection = newPos > currentPos ? 'right' : 'left';
						let currentDirection = newPos < currentPos ? 'right' : 'left';
						indicatorElem.classList.remove(`slider__indicator--${currentDirection}`);
						indicatorElem.classList.add(`slider__indicator--${newDirection}`);
						sliderElem.setAttribute('data-pos', newPos);
						if(this.getAttribute('id')=="third" || this.getAttribute('id')=="fifth")
						{
							var dot_elements = document.getElementsByClassName('slider__dot'); // get all elements
							for(var i = 0; i < dot_elements.length; i++){
								dot_elements[i].style.backgroundColor = "#2d097663";
							}
							var indicator_elements = document.getElementsByClassName('slider__indicator'); // get all elements
							for(var i = 0; i < indicator_elements.length; i++){
								indicator_elements[i].style.backgroundColor = "#2f017b";
							}
						}
						else{
							var dot_elements = document.getElementsByClassName('slider__dot'); // get all elements
							for(var i = 0; i < dot_elements.length; i++){
								dot_elements[i].style.backgroundColor = "#ffffff80";
							}
							var indicator_elements = document.getElementsByClassName('slider__indicator'); // get all elements
							for(var i = 0; i < indicator_elements.length; i++){
								indicator_elements[i].style.backgroundColor = "white";
							}
						}
					}

				} 
				else{
					if (Obj.hasClass('change-dots-style')) {
						 Obj.removeClass('ActiveItem');
					}  
				} 
			});
		}

		
		var href;
		function doalert(obj) {
			href =obj.getAttribute("href");
		}
		$(document).ready(function () {
			
			// $('a').on('click', function() {
			// 	$('a').removeClass('active');
			// 	$(this).addClass('active');
			// 	href=null;
			  
			// });
			
			$(window).on('scroll', function() {
                doScrollDotsEffect();
				var windowHeight=$(window).height();
				var currentPosition = $(this).scrollTop();
				// $('.slider__slide').each(function() {
				// 	var obj=$(this);
				// 	var id=obj.find('.panel').attr('id');
				// 	var sectionPosition = ($(this).offset().top - windowHeight);
				// 	if(sectionPosition < currentPosition && href==null) {
						
                    
				// 	//	document.getElementById(lowercase_id).click();
				// 		if(this.getAttribute('id')=="third" || this.getAttribute('id')=="fifth")
				// 		{
				// 			var dot_elements = document.getElementsByClassName('slider__dot'); // get all elements
				// 			for(var i = 0; i < dot_elements.length; i++){
				// 				dot_elements[i].style.backgroundColor = "#2d097663";
				// 			}
				// 			var indicator_elements = document.getElementsByClassName('slider__indicator'); // get all elements
				// 			for(var i = 0; i < indicator_elements.length; i++){
				// 				indicator_elements[i].style.backgroundColor = "#2f017b";
				// 			}
				// 		}
				// 		else{
				// 			var dot_elements = document.getElementsByClassName('slider__dot'); // get all elements
				// 			for(var i = 0; i < dot_elements.length; i++){
				// 				dot_elements[i].style.backgroundColor = "#ffffff80";
				// 			}
				// 			var indicator_elements = document.getElementsByClassName('slider__indicator'); // get all elements
				// 			for(var i = 0; i < indicator_elements.length; i++){
				// 				indicator_elements[i].style.backgroundColor = "white";
				// 			}
				// 		}
				// 	}
				// });
				
			});
			
		});
/* 		var delay = false;
		$(document).on('mousewheel DOMMouseScroll', function(event) {
			 var target;
		   $("div").each(function(i, element) {
			 target = $(element).offset().top;
			 if (target - 10 > $(document).scrollTop()) {
			   return false; // break
			 }
		   });
		   $("html, body").animate({
			 scrollTop: target
		   }, 100);
		}); */
		
    </script>

</html>