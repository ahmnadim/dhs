<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>@yield('title') - DHS</title>
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/master.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/color.css')}}">
<link rel="shortcut icon" href="{{URL::to('assets/frontend/images/short_icon.png')}}">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@stack('css')
</head>

<body class="pushmenu-push">
  <!--===== HEADER TOP =====-->
  @include('layouts.frontend.partials.top_header')
  <!--===== #/HEADER TOP =====--> 
<!-- LOADER -->
<!-- <div class="loader">
    <div class="cssload-thecube">
        <div class="cssload-cube cssload-c1"></div>
        <div class="cssload-cube cssload-c2"></div>
        <div class="cssload-cube cssload-c4"></div>
        <div class="cssload-cube cssload-c3"></div>
    </div>
</div> -->
<!--/LOADER -->


<!--===== BACK TO TOP =====-->
<div class="short-msg">
  <a href="#." class="back-to"><i class="icon-arrow-up2"></i></a>
  <a href="#." class="short-topup" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
</div>
<!--===== #/BACK TO TOP =====-->



@yield('slider')

@yield('content')
<!-- WELCOME -->
@yield('welcome_section')
<!-- #/WELCOME -->

<!-- PROPERTY LISTING -->
<section id="property" class="index3 bg_light">
  @yield('property_listing')
</section>
<!-- PROPERTY LISTING --> 

@yield('advance_search')


<!-- RECENT PROPERTY -->
@yield('recent_property')
<!-- RECENT PROPERTY -->


<!-- OUR TEAM -->
@yield('experts')
<!-- #/OUR TEAM -->


<!-- OUR PARTNERS -->
@yield('partners')
<!-- #/OUR PARTNERS -->


@include('layouts.frontend.partials.footer')

<script src="{{asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/bootsnav.js')}}"></script>

<!--To View on scroll-->
<script src="{{asset('assets/frontend/js/jquery.appear.js')}}"></script>
 
<!--Owl Slider-->
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>

<!--Parallax-->
<script src="{{asset('assets/frontend/js/parallaxie.js')}}"></script>

<!--Fancybox-->
<script src="{{asset('assets/frontend/js/jquery.fancybox.min.js')}}"></script> 

<!--Cube Gallery-->
<script src="{{asset('assets/frontend/js/cubeportfolio.min.js')}}"></script> 

<!--Bootstrap Dropdown-->
<script src="{{asset('assets/frontend/js/bootstrap-select.js')}}"></script>

<!--Video Popup-->
<script src="{{asset('assets/frontend/js/videobox/video.js')}}"></script>

<!--Datepicker-->
<script src="{{asset('assets/frontend/js/datepicker.js')}}"></script> 

<!--Dropzone-->
<script src="{{asset('assets/frontend/js/dropzone.min.js')}}"></script>

<!--Wow animation-->
<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>

<!--Rang Slider-->
<script src="{{asset('assets/frontend/js/range-Slider.min.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('assets/frontend/js/selectbox-0.2.min.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('assets/frontend/js/scrollreveal.min.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('assets/frontend/js/jquery-countTo.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('assets/frontend/js/jquery.typewriter.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('assets/frontend/js/death.min.js')}}"></script>

<!--Maps & Markers-->
<script src="{{asset('assets/frontend/js/form.js')}}"></script> 
<script src="{{asset('assets/frontend/js/custom-map.js')}}"></script> 
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="{{asset('assets/frontend/js/gmaps.js')}}"></script>
<script src="{{asset('assets/frontend/js/contact.js')}}"></script> 
<!--===== #/REQUIRED JS =====-->

<!--Revolution Slider-->
<script src="{{asset('assets/frontend/js/themepunch/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/themepunch/jquery.themepunch.revolution.min.js')}}"></script>   
<script src="{{asset('assets/frontend/js/themepunch/revolution.extension.layeranimation.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/themepunch/revolution.extension.navigation.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/themepunch/revolution.extension.parallax.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/themepunch/revolution.extension.slideanims.min.js')}}"></script> 
<script src="{{asset('assets/frontend/js/themepunch/revolution.extension.video.min.js')}}"></script>

<!--Custom Js -->
<script src="{{asset('assets/frontend/js/functions.js')}}"></script>
 <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
        {!! Toastr::message() !!}

    <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{$error}}','Error',{
                    clseButton:true,
                    progressBar:true
                });
            @endforeach
        @endif
    </script>
</body>
</html>
Chat Conversation End
Type a message...



More stories loaded.