@extends('layouts.layout')

@section('content')

    <form method="POST" action="add2">
        @csrf
        <div class="form-group">
            <labe>Name</labe>
            <select name="user_id" class="form-control">
                <option value="">선택하세요.</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}" > {{$user->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <labe>Title</labe>
            <input type="text"  name="title" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <labe>Content</labe>
            <input type="text"  name="content" class="form-control" placeholder="Enter content">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



