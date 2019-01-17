@extends('layouts.frontend.app')
@section('title', 'About')
@section('slider')
<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie" style="background-image: url({{asset('assets/frontend/images/about-us-1.1.jpg')}});">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>about us</h1>
      <h5>10 Years Of Experience!</h5>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="{{route('welcome')}}">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="about.html">about us</a> 
    </div>
  </div>
</div>
<!--===== #/PAGE TITLE =====-->
@endsection

@section('welcome_section')
<!-- Our Mission Start -->
<section id="our-mission" class="padding">
  <div class="container">

        <div class="row mb-20">
          <div class="col-sm-1 col-md-2"></div>
          <div class="col-xs-12 col-sm-10 col-md-8 text-center">
            <h2 class="text-uppercase">Our <span class="color_red">Mission</span></h2>
            <div class="line_1-1"></div>
            <div class="line_2-2"></div>
            <div class="line_3-3"></div>
            <p class="heading_space">The mission of Developers House Solution is to be the most successful real estate firm in Bangladesh River County. Developers House Solution Real Estate incorporates proven, professional state of-the-art techniques specializing in the marketing, listing and selling of new and resale luxury homes, residential communities, condominiums, home sites, undeveloped land and commercial and investment opportunities. </p>
          </div>
          <div class="col-sm-1 col-md-2"></div>
        </div>
        
        <div class="row mt-30">

            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="our-mission-box-detail">
                  <h3>About Us Developer House Solution</h3>
                    <p>Developers House Solution maintains a full-time staff of well-trained real estate professionals who continually strive to provide top quality service for their individual clients and customers. Developers House Solution is a creative, innovative and people-oriented organization providing individual opportunity, personal satisfaction and rewarding challenges to all members of the firm.</p>
                    {{-- <ul>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</li>
                        <li>Ut enim ad minim veniam, quis nostrud exercitation</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</li>
                        <li>Ut enim ad minim veniam, quis nostrud exercitation</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</li>
                    </ul> --}}
                </div>
            </div>

            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="our-mission-box-img">
                  <img src="{{asset('assets/frontend/images/our-mission.jpg')}}" alt="img">
                </div>
            </div>
                 
       </div>
        
    </div>
</section>
<!-- Our Mission End --> 
@endsection

@section('partners')

<!--===== WHAT WE DO =====--> 
<section id="our-services" class="we_are bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase">What We <span class="color_red">Do</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"> <i class="icon-select-an-objecto-tool"></i></span>
          <div class="description">
            <h4>Wide Range of Properties</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="showcase_property.html" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"><i class="icon-user-tie"></i></span>
          <div class="description">
            <h4>14 Agents for Your Service</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="showcase_property.html" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"><i class="fa fa-money"></i></span>
          <div class="description">
            <h4>Best Price Guarantee!</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="showcase_property.html" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"> <i class="icon-select-an-objecto-tool"></i></span>
          <div class="description">
            <h4>Wide Range of Properties</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="showcase_property.html" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"><i class="icon-user-tie"></i></span>
          <div class="description">
            <h4>14 Agents for Your Service</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="showcase_property.html" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"><i class="fa fa-money"></i></span>
          <div class="description">
            <h4>Best Price Guarantee!</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="showcase_property.html" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--===== #/WHAT WE DO =====-->
@endsection
 