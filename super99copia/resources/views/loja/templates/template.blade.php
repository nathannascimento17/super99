<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Loja Super 99</title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="{{url('assests/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('assets/css/shop-homepage.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/sho-style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Loja Super 99</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Pagina Inicial
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Quem Somos</a>
          </li>
          @if(auth()->check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">Acessar Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">Carrinho</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">Entrar</a>
          </li>
          @endif
          @if(auth()->check())
          <li class="nav-item">
            <a class="nav-link" href="{{url('logout')}}">Sair</a>
          </li>
          @else
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <section class="content">
    @yield('content')
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-primary fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Nathan Nascimento Levinski 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <style>
    section {
      margin-top: 25px;
    }
  </style>


</body>

</html>