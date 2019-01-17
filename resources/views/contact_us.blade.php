<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>DHS | CONTACT US </title>
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/master.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/color.css')}}">
<link rel="shortcut icon" href="{{asset('assets/frontend/images/short_icon.png')}}">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
      
    </style>
</head>

<body>


<!--===== LOADER =====-->
<!-- <div class="loader">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
</div> -->
<!--===== #/LOADER =====-->


<!--===== BACK TO TOP =====-->
<div class="short-msg">
  <a href="#." class="back-to"><i class="icon-arrow-up2"></i></a>
  <a href="#." class="short-topup" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
</div>
<!--===== #/BACK TO TOP =====-->


<!--===== HEADER =====-->
  <!--===== HEADER TOP =====-->
  @include('layouts.frontend.partials.top_header')
  <!--===== #/HEADER TOP =====--> 


  <!--===== #/NAV-BAR =====--> 
<!--===== #/HEADER =====-->


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


<!--===== CONTACT =====-->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class="icon-telephone114"></i>
          <ul>
            <li>
              <h4 class="p-font-17">Phone Number</h4>
            </li>
            <li>
              <p class="p-font-15">123456789</p>
            </li>
          </ul>
        </div>
        <div class="get-tech-line"><img src="images/get-tuch-line.png" alt="line"/></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class="icon-icons74"></i>
          <ul>
            <li>
              <h4 class="p-font-17">7/9A Model town</h4>
            </li>
            <li>
              <p class="p-font-15">Asulia, Savar.</p>
            </li>
          </ul>
        </div>
        <div class="get-tech-line"><img src="images/get-tuch-line.png" alt="line"/></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class=" icon-icons142"></i>
          <ul>
            <li>
              <h4 class="p-font-17">Email Address</h4>
            </li>
            <li>
              <a href="#."><p class="p-font-15">dhs@gmail.com</p></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--===== #/CONTACT =====--> 
<!-- Single Property End Here -->

<!--===== FOOTER =====-->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
  <div class="container pt-70 pb-40">
    <div class="row border-bottom">
      <div class="col-sm-6 col-md-3">
        <div class="widget dark"> <img class="mt-5 mb-20" alt="" src="{{asset('assets/frontend/images/logo-2.png')}}">
          <p>Model town, Asulia, Savar.</p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">123-456-789</a> </li><br>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">dhs@gmail.com</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">www.dhs.com</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title">Quick Links</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
          <ul class="list angle-double-right list-border">
            <li> <a href="#.">Home </a></li>
            <li> <a href="#.">Services </a></li>
            <li> <a href="#.">Pages</a></li>
            <li> <a href="#.">About Us </a></li>
            <li> <a href="#.">Blogs </a></li>
            <li> <a href="#.">Portfolio </a></li>
            <li> <a href="#.">Contact Us </a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title ">Use Full Links</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
          <ul class="list list-border">
            <li><a href="#.">About</a></li>
            <li><a href="#.">News</a></li>
            <li><a href="#.">Testimonials</a></li>
            <li><a href="#.">Typography</a></li>
            <li><a href="#.">Services</a></li>
            <li><a href="#.">Careers</a></li>
            <li><a href="#.">Our team</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title">Opening Hours</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
          <div class="opening-hourse">
            <ul class="list-border">
              <li class="clearfix"> <span> Mon - Tues : </span>
                <div class="value pull-right"> 6.00 am - 10.00 pm </div>
              </li>
              <li class="clearfix"> <span> Wednes - Thurs :</span>
                <div class="value pull-right"> 8.00 am - 6.00 pm </div>
              </li>
              <li class="clearfix"> <span> Fri : </span>
                <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
              </li>
              <li class="clearfix"> <span> Sun : </span>
                <div class="value pull-right"> Closed </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-30">
      <div class="col-md-3 col-sm-4">
        <div class="widget dark">
          <h5 class="widget-title mb-10">Call Us Now</h5>
          <div class="text-gray"> +8801677390769 <br>
            +8801689044066 </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="widget dark">
          <h5 class="widget-title mb-10">Connect With Us</h5>
          <ul class="socials">
            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
            <li><a href="#."><i class="fa fa-youtube"></i></a></li>
            <li><a href="#."><i class="fa fa-instagram"></i></a></li>
            <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
            <div class="col-md-6 col-sm-4 text-right">
                <div class="mb20">
                    <form action="{{ route('subscribe') }}" method="POST" class="padding-top-30">
                        @csrf
                        <input class="search" placeholder="Your Email To Subscribe" type="email" name="email">
                        <button type="submit" class="button"><i class="icon-mail-envelope-open"></i></butthon>
                    </form>
                </div>
            </div>
    </div>
  </div>
  <div class="footer-bottom bg-black-333">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-5">
          <p class="font-11 text-black-777 m-0 copy-right">Copyright: 2019 <a href="#."><span class="color_red">DEVELOPERS HOUSE SOLUTION</span></a>. All Rights Reserved</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right">
          <div class="widget no-border m-0">
            <ul class="list-inline sm-text-center mt-5 font-12">
              <li> <a href="#.">FAQ</a> </li>
              <li>|</li>
              <li> <a href="#.">Help Desk</a> </li>
              <li>|</li>
              <li> <a href="#.">Support</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--===== #/FOOTER =====--> 


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">How can <span class="color_red">we help?</span></h2>The mission of Developers House Solution is to be the most successful real estate firm in Bangladesh River County. Developers House Solution Real Estate incorporates proven, professional state of-the-art techniques specializing in the marketing, listing and selling of new and resale luxury homes, residential communities, condominiums, home sites, undeveloped land and commercial and investment opportunities. Developers House Solution maintains a full-time staff of well-trained real estate professionals who continually strive to provide top quality service for their individual clients and customers. Developers House Solution is a creative, innovative and people-oriented organization providing individual opportunity, personal satisfaction and rewarding challenges to all members of the firm.
      </div>

      <div class="modal-body">

        <p class="bottom40"></p>

        <div class="short-msg-tab"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Suggestion</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Question</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Problems</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comments-o" aria-hidden="true"></i> Feedback</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <div class="row">
                <div class="col-md-12"><h3>Suggestion</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="row">
                <div class="col-md-12"><h3>Question</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="messages">
              <div class="row">
                <div class="col-md-12"><h3>Problems</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
              <div class="row">
                <div class="col-md-12"><h3>Feedback</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="dark_border" data-dismiss="modal">Cancel Message</button>
        <button type="button" class="btn_fill">Send Message</button>
      </div>

    </div>
  </div>
</div>
<!-- #/Modal -->


<!--===== REQUIRED JS =====--> 
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

</body>
</html> 