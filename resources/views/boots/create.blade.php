@extends('layouts.base')
@section('title', 'Inserisci prodotto')

@section('content')
<div class="main container">
  <form method="POST" action="{{route('boots.store')}}">
    @csrf
    <div class="form-group text-white">
      <label for="name">Name product</label>
      <input type="text" class="form-control" name="name" placeholder="Nike,Adidas,Puma..">
    </div>
    <div class="form-group text-white">
      <label for="description">Description</label>
      <textarea name="description" class="d-block" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group text-white">
      <label for="image">Url Image(optional)</label>
      <input type="url" name="img" class="d-block rounded p-2 w-75" placeholder="https:/...">
    </div>
    <div class="form-group text-white">
      <label for="availability">Availability</label>
      <input type="text" class="form-control w-25" name="availability">
    </div>
    <div class="form-group text-white">
      <label for="price">Price (£)</label>
      <input type="text" class="form-control w-25" name="price" placeholder="£">
    </div>
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
</div>
@endsection
