@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <ul>
            @foreach($posts as $post)
                <li>
                    @include('templates/article')
                </li>
            @endforeach
        </ul>

    </div>
@endsection
