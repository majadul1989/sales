@extends('layouts.app')

@section('content')
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 canvasLeftMenu hidden-md hidden-lg">
    <ul>
        <li>Dashboard mobile</li>
        <li>Profile</li>
        <li>Settings</li>
        <li>Logout</li>
    </ul>   
    </div><!-- canvasLeft -->

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12 com-sm-12 col-lg-12 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 leftMenu hidden-xs hidden-sm">
                        <ul>
                            <li>Dashboard</li>
                            <li>Profile</li>
                            <li>Settings</li>
                            <li>Logout</li>
                        </ul>   
                        </div><!-- canvasLeft -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        sidebar
                    </div>
                </div>
                    
                </div>       
            </div>
        </div>
    </div>
</div>
@endsection
