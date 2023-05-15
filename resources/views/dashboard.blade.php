@extends('layout')
@section('content')
    <head>
    </head>
    {{--<div class="row">
    <div class="col-md-12">
        <img src="{{ asset('/assets/FrontPic.jpg') }}">
    </div>
    </div>--}}
    <div class="bg-image"
         style="background-image: url('/assets/FrontPic.jpg');
            height: 100vh;margin-top: -56px;">

        {{--<img  src="{{ asset('/assets/FrontPic.jpg') }}"  >--}}


        <div class="row">
            <div style="margin-top: 393px;" class="col-md-6">
                <a href="{{ url('/student/create') }}" class="btn btn-dark btn-sm float-end" >
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
            </div>
            <div style="margin-top: 393px;" class="col-md-6">
                <a href="{{ url('/student') }}" class="btn btn-dark btn-sm" >
                    <i class="fa fa-plus" aria-hidden="true"></i> Students Data
                </a>
            </div>

        </div>
    </div>

@endsection
