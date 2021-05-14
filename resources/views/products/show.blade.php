@extends('layouts.app')

@section('title', 'Detail')

@section('content')
    <h1>Dettaglio del singolo vestito</h1>

    <p> Descrizione: {{ $product['description'] }}</p>
    <p> Price: {{ $product['price'] }}</p>
@endsection