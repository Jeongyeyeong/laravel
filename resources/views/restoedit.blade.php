@extends('layouts.layout')

@section('content')

    <form method="POST" action="edit">
        @csrf
        <div class="form-group"> <input type="hidden" name="id" value="{{$data['id']}}">
            <label>Name</label>
            <input type="text"  name="name" value="{{$data['name']}}" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <labe>Email</labe>
            <input type="text"  name="email" value="{{$data['email']}}" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <labe>Address</labe>
            <input type="text"  name="address" value="{{$data['address']}}" class="form-control" placeholder="Enter address">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



