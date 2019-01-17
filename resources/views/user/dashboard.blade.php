@extends('layouts.backend.app')

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-pink hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">home</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">TOTAL PROPERTIES <span class="badge badge-light">{{$posts->count()}}</span></div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-cyan hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">archive</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">TOTAL SUBSCRIBER <span class="badge badge-warning">{{$subscribers->count()}}</span></div>
                                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="" style="text-decoration: none;">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="info-box bg-light-green hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">forum</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">NEW CONTACT <span class="badge badge-secondary">45</span></div>
                                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-orange hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">person_add</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">TOTAL USERS <span class="badge badge-light">{{$users->count()}}</span></div>
                                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- #END# Widgets -->
        </div>
@endsection
