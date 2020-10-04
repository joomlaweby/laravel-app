@extends('layouts.master')

@section('content')
    @include('toolbar')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        @foreach($categories as $category)
            @include('categories.category', [ 'type' => 'listing'])
        @endforeach

    </div>
@endsection
