@extends('layouts.backend.app')

@push('css')
<!-- Dropzone Css -->

@endpush

@section('content')
    <div class="block-header">
        <a class="btn btn-primary waves-effect" href="{{ route('admin.agents') }}">Back</a>
    </div>
    

    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Add New Agent
                    </h2>
                </div>

                <div class="body">
                    <form action="{{ route('admin.agent.add.post') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control">
                                <label class="form-label">Agent Name</label>
                            </div>
                             @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" id="email" name="email" class="form-control">
                                <label class="form-label">Agent E-mail</label>
                            </div>
                             @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea id="about" name="about" cols="30" rows="5" class="form-control no-resize" aria-required="true"></textarea>
                                <label class="form-label">About Agent</label>
                            </div>
                            @if ($errors->has('about'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('about') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Agent Image</label>
                                <div class="fallback">
                                    <input name="image" type="file">
                                </div>
                            </div>

                        </div>
                        

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               

                <div class="body">

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="password" name="password" class="form-control">
                                <label class="form-label">Agent Password</label>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="phone" id="phone" name="phone" class="form-control">
                                <label class="form-label">Agent Phone</label>
                            </div>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="mobile" id="mobile" name="mobile" class="form-control">
                                <label class="form-label">Agent Mobile</label>
                            </div>
                            @if ($errors->has('mobile'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="skype" id="skype" name="skype" class="form-control">
                                <label class="form-label">Agent Skype</label>
                            </div>
                            @if ($errors->has('skype'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('skype') }}</strong>
                                </span>
                            @endif
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">ADD</button> 
                        <button type="reset" class="btn btn-warning m-t-15 waves-effect">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Vertical Layout | With Floating Label -->
    
@endsection


@push('js')

@endpush