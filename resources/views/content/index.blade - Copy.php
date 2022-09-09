@extends('layout')
@section('content')

<div class="home-banner 
banner">
    <h1 class="h1-banner">Easier than never before</h1>
    <p class="p-banner">It’s time to make the world of finance simpler, smarter and fit for modern life. 
        <br>It’s time to say goodbye to the old. And say hello to Matensa.</p>
        <div class="banner-btns mt-5">
            <a class="banner-play" target="_blank" href="https://play.google.com/">
                <img src="{{ asset('images/google-play-banner.svg') }}">
                <span> GET IT ON</span>
                <h4 class="h4-2">Google Play</h4>

            </a>
            <a class="banner-play"  target="_blank" href="https://www.apple.com/">
                <img src="{{ asset('images/app-store-banner.svg') }}">
                <span> Download on the</span>
                <h4 class="h4-2">App Store</h4>
            </a>
        </div>
    <img src="{{ asset('images/banner-img.png') }}" class="banner-img">


</div>

<section>
    <div class="section1">
        <img src="{{ asset('images/section1.png') }}">
        <div class="section1-content">
        <h1 class="h1-banner">Get access to your pay 
            in less than 30 seconds</h1>
            <a href="#">
                <div class="white-circle">
                    <div class="pink-circle">
                        <img src="{{ asset('images/play.svg') }}">
                    </div>
                </div>
                <p class="par-1">Discover Matensa</p>
            </a>
        </div>

    </div>
</section>
<section class="section2">
    <h1 class="h1-banner">We’re changing the way people get paid. Your money, when you need</h1>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img src="{{ asset('images/section2.png') }}">
        </div>
        <div class="col-md-6 col-sm-12">
            <h4 class="h4-1">Get instant notifications</h4>
            <p class="p-banner">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    
</section>
<section class="section3" style="background-image: url({{ asset('images/section3-bg.png') }})">
    <div class="container">
        <div class="section3-img">
            <img src="{{ asset('images/section3-phone.png') }}"> 
        </div>
        <div id="section_3">
          
            <div class="row">
            <div class="section3-title">
                <h1 class="h1-banner pb-3">Join Matensa Today for free</h1>
                <p class="p-banner mt-4" >Join the thousands of other Matensa users 
                        and say goodbye to banks.</p>
            </div>
        
            <div class="section3-list ">
                <div class="bottom" >
                <ul>
                    <li class="p-banner">Get an account for free within minutes</li>
                    <li class="p-banner">Follow the Wizard Guide </li>
                    <li class="p-banner">Enjoy the App</li>

                </ul>
                    <div class="banner-btns mt-5">
                        <a class="banner-play" target="_blank" href="https://play.google.com/">
                            <img src="{{ asset('images/google-play-banner.svg') }}">
                            <span> GET IT ON</span>
                            <h4 class="h4-2">Google Play</h4>

                        </a>
                        <a class="banner-play"  target="_blank" href="https://www.apple.com/">
                            <img src="{{ asset('images/app-store-banner.svg') }}">
                            <span> Download on the</span>
                            <h4 class="h4-2">App Store</h4>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

                <div class="row">

                <div class="section3-title">
                    <h1 class="h1-banner pb-3">Pay & Receive in an instant using your preferred payment method</h1>
                    <p class="p-banner mt-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                
            
                <div class="section3-list">
                <div class="bottom" >

                    <ul>
                        <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                        <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                        <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                        <li class="p-banner">Lorum ipsum dolor sit</li>
                        <li class="p-banner">Lorum ipsum dolor sit met niet</li>
        
                    </ul></div>
                        </div>
                    </div>
            <div class="row">

                    <div class="section3-title">
                        <h1 class="h1-banner pb-3">Easily Create Agreements with 
                            your clients</h1>
                        <p class="p-banner mt-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    
                    
                    <div class="section3-list">
                        <div class="bottom" >
                        <ul>
                            <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                            <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                            <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                            <li class="p-banner">Lorum ipsum dolor sit</li>
            
                        </ul>
                        </div>
                    </div>
                        
            </div>
        
        
        </div>
        
        </div>

    {{-- <div class="row" >

        <div class="col-md-5 col-sm-12">
            <h1 class="h1-banner pb-3">Pay & Receive in an instant using your preferred payment method</h1>
                <p class="p-banner mt-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="col-md-3 col-sm-12">
            <img src="{{ asset('images/phone-2.png') }}"> 
        </div>
        <div class="col-md-4 col-sm-12">
           <div class="bottom">
               <ul>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>


               </ul>
            </div>
        </div></div>
    <div class="row" >

        <div class="col-md-5 col-sm-12">
            <h1 class="h1-banner pb-3">Easily Create Agreements with 
                your clients</h1>
                <p class="p-banner mt-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p></p>
        </div>
        <div class="col-md-3 col-sm-12">
            <img src="{{ asset('images/phone-2.png') }}"> 
        </div>
        <div class="col-md-4 col-sm-12">
           <div class="bottom">
               <ul>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                   <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                   <li class="p-banner">Lorum ipsum dolor sit</li>


               </ul>
            </div>
        </div>
    </div>
</div> --}}
{{-- 
    </div> --}}
