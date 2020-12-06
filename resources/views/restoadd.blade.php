@extends('layouts.layout')

@section('content')

    <form method="POST" action="add">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text"  name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <labe>Email</labe>
            <input type="text"  name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <labe>Address</labe>
            <input type="text"  name="address" class="form-control" placeholder="Enter address">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



