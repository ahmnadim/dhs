@extends('layouts.backend.app')

@push('css')
<!-- Dropzone Css -->

@endpush

@section('content')

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