</section>
<div id="section3-mob">
    <div class="container">
        <h1 class="h1-banner pb-3">Join Matensa Today for free</h1>
        <p class="p-banner mt-4" >Join the thousands of other Matensa users 
            and say goodbye to banks.</p>
        <ul>
            <li class="p-banner">Get an account for free within minutes</li>
            <li class="p-banner">Follow the Wizard Guide </li>
            <li class="p-banner">Enjoy the App</li>

        </ul>
        <div class="banner-btns mt-5">
            <a class="banner-play" target="_blank" href="https://play.google.com/">
                <img src="{{ asset('images/google-play-banner.svg') }}">
                <span> GET IT ON</span>
                <h4 class="h4-2">Google Play</h4>

            </a>
            <a class="banner-play"  target="_blank" href="https://www.apple.com/">
                <img src="{{ asset('images/app-store-banner.svg') }}">
                <span> Download on the</span>
                <h4 class="h4-2">App Store</h4>
            </a>
        </div>
        <div class="img">
        <img src="{{ asset('images/section3-phone.png') }}">  </div>
        
        <h1 class="h1-banner pb-3">Pay & Receive in an instant using your preferred payment method</h1>
        <p class="p-banner mt-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        <ul>
            <li class="p-banner">Lorum ipsum dolor sit met niet</li>
            <li class="p-banner">Lorum ipsum dolor sit met niet</li>
            <li class="p-banner">Lorum ipsum dolor sit met niet</li>
            <li class="p-banner">Lorum ipsum dolor sit</li>
            <li class="p-banner">Lorum ipsum dolor sit met niet</li>

        </ul>
        <div class="margin-4">
            <h1 class="h1-banner pb-3">Easily Create Agreements with 
                your clients</h1>
            <p class="p-banner mt-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <ul>
                <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                <li class="p-banner">Lorum ipsum dolor sit met niet</li>
                <li class="p-banner">Lorum ipsum dolor sit</li>

            </ul>
        </div>
    </div>
</div>
<section class="section4">
    <h1 class="h1-banner h1-section4">Changing the way
        people get paid</h1>
        <p class="p-banner">Here’s what some of our users have to say.</p>
        <div class="slider-container">
            <div class="card item">
                <div class="container pt-4">
                    <div class="stars">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                    </div>
                    <p class="p-banner">
                        Great service. Easy to use! Thank God someone is trying to do something about the outdated getting paid system!    
                    </p>
                    <p class="par-2">Glenn</p>
                </div>
            </div>
            <div class="card item">
                <div class="container pt-4">
                    <div class="stars">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                    </div>
                    <p class="p-banner">
                        Great service. Easy to use! Thank God someone is trying to do something about the outdated getting paid system!    
                    </p>
                    <p class="par-2">Glenn</p>
                </div>
            </div>
            <div class="card item">
                <div class="container pt-4">
                    <div class="stars">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                    </div>
                    <p class="p-banner">
                        Great service. Easy to use! Thank God someone is trying to do something about the outdated getting paid system!    
                    </p>
                    <p class="par-2">Glenn</p>
                </div>
            </div>
            <div class="card item">
                <div class="container pt-4">
                    <div class="stars">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                    </div>
                    <p class="p-banner">
                        Great service. Easy to use! Thank God someone is trying to do something about the outdated getting paid system!    
                    </p>
                    <p class="par-2">Glenn</p>
                </div>
            </div>
            <div class="card item">
                <div class="container pt-4">
                    <div class="stars">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                        <img src="{{ asset('images/star.svg') }}">
                    </div>
                    <p class="p-banner">
                        Great service. Easy to use! Thank God someone is trying to do something about the outdated getting paid system!    
                    </p>
                    <p class="par-2">Glenn</p>
                </div>
            </div>
         </div>
         <div class="container">
         <h1 class="h1-banner pb-4 mb-5">Currently Available in:</h1>
         <div class="row-countries">
             <div class="column-1"> 
                 <img src="{{ asset('images/flag-lb.svg') }}">
                 <p class="par-2">Lebanon</p>
             </div>
             <div class="column-2">
                <img src="{{ asset('images/flag-au.svg') }}">
                <p class="par-2">Australia</p>
             </div>
        </div>
       
        </div>
        <div class="container">
        <p class="p-banner par-bottom">Our goal is to bring Matensa to as many places as possible. We’re just getting started. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
</section>
<section class="section6">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h1 class="h1-banner">Join the Revolution
                & Download the
                App Now !</h1>
                <div class="banner-btns mt-5">
                    <a class="banner-play" target="_blank" href="https://play.google.com/">
                        <img src="{{ asset('images/google-play-banner.svg') }}">
                        <span> GET IT ON</span>
                        <h4 class="h4-2">Google Play</h4>

                    </a>
                    <a class="banner-play"  target="_blank" href="https://www.apple.com/">
                        <img src="{{ asset('images/app-store-banner.svg') }}">
                        <span> Download on the</span>
                        <h4 class="h4-2">App Store</h4>
                    </a>
                </div>
                
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="{{ asset('images/section6.png') }}" class="section6-img"> 
        </div>
    </div>
</div>
</section>
@endsection
