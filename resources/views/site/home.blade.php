@extends('site.layout')

@section('title', 'Home')

@section('content')

<style>
    .card-custom {
        height: 150px;
        overflow: hidden; /* Para garantir que o conteúdo que ultrapassa a altura máxima seja oculto */
    }
</style>

<div class="row container ">
@foreach ($products as $product)
    <div class="col s12 m4">
        <div class="card ">
            <div class="card-image">
              <img src="{{ $product->image }}">
              <a href="{{ route('site.details', $product->slug) }}" class="blue btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
            </div>
            <div class="card-content card-custom">
                <span class="card-title">{{ $product->name }}</span>
              <p class="text-red">{{Str::limit( $product->description, 50) }}</p>
            </div>
          </div>
    </div>
@endforeach
</div>

<div class="row center">
    {{ $products->links('custom.pagination') }}
</div>
@endsection
