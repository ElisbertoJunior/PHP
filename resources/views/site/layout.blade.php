<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>



    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriesMenu as $item)
            <li><a href="{{ route('site.categories', $item->id) }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>

    <nav class="blue">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo">Curso Laravel</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="#" class="dropdown-trigger" data-target="dropdown1">Categorias <i class="material-icons right">expand_more</i></a></li>
            <li><a href="{{ route('site.cart') }}">Carrinho
                <span class="new badge white" style="color: rgb(105, 105, 226); border-radius: 70px; font-weight: 700;" data-badge-caption="">
                    {{ \Cart::getContent()->count() }}
                </span>
                 </a>
            </li>
          </ul>
        </div>
    </nav>
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        var elemDrop = document.querySelectorAll('.dropdown-trigger');
        var instanceDrop = M.Dropdown.init(elemDrop, {
            coverTrigger: false,
            constrainWidth: false
        });




    </script>
</body>
</html>
