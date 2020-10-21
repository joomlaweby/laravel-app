@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1 class="">{{$title}}</h1>
        </div>

<form action="/configuration" method="POST" class="">
    @csrf
    <label>Site name</label>
    <input name="configuration_configuration" class="uk-input" value="{{ $configuration[0]->configuration }}">
    <input name="configuration_id"  type="hidden" value="{{ $configuration[0]->id }}">
    <button class="uk-button uk-button-primary" type="submit">Submit</button>
</form>

    </div>
@endsection
