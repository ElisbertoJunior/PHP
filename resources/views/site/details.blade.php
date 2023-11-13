@extends('site.layout')

@section('title', 'Detalhes')

@section('content')

<div class="row container">
    <div class="col s12 m6">
        <img src="{{ $product->image }}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->descrption }}</p>
        <p>Postado por: {{ $product->user->firstName }}</p>
        <p>Categoria: {{ $product->category->name }}</p>
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>


@endsection
