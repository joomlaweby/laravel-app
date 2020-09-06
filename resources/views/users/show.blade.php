@extends('layouts.master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        <h1>{{$title}}</h1>
    </div>

<p>Hello, {{ $user->name }}</p>

</div>
@endsection
