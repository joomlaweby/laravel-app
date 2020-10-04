@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <form class="edit-form" action="/articles" method="POST">
            @csrf
            <label>Title</label>
            <input type="text" required class="uk-input uk-margin-bottom" name="title" value="@if (isset($article)){{$article->title}}@endif">
            <label>Slug</label>
            <input type="text" required class="uk-input uk-margin-bottom" name="slug" value="@if (isset($article)){{$article->slug}}@endif">
            <label>Category</label>
            <select>
                <option value="1">1</option>
            </select>
            <label>Text</label>
            <textarea name="text" class="uk-textarea" rows="15">
                @if (isset($article)){{$article->slug}}@endif
            </textarea>
            <button class="uk-button uk-margin uk-button-primary" type="submit">Submit</button>
        </form>

    </div>
@endsection
