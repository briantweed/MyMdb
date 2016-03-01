@extends('app')

@section('title')
   Test Page
@stop

{{-- Main Body --}}
@section('content')

   <style>

      body {
         font-size: 14px;
         background: #3b3838;
         color: #ffffff;
      }

      h1{
         font-family: Veneer !important;
         border:none !important;
         font-size: 10em;
         text-shadow: 1px 1px 4px #666;
      }

      h2{
         font-family: Coves !important;
         border:none !important;
         font-size: 4em;
         margin: -30px 0 20px;
      }

      h3{
         font-family: Verdana !important;
         border:none !important;
         font-size: 1.5em;
         font-weight: bold;
      }

      p{
         font-family: Raleway !important;
         font-size: 1.2em;
         line-height: 2;
      }

      div.title-section { background: #211616;}

      div.flex-div {
         font-size: 100%;
         display: inline-flex;
         align-items: center;
         justify-content: center;
         transform: rotateZ(45deg);
         width: 140px;
         height: 140px;
         background: #678aab;
         border-radius: .5em;
         color: #fafafa;
         box-shadow: 0 0 0 .3em #211616, 0 0 0 .6em #477cad;
         margin: 4em;
      }

      div.child-div {
         font-size: 6em;
         transform: rotateZ(-45deg);
      }

      div.icon-div.front {
         animation: spin 2.5s infinite linear 1s;
         backface-visibility: hidden;
         position: absolute;
      }

      div.icon-div.back {
         transform: rotateY(180deg);
         animation: backspin 2.5s infinite linear 1s;
         backface-visibility: hidden;
      }

      @keyframes spin {
        0%   { transform: rotateY(0deg); }
        100% { transform: rotateY(359deg); }
      }

      @keyframes backspin {
        0%   { transform: rotateY(180deg); }
        100% { transform: rotateY(-179deg); }
      }

   </style>

   <div class="row">
      <div class="col-xs-12">

      </div>
   </div>
</div>
</div>

<div class="title-section">
   <div class="container">
      <div class="row">
         <div class="col-xs-3">
            <div class="flex-div">
               <div class="child-div">
                  <div class="icon-div front">
                     <i class="ft icon-empire"></i>
                  </div>
                  <div class="icon-div back">
                     <i class="ft icon-rebel"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-9">
            <h1>Brian Tweed</h1>
            <h2>web designer / developer</h2>
         </div>
      </div>
   </div>
</div>

<div class="info-section">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <h3>About Me</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero magna, tristique eget placerat a,
               eleifend quis ligula. Praesent in ante nec lorem sollicitudin vulputate. Vestibulum malesuada vitae orci
               id tristique. Phasellus est augue, posuere a gravida eu, pretium vel dolor. Cras maximus aliquet turpis,
               in tempor tortor cursus vel. Quisque feugiat at nibh sed elementum. Sed elementum dolor id nibh convallis
               fermentum. Vestibulum vel quam suscipit est semper tincidunt. Nullam fermentum sagittis ipsum ac finibus.
               Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
         </div>
      </div>
   </div>
</div>

@stop

@section('extensions')

@stop
