@extends('layouts.base')
@section('title', '404 not found')

@section('content')
<div class="main container error">
  <div class="alert alert-danger error_message" role="alert">
    <h4 class="alert-heading">404 Not found!</h4>
    <p>Searched "ID" doesn't exists.</p>
  </div>
</div>
@endsection
