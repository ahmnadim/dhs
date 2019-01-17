@extends('layouts.frontend.app')

@section('title', 'Contact')

@section('slider')
<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie" style="background-image: url({{asset('assets/frontend/images/titlebg-1.jpg')}});">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Contact us</h1>
      <h5>10 Years Of Experience!</h5>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index.html">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="contact-us.html">Contact us</a> 
    </div>
  </div>
</div>
<!--===== #/PAGE TITLE =====-->
@endsection

@section('welcome_section')
  <!--===== CONTACT US =====-->
<section id="contact-us">
  <div class="container">
      <div class="row padding">
        
        <div class="col-md-8">
          <div class="bottom40">
                <h2 class="text-uppercase">Send us<span class="color_red"> a message </span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
              </div>
          <div class="agent-p-form p-t-30">
            
            <div class="row">
              <form class="callus padding-bottom"  id="contact-form" onSubmit="return false">
            
                     <div class="form-group">
                         <div id="result">
                         </div>
                     </div>
            
              <div class="col-md-12">
                    <div class="single-query">
                        <input type="text" class ="keyword-input" placeholder="Name" name="name" id="name">
                    </div>
                </div>
               <div class="col-md-12">    
                    <div class="single-query">
                        <input type="text" class ="keyword-input" placeholder="Phone" name="phone" id="phone">
                    </div>
               </div>
               <div class="col-md-12">     
                    <div class="single-query">
                        <input type="email" class ="keyword-input" placeholder="E - mail" name="email" id="email">
                    </div>
               </div>
               <div class="col-md-12">
                    <div class="single-query">
                        <textarea name="message" placeholder="Message" id="message"></textarea>
                    </div>
               </div>
                 <div class="col-md-12">   
                      <button type="submit" class="btn_fill" id="btn_submit" name="btn_submit">Submit</button>
                 </div>     
                    </form>
        
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="bottom40">
                <h2 class="text-uppercase">get in<span class="color_red"> touch</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
              </div>
              
          <div class="agent-p-contact p-t-30">
            <div class="agetn-contact-2">
              <p><i class="icon-telephone114"></i> +8801677393743</p>
              <a href="#.">
                <p><i class=" icon-icons142"></i> info@dhs.com</p>
              </a>
              <a href="#.">
                <p><i class="icon-browser2"></i>www.dhs.com</p>
              </a>
              <p><i class="icon-icons74"></i> Amin Model town, Savar, Dhaka</p>
            </div>
            <ul class="socials">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-youtube"></i></a></li>
              <li><a href="#."><i class="fa fa-instagram"></i></a></li>
              <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
       
      </div>
    </div>
    
    <div class="contact">
      <div id="map"></div>
    </div>
</section>
<!--===== #/CONTACT US =====-->
@endsection
