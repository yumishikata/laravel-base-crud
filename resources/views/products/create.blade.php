@extends('layouts.app')

@section('title', 'Inserimento nuovi prodotti')

@section('content')

<form action="{{ route('products.store') }} " method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" class="form-control" id="color" name="color">
    </div>

    <div class="form-group">
        <label for="season">Season:</label>
        <input type="text" class="form-control" id="season" name="season">
      </div>

    <div class="form-group">
        <label for="size">Size:</label>
        <input type="text" class="form-control" id="size" name="size">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>

  </form>
@endsection