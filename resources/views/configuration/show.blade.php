@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1 class="test">{{$title}}</h1>
        </div>


        {!! Form::open(['url' => '/contact']) !!}

        {!! Form::label('sitename', 'Site name') !!}

        {!! Form::close() !!}


    </div>
@endsection
