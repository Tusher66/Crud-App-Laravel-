@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Add Students</div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                {{--<input type="time" name="mobile" id="mobile" class="form-control"></br>--}}
                <label>DoB</label></br>
                <input type="date" name="mobile" id="mobile" class="form-control"></br>
                <div class="row">
                    <div class="col-md-6 ">
                        <input type="submit" value="Save" class="btn btn-success btn-sm float-end">
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('/') }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-plus" aria-hidden="true"></i> Cancel
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>
@stop
