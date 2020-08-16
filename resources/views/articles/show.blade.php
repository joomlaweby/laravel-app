@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <div class="posts">
            @include('articles.article', [ 'type' => 'detail'])
        </div>

    </div>
@endsection
