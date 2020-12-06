<link rel="stylesheet" hrf="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

@extends('layouts.layout')

@section('content')
    <h1>Resto list page is here</h1>
    @if(Session::get('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form class="form-inline"  action="/search"  method="GET" style="float: right;">
    @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Search</label>
            <input type="text" name="text1" class="form-control">

        </div>
        <button  class="btn btn-primary mb-2" type="submit" >검색</button>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>

            <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}} </td>
                <td>{{$item->address}}</td>
                <td>
                    <a href="/delete/{{$item->id}}">삭제하기</a>
                    <a href="/edit/{{$item->id}}"> 수정하기</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



    <div class="d-flex justify-content-center">
        {!! $data->links() !!}
    </div>



@endsection



