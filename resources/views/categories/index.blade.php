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
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{$category->id}}
                    </td>
                    <td>
                        <a href="/categories/{{ $category->id }}">{{$category->title}}</a>
                    </td>
                    <td>
                        {{$category->created_at}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
