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
    <nav class="blue">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo">Curso Laravel</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="">Carrinho</a></li>
          </ul>
        </div>
    </nav>
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
