<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body >
    <nav style="background-color: #3f3e3e; margin-bottom: 15px">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">Laravel automação</a>
          <ul id="nav-mobile" class="left">
            <li><a href="#"></a>Home</li>
            <li><a href="#">Carinho</a></li>
          </ul>
        </div>
      </nav>
    @yield('conteudo')

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>
</html>
