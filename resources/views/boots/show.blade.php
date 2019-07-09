@extends('layouts.base')
@section('title', 'Visualizza prodotto')

@section('content')
<div class="main container show ">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{$boot->img}}" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">{{$boot->name}}</h3>
          <p class="card-text">{{$boot->description}}</p>
          <h3 class="card-title">PRICE: {{$boot->price}}£</h3>
          <a class="btn btn-dark" href="{{route('boots.index')}}" role="button">Torna nella home</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
