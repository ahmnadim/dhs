@extends('layouts.frontend.app')

@section('title','Property By Search')

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
    @if ($property)
    @foreach($property as $pro)
    <div class="col-md-4 col-sm-6">
      <div class="property_item bottom40">
        <div class="image">
          <?php $i=1; ?>
          @foreach($pro->pimages as $pic)
          <img src="{{Storage::url('propertyImages/'.$pic->name) }}" alt="image" class="img-responsive">
           <?php $i++; if($i==2) break; ?>
          @endforeach
          <div class="property_meta">
          <span><i class="fa fa-object-group"></i>{{ $pro->property_area}} sq ft </span>
          <span><i class="fa fa-bed"></i>{{ $pro->property_bedroom}} Bed Room</span>
          <span><i class="fa fa-bath"></i>{{ $pro->property_bathroom}} Bathroom</span></div>
          <div class="price"><span class="tag">For {{ $pro->property_status}}</span></div>
          <div class="overlay">
          <div class="centered"><a class="link_arrow white_border" href="{{ route('property.details', $pro->id) }}">View Detail</a></div>
          </div>
        </div>
        <div class="proerty_content">
          <div class="proerty_text">
            <h3><a href="property_details_1.html">{{ $pro->property_title}}</a></h3>
            <span>{{ $pro->property_address}}</span>
            <p class="p-font-15">{{ str_limit($pro->property_description,100)}}</p>
          </div>
          <div class="favroute clearfix">
            <p class="pull-md-left">${{ $pro->property_price}}</p>
            <ul class="pull-right">
              <li><a href="#."><i class="icon-video"></i></a></li>
              <li><a href="#."><i class="icon-like"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @else
    <h1>No Result Found</h1>
    @endif
    </div>
    <div class="row">
      <div class="col-md-12">
        {{-- <ul class="pager">
          <li><a href="#.">1</a></li>
          <li class="active"><a href="#.">2</a></li>
          <li><a href="#.">3</a></li>
        </ul> --}}
        {{$property->links()}}
      </div>
    </div>
  </div>
@endsection

@section('advance_search')
<!-- PROPERTY SEARCH -->
<section id="property-search-sev" class="property-query-area property-page-bg padding parallaxie"  style="background-image: url({{asset('assets/frontend/images/search-property.jpg')}});">
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
            <input type="text" name="key" class="keyword-input" placeholder="Any" required>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Location</label>
              <select class="selectpicker" data-live-search="true" name="location">
                {{-- <option selected="" value="any">Any</option> --}}
                <option>Chittagon</option>
                <option>Dhaka</option>
                <option>Savar</option>
                <option>Narsingdi</option>
              </select>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Property Status</label>
              <select class="selectpicker" data-live-search="true" name="status">
                {{-- <option class="active">Any</option> --}}
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
                        {{-- <option class="active">Any</option> --}}
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
                        {{-- <option class="active">Any</option> --}}
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
<section id="agent-p-2" class="property-details bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">Recent <span class="color_red">PROPERTY</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p class="margin-t-20">Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing
          <br>vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
        </p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div id="property-2-slider" class="owl-carousel">
            @foreach($property as $pro)
            <div class="item">
              <div class="property_item bottom40">
                <div class="image">
                  <img src="{{asset('assets/frontend/images/property-listing-1.jpg')}}" alt="listin" class="img-responsive">
                  <div class="property_meta">
                    <span><i class="fa fa-object-group"></i>{{ $pro->property_area }} sq ft </span>
                    <span><i class="fa fa-bed"></i>{{ $pro->property_bedroom }} Bed Room</span>
                    <span><i class="fa fa-bath"></i>{{ $pro->property_bathroom }} Bathroom</span>
                  </div>
                  <div class="price"><span class="tag">For {{ $pro->property_status }}</span></div>
                  <div class="overlay">
                    <div class="centered"><a class="link_arrow white_border" href="route('property.details', $property->id)">View Detail</a></div>
                  </div>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3><a href="property_details_1.html">House in New York City</a></h3>
                    <span class="bottom10">Merrick Way, Miami, USA</span>
                    <p><strong>$8,600 Per Month</strong></p>
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
            @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection