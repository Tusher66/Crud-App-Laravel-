@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Update Student info</div>
        <div class="card-body">

            <form action="{{ url('student/' .$students->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
                <div class="row">
                    <div class="col-md-6 ">
                        <input type="submit" value="Update" class="btn btn-success btn-sm float-end">
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
