@extends('myLayoutViews.master')

@section('styles')
@stop

@section('content')
   <div class="container">
      <h1>Hello, {{Auth::user()->email}}</h1>
      <a href="{{URL::action('LoginController@mpLogoutUser')}}">
        <button class="btn btn-success">Logout</button>
      </a>
   </div>
@stop
   
   