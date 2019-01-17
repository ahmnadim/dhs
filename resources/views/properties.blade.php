@extends('layouts.frontend.app')

@section('title', 'All-Properties')

@section('slide')
  <!-- PAGE TITLE -->
<div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Listings</h1>
      <h5>10 Years Of Experience!</h5>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index.html">home</a>
      <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
      <a href="listing-1.html">Property Listing</a> 
    </div>
  </div>
</div>
<!-- PAGE TITLE -->
@endsection

@section('welcome_section')
  <!-- LISTING STYLE-->

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

<!-- LISTING -->

@endsection