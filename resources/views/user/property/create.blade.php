@extends('layouts.backend.app')

@push('css')
<!-- Dropzone Css -->
<link href="{{asset('assets/backend/plugins/dropzone/dropzone.css')}}" rel="stylesheet">

<!-- Multi Select Css -->
<link href="{{asset('assets/backend/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">

<!-- Bootstrap Spinner Css -->
<link href="{{asset('assets/backend/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

<!-- Bootstrap Tagsinput Css -->
<link href="{{asset('assets/backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">

<!-- Bootstrap Select Css -->
<link href="{{asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="block-header">
        <a class="btn btn-primary waves-effect" href="{{ route('admin.property.index') }}">Back</a>
    </div>
    

    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Add New Property
                    </h2>
                </div>

                <div class="body">
                    <form action="{{ route('user.property.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_titel" name="property_title" class="form-control">
                                <label class="form-label">Property titel</label>
                            </div>
                             @if ($errors->has('property_title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea id="property_description" name="property_description" cols="30" rows="5" class="form-control no-resize" aria-required="true"></textarea>
                                <label class="form-label">Property Description</label>
                            </div>
                            @if ($errors->has('property_description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Feature Image</label>
                                <div class="fallback">
                                    <input name="images[]" type="file" multiple="">
                                </div>
                            </div>

                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_area" name="property_area" class="form-control">
                                <label class="form-label">Property area</label>
                            </div>
                            @if ($errors->has('property_area'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_area') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_bedroom" name="property_bedroom" class="form-control">
                                <label class="form-label">Property bedroom</label>
                            </div>
                            @if ($errors->has('property_bedroom'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_bedroom') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_bathroom" name="property_bathroom" class="form-control">
                                <label class="form-label">Property Bathroom</label>
                            </div>
                            @if ($errors->has('property_bathroom'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_bathroom') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               

                <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_garage" name="property_garage" class="form-control">
                                <label class="form-label">Property Garage</label>
                            </div>
                            @if ($errors->has('property_garage'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_garage') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_address" name="property_address" class="form-control">
                                <label class="form-label">Property Address</label>
                            </div>
                            @if ($errors->has('property_address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_address') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Property For(Sell/Rent)</label>
                                <input type="text" name="property_status" id="property_status" class="form-control">
                                    
                                
                            </div>
                            @if ($errors->has('property_status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_status') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_price" name="property_price" class="form-control">
                                <label class="form-label">Property Price</label>
                            </div>
                            @if ($errors->has('property_price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_price') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="property_year_built" name="property_year_built" class="form-control">
                                <label class="form-label">Property Built Year</label>
                            </div>
                            @if ($errors->has('property_year_built'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('property_year_built') }}</strong>
                                </span>
                            @endif
                        </div>
                        <input type="checkbox" id="property_publication_status" name="property_publication_status" class="filled-in" value="true">
                        <label for="property_publication_status">Publication Status</label>
                        <br>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Vertical Layout | With Floating Label -->
    
@endsection

@push('js')

<!-- Select Plugin Js -->
<script src="{{asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Dropzone Plugin Js -->
<script src="{{asset('assets/backend/plugins/dropzone/dropzone.js')}}"></script>

<!-- Input Mask Plugin Js -->
<script src="{{asset('assets/backend/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

<!-- Multi Select Plugin Js -->
<script src="{{asset('assets/backend/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{asset('assets/backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
@endpush