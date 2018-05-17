<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="<?= url('css/app.css');?>">
    <link rel="stylesheet" href="<?= url('css/style.css');?>">
    <link rel="stylesheet" href="<?= url('css/fonts/stylesheet.css');?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?= url('index');?>">MP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= url('preguntas');?>">Preguntas</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
          <li class="nav-item">
            <p>{{ Auth::user()->name }} <a class="nav-link" href="{{ route('auth.logout') }}">Desloguame</a></p>
            
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Logueame</a>
          </li>
          @endif
        </ul>
      </div>
    </nav>
    
    <main id="main-content">
      <?php
      ?>
      @yield('contenido')
    </main>
    <!--<footer>
      <p>Holi, soy un footer</p>
      <p>¯\_(ツ)_/¯</p>
    </footer>-->
    <script src="<?= url('js/app.js');?>"></script>
  </body>
</html>