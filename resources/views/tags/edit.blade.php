@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1>{{$title}}</h1>
        </div>

        {!! Form::open(['url' => '/admin/tags', 'method' => 'post']) !!}

        {!! Form::label('name', 'Site name') !!}
        {!! Form::text('name', null, ['class' => 'uk-input']) !!}

        {!! Form::submit('Submit', ['class' => 'uk-button uk-button-default uk-button-primary uk-margin-top']) !!}


        {!! Form::close() !!}

    </div>
@endsection


