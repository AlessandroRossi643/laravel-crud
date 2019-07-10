@extends('layouts.base')
@section('title', 'Home - Lista prodotti')

@section('content')
<div class="main container">
  @forelse($boots as $boot)
  <div class="card" style="width: 18rem;">
    <img src="{{$boot->img}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$boot->name}}</h5>
      <h4 class="card-title">Price: {{$boot->price}}£</h4>
      <div class="card-action">
        <a class="btn btn-success" href="{{ route('boots.show',$boot->id) }}" role="button">Show Info</a>
        <a class="btn btn-primary" href="{{ route('boots.show',$boot->id) }}" role="button">Modified</a>
        <form method="post" action="{{route('boots.destroy',$boot->id)}}">@method('delete')
          @csrf
          <input type="submit" class="btn btn-danger" value="Delete">
        </form>
      </div>
    </div>
  </div>
  @empty
  <div class="alert alert-danger" role="alert">
    Non ci sono prodotti disponibili!
  </div>
  @endforelse
</div>
@endsection
