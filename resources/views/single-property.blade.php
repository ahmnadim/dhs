@extends('layouts.frontend.app')

@section('title','Property-details')

@section('slider')
<!-- PAGE TITLE -->
<div class="page-title parallaxie">
    
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

@endsection
<!-- PROPERTY DETAILS -->

@section('welcome_section')
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

          </div>
        </form>
        </div>  </div>
    </div>
  </div>
  </div>
</section>
@endsection


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

  