<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>BLOGTOK</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">

    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      main > .container {  padding: 60px 15px 0; }

    </style>

    
  </head>
  <body class="d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">#</a>
      

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Теги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>

        </ul>
        
       <!-- Этот блок расположен слева -->

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

            <!-- Этот блок расположен справа -->
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.login') }}">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.register') }}">Регистрация</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">Личный кабинет</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.logout') }}">Выйти</a>
                    </li>
                @endif
            </ul>



      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
 
  <div class="container">
 
    <div class="row">
        <div class="col-md-3">
            <h4>Категории блога</h4>
            <p>Здесь будут категории блога</p>
            <h4>Популярные теги</h4>
            <p>Здесь будут популярные теги</p>
        </div>
        <div class="col-md-9">
          <!-- "планка" siccess сообщений в контенте -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible mt-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $message }}
                </div>
            @endif

            <!-- "планка" error сообщений в контенте -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible mt-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </div>



  </div>






</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

      
  </body>
</html>
