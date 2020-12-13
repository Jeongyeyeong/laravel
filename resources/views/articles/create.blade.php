@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>새 포럼 글 쓰기</h1>
    <hr />

    <form action="{{route('articles.store') }}" method="post">
        @csrf


        <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
            <label>이름</label>
            <select name="user_id" class="form-control">
                <option value="">선택하세요</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}" > {{$user->name}} </option>
                @endforeach
            </select>
            {!! $errors->first('user_id', '<span clas="form-error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title">제목</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control"/>
            {!! $errors->first('title', '<span clas="form-error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
            <label for="content">본문</label>
            <textarea  name="content" style="min-height: 200px" id="content" value="{{ old('content') }}" class="form-control"></textarea>
            {!! $errors->first('content', '<span clas="form-error">:message</span>') !!}
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
            저장하기
            </button>
        </div
    </form>
    </div>
    @stop
