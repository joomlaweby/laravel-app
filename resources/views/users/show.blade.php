@extends('layouts.master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        <h1>{{$title}}</h1>
    </div>

    <h3>{{ $user->name }}</h3>
    <p><strong>Profile created:</strong> {{ $user->created_at->diffForHumans()}}</p>
    <p><strong>Comments:</strong> {{ $user->comments()->count()}}</p>
    <p><strong>Articles:</strong> {{ $user->articles()->count()}}</p>
</div>
@endsection
