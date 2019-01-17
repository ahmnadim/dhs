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
          <a class="navbar-brand sticky_logo" href="">
            <img src="{{asset('assets/frontend/images/logo-2.png')}}" alt="line"/ style="margin-top: -10px;">
          </a>
        </div><!-- End Header Navigation -->
        <div class="collapse navbar-collapse nav_3 clearfix" id="navbar-menu">
          <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp"> 
                <li class="">
                  <a href="{{route('welcome')}}" >Homes</a>
                  
                </li>
                
                <li class="">
                  <a href="{{route('about')}}" class="dropdown-toggle" data-toggle="dropdown">About Us</a>

                </li>
                
                <li class="">
                  <a href="{{{route('all-properties')}}}" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                  
                </li>
                
                <li class="">
                  <a href="{{route('agents')}}" class="dropdown-toggle" data-toggle="dropdown" >Agents</a>
                  
                </li>
                
                <li class="">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">User Pages</a>
                  
                </li>
                
                <li class="">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                  
                </li>
                
                <li class="">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Showcase</a>
                  
                </li>
                
                <li class="">
                  <a href="{{route('contact')}}" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                  
                </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--  Header Top End  -->