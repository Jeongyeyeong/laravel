@extends('layouts.layout')

@section('content')
    <script>
        on
    </script>
    <div class="container">
        <button type="button" class="btn btn-primary" style="float: right; margin-top: 10px;"><a href="/create"> 추가</a></button>
        <h1>포럼 글 목록</h1>

        <hr/>

        <ul>
            @forelse($articles as $article)
                <li>
                    <a href="/articlesedit/{{$article->id}}">{{$article->title }}</a>

                    <small>
                        by {{$article->user->name}}
                    </small>
                </li>
            @empty
            <p>글이 없습니다.</p>
            @endforelse
        </ul>

    </div>

    @if($article->count())
        <div class="d-flex justify-content-center">
            {!! $articles->render() !!}
        </div>
    @endif
@stop
