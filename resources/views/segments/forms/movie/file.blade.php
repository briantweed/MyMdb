
{{-- error class --}}
@section('errorClass')
   {{$errorClass}}
@overwrite

{{-- error message --}}
@section('errorMessage')
   @if($errorMgs != "")
      @include('segments.forms.errors')
   @endif
@overwrite

{{-- label --}}
@section('label')
   {!! Form::label($field, $label) !!} @if($required) <span class="required">*</span> @endif
@overwrite

{{-- input --}}
@section('input')
   {!! Form::file($field) !!}
@overwrite

{{-- input extra classes --}}
@section('input_class')

@overwrite

@include('segments.forms.row')
