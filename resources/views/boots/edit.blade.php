@extends('layouts.base')
@section('title', 'Modifica prodotto')

@section('content')
<div class="main container">
  <form method="POST" action="{{route('boots.update',$boot->id)}}">@method('PUT')
    @csrf
    <div class="form-group text-white">
      <label for="name">Name product</label>
      <input type="text" class="form-control" name="name" value="{{old('name',$boot->name)}}">
    </div>
    <div class="form-group text-white">
      <label for="description">Description</label>
      <textarea name="description" class="d-block" rows="8" cols="80">{{old('description',$boot->description)}}</textarea>
    </div>
    <div class="form-group text-white">
      <label for="image">Url Image(optional)</label>
      <input type="url" name="img" class="d-block rounded p-2 w-75" value="{{old('img',$boot->img)}}">
    </div>
    <div class="form-group text-white">
      <label for="availability">Availability</label>
      <input type="text" class="form-control w-25" name="availability" value="{{old('availability',$boot->availability)}}">
    </div>
    <div class="form-group text-white">
      <label for="price">Price (£)</label>
      <input type="text" class="form-control w-25" name="price" value="{{old('price',$boot->price)}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
