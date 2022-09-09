<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

   

{{-- <title>Matensa</title> --}}



    {!! SEO::generate() !!}

    

    <!-- Vendor CSS Files -->

     <!-- Vendor CSS Files -->

     <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css?=v11')}}">

     <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/style-new.css')}}">

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/transition.css')}}"> -->

	





    

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

 

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

  



    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>-->

    <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.11/jquery.scrollify.min.js"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/head.js')}}"></script>

    <script src="https://nashio.github.io/star-rating-svg/src/jquery.star-rating-svg.js"></script>

	

   <!--  <script src="{{ asset('js/jquery-2.2.1.min.js')}}"></script>-->

	<link rel="stylesheet" href="{{asset('css/main.css')}}"/>

    <script src="{{asset('js/jquery.scrollify.js')}}"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="{{ asset('js/main.js')}}"></script>





    </body>

    <script>
		$(window).bind('load', function() {
        var html='<video id="background-video" autoplay="true" loop><source src="https://fastrepayhomeloan.com.au/matensa/storage/app/public/static-contents/February2022/matensa_final.mp4" type="video/mp4"></video>';
        $('.video').html(html); 
});
window.addEventListener('load', videoScroll);
window.addEventListener('scroll', videoScroll);

function videoScroll() {

  if ( document.querySelectorAll('video[autoplay]').length > 0) {
    var windowHeight = window.innerHeight,
        videoEl = document.querySelectorAll('video[autoplay]');

    for (var i = 0; i < videoEl.length; i++) {

      var thisVideoEl = videoEl[i],
          videoHeight = thisVideoEl.clientHeight,
          videoClientRect = thisVideoEl.getBoundingClientRect().top;

      if ( videoClientRect <= ( (windowHeight) - (videoHeight*.5) ) && videoClientRect >= ( 0 - ( videoHeight*.5 ) )) {
        thisVideoEl.play();
      } else {
        thisVideoEl.pause();
      }

    }
  }

}
document.querySelector("#play").addEventListener("click", () => {
  document.querySelector("#background-video").play();
});

        // if ($(window).width() < 960) {

        //     // $('.inner-menu-header').css('visibility','hidden');

        //     $('.inner-menu-header').css('float','none');



        //     $('.logo').css('text-align','center');

        // }
		$(window).bind('load',function(){
            if ($(window).width() > 800) {
				AOS.init();	
			}
		});
		$(document).ready(function(){
            if ($(window).width() < 800) {
				AOS.init();	
			}
		});

        $('.slider-container').slick({

			dots: false,

			infinite: true,

			arrows: false,

			speed: 700,

			fade: false,

			slidesToShow: 2,

			slidesToScroll: 1,

			centerMode: true,

			centerPadding: '50px',

			autoplay: true,

			cssEase: 'linear',

			responsive: [

			{

			breakpoint: 1024,

			settings: {

			slidesToShow:2,

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

			// $('.dots a').click(function(){

			// 	let currentPos = parseInt(sliderElem.getAttribute('data-pos'));

			// 	let newPos = $(this).attr('data-pos');

			// 	if(newPos==7 || newPos==2){

			// 		// $(this).css('background-color','rgba(45, 9, 118, 0.39);!important');

			// 		alert(newPos);

			// 		$('.dots').each(function(){

			// 			var a = $(this).find('a');

			// 			alert(a.attr('data-pos'));

			// 			a.css('background-color','rgba(45, 9, 118, 0.39)')

			// 		});

			// 		// document.getElementById('d').style.backgroundColor = "rgba(45, 9, 118, 0.39)";



			// 	}

			// 	// alert('current: '+currentPos+'new :'+newPos);

			// 	let newDirection = newPos > currentPos ? 'right' : 'left';

			// 	let currentDirection = newPos < currentPos ? 'right' : 'left';

			// 	indicatorElem.classList.remove(`slider__indicator--${currentDirection}`);

			// 	indicatorElem.classList.add(`slider__indicator--${newDirection}`);

			// 	sliderElem.setAttribute('data-pos', newPos);



				

			// });

			// Array.prototype.forEach.call(dotElems, dotElem => {

				

				// dotElem.addEventListener('click', e => {

				// 	let currentPos = parseInt(sliderElem.getAttribute('data-pos'));

			

				// 	// let newPos = parseInt(dotElem.getAttribute('data-pos'));

				// 	let newPos=dotElem.attr('data-pos');

				// 	alert('current: '+currentPos+'new :'+newPos);





				// 	let newDirection = newPos > currentPos ? 'right' : 'left';

				// 	let currentDirection = newPos < currentPos ? 'right' : 'left';

				

               

				// 	indicatorElem.classList.remove(`slider__indicator--${currentDirection}`);

				// 	indicatorElem.classList.add(`slider__indicator--${newDirection}`);

				// 	sliderElem.setAttribute('data-pos', newPos);

				// });

			// });



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

						// alert('c '+currentPos+'n'+newPos);

						

						let newDirection = newPos > currentPos ? 'right' : 'left';

						// if(currentPos == 5 || currentPos== 4 || currentPos== 6 )

						// {	

						// 	// $('#d').style('background-color','white');

						// 	// sliderElem.setAttribute('data-pos', currentPos);

						// }

						if(newPos==3){

							// newPos=4;

							exit;

						}
						//|| ((newPos==4 && myclass.classList.contains('class2') && myclass.classList.contains('class1')) 
							//|| (newPos==4 && myclass.classList.contains('class3') && myclass.classList.contains('class1')) || (newPos==4 && myclass.classList.contains('class4') && myclass.classList.contains('class1')) 
							//|| (newPos==4 && myclass.classList.contains('class5') && myclass.classList.contains('class1'))) 
						let myclass = sliderElem.querySelector('.section3-img');
						
						if( newPos==4 && !myclass.classList.contains('class1') )
						{
							buttonEvents('playme');
							myclass.classList.add('class1');
						}
						if(newPos==5 && !myclass.classList.contains('class2'))
						{
							buttonEvents('jump');
							myclass.classList.add('class2');
						}
						if(newPos==6 && !myclass.classList.contains('class3'))
						{
							buttonEvents('jump2');
							myclass.classList.add('class3');
						}
						if(newPos==7 && !myclass.classList.contains('class4'))
						{
							buttonEvents('jump3');
							myclass.classList.add('class4');
						}
						if(newPos==8 && !myclass.classList.contains('class5'))
						{
							buttonEvents('jump4');
							myclass.classList.add('class5');
						}
						

						let currentDirection = newPos < currentPos ? 'right' : 'left';

						indicatorElem.classList.remove(`slider__indicator--${currentDirection}`);

						indicatorElem.classList.add(`slider__indicator--${newDirection}`);

						sliderElem.setAttribute('data-pos', newPos);
						if(this.getAttribute('id')=="first")
						{
							var element = document.getElementById("header");
   							element.classList.add("header-bg-transp");
							element.classList.remove("header-bg");
						}
						else{
							var element = document.getElementById("header");
   							element.classList.add("header-bg");
							   element.classList.remove("header-bg-transp");
						}

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

						if(this.getAttribute('data-pos')=="4" || this.getAttribute('data-pos')=="5" || this.getAttribute('data-pos')=="6")

						{

							document.getElementById('d').style.backgroundColor = "white";

						}

						else{

							if(this.getAttribute('id')=="third" || this.getAttribute('id')=="fifth"){



								document.getElementById('d').style.backgroundColor = "rgba(45, 9, 118, 0.39)";

							}

							else{

								document.getElementById('d').style.backgroundColor = "rgba(255, 255, 255, 0.5)";

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

		// $(function(){

		// 	// $('section').css({'height':(($(window).height()))+'px'});

		// 	// Now bind the event to the desired element

		// 	$('.slider__slide').on('mousewheel', function(e){

		// 		e.preventDefault();

		// 		if(e.originalEvent.wheelDelta < 0) {

		// 		if (!$(this).is(':last-child'))

		// 			// $('body').scrollTop($(this).next().offset().top);

		// 			$('body').animate({scrollTop:$(this).next().offset().top}, '700');

		// 		} else {

		// 		if (!$(this).is(':first-child'))

		// 			// $('body').scrollTop($(this).prev().offset().top);

		// 			$('body').animate({scrollTop:$(this).prev().offset().top}, '700');

		// 		}

		// 	});

			// $(window).resize(function(){ // On resize

			// 	$('section').css({'height':(($(window).height()))+'px'});

			// });

		// });
		var myvideo = document.getElementById('myvideo');
						
						function buttonEvents(e) {
							
							/* get the id of the clicked button */
							var element_id = e;
							console.log(element_id);
							/* E.G. element_id = 'playme', 'jump', or 'jump2' */

							/* declare variables before setting them */
							var timeStart = 0;
							var timeEnd = 0;

							/* set start and end values depending 
							on which button was clicked */
							switch(element_id) {
								case 'playme':
									/* example values... */
									timeStart = 0;
									timeEnd = 10; 
									break;
								case 'jump':
									timeStart = 10;
									timeEnd = 20;
									break;
								case 'jump2':
									timeStart =20;
									timeEnd = 30;
									break;
								case 'jump3':
									timeStart =30;
									timeEnd = 40;
									break;
								case 'jump4':
									timeStart =40;
									timeEnd = 50;
							}

							/* call 'playVideo()' */
							playVideo(timeStart, timeEnd);
						}

						function playVideo(startTime, endTime) {

							function checkTime() {
							if (myvideo.currentTime >= endTime) {
							myvideo.pause();
							} else {
							/* call checkTime every 1/10th 
								second until endTime */
							setTimeout(checkTime, 100);
							}
							}

							/* stop if playing (otherwise ignored) */
							myvideo.pause();
							/* set video start time */
							myvideo.currentTime = startTime;
							/* play video */
							myvideo.play();
							/* check the current time and 
							pause IF/WHEN endTime is reached */
							checkTime();
						}
    </script>



</html>