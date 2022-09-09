@extends('layout')
@section('content')




<div class="slider" data-pos="0">
	<div class="slider__slides" id="slider__slides">
		<div class="slider__slide" id="first" data-pos="0" >
			<section class="panel home" id="A">
				<div class="inner">
					<div class="home-banner banner">
					<div class="container">
						<h1 class="h1-banner">{{ $content[1]->title }}</h1>
						<p class="p-banner section1-p">{!!html_entity_decode($content[1]->sub_title) !!}</p>
							<div class="banner-btns mt-5">
								<a class="banner-play footer-img" target="_blank" href="https://play.google.com/">
									<img src="{{ asset('images/google-play-btn.svg') }}">
									

								</a>
								<a class="banner-play"  target="_blank" href="https://www.apple.com/">
									<img src="{{ asset('images/app-store-btn.svg') }}">
									
								</a>
							</div>
						<img src="{{url('storage/app/public')}}/{{$content[1]->image}}" class="banner-img">
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="slider__slide" id="second" data-pos="1">
			<section class="panel " id="B" >
			  <div class="inner">
			  
				<div class="section1">
					<img src="{{url('storage/app/public')}}/{{$content[2]->image}}">
					<div class="section1-content">
					<h1 class="h1-banner">{{ $content[2]->title }}</h1>
						<a href="#">
							<div class="white-circle">
								<div class="pink-circle">
									<img src="{{ asset('images/play.svg') }}">
								</div>
							</div>
							<p class="par-1">{!!html_entity_decode($content[2]->sub_title) !!}</p>
						</a>
					</div>

				</div>
			  </div>
			</section>
		</div>
		<div class="slider__slide" id="third" data-pos="2">
			<section class="panel " id="C" >
			  <div class="inner">
			  
				<section class="section2">
				<div class="container">
					<h1 class="h1-banner">{!!html_entity_decode($content[3]->title) !!}</h1>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							 <img src="{{ asset('images/section2.svg') }}"> {{--//STATIC// --}}
						</div>
						<div class="col-md-6 col-sm-12">
							<h4 class="h4-1">{!!html_entity_decode($content[3]->sub_title) !!}</h4>
							<p class="p-banner no-margin">{!!html_entity_decode($content[3]->description) !!}</p>
						</div>
					</div>
					</div>
				</section>
				
				
			  </div>
			</section>
		</div>
		
		<div class="slider__slide" id="fourth" data-pos="3">
			<section class="panel " id="D">
			  <div class="inner">
				  <?php  $str = str_replace('\\', '/', $content[7]->background);?>
			  <section class="section3" style="background-image: url({{url('storage/app/public')}}/{{$str}})">
					<div class="container">
						<div class="section3-img">
							<img src="{{ asset('images/section3-phone.png') }}"> {{-- // STATIC // --}}
						</div>
					<div id="section_3">
					<?php $count=4;?>
						  @foreach($sliders as $slider)
						  
							<div class="slider__slide" id="" data-pos="<?php echo $count;?>">
							<section class="panel " id="<?php echo $count;?>">
								<div class="row">
								<div class="section3-title col-4">
									<h1 class="h1-banner pb-3">{!!html_entity_decode($slider->title) !!}</h1>
									<p class="p-banner mt-4" >{!!html_entity_decode($slider->sub_title) !!}</p>
								</div>
								<div class="col-4"></div>
								<div class="section3-list col-4">
									<div class="bottom" >
									
									{!!html_entity_decode($slider->description) !!}
										<div class="banner-btns mt-5">
											<a class="banner-play" target="_blank" href="https://play.google.com/">
												<img src="{{ asset('images/google-play-btn.svg') }}">

											</a>
											<a class="banner-play"  target="_blank" href="https://www.apple.com/">
												<img src="{{ asset('images/app-store-btn.svg') }}">
											</a>
										</div>
										</div>
									</div>
								</div>
							</section>
							</div>
							<?php if($count<7){$count++;} ?>
						  @endforeach
					</div> 
				</section>
			  </div>
			</section>
			</div>
			<div class="slider__slide" id="fifth" data-pos="7">
			<section class="panel " id="E">
				<div class="inner">
					<section class="section4">
					
						<div class="inner">
							<div class="container">
							<h1 class="h1-banner h1-section4">{!!html_entity_decode($content[4]->title) !!}</h1>
							<p class="p-banner section4-p">{!!html_entity_decode($content[4]->sub_title) !!}</p>
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
								@endforeach
							
							</div>
							</div>
						</div>
						
						
						<div class="inner">
							<div class="container">
							<h1 class="h1-banner pb-4 mb-5 section4-h1">{!!html_entity_decode($content[5]->title) !!}</h1>
							<div class="row-countries">
								<?php $i=0;?>
								@foreach($branches as $branch)
								<?php $i++;?>

								<div class="<?php if($i%2!=0) echo 'column-1';else echo'column-2';?>"> 
									<img src="{{url('storage/app/public')}}/{{ $branch->flag }}">
									<p class="par-2">{{ $branch->country }}</p>
								</div>
								@endforeach
								
							</div>
						
							</div>
						</div>
						
						
						<div class="inner">
							<div class="container">
							<p class="p-banner par-bottom">{!!html_entity_decode($content[5]->description) !!} </p>
							</div>
						</div>
						
					</section>
				</div>
			</section>
			</div>
			<div class="slider__slide" id="sixth" data-pos="8">
				<section class="panel" id="F">
					 <div class="inner">
						<section class="section6">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<h1 class="h1-banner section6-text">{!!html_entity_decode($content[6]->title) !!}</h1>
										<div class="banner-btns mt-5">
											<a class="banner-play" target="_blank" href="https://play.google.com/">
												<img src="{{ asset('images/google-play-btn.svg') }}" class="footer-img">
												{{-- <span> GET IT ON</span>
												<h4 class="h4-2">Google Play</h4> --}}
											</a>
											<a class="banner-play"  target="_blank" href="https://www.apple.com/">
												<img src="{{ asset('images/app-store-btn.svg') }}" class="footer-img">
												{{-- <span> Download on the</span>
												<h4 class="h4-2">App Store</h4> --}}
											</a>
										</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<img src="{{url('storage/app/public')}}/{{$content[6]->image}}" class="section6-img"> 
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
			</div><div class="dots">
			<a href="#B" class="slider__dot" data-pos="1" id="b"></a>
			</div><div class="dots">
			<a href="#C" class="slider__dot" data-pos="2" id="c"></a>
			</div>
			<div class="dots">
			<a href="#D" class="slider__dot" data-pos="3" id="d"></a>
			</div>
			
			
			<div class="dots">
			<a href="#4" class="slider__dot slider__inner__dot" data-pos="4" id=""></a>
			</div>
			<div class="dots">
			<a href="#5" class="slider__inner__dot slider__dot" data-pos="5" id=""></a>
			</div>
			<div class="dots">
			<a href="#6" class="slider__inner__dot slider__dot" data-pos="6" id=""></a>
			</div> 
			<div class="dots">
			<a href="#E" class=" slider__dot" data-pos="7" id="e"></a>
			</div>
			
			
			<div class="dots">
			<a href="#F" class="slider__dot" data-pos="8" id="f"></a>
			</div>
		</div>

	</div>
	
	
	<script>


	</script>

















@endsection
