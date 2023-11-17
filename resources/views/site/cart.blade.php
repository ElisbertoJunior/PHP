@extends('site.layout')

@section('title', 'Carrinho')

@section('content')

    <style>
        .card-custom {
            height: 150px;
            overflow: hidden;
            /* Para garantir que o conteúdo que ultrapassa a altura máxima seja oculto */
        }
    </style>

    <div class="row container ">

        @if ($message = Session::get('success'))
            <div class="card green">
                <div class="card-content white-text">
                    <span class="card-title">Sucesso!</span>
                    <p>{{ $message }}</p>
                </div>
            </div>
        @endif

        @if ($message = Session::get('warn'))
            <div class="card blue">
                <div class="card-content white-text">
                    <span class="card-title">Tudo bem!</span>
                    <p>{{ $message }}</p>
                </div>
            </div>
        @endif

        @if ($items->count() == 0)
            <div class="card blue">
                <div class="card-content white-text">
                    <span class="card-title">Seu carrinho esta vazio!</span>
                    <p>Aproveite nossas promoções!</p>
                </div>
            </div>
        @else
            <h5>Seu carrinho possui {{ $items->count() }} produtos </h5>
            <table class="striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><img class="responsive-img circle" width="70" src="{{ $item->attributes->image }}"
                                    alt="Imagem do Produto"></td>
                            <td>{{ $item->name }}</td>
                            <td>R$ {{ number_format($item->price, 2, ',', '.') }}</td>

                            {{-- BTN ATUALIZAR --}}
                            <form action="{{ route('site.updateCart') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <td>
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="number" class="white center" min="1" style="width: 40px; font-weight: 700;"
                                        name="quantity" value="{{ $item->quantity }}">
                                </td>
                                <td>
                                    <button class="btn-floating waves-effect waves-light blue"><i
                                            class="material-icons">refresh</i></button>
                            </form>

                            {{-- BTN DELETAR --}}
                            <form action="{{ route('site.deleteCart') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button class="btn-floating waves-effect waves-light red"><i
                                        class="material-icons">delete</i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="card green">
                <div class="card-content white-text">
                    <span class="card-title">R$ {{ number_format(\Cart::getTotal(), 2, ',', '.') }}</span>
                    <p>Pague em até 12 vezes sem juros!</p>
                </div>
            </div>

            <div class="row container center">
                <a href="/" class="btn waves-effect waves-light blue">Continuar comprando<i
                        class="material-icons right">arrow_back</i></a>
                <a href="{{ route('site.clearCart') }}" class="btn waves-effect waves-light red">Limpar carrinho<i
                        class="material-icons right">clear</i></a>
                <button class="btn waves-effect waves-light green">Finalizar pedido<i
                        class="material-icons right">check</i></button>
            </div>
        @endif

    </div>

@endsection
