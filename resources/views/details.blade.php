@extends('layout.app')
@section('title', 'DC Comics')
@section('content')
    <div class="section" id="comic">
        <div class="blueBar"></div>
        <div class="container">

            <div class="preview">
                <div class="c-left">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}" id="poster">
                <h2 class="title">{{$comic->title}}</h2>
                <div class="infos">
                  <div class="left">
                        <div class="price">
                            <span class="text-green">U.S. Price: </span>
                            <span class="white">${{$comic->price}}</span>
                        </div>

                        <span class="text-green uppercase">Available</span>
                  </div>
                    <div class="right">
                        <span class="white b-l">Check Availability <i class="fas fa-chevron-down"></i></span>
                    </div>
              </div>
              <p class="description">{{$comic->description}}</p>
                </div>

                <div class="c-right">
                    <div class="right uppercase lightgrey bold">Advertisement</div>
                    <img src="{{asset('img/adv.jpg')}}" alt="advertisement">
                </div>
            </div>

        </div>

        <div class="details">
               <div class="container">
                   <div class="talent">
                       <span class="subtitle">Talent</span>
                       <div class="datas">
                            <div class="row">
                                <span class="key">Art by: </span>
                                <span class="field">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate earum rem repudiandae eius! Accusamus, odio? Sit, ea, doloribus, officiis nisi placeat deleniti modi laboriosam aperiam non qui fugit laudantium. Unde?</span>
                            </div>
                            <div class="row">
                                <span class="key">Written by: </span>
                                <span class="field">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure quo qui id dicta dolorum, provident, ex, debitis optio cupiditate commodi soluta totam voluptatibus aspernatur quod reprehenderit impedit beatae eius.</span>
                            </div>
                       </div>
                       
                   </div>
                   <div class="specs">
                        <span class="subtitle">Specs</span>
                        <div class="datas">
                            <div class="row">
                                    <span class="key">Series: </span>
                                    <span class="field lblue uppercase">{{$comic->series}}</span>
                            </div>
                            <div class="row">
                                <span class="key">U.S. Price: </span>
                                <span class="field lblue uppercase">${{$comic->price}}</span>
                            </div>
                            <div class="row">
                                <span class="key">On Sale Date: </span>
                                <span class="field lblue uppercase">{{$comic->sale_date}}</span>
                            </div>
                        </div>
                   </div>
               </div> 
        </div>
    </div>

    @include('partials.blue-nav')
    
@endsection