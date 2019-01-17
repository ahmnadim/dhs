  <div id="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <p style="font-size: 26px; font-family: " class="p-font-15 p-white"><a href="/">{{$title->sitetitle}}</a></p>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="header-top-links">
            <ul>
              <li><a href="{{ route('about') }}"><i class="icon-heart2"></i>About Us</a></li>
              <li class="af-line"></li>
              <li><a href="{{ route('contact') }}"><i class="icon-icons215"></i>Contact Us</a></li>

              @guest
              <li><a href="{{route('login')}}" class="header-login"><i class="icon-icons179"></i>Login</a></li>
              <li><a href="{{route('register')}}" class="header-login"><i class="icon-icons179"></i>Register</a></li>
              
              @else
              <li class="nav-item dropdown">
                                <a class="header-login" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                     <span><i class="icon-icons179"></i>{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
  
    <!--===== HEADER BOTTOM =====-->
  <div id="header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-2 hidden-xs hidden-sm"><a href="{{('/')}}"><img src="{{('assets/frontend/images/logo-2.png')}}" alt="logo"/></a></div>
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

  <!--===== NAV-BAR =====-->
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="social-icons text-right">
            <ul class="socials">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i></button>
            <a class="navbar-brand sticky_logo" href="{{('/')}}"><img src="{{('assets/frontend/images/logo-2.png')}}" class="logo" alt=""></a>
          </div>
          <!-- End Header Navigation --> 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
              <li class="">
                <a href="{{route('welcome')}}" class="dropdown-toggle" data-toggle="dropdown">Homes</a>
                <!-- <ul class="dropdown-menu">
                  <li><a href="index.html">Home V-1</a></li>
                  <li><a href="index-2.html">Home V - 2</a></li>
                  <li><a href="index-3.html">Home V - 3</a></li>
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
                <a href="{{route('all-properties')}}" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
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
               <!--  <ul class="dropdown-menu">
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
                <!-- <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                   <div class="row">
                      <div class="col-menu col-md-2">
                        <h5 class="title">Showcase List</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="showcase-property.html">Properties List</a></li>
                            <li><a href="showcase-property.html">Single Property</a></li>
                            <li><a href="showcase-property.html">Search by City</a></li>
                            <li><a href="showcase-property.html">Search by Category</a></li>
                            <li><a href="showcase-property.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-2">
                        <h5 class="title">Showcase List</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="showcase-property.html">Properties List</a></li>
                            <li><a href="showcase-property.html">Single Property</a></li>
                            <li><a href="showcase-property.html">Search by City</a></li>
                            <li><a href="showcase-property.html">Search by Category</a></li>
                            <li><a href="showcase-property.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-8">
                        <div class="row">
                          <div id="nav_slider" class="owl-carousel">
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="#.">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul> -->
              </li>
              
              <li class="">
                <a href="{{route('contact')}}" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                <!-- <ul class="dropdown-menu">
                  <li class="active"><a href="contact-us.html">Contact Us V - 1</a></li>
                  <li><a href="contact-us-2.html">Contact Us V - 2</a></li>
                  <li><a href="contact-us-3.html">Contact Us V - 3</a></li>
                  <li><a href="contact-us-4.html">Contact Us V - 4</a></li>
                </ul> -->
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!--===== #/NAV-BAR =====-->