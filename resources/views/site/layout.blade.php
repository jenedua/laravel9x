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
    <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    @foreach ($categoriasMenu as $categoriaM )
        
    <li><a href="{{route('site.categoria', $categoriaM->id )}}">{{ $categoriaM->nome }}</a></li>
    @endforeach
    
  </ul>
    <nav style=" margin-bottom: 15px">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">Laravel automação</a>
          <ul id="nav-mobile" class="left">
            <li><a href="{{route('site.index')}}">Home</a></li>
            <li><a href="#" class="dropdown-trigger" data-target='dropdown1'>Categerias <i class="material-icons right">expand_more</i></a></li>
            <li><a href="{{route('site.carinho')}}">Carinho</a></li>
          </ul>
        </div>
      </nav>
    @yield('conteudo')

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, {
                coverTrigger: false,
                constrainWith:false
            });
        });

        // var elemDrop = document.querySelectorAll('.dropdown-trigger');
        // var instanceDrop = M.Dropdown.init(elemDrop,{
        //     coverTrigger: false,
        //     constrainWith:false
        // })
    </script>
            
</body>
</html>
