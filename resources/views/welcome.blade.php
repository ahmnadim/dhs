@extends('layouts.frontend.app')

@section('title','index')
@section('top_header')
{{--   <div id="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          
          <p class="p-font-15 p-white"><a href="/">{{$title->sitetitle}}</a></p>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="header-top-links">
            <ul>
              <li><a href="{{ route('about') }}"><i class="icon-heart2"></i>About Us</a></li>
              <li class="af-line"></li>
              <li><a href="{{route('contact')}}"><i class="icon-icons215"></i>Contact Us</a></li>
              @guest
              <li><a href="{{route('login')}}" class="header-login"><i class="icon-icons179"></i>Login</a></li>
              <li><a href="{{route('register')}}" class="header-login"><i class="icon-icons179"></i>Register</a></li> 
              @else
              <li class="nav-item dropdown">
                                <a class="header-login" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                     <span><i class="icon-icons179"></i>{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                    <a style="display: block;" class="dropdown-item" href="{{route('user.property.create')}}">
                                    <i class="icon-icons179"></i><span class="glyphicon glyphicon-plus" style="color:red;">Add Property</span>
                                    </a>
                                    <a style="display: block;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-icons179"></i><span style="color:red;">Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                            
              @endguest

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!--  Header Top Start  -->
  <header id="header-top_3">

    <!--===== HEADER TOP =====-->
    <div id="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="p-font-15 p-white">We are Best in Town With 40 years of Experience.</p>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12 text-right">
            <div class="header-top-links">
            <ul>
              <li><a href="{{ route('about') }}"><i class="icon-heart2"></i>About Us</a></li>
              <li class="af-line"></li>
              <li><a href="{{route('contact')}}"><i class="icon-icons215"></i>Contact Us</a></li>
              @guest
              <li><a href="{{route('login')}}" class="header-login"><i class="icon-icons179"></i>Login</a></li>
              <li><a href="{{route('register')}}" class="header-login"><i class="icon-icons179"></i>Register</a></li> 
              @else
              <li class="nav-item dropdown">
                                <a class="header-login" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                     <span><i class="icon-icons179"></i>{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                    <a style="display: block;" class="dropdown-item" href="{{route('user.property.create')}}">
                                    <i class="icon-icons179"></i><span class="glyphicon glyphicon-plus" style="color:red;">Add Property</span>
                                    </a>
                                    <a style="display: block;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-icons179"></i><span style="color:red;">Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                            
              @endguest

            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== #/HEADER TOP =====--> 

    <!--===== HEADER BOTTOM =====-->
    <div id="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-2 hidden-xs hidden-sm"><a href="{{route('welcome')}}"><img src="{{asset('assets/frontend/images/logo-2.png')}}" alt="logo"/></a></div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="get-tuch text-left top20">
              <i class="icon-telephone114"></i>
              <ul>
                <li>
                  <h4>Phone Number</h4>
                </li>
                <li>
                  <p>+1 900 234 567 - 68</p>
                </li>
              </ul>
            </div>
            <div class="get-tech-line top20"><img src="{{asset('assets/frontend/images/get-tuch-line.png')}}" alt="line"/></div>
            <div class="get-tuch text-left top20">
              <i class="icon-icons74"></i>
              <ul>
                <li>
                  <h4>Uttara House Building</h4>
                </li>
                <li>
                  <p>Developer Hose Solution, Bangladesh</p>
                </li>
              </ul>
            </div>
            <div class="get-tech-line top20"><img src="{{asset('assets/frontend/images/get-tuch-line.png')}}" alt="line"/></div>
            <div class="get-tuch text-left top20">
              <i class=" icon-icons142"></i>
              <ul>
                <li>
                  <h4>Email Address</h4>
                </li>
                <li>
                  <p><a href="#">info@dhs.com</a></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===== #/HEADER BOTTOM =====-->

    <nav class="navbar navbar-default no-background navbar-sticky bootsnav">
      <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand sticky_logo" href=""></a>
        </div><!-- End Header Navigation -->
        <div class="collapse navbar-collapse nav_3 clearfix" id="navbar-menu">
          <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp"> 
            <li class="">
                  <a href="{{route('welcome')}}" >Homes</a>
                  <!-- <ul class="dropdown-menu">
                    <li><a href="index.html">Home V-1</a></li>
                    <li><a href="index-2.html">Home V - 2</a></li>
                    <li class="active"><a href="index-3.html">Home V - 3</a></li>
                    <li><a href="index-4.html">Home V - 4</a></li>
                    <li><a href="index-5.html">Home V - 5</a></li>
                    <li><a href="index-6.html">Home V - 6</a></li>
                    <li><a href="index-7.html">Home V - 7</a></li>
                    <li><a href="index-8.html">Home V - 8</a></li>
                    <li><a href="index-9.html">Home V - 9</a></li>
                    <li><a href="index-10.html">Home V - 10</a></li>
                    <li><a href="landing-page.html">Landing Page</a></li>
                  </ul> -->
                </li>
                
                <li class="">
                  <a href="{{route('about')}}" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                  <!-- <ul class="dropdown-menu">
                    <li><a href="about.html">About Us V - 1</a></li>
                    <li><a href="about-2.html">About Us V - 2</a></li>
                    <li><a href="about-3.html">About Us V - 3</a></li>
                  </ul> -->
                </li>
                
                <li class="">
                  <a href="{{{route('all-properties')}}}" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                  <!-- <ul class="dropdown-menu">
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Property Listing</a>
                      <ul class="dropdown-menu">
                        <li><a href="listing-1.html">Property Listing V - 1</a></li>
                        <li><a href="listing-2.html">Property Listing V - 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Property Details</a>
                      <ul class="dropdown-menu">
                        <li><a href="property-details-1.html">Property Details V - 1</a></li>
                        <li><a href="property-details-2.html">Property Details V - 2</a></li>
                        <li><a href="property-details-3.html">Property Details V - 3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Creat New Property</a>
                      <ul class="dropdown-menu">
                        <li><a href="submit-property.html">Creat New Property V - 1</a></li>
                        <li><a href="submit-property-2.html">Creat New Property V - 2</a></li>
                      </ul>
                    </li>
                  </ul> -->
                </li>
                
                <li class="">
                  <a href="{{route('agents')}}" class="dropdown-toggle" data-toggle="dropdown" >Agents</a>
                  <!-- <ul class="dropdown-menu">
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Our Agents</a>
                      <ul class="dropdown-menu">
                        <li><a href="agent-1.html">Our Agents V - 1</a></li>
                        <li><a href="agent-2.html">Our Agents V - 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Agent Profiles</a>
                      <ul class="dropdown-menu">
                        <li><a href="agent-profile-1.html">Agents Profile V - 1</a></li>
                        <li><a href="agent-profile-2.html">Agents Profile V - 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Agent Listings</a>
                      <ul class="dropdown-menu">
                        <li><a href="agent-listing.html">Agents Listings V - 1</a></li>
                        <li><a href="agent-listing-2.html">Agents Listings V - 2</a></li>
                      </ul>
                    </li>
                  </ul> -->
                </li>
                
                <li class="">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">User Pages</a>
                  <!-- <ul class="dropdown-menu">
                    <li><a href="user-profile.html">User Profile</a></li>
                    <li><a href="my-properties.html">My Property</a></li>
                    <li><a href="bookmark-properties.html">Bookmark Properties</a></li>
                    <li><a href="create-agency.html">Create Account</a></li>
                    <li><a href="login.html">User Login</a></li>
                    <li><a href="login.html">User Register</a></li>
                  </ul> -->
                </li>
                
                <li class="">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                  <!-- <ul class="dropdown-menu">
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Agency</a>
                      <ul class="dropdown-menu">
                        <li><a href="agency-listing.html">Agency Listing</a></li>
                        <li><a href="agency-details.html">Agency Deatil</a></li>
                        <li><a href="create-agency.html">Creat New Agency</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Galleries</a>
                      <ul class="dropdown-menu">
                        <li><a href="gallery-1.html">Gallery V - 1</a></li>
                        <li><a href="gallery-2.html">Gallery V - 2</a></li>
                        <li><a href="gallery-3.html">Gallery V - 3</a></li>
                        <li><a href="gallery-4.html">Gallery V - 4</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Our Blogs</a>
                      <ul class="dropdown-menu">
                        <li><a href="news-1.html">Our Blog V - 1</a></li>
                        <li><a href="news-2.html">Our Blog V - 2</a></li>
                        <li><a href="news-3.html">Our Blog V - 3</a></li>
                        <li><a href="news-details.html">Blog Details</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Create Invoice</a>
                      <ul class="dropdown-menu">
                        <li><a href="invoice-1.html">Create Invoice V - 1</a></li>
                        <li><a href="invoice-2.html">Create Invoice V - 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >FAQ's</a>
                      <ul class="dropdown-menu">
                        <li><a href="faq-1.html">FAQ's V - 1</a></li>
                        <li><a href="faq-2.html">FAQ's V - 2</a></li>
                        <li><a href="faq-3.html">FAQ's V - 3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Timelines</a>
                      <ul class="dropdown-menu">
                        <li><a href="timeline-1.html">Timeline V - 1</a></li>
                        <li><a href="timeline-2.html">Timeline V - 2</a></li>
                        <li><a href="timeline-3.html">Timeline V - 3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Error Pages</a>
                      <ul class="dropdown-menu">
                        <li><a href="error-401.html">Error Page 401</a></li>
                        <li><a href="error-403.html">Error Page 403</a></li>
                        <li><a href="error-404.html">Error Page 404</a></li>
                        <li><a href="error-500.html">Error Page 500</a></li>
                      </ul>
                    </li>
                    <li><a href="packages.html">Packages</a></li>
                    <li><a href="testimonials.html">Testimonial</a></li>
                    <li><a href="term&condition.html">Terms & Conditions</a></li>
                    <li><a href="auto-loan-calculator.html">Loan Calculate</a></li>
                  </ul> -->
                </li>
                
                <li class="">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Showcase</a>
                  
                </li>
                
                <li class="">
                  <a href="{{route('contact')}}" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                  <!-- <ul class="dropdown-menu">
                    <li><a href="contact-us.html">Contact Us V - 1</a></li>
                    <li><a href="contact-us-2.html">Contact Us V - 2</a></li>
                    <li><a href="contact-us-3.html">Contact Us V - 3</a></li>
                    <li><a href="contact-us-4.html">Contact Us V - 4</a></li>
                  </ul> -->
                </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--  Header Top End  -->
@endsection
@section('slider')
<!-- Navbar on Click -->
{{-- <div class="sidebar_menu">
  <nav class="pushmenu pushmenu-left">
    <a class="push-logo" href="{{route('welcome')}}"><img src="{{asset('assets/frontend/images/short_icon.png')}}" alt="logo"></a>
    <ul class="push_nav bottom20">
      <li class="dropdown active">
                <a href="{{route('welcome')}}">Homes</a>
              
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Properties</a>   
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Agents</a>
                
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">User Pages</a>
                
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
              </li>
              
              <li class="dropdown megamenu-fw">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Showcase</a>
              </li>
              
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
              </li>
    </ul>
    <div class="clearfix"></div>
    <ul class="socials">
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
  </nav>
</div> --}}
{{-- <div id="menu_bars" class="left">
    <span class="t1"></span>
    <span class="t2"></span>
    <span class="t3"></span>
</div> --}}
<!-- Header Top End -->


<!--  SLIDER  -->
<section class="rev_slider_wrapper">
  <div id="rev_full" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="crossfade">
        <img src="{{asset('assets/frontend/video/thumb.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['290','230','170','170']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <h2 class="border_heading p-white" style="color: #ed2a28"> DEVELOPRES HOUSE SOLUTION </h2>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['380','340','280','280']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <p class="p-white text-center">Find your new property online, Be happy</p>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['460','420','360','360']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        </div>
      </li>
      <li data-transition="fade">
        <img src="{{asset('assets/frontend/images/slide0.jpg')}}"  alt="video slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
            <div class="rs-background-video-layer" 
             data-volume="mute" 
             data-videowidth="100%" 
             data-videoheight="100%" 
             data-videomp4="video/video.mp4" 
             data-videopreload="preload" 
             data-videoloop="loop" 
             data-forceCover="1" 
             data-aspectratio="16:9" 
             data-autoplay="true" 
             data-autoplayonlyfirsttime="true" 
             data-nextslideatend="true">
            </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['290','230','170','170']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        <h2 class="border_heading p-white">WE FULFIL YOUR DREAM.</h2>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['380','340','280','280']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <h5 class="p-white text-center">Find your new property online, Be happy</h5>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['460','420','360','360']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        </div>
      </li>
      <li data-transition="fadefromleft">
        <img src="{{asset('assets/frontend/images/slide2.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['290','230','170','170']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <h2 class="border_heading p-white"> We Complete Your Dreams </h2>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['380','340','280','280']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
          <p class="p-white text-center">Find your new property online, Be happy</p>
        </div>
        <div class="tp-caption tp-resizeme"               
          data-x="['center','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['460','420','360','360']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
        </div>
      </li>
    </ul>
  </div>
</section>
<!--SLIDER  --> 


<!--  Home Icons Start  -->
<div id="home_icon">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="listing_1.html" class="home_feature">
          <i class="icon-icons215"></i>
          <h4>For Sale</h4>
          <p>Latest for sale</p>
        </a>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="my_properties.html" class="home_feature">
          <i class="icon-key3"></i>
          <h4>For Rent</h4>
          <p>Latest for sale</p>
        </a>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="gallery_1.html" class="home_feature">
          <i class="icon-icons74"></i>
          <h4>Beachside</h4>
          <p>Near the beach</p>
        </a>
      </div>
{{--       <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="news_details.html" class="home_feature">
          <i class="icon-stats-dots"></i>
          <h4>Reduced</h4>
          <p>Price reduced</p>
        </a>
      </div> --}}
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="listing_3.html" class="home_feature">
          <i class="icon-icons185"></i>
          <h4>Let Us Find</h4>
          <p>Ask an agent</p>
        </a>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <a href="listing_2.html" class="home_feature">
          <i class=" icon-clipboard"></i>
          <h4>Sell Property</h4>
          <p>Get in touch</p>
        </a>
      </div>
    </div>
  </div>
</div>
<!--  Home Icons End  -->
@endsection

@section('welcome_section')
<section id="wellcome" class="padding">
  <div class="container">
    <div class="row">
    <div class="col-sm-1 col-md-2"></div>
      <div class="col-xs-12 col-sm-10 col-md-8 text-center">
        <h2 class="text-uppercase">Welcome to <span class="color_red"> Our Site</span></h2>
        <div class="line_1-1"></div>
        <div class="line_2-2"></div>
        <div class="line_3-3"></div>
        <p class="heading_space">Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing
          vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
        </p>
      </div>
      <div class="col-sm-1 col-md-2"></div>
    </div>
{{--     <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_1.png" alt="image">
          <h4> 24/7 Emergency Available</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_2.png" alt="image">
          <h4>Expert and Professional</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_3.png" alt="image">
          <h4>Satisfaction Guarantee</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 text-center">
        <div class="welcome top40">
          <img src="images/wellcome_4.png" alt="image">
          <h4>Free Inspection</h4>
        </div>
      </div>
    </div> --}}
  </div>
</section>
@endsection

@section('property_listing')
<div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      
    @foreach($properties as $property)
    <div class="col-md-4 col-sm-6">
      <div class="property_item bottom40">
        <div class="image">
          <?php $i=1; ?>
          @foreach($property->pimages as $pic)
          <img src="{{Storage::url('propertyImages/'.$pic->name) }}" alt="image" class="img-responsive">
           <?php $i++; if($i==2) break; ?>
          @endforeach
          <div class="property_meta">
          <span><i class="fa fa-object-group"></i>{{ $property->property_area}} sq ft </span>
          <span><i class="fa fa-bed"></i>{{ $property->property_bedroom}} Bed Room</span>
          <span><i class="fa fa-bath"></i>{{ $property->property_bathroom}} Bathroom</span></div>
          <div class="price"><span class="tag">For {{ $property->property_status}}</span></div>
          <div class="overlay">
          <div class="centered"><a class="link_arrow white_border" href="{{ route('property.details', $property->id) }}">View Detail</a></div>
          </div>
        </div>
        <div class="proerty_content">
          <div class="proerty_text">
            <h3><a href="property_details_1.html">{{ $property->property_title}}</a></h3>
            <span>{{ $property->property_address}}</span>
            <p class="p-font-15">{{ str_limit($property->property_description,100)}}</p>
          </div>
          <div class="favroute clearfix">
            <p class="pull-md-left">Tk. {{ $property->property_price}}/=</p>
            <ul class="pull-right">
              <li><a href="#."><i class="icon-video"></i></a></li>
              <li><a href="#."><i class="icon-like"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    </div>
    <div class="row">
      <div class="col-md-12">
        {{-- <ul class="pager">
          <li><a href="#.">1</a></li>
          <li class="active"><a href="#.">2</a></li>
          <li><a href="#.">3</a></li>
        </ul> --}}
        {{$properties->links()}}
      </div>
    </div>
  </div>
@endsection

@section('advance_search')
<!-- PROPERTY SEARCH -->
<section id="property-search-sev" class="property-query-area property-page-bg padding parallaxie" style="background-image: url({{asset('assets/frontend/images/search-property.jpg')}});">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom40">
        <h2 class="text-uppercase">Advanced <span class="color_red">Search</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <form action="{{ route('property-by-search') }}" method="POST" class="findus">
      @csrf
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <label>Keyword</label>
            <input type="text" name="key" class="keyword-input" placeholder="Any">
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Location</label>
              <select class="selectpicker" data-live-search="true" name="location">
                <option selected="" value="null">Any</option>
                <option>Dhaka</option>
                <option>Sylet</option>
                <option>Maymansing</option>
                <option>Savar</option>
              </select>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Property Status</label>
              <select class="selectpicker" data-live-search="true" name="status">
                <option class="active" value="null">Any</option>
                <option>Sell</option>
                <option>Rent</option>
              </select>
          </div>
        </div>
      </div>
      <div class="search-2">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="single-query form-group">
                      <label>Bed Room</label>
                      <select class="selectpicker" data-live-search="true" name="bedroom">
                        <option class="active" value="null">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="single-query form-group">
                      <label>Bath Room</label>
                      <select class="selectpicker" data-live-search="true" name="bathroom">
                        <option class="active" value="null">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="single-query form-group">
                    <label>Squre Fit Min</label>
                    <input type="text" class="keyword-input" placeholder="Any" name="sqf">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-5 col-sm-6 text-right">
                  <div class="query-submit-button top10">
                    <input type="submit" class="btn_fill" value="Search">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </form>
  </div>
</section>
<!-- PROPERTY SEARCH --> 
@endsection


@section('recent_property')

@endsection

@section('experts')
<section class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom20">
        <h2 class="text-uppercase">Our <span class="color_red">experts</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
     {{--    <p>Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing
          <br>vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
        </p> --}}
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="team-member top40 text-center">
          <div class="team-img">
            <img src="{{asset('assets/frontend/images/CEO.JPG')}}" alt="">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4 class="bottom10">I love to desing</h4>
              <p>I love to introduce myself as a hardcore Web Designer.</p>
            </div>
            <div class="s-link">
              <a href="#." ><i class="fa fa-facebook"></i></a>
              <a href="#." ><i class="fa fa-twitter"></i></a>
              <a href="#." ><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="team-title top20 text-center">
          <h3>Nasir Ahmmed</h3>
          <span>Web designer</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member top40 text-center">
          <div class="team-img">
            <img src="{{asset('assets/frontend/images/Developer.JPG')}}" alt="">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4 class="bottom10">I love to development.</h4>
              <p>I love to introduce myself as a hardcore Web Development.</p>
            </div>
            <div class="s-link">
              <a href="#." ><i class="fa fa-facebook"></i></a>
              <a href="#." ><i class="fa fa-twitter"></i></a>
              <a href="#." ><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="team-title top20 text-center">
          <h3>Muhammad Pavel Sarker</h3>
          <span>Web Developer</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member top40 text-center">
          <div class="team-img">
            <img src="{{asset('assets/frontend/images/Marketing.JPG')}}" alt="">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4 class="bottom10">I love to marketing</h4>
              <p>I love to introduce myself as a hardcore marketing manager.</p>
            </div>
            <div class="s-link">
              <a href="#." ><i class="fa fa-facebook"></i></a>
              <a href="#." ><i class="fa fa-twitter"></i></a>
              <a href="#." ><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="team-title top20 text-center">
          <h3>Linda Anderson</h3>
          <span>Marketing Manager</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection