@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <form class="edit-form" action="/categories" method="POST">
            @csrf
            <label>Title</label>
            <input type="text" class="uk-input uk-margin-bottom" name="title" value="@if (isset($category)){{$category->title}}@endif">
            <button class="uk-button uk-margin uk-button-primary" type="submit">Submit</button>
        </form>

    </div>
@endsection
