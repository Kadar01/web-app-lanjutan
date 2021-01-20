@extends('template')
@section('title', 'UTS WEB LANJUT')
 
@section('intro-header')

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UTS WEB LANJUT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Teknik Informatika</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END : Navigation -->

    <!-- Header -->
    <header class="intro-header text-white" style="background: url('{{ asset('style/images/home-bg.jpg')}}'') no-repeat bottom center;">
      <div class="container text-center">
        <h1>Belajar Koding Mulai Dari Nol</h1>
        <p class="lead">Bangun karir Kamu di bidang kreatif digital untuk menjadi seorang profesional</p>
      </div>
    </header>
    <!-- END : Header -->
    <div class="container">
    
    </div>

    <!-- Main -->
    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Halaman Homepage</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END : Main -->

    <!-- Footer -->
    <footer class="py-5 bg-info">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Belajar Koding 2018</p>
      </div>
    </footer>
    <!-- END : Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('style/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
@endsection