@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Show Student Info</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Name : {{ $students->name }}</h5>
                <p class="card-text">Address : {{ $students->address }}</p>
                <p class="card-text">Mobile : {{ $students->mobile }}</p>
            </div>

            <a href="{{ url('/') }}" class="btn btn-danger btn-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> Cancel
            </a>

            </hr>

        </div>
    </div>
@stop
