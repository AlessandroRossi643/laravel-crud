@extends('layouts.base')
@section('title', 'Home - Lista Scarpe')

@section('content')
<div class="main container">
  @forelse($boots as $boot)
  <div class="card" style="width: 18rem;">
    <img src="{{$boot->img}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$boot->name}}</h5>
      <h4 class="card-title">Price: {{$boot->price}}£</h4>
      <a class="btn btn-success" href="{{ route('boots.show',$boot->id) }}" role="button">Show Info</a>
    </div>
  </div>
  @empty
  <div class="alert alert-danger" role="alert">
    Non ci sono prodotti disponibili!
  </div>
  @endforelse
</div>
@endsection
