<?php



$method = Route::currentRouteName();



 ?>







<header class="main-header bg-trans" id="header">

<div class="app_store_icons mob">@include('blocks.app_store')</div>

    <a class="menu-bar"><span></span><span></span><span></span></a>



    <span class="menu-mobile-shadow"></span>



    <div class="container">



        <div class="row">



            <div class="col-md-3">



                <div class="logo">



                    <a href="{{url('/')}}">





                        <img src="{{url('storage/app/public')}}/{{setting('site.logo')}}" alt="matensa"  />



                    </a>



                </div>



            </div>



            <div class="col-md-9 wp-menu-main-menu ">



                <div class="inner-menu-header">

               

                    @include('blocks.app_store')
                    <div class="">
                    <a href="#" class="get-started button"> Get Started</a></div>

                </div>

                

            </div>



        </div>







    </div>



</header>

