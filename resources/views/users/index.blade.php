@extends('layouts.admin.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>
        <table class="uk-table uk-table-divider uk-table-striped uk-table-hover uk-table-small">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Member since</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>
                    <td>
                        <a href="/users/{{ $user->id }}">{{$user->name}}</a>
                    </td>
                    <td>
                        {{$user->created_at}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@endsection
