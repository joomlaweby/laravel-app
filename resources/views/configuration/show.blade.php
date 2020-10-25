@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1 class="test">{{$title}}</h1>
        </div>


        {!! Form::open(['url' => '/configuration', 'method' => 'post']) !!}

        {!! Form::label('sitename', 'Site name') !!}
        {!! Form::text('sitename', null, ['class' => 'uk-input']) !!}

        {!! Form::label('metakeywords', 'Site meta keywords') !!}
        {!! Form::text('metakeywords', null, ['class' => 'uk-input']) !!}

        {!! Form::label('metadescription', 'Site meta description') !!}
        {!! Form::textarea('metadescription', null, ['class' => 'uk-textarea']) !!}

        {!! Form::close() !!}


    </div>
@endsection
