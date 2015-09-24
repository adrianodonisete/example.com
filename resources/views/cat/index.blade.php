@extends('layouts.master')
@section('header')
@if (isset($breed))
<a href="{{ url('/cat') }}">Back to the overview</a>
@endif
<h2>
    All @if (isset($breed)){{ $breed->name }}@endif Cats
    <a href="{{ url('cat/create') }}" class="btn btn-primary
       pull-right">
        Add a new cat
    </a>
</h2>
@stop
@section('content')
@foreach ($cats as $cat)
<div class="cat">
    <a href="{{ url('cat/'.$cat->id) }}">
        <strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
    </a>
</div>
@endforeach
@stop