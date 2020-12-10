@extends('layouts.layout')

@section('content')

    <form method="POST" action="edit">
        @csrf
        <div class="form-group"> <input type="hidden" name="id" value="{{$data['id']}}">
            <label>Name</label>
            <input type="text"  name="restaurant_id" value="{{$data['restaurant_id']}}" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <labe>name</labe>
            <input type="text"  name="name" value="{{$data['name']}}" class="form-control" placeholder="Enter name">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



