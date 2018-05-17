<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="<?= url('css/XXXX.css');?>">
        <link rel="stylesheet" href="<?= url('css/XXX.css');?>">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="<?= url('index');?>">MP</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?= url('preguntas');?>">Preguntas</a>

              @if(Auth::check())
              <li class="nav-item">
                Bienvenido {{ Auth::user()->name }} (
                  <a href="{{ route('auth.logout') }}">Cerrar Sesión</a>
                )
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
              </li>
              @endif
          </div>
        </nav>
        <main id="main-content" class="container">
        <?php
        // Con @ empiezan todas las "directivas" de
        // Laravel.
        // yield permite definir un espacio para que
        // los templates que "extiendan" (es decir, se
        // se basen) en este layout, puedan utilizar
        // para su propio contenido.
        // El parámetro, es el nombre que queremos
        // asignarle a ese espacio.
        ?>
            @yield('contenido')
        </main>
        <footer id="main-footer">
            <p>Holi, soy un footer</p>
            <p>¯\_(ツ)_/¯</p>
        </footer>
        <script src="<?= url('js/app.js');?>"></script>
    </body>
</html>
