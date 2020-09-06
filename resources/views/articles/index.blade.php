@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        @foreach($articles as $article)
            @include('articles.article', [ 'type' => 'listing'])
        @endforeach

    </div>
@endsection
