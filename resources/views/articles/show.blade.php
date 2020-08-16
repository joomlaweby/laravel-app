@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <div class="post">
            @include('articles.article', [ 'type' => 'detail'])
            @include('comments.index')
        </div>

    </div>
@endsection
