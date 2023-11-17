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

        <form action="{{ route('site.addCart') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <input type="number" name="qnt" min="1" value="1">
            <input type="hidden" name="img" value="{{ $product->image }}">
            <button type="submit" class="btn orange btn-large">Comprar</button>
        </form>
    </div>
</div>


@endsection
