@extends('layouts.master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        {{$title}}
    </div>

    <ul>
        @foreach($posts as $post)
            <li>{{$post}}</li>
        @endforeach
    </ul>

    <div class="links">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </div>
</div>
@endsection
