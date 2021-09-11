<!-- homepage = comics page -->

@extends('layout.app')
@section('title', 'DC Comics')
@section('content')
    <section id="comics">
        <div class="container">
            <div class="button-big bold halfway">Current Series</div>
            <div class="comics-cont">
                @foreach($comics as $comic)
                <div class="comic">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                @endforeach
            </div>
        </div>
        
    </section>
    
@endsection