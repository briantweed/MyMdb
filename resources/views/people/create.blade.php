@extends('app')

{{-- Page Title --}}
@section('title')
   Add New Person
@stop

{{-- Page Heading --}}
@section('heading')
   Add New Person
@stop

{{-- Subnav --}}
@section('subnav-left')
   @include('segments.links.back')
@stop


{{-- Main Body --}}
@section('content')

   <div class="row movie">

      {{-- left column --}}
      <div class="{{env('LEFT_COLUMN')}}">

         {{-- cover image --}}
         <div class="row">
            <div class="col-xs-12">
               <img id="person-poster" class="img-responsive img-rounded" src="http://placehold.it/300x450/cccccc/ffffff?text=no+image">
            </div>

         </div>

         <div class="side-buttons">

            {{-- delete button --}}
            @if( Request::is('movies/*/edit'))
               <hr/>
               @include('segments.buttons.delete')
            @endif

            @include('segments.layout.padding')

         </div>

      </div>
      {{-- end of left column --}}

      {{-- right column --}}
      <div class="{{env('RIGHT_COLUMN')}}">

         {{-- errors column --}}
         @if($errors->any())
            <div class="col-xs-12 alert alert-danger">
               * There are errors with your form
            </div>
         @endif

         @if(session('status'))
            <div class="col-xs-12 alert alert-dismissible alert-danger">
               <button type="button" class="close" >
                  <span aria-hidden="true">&times;</span>
               </button>
               {{ session('status') }}
            </div>
         @endif

         <div class="row">
            <div class="col-xs-12">
               <h1>@yield('heading')</h1>
            </div>
         </div>

         {!! Form::open(['url'=>'people','files' => true]) !!}
            @include('segments.forms.form_builder')
            @include('segments.forms.submit')
         {!! Form::close() !!}

         @include('segments.layout.padding')

      </div>
      {{-- end of right column --}}

   </div>
   {{-- end of movie row --}}

@stop

@section('extensions')
   {!! Html::script('js/create_person.js') !!}
@stop
