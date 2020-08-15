@extends('layouts.master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        <h1>{{$title}}</h1>
    </div>

    <ul>
        @foreach($posts as $post)
            <li>
                <h3>{{$post->title}}</h3>
                <p>{{$post->text}}</p>
                <p>Author: {{$post->user->name}}</p>
            </li>
        @endforeach
    </ul>

</div>
@endsection
