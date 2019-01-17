@extends('layouts.backend.app')
@section('content')
<div class="row clearfix">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Change Site Title
                    </h2>
                </div>

                <div class="body">
                    <form action="{{ route('admin.changesitetitle')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                @foreach($title as $t)
                                <input type="text" value="{{$t->sitetitle}} " id="sitetitle" name="sitetitle" class="form-control">
                                @endforeach
                                <label class="form-label">Site title</label>
                            </div>
                             @if ($errors->has('sitetitle'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('sitetitle') }}</strong>
                                </span>
                            @endif
                        </div>

                        
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection