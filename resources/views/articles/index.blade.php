@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <ol class="posts">
            @foreach($articles as $article)
                <li>
                    @include('articles.article')
                </li>
            @endforeach
        </ol>

    </div>
@endsection
