@extends('site.layout')

@section('title', 'Detalhes')

@section('content')

<div class="row container"> <br>
    <div class="col s12 m6">
        <img src="{{ $product->image }}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h4>{{ $product->name }}</h4>
        <h4>R$ {{ number_format($product->price, 2, ',', '.') }}</h4> 
        <p>{{ $product->descrption }}</p>
        <p>Postado por: {{ $product->user->firstName }}</p>
        <p>Categoria: {{ $product->category->name }}</p>
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>


@endsection
