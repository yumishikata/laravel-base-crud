@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <a href="{{ route('products.create') }} " class="btn btn-primary"> Inserisci nuovo prodotto</a>
    <h2>Lista dei nostri prodotti:</h2>
   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Season</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            
        @foreach ($products as $product)
            <tr>
              <th scope="row"> {{ $product['id'] }}</th>
              <td>{{ $product['name'] }}</td>
              <td>{{ $product['color'] }}</td>
              <td>{{ $product['size'] }}</td>
              <td>{{ $product['season'] }}</td>
              <td>
                  <a href="{{ route('products.show', ['product' => $product['id']]) }}" class="btn btn-info">Dettagli</a>
              </td>

            </tr>
        @endforeach
        </tbody>
      </table>

    
@endsection