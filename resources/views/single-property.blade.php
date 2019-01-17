<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
    .single-post-slider-image {
      <?php $i=1; ?>
          @foreach($property->pimages as $pic)
            background: url({{Storage::url('propertyImages/'.$pic->name)}});
        <?php $i++; if($i==2) break; ?>
          @endforeach
    position: relative;
    z-index: 1;
    background-repeat: no-repeat;   
}
  </style>
  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>{{$title->sitetitle}}</title>
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/master.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/color.css')}}">
<link rel="shortcut icon" href="{{asset('assets/frontend/images/short_icon.png')}}">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
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


<!-- PAGE TITLE -->
<div class="page-title single-post-slider-image parallaxie">
    
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Property</h1>
      <h5>10 Years Of Experience!</h5>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index.html">home</a>
      <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
      <a href="property-details-1.html">Property details Style - 1</a> 
    </div>
  </div>
</div>
<!--PAGE TITLE -->


<!-- PROPERTY DETAILS -->


<section class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase">{{$property->property_title}}</h2>
        <p class="bottom20">{{$property->property_address}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <div id="property-d-1" class="owl-carousel">
              @foreach($property->pimages as $pic)
              <div class="item"><img src="{{Storage::url('propertyImages/'.$pic->name)}}" alt="image" /></div>
              @endforeach
            </div>
            <div id="property-d-1-2" class="owl-carousel">
              @foreach($property->pimages as $pic)
              <div class="item"><img src="{{Storage::url('propertyImages/'.$pic->name)}}" alt="image" /></div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="property-tab">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
                <li role="presentation"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
                <li role="presentation"><a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">Plans</a></li>
                <li role="presentation"><a href="#tab_contact" aria-controls="tab_contact" role="tab" data-toggle="tab">Contact</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="description">
                  <h3 class="text-uppercase  bottom20 top10">Property <span class="color_red">Description</span></h3>
                  <p class="p-font-15">{{$property->property_description}}</p>
                  <p class="p-font-15 top30 bottom30"><!-- Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. --></p>
                  <div class="property_meta bottom40">
                    <span><i class="fa fa-object-group"></i>{{$property->property_area}} sq ft </span>
                    <span><i class="fa fa-bed"></i>{{$property->property_bedroom}} Bedrooms</span>
                    <span><i class="fa fa-bath"></i>{{$property->property_bathroom}} Bathroom</span>
                    <span><i class="fa fa-car"></i>{{$property->property_garage}} Garage</span>
                  </div>
                  <a class="link_arrow" href="">Read More</a>
                </div>
                <div role="tabpanel" class="tab-pane" id="summary">
                  <div class="row property-d-table">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10">Quick <span class="color_red">Summary</span></h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <table class="table table-striped table-responsive">
                        <tbody>
                          <tr>
                            <td><b>Property Id</b></td>
                            <td class="text-right">{{$property->id}}</td>
                          </tr>
                          <tr>
                            <td><b>Price</b></td>
                            <td class="text-right">{{$property->property_price}}taka / month</td>
                          </tr>
                          <tr>
                            <td><b>Property Size</b></td>
                            <td class="text-right">{{$property->property_area}} ft2</td>
                          </tr>
                          <tr>
                            <td><b>Bedrooms</b></td>
                            <td class="text-right">{{$property->property_bedroom}}</td>
                          </tr>
                          <tr>
                            <td><b>Bathrooms</b></td>
                            <td class="text-right">{{$property->property_bathroom}}</td>
                          </tr>
                          <tr>
                            <td><b>Available From</b></td>
                            <td class="text-right">22-04-2017</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <table class="table table-striped table-responsive">
                        <tbody>
                          <tr>
                            <td><b>Status</b></td>
                            <td class="text-right">{{$property->property_status}}</td>
                          </tr>
                          <tr>
                            <td><b>Year Built</b></td>
                            <td class="text-right">{{$property->property_year_built}}</td>
                          </tr>
                          <tr>
                            <td><b>Garages</b></td>
                            <td class="text-right">{{$property->property_bedroom}}</td>
                          </tr>
                          <tr>
                            <td><b>Cross Streets</b></td>
                            <td class="text-right">Nordoff</td>
                          </tr>
                          <tr>
                            <td><b>Floors</b></td>
                            <td class="text-right">Carpet - Ceramic Tile</td>
                          </tr>
                          <tr>
                            <td><b>Plumbing</b></td>
                            <td class="text-right">Full Copper Plumbing</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="features">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10">Proprty <span class="color_red">Features</span></h3>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                        <li>
                          Air Conditioning
                        </li>
                        <li>
                          Barbeque
                        </li>
                        <li>
                          Dryer
                        </li>
                        <li>
                          Laundry
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                        <li>
                          Microwave
                        </li>
                        <li>
                          Outdoor Shower
                        </li>
                        <li>
                          Refrigerator
                        </li>
                        <li>
                          Swimming Pool
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                        <li>
                          Quiet Neighbourhood
                        </li>
                        <li>
                          TV Cable & WIFI
                        </li>
                        <li>
                          Window Coverings
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane bg_light" id="plan">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase bottom20 top10">Our <span class="color_red">Plans</span></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 top10">
                      <div class="image">
                        <img src="images/property-d-1-f-1.jpg" alt="image" />
                        <div class="overlay border_radius">
                          <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 top10">
                      <div class="image">
                        <img src="images/property-d-1-f-2.jpg" alt="image" />
                        <div class="overlay border_radius">
                          <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 top10">
                      <div class="image">
                        <img src="images/property-d-1-f-3.jpg" alt="image" />
                        <div class="overlay border_radius">
                          <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 top10">
                      <div class="image">
                        <img src="images/property-d-1-f-4.jpg" alt="image" />
                        <div class="overlay border_radius">
                          <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 top10">
                      <div class="image">
                        <img src="images/property-d-1-f-5.jpg" alt="image" />
                        <div class="overlay border_radius">
                          <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 top10">
                      <div class="image">
                        <img src="images/property-d-1-f-6.jpg" alt="image" />
                        <div class="overlay border_radius">
                          <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_contact">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10">Contact <span class="color_red">Agent</span></h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="agent-p-img"> <img src="{{asset('assets/frontend/images/nasir.png')}}" class="img-responsive" alt="image" /> </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="agent-p-contact">
                        <div class="our-agent-box">
                          <h3 class="bottom10">{{$property->user->name}}</h3>
                          <p class="bottom30">{{$property->user->about}}</p>
                        </div>
                        <div class="agetn-contact">
                          <h6>Phone:</h6>
                          <h6>Mobile:</h6>
                          <h6>Email Adress:</h6>
                          <h6>Skype:</h6>
                        </div>
                        <div class="agetn-contact-2">
                          <p>{{$property->user->phone}}</p>
                          <p>{{$property->user->mobile}}</p>
                          <p>{{$property->user->email}}</p>
                          <p>{{$property->user->skype}}</p>
                        </div>
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
                  <div class="row top30">
                    <div class="col-xs-12">
                      <form class="findus">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="single-query">
                              <input type="text" placeholder="Your Name" class="keyword-input">
                            </div>
                            <div class="single-query">
                              <input type="text" placeholder="Phone Number" class="keyword-input">
                            </div>
                            <div class="single-query">
                              <input type="text" placeholder="Email Adress" class="keyword-input">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="single-query">
                              <textarea placeholder="Massege"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <input type="submit" value="Submit Now" class="btn_fill">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="social-networks top40">
                        <div class="social-icons-2">
                          <span class="share-it">Share: </span>
                          <span><a href="#."> Facebook</a></span>
                          <span><a href="#.">Twitter</a></span>
                          <span><a href="#."> Google +</a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="property-query-area">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase  bottom40">Advance <span class="color_red">Search</span></h3>
            </div>
          </div>
          <div class="row">
            <form action="{{  route('property-by-search') }}" method="POST" class="findus">
              @csrf
              <div class="col-md-12">
                <div class="single-query">
                  <input type="text" class="keyword-input" placeholder="Keyword" name="key">
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                    <select class="selectpicker" data-live-search="true" name="location">
                      <option selected="" value="any">Location</option>
                      <option>Dhaka</option>
                      <option>Sylet</option>
                      <option>Barishal</option>
                      <option>Tangial</option>
                    </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                    <select class="selectpicker" data-live-search="true" name="status">
                      <option class="active">Property Status</option>
                      <option>Sell</option>
                      <option>Rent</option>
                    </select>
                </div>
              </div>
          </div>
          <div class="row search-2">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="single-query">
                        <select class="selectpicker" data-live-search="true" name="bedroom">
                          <option class="active">Bed Room</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="single-query">
                        <select class="selectpicker" data-live-search="true" name="bathroom">
                          <option class="active">Bathroom</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="single-query">
                      <input type="text" class="keyword-input" placeholder="Min Area (sq ft)" name="sqf">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 text-center  top30">
                <div class="query-submit-button">
                  <button type="submit" class="btn_fill black">Search</button>
                </div>
              </div>
{{--               <div class="col-md-6 text-center">
                <div class="group-button-search">
                  <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                    <i class="fa fa-plus text-1 bg-color-yello" aria-hidden="true"></i> <i class="fa fa-minus text-2 hide bg-color-yello" aria-hidden="true"></i>
                    <div class="text-1">more options</div>
                    <div class="text-2 hide">more options</div>
                  </a>
                </div>
              </div> --}}
          </div>
        </form>
{{--           <div class="search-propertie-filters collapse">
            <div class="container-2">
              <div class="row">
                <div class="col-md-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Washer and Dryer</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Balcony</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Storage</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Balcony</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Storage</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Balcony</span>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
{{--         <div class="row">
          <div class="col-md-12">
            <h3 class="text-uppercase  bottom40 top40">Recent <span class="color_red">Properties</span></h3>
            <div class="media">
              <div class="media-left media-middle">
                <a href="#.">
                <img class="media-object" src="images/f-p-1.png" alt="image">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
                <p>45 Regent Street, London, UK</p>
                <a href="#.">$178,600</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left media-middle">
                <a href="#.">
                <img class="media-object" src="images/f-p-2.png" alt="image">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
                <p>45 Regent Street, London, UK</p>
                <a href="#.">$178,600</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left media-middle">
                <a href="#.">
                <img class="media-object" src="images/f-p-3.png" alt="image">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
                <p>45 Regent Street, London, UK</p>
                <a href="#.">$178,600</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left media-middle">
                <a href="#.">
                <img class="media-object" src="images/f-p-1.png" alt="image">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
                <p>45 Regent Street, London, UK</p>
                <a href="#.">$178,600</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom40 top40">Featured <span class="color_red">Properties</span></h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/property-listing-6.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/property-listing-6.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/property-listing-6.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  </div>
</section>
<section class="bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">Property <span class="color_red">Map</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        
        <div id="map_canvas"></div>
      </div>
    </div>
  </div>
</section>
{{-- <section id="agent-p-2" class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">Similar <span class="color_red">Properties </span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div id="property-1-slider" class="owl-carousel">
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property-2.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i> 3 Bedrooms</span>
                <span><i class="fa fa-bath"></i>3 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property-2.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property-2.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>5,302 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>5,630 sq ft </span>
                <span><i class="fa fa-bed"></i>6 Bedrooms</span>
                <span><i class="fa fa-bath"></i>8 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property-2.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- PROPERTY DETAILS -->

    
<!-- CONTACT -->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class="icon-telephone114"></i>
          <ul>
            <li><h4 class="p-font-17">Phone Number</h4></li>
            <li><p class="p-font-15">+1 900 234 567 - 68</p></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class="icon-icons74"></i>
          <ul>
            <li><h4 class="p-font-17">Bangoboundhu Hall,</h4></li>
            <li><p class="p-font-15">Developer House Solution, Dhaka</p> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class=" icon-icons142"></i>
          <ul>
            <li><h4 class="p-font-17">Email Address</h4></li>
            <li><a href="#."><p class="p-font-15">info@dhs.com</p></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--CONTACT --> 
<!-- Single Property End Here -->

<!--===== FOOTER =====-->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
  <div class="container pt-70 pb-40">
    <div class="row border-bottom">
      <div class="col-sm-6 col-md-3">
        <div class="widget dark"> <img class="mt-5 mb-20" alt="" src="{{asset('assets/frontend/images/logo-2.png')}}">
          <p>203, Muhammadpur, Behind Asad Gate, Dhaka.</p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">123-456-789</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">contact@nasir-admin.com</a> </li>
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
          <div class="text-gray"> +61 3 1234 5678 <br>
            +12 3 1234 5678 </div>
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
          <form class="padding-top-30">
            <input class="search" placeholder="Enter your Email" type="search">
            <a href="#." class="button"><i class="icon-mail-envelope-open"></i></a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-black-333">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-5">
          <p class="font-11 text-black-777 m-0 copy-right">Copyright: 2018 <a href="#."><span class="color_red">Developer House Solution</span></a>. All Rights Reserved</p>
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
        <h2 class="modal-title" id="myModalLabel">How can <span class="color_red">we help?</span></h2>
      </div>

      <div class="modal-body">

        <p class="bottom40">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

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