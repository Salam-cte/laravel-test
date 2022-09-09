@extends('layout')

@section('content')



<div class="slider" data-pos="0">

	<div class="slider__slides" id="slider__slides">

		<div class="slider__slide" id="first" data-pos="0" data-div-name="first">

			<div class="section-1-bg">@include('animation.1')</div>

		

			<section class="panel home" id="A">

				<div class="inner">

					<div class="home-banner banner">

						<div class="container">

							<h1 class="h1-banner " data-aos="fade-up" data-aos-delay="1400" >{{ $content[1]->title }}</h1>

							<p class="p-banner section1-p " data-aos="fade-up" data-aos-delay="1500">{!!html_entity_decode($content[1]->sub_title) !!}</p>

							<div class="banner-btns mt-5 " data-aos="fade-up" data-aos-delay="1600">

								<a class="banner-play" target="_blank" href="{{setting('site.google_play')}}">

									<img src="{{ asset('images/google-play-btn.svg') }}">



								</a>

								<a class="banner-play" target="_blank" href="{{setting('site.app_store')}}">

									<img src="{{ asset('images/app-store-btn.svg') }}">



								</a>

							</div>

							<img src="{{url('storage/app/public')}}/{{$content[1]->image}}" class="banner-img"  data-aos="fade-up" data-aos-delay="1700">

						</div>

					</div>

				</div>

			</section>

		</div>

		<div class="slider__slide" id="second" data-pos="1" data-div-name="second">

			<section class="panel " id="B">

				<div class="inner">



					<div class="section1">

						<div  class="home-video">
							<div class="video">
							
							</div>
						</div>
						

						<div class="section1-content" id="play-video">
								<div class="white-circle" data-aos="zoom-in-up">
									<div class="pink-circle" id="play">
										<img src="{{ asset('images/play.svg') }}" >
									</div>
								</div>
								<p class="par-1" data-aos="fade-up">{!!html_entity_decode($content[2]->sub_title) !!}</p>
						</div>
					</div>

				</div>

			</section>

		</div>

		<div class="slider__slide" id="third" data-pos="2" data-div-name="third">

			<section class="panel " id="C">

				<div class="inner">



					<section class="section2">

						<div class="container">

							<h1 class="h1-banner"  data-aos="fade-up">{!!html_entity_decode($content[3]->title) !!}</h1>

							<div class="row">

								<div class="col-md-6 col-sm-12"  id="section-3-img">

									<img class="aos-init aos-animate" src="{{ asset('images/section2.svg') }}" data-aos="fade-up-right"> {{--//STATIC// --}}

								</div>

								<div class="col-md-6 col-sm-12 margin-auto" data-aos="fade-left"

     								data-aos-anchor="#section-3-img"

    								data-aos-offset="200"

     								data-aos-duration="200">

									<h4 class="h4-1">{!!html_entity_decode($content[3]->sub_title) !!}</h4>

									<p class="p-banner">{!!html_entity_decode($content[3]->description) !!}</p>

								</div>

							</div>

						</div>

					</section>



				</div>

			</section>

		</div>



		<div class="slider__slide" id="fourth" data-pos="3" data-div-name="fourth">

			<section class="panel " id="D">

				<div class="inner">

					<?php  $str = str_replace('\\', '/', $content[7]->background);?>

					<section class="section3" style="background-image: url({{url('storage/app/public')}}/{{$str}})">

						<div class="container">

							<div class="section3-img">
								<div class="">
        							<div class="">
										<video id="myvideo" class="featurevideo video1" preload="" mute  >
											<source src="http://fastrepayhomeloan.com.au/matensa/storage/app/public/static-contents\February2022\mobile-2.mp4" type="video/mp4">
											<track class="chapters" src="assets/video/chapters9.vtt" kind="chapters" default>
										</video>
									</div>
								</div>
							</div>

							<div id="section_3">

								<?php $count=4;$i=0;?>

								@foreach($sliders as $slider)

								<?php  $i++;?>

								<div class="slider__slide slide-<?php echo $i;?>" id="" data-pos="<?php echo $count;?>">

									<section class="panel " id="<?php echo $count;?>">

										<div class="row">

											<div class="section3-title col-4" data-aos="fade-up">

												<h1 class="h1-banner h1-section3 pb-3">{!!html_entity_decode($slider->title) !!}

												</h1>

												<p class="p-banner p-section3 mt-4">{!!html_entity_decode($slider->sub_title) !!}

												</p>

											</div>

											<div class="col-3 custom-col3-section3"></div>

											<div class="section3-list p-section3 col-4">

												<div class="m-table">

													<div class="c-table">

														<div class="bottom" data-aos="fade-up">



															{!!html_entity_decode($slider->description) !!}

															<div class="banner-btns mt-5">

																<a class="banner-play" target="_blank"

																	href="{{setting('site.google_play')}}">

																	<img

																		src="{{ asset('images/google-play-btn.svg') }}">



																</a>

																<a class="banner-play" target="_blank"

																	href="{{setting('site.app_store')}}">

																	<img src="{{ asset('images/app-store-btn.svg') }}">

																</a>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</section>

								</div>

								<?php if($count<9){$count++;} ?>

								@endforeach

							</div>

					</section>







					<section class="section3-mob" style="background-image: url({{url('storage/app/public')}}/{{$str}})">

						<div class="container">

							

							<div id="section_3_mobile">

								<?php $count=3;$i=0;?>

								@foreach($sliders as $slider)

								<?php  $i++;?>
								<?php  $count=$i+3;?>

								<div class="section3-mob-img">

								<img src="{{ asset('images/section3-phone.png') }}"> {{-- // STATIC // --}}

							</div>

								<div class="slider__slide slide-<?php echo $i;?>" id="" data-pos="<?php echo $count;?>">

									<section class="panel " id="<?php echo $count;?>">

										<div class="row">

											<div class="section3-mob-title" data-aos="fade-up">

												<h1 class="h1-banner pb-3">{!!html_entity_decode($slider->title) !!}

												</h1>

												<p class="p-banner mt-4">{!!html_entity_decode($slider->sub_title) !!}

												</p>

											</div>

											<div class="">

												<div class="m-table">

													<div class="c-table">

														<div class="mob-bottom" data-aos="fade-up">



															{!!html_entity_decode($slider->description) !!}

															<div class="banner-mob-btns mt-5">

																<a class="banner-mob-play" target="_blank"

																	href="{{setting('site.google_play')}}">

																	<img

																		src="{{ asset('images/google-play-btn.svg') }}">



																</a>

																<a class="banner-mob-play" target="_blank"

																	href="{{setting('site.app_store')}}">

																	<img src="{{ asset('images/app-store-btn.svg') }}">

																</a>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</section>

								</div>

								<?php ?>

								@endforeach

							</div>

					</section>

				</div>

			</section>

		</div>

		<div class="slider__slide" id="fifth" data-pos="9" data-div-name="fifth">

			<section class="panel " id="E">

				<div class="inner">

					<section class="section4">



						<div class="inner">

							<div class="">

								<h1 class="h1-banner h1-section4" data-aos="fade-up">{!!html_entity_decode($content[4]->title) !!}</h1>

								<p class="p-banner section4-p" data-aos="fade-up">{!!html_entity_decode($content[4]->sub_title) !!}</p>

								<div class="slider-container">



									@foreach ($testimonials as $testimonial )

									<div class="card item">

										<div class="container pt-4">

											<div class="stars" data-rating="{{ $testimonial->stars }}"></div>

											{{-- <div class="">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

										</div> --}}

										<p class="p-banner">

											{!! html_entity_decode($testimonial->text) !!}</p>

										<p class="par-2">{!! html_entity_decode($testimonial->name) !!}</p>

									</div>

									</div>



									<div class="card item">

										<div class="container pt-4">

											<div class="stars" data-rating="{{ $testimonial->stars }}"></div>

											{{-- <div class="">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

											<img src="{{ asset('images/star.svg') }}">

										</div> --}}

										<p class="p-banner">

											{!! html_entity_decode($testimonial->text) !!}</p>

										<p class="par-2">{!! html_entity_decode($testimonial->name) !!}</p>

									</div>

									</div>

								@endforeach



							</div>

						</div>

				</div>



				<div class="inner">

					<div class="container">

						<h1 class="h1-banner pb-4 mb-5 section4-h1" data-aos="fade-up">{!!html_entity_decode($content[5]->title) !!}</h1>

						<div class="row-countries" >

							<?php $i=0;?>

							@foreach($branches as $branch)

							<?php $i++;?>



							<div class="<?php if($i%2!=0) echo 'column-1';else echo'column-2';?>" <?php if($i%2!=0){?> data-aos="fade-left"<?php }else{?>data-aos="fade-right" <?php } ?>>

								<img src="{{url('storage/app/public')}}/{{ $branch->flag }}">

								<p class="par-2">{{ $branch->country }}</p>

							</div>

							@endforeach



						</div>



					</div>

				</div>



				<div class="inner">

					<div class="container">

						<p class="p-banner par-bottom" data-aos="fade-up" >{!!html_entity_decode($content[5]->description) !!} </p>

					</div>

				</div>



			</section>

		</div>

		</section>

	</div>

	<div class="slider__slide" id="sixth" data-pos="10" data-div-name="sixth">

		<section class="panel" id="F">

			<div class="inner">

				<section class="section6">

					<div class="container">

						<div class="row">

							<div class="col-md-6 col-sm-12">

								<h1 class="h1-banner section6-text" data-aos="fade-right">{!!html_entity_decode($content[6]->title) !!}</h1>

								<div class="banner-btns mt-5" >

									<a class="banner-play" target="_blank"  data-aos="fade-left" href="{{setting('site.google_play')}}">

										<img src="{{ asset('images/google-play-btn.svg') }}" class="footer-img">

										{{-- <span> GET IT ON</span>

												<h4 class="h4-2">Google Play</h4> --}}

									</a>

									<a class="banner-play" target="_blank" data-aos="fade-right" href="{{setting('site.app_store')}}">

										<img src="{{ asset('images/app-store-btn.svg') }}" class="footer-img">

										{{-- <span> Download on the</span>

												<h4 class="h4-2">App Store</h4> --}}

									</a>

								</div>

							</div>

							<div class="col-md-6 col-sm-12">

								<img src="{{url('storage/app/public')}}/{{$content[6]->image}}" class="section6-img"  data-aos="zoom-in-up">

							</div>

						</div>

					</div>

				</section>

			</div>

		</section>

	</div>

</div>

<div class="slider__dots">

	<div class="dots">

		<a href="#" class="slider__indicator"></a>

	</div>

	<div class="dots">

		<a href="#A" class="slider__dot" data-pos="0" id="a"></a>

	</div>

	<div class="dots">

		<a href="#B" class="slider__dot" data-pos="1" id="b"></a>

	</div>

	<div class="dots">

		<a href="#C" class="slider__dot" data-pos="2" id="c"></a>

	</div>

	<div class="dots">

		<a href="#D" class="slider__dot" data-pos="3" id="d"></a>

	</div>



	<div class="dots" >

		<a href="#4" class="slider__dot slider__inner__dot" data-pos="4" id=""></a>

	</div>

	<div class="dots" >

		<a href="#5" class="slider__inner__dot slider__dot" data-pos="5" id=""></a>

	</div>

	<div class="dots" >

		<a href="#6" class="slider__inner__dot slider__dot" data-pos="6" id=""></a>

	</div>


	<div class="dots" >

		<a href="#7" class="slider__inner__dot slider__dot" data-pos="7" id=""></a>

	</div>
	
	<div class="dots" >

		<a href="#8" class="slider__inner__dot slider__dot" data-pos="8" id=""></a>

	</div>

	<div class="dots" >

		<a href="#E" class=" slider__dot" data-pos="9" id="e"></a>

	</div>



	<div class="dots">

		<a href="#F" class="slider__dot" data-pos="10" id="f"></a>

	</div>

</div>



</div>



<script>



</script>



@endsection