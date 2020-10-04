@extends('layouts.master')

@section('content')
    @include('toolbar')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover uk-table-small">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>
                        {{$tag->id}}
                    </td>
                    <td>
                        <a href="/categories/{{ $tag->slug }}/edit">{{$tag->title}}</a>
                    </td>
                    <td>
                        {{$tag->created_at}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
