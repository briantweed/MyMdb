@extends('app')


{{-- Page Title --}}
@section('title')
   Edit {{$movie->movie_name}}
@stop

{{-- Page Heading --}}
@section('heading')
   Edit : {{$movie->movie_name}}
@stop


{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
   @include('segments.links.add_movie')
@stop

@section('subnav-right')
   @include('segments.links.show_details')
@stop


{{-- Main Body --}}
@section('content')


   @if (session('status'))
      <div class="col-xs-12 alert alert-dismissible alert-success">
         <button type="button" class="close" >
            <span aria-hidden="true">&times;</span>
         </button>
         {{ session('status') }}
      </div>
   @endif

   <div id="movie-details" class="alert alert-warning" style="display:none">
      ['{{htmlentities(str_replace(array('\'', '"'), array('&#039;', '&#034;'),$movie->movie_name))}}','{{htmlentities(str_replace(array('\'', '"'), array('&#039;', '&#034;'),$movie->movie_sort_name))}}','{{$movie->movie_release_date}}','{{$movie->movie_image_path}}','{{$movie->movie_running_time}}','{{$movie->movie_my_rating}}','{{$movie->movie_certificate_id}}','{{$movie->movie_format_id}}','{{$movie->movie_studio_id}}','{{htmlentities(str_replace(array('\'', '"'), array('&#039;', '&#034;'),$movie->movie_bio))}}'],
   </div>

   {!! Form::model($movie, ['method'=>'Patch','url'=>'movies/'.$movie->movie_id,'files' => true]) !!}
      <input type="hidden" value="{{env('AVIARY_KEY')}}" name="_aviary" />
      @include('segments.forms.movie_form')
   {!! Form::close() !!}
@stop

@section('extensions')
   <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>
   {!! Html::script('js/edit_movie.js') !!}
@stop
