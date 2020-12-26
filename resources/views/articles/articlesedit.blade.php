@extends('layouts.layout')

@section('content')

    <form method="POST" action="edit">
        @csrf
        <div class="form-group"> <input type="hidden" name="id" value="{{$data['id']}}">
            <label>Name</label>
            <input type="text"  name="restaurant_id" value="{{$data->user->name}}" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <labe>Email</labe>
            <input type="text"  name="name" value="{{$data['title']}}" class="form-control" placeholder="Enter email">
        </div>


{{--        @if($data['id']==$data['user_id'])--}}
{{--        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        @else--}}
{{--            <button type="submit" class="btn btn-primary">Submasdasdasdasadit</button>--}}
{{--            @endif--}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



