@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);"><b>REGISTER</b></a>
       <!--  <small>Admin BootStrap Based - Material Design</small> -->
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_up" method="POST" action="{{route('register')}}">
                @csrf
                <div class="msg">Register a new membership</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name Surname" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email Address" required value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

{{--                 <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">mode_comment</i>
                    </span>
                    <div class="form-line">
                        <textarea class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" id="about" cols="30" rows="10" value="{{ old('about') }}" placeholder="About"></textarea>
                        @if ($errors->has('about'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('about') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}
                {{-- <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">phone</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Your Phone" required value="{{ old('phone') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">dialpad</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" placeholder="Your Mobile No." required value="{{ old('mobile') }}">
                        @if ($errors->has('mobile'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">videocam</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control{{ $errors->has('skype') ? ' is-invalid' : '' }}" name="skype" placeholder="Your Skype Username" required value="{{ old('skype') }}">
                        @if ($errors->has('skype'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('skype') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="6" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirm Password" required>
                    </div>
                </div>


                <div class="form-group">
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                <div class="m-t-25 m-b--5 align-center">
                    <a href="{{ route('login') }}">You already have a membership?</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
