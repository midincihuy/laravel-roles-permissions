@extends('layouts.app')
{{-- @extends('adminlte::page') --}}

@section('content')
  {{-- <div class="container"> --}}
    {{-- <div class="row">
      <div class="col-md-8 col-md-offset-2"> --}}
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1>{{ $post->title }}</h1>
            <small><a href="#"> <h4> {{ $post->creator->name }}</h4> </a></small>
            <small>{{ $post->created_at->format("l, d F, Y h:iA") }}</small>
          </div>
          <div class="panel-body">
            <article class="">
              <div class="body">
                {!! $post->body !!}
              </div>
            </article>
          </div>
        </div>
      {{-- </div>
    </div> --}}

@endsection
