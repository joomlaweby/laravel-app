@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <form class="edit-form" action="/categories" method="POST">
            @csrf
            <label>Title</label>
            <input type="text" required class="uk-input uk-margin-bottom" name="title" value="@if (isset($category)){{$category->title}}@endif">
            <label>Slug</label>
            <input type="text" required class="uk-input uk-margin-bottom" name="slug" value="@if (isset($category)){{$category->slug}}@endif">
            <label>Text</label>
            <textarea name="text" class="uk-textarea">
                @if (isset($category)){{$category->slug}}@endif
            </textarea>
            <button class="uk-button uk-margin uk-button-primary" type="submit">Submit</button>
        </form>

    </div>
@endsection
