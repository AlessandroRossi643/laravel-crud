@extends('layouts.base')
@section('title', 'Home - Lista Scarpe')

@section('content')
<div class="main container">
  @forelse($boots as $boot)
  <div class="card" style="width: 18rem;">
    <img src="{{$boot->img}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$boot->name}}</h5>
      <p class="card-text">{{$boot->description}}</p>
      <h5 class="card-title">Prezzo: {{$boot->price}}£</h5>
  </div>
  <div class="card-action">
    
  </div>
  </div>
  @empty
  <p> ciao </p>
  @endforelse
</div>
@endsection
