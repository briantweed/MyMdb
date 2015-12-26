@extends('app')

{{-- Page Title --}}
@section('title')
   MyMDb
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.add_movie')
@stop

@section('subnav-right')
   @include('segments.layout.search_movies')
@stop

{{-- Main Body --}}
@section('content')

   <div class="row">
      <div class="col-xs-12">
         <h4>Recently Purchased</h4>
      </div>
   </div>

   <div class="row">
      <div class="col-xs-12">
         <div class="slick">
            @foreach($most_recent as $movie)
               <div>
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">
                     @if($movie->cover_count == 1)
                        <img class="img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text={{$movie->cover}}"  />
                     @else
                        <img class="img-rounded" src="{{asset($movie->cover)}}"  />
                     @endif
                  </a>
               </div>
            @endforeach
         </div>
      </div>
   </div>

   {{-- padding --}}
   @include('segments.layout.padding')
   {{-- padding --}}
   @include('segments.layout.padding')
   {{-- second row --}}
   <div class="row">

      {{-- top rated movies --}}
      <div class="col-xs-6">
         <div class="row">
            <div class="col-xs-12">
               <h4>Top Rated</h4>
            </div>
         </div>

         @foreach($top_rated as $movie)
            <div class="row movie">
               <div class="col-xs-8">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">{{$movie->name}} ({{$movie->released}})</a>
               </div>
               <div class="col-xs-4">
                  <span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='top' title='{{$movie->rating}} / 10'>{!!$movie->rating_display!!}</span>
               </div>
            </div>
         @endforeach

      </div> {{-- end of top rated --}}

      {{-- worst rated movies --}}
      <div class="col-xs-6">
         <div class="row">
            <div class="col-xs-12">
               <h4>Worst Rated</h4>
            </div>
         </div>

         @foreach($worst_rated as $movie)
            <div class="row movie">
               <div class="col-xs-8">
                  <a href="{{ action('MovieController@show', $movie->movie_id) }}">{{$movie->name}} ({{$movie->released}})</a>
               </div>
               <div class="col-xs-4">
                  <span class="rating-display @if($movie->rating==10) top-rated @endif" data-toggle='tooltip' data-placement='top' title='{{$movie->rating}} / 10'>{!!$movie->rating_display!!}</span>
               </div>
            </div>
         @endforeach

      </div> {{-- end of worst rated --}}

   </div> {{-- end of second row --}}

   {{-- padding --}}
   @include('segments.layout.padding')

   {{-- padding --}}
   @include('segments.layout.padding')
@stop

@section('stylesheets')
   {!! Html::style('css/slick.css') !!}
@stop

@section('extensions')
   {!! Html::script('js/slick.js') !!}
   {!! Html::script('js/welcome.js') !!}
@stop
