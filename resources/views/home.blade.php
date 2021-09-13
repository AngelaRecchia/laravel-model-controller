<!-- homepage = comics page -->

@extends('layout.app')
@section('title', 'DC Comics')
@section('content')
      @include('partials.comics')
      @include('partials.blue-nav')
@endsection