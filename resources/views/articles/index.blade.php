@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>포럼 글 목록</h1>
        <hr/>
        <ul>
            @forelse($articles as $article)
                <li>
                    {{$article->title }}
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
