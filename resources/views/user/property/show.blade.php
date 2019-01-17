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
        <a class="btn btn-primary waves-effect" href="{{ route('user.property.index') }}">Back</a>
        @if ($property->property_publication_status == true)
            <button class="btn btn-success waves-effect pull-right" disabled="">
            <i class="material-icons">done</i>
            Published</button>
        @else
            <button class="btn btn-danger waves-effect pull-right" type="button" onclick="publish_property({{$property->id}})"><i class="material-icons">done</i> Publish</button>
                    <form id="approve-form-{{$property->id}}" action="{{ route('user.property.publish',$property->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    </form>
        @endif
    </div>
    

    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Property Details
                    </h2>
                </div>

                <div class="body">
                    <strong>Property Title: {{ $property->property_title}}</strong> <br><br>
                    <strong>Property Description: </strong>{{ $property->property_description }} <br><br>
                    <strong>Property Bedroom: </strong>{{ $property->property_bedroom }} <br><br>
                    <strong>Property Bathroom: </strong>{{ $property->property_bathroom }} <br><br>
                    <strong>Property Area: </strong>{{ $property->property_area }} sq ft <br><br>
                    <strong>Property Garage: </strong>{{ $property->property_garage }} <br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               

                <div class="body">
                    <strong>Property Address: {{ $property->property_address}}</strong> <br><br>
                    {{-- <strong>Property Price: </strong>{{ $property->property_price }} <br><br> --}}
                    <strong>Property Build Year: </strong>{{ $property->property_year_built }} <br><br>
                    <strong>Property Price: </strong>${{ $property->property_price }} <br><br>
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

<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function publish_property(id){
                const swalWithBootstrapButtons = swal.mixin({
                  confirmButtonClass: 'btn btn-success',
                  cancelButtonClass: 'btn btn-danger',
                  buttonsStyling: false,
                })

                swalWithBootstrapButtons({
                  title: 'Are you sure?',
                  text: "You want to approve this property!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, approve it!',
                  cancelButtonText: 'No, cancel!',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                   document.getElementById('approve-form-'+id).submit();

                  } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                  ) {
                    swalWithBootstrapButtons(
                      'Cancelled',
                      'Your Data is safe 🙂',
                      'error'
                    )
                  }
                })
                        }
    </script>
@endpush