@extends('layouts.master')
@section('header')

<a href="{{ url('/') }}">Back to overview</a>

<h2>Edit a cat</h2>

@stop
@section('content')
{!! Form::model($cat, ['url' => '/cats/'.$cat->id], ['method' => 'post']) !!}

<?php

//    echo '<pre>';
//    echo print_r($breeds, true);
//    echo '</pre>';
?>

    <div class="form-group">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    </div>
    <div class="form-group">
    {!! Form::label('date_of_birth', 'Date of Birth') !!}
    <div class="form-controls">
    {!! Form::date('date_of_birth', null, ['class' =>
    'form-control']) !!}
    </div>
    </div>
    <div class="form-group">
    {!! Form::label('breed_id', 'Breed') !!}
    <div class="form-controls">
    {!! Form::select('breed_id', $breeds, null, ['class' => 'form-control']) !!}
    </div>
    </div>
    {!! Form::submit('Save Cat', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop