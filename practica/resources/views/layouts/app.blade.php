<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  <!-- Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
  
<!-- Navbar -->
<header>
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <ul class="nav col-md-1 justify-content-end">
        <li class="nav-item"> <a href="{{ route('posts.index') }}" class="nav-link px-2 text-muted">Home</a></li>
        <i class="fa-sharp fa-thin fa-house"></i>
        <li class="nav-item"> <a href="{{route('posts.create')}}" class="nav-link px-2 text-muted">Crear</a></li>
      </ul>
       <!-- <a class="navbar-brand mb-0 h1" href="{{ route('posts.index') }}">Barra de navegación </a>-->
       
    </div>
  </nav>
</header>


<body>
  @yield('content') <!--el contenido dinámico se renderiza desde otros archivos Blade con la ayuda de @yield('content') -->
</body>


<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
  <div class="container d-lg-flex justify-content-between">
    <span class="mb-3 mb-md-0 text-muted">Mini-Blog © 2024</span>

  </div>
  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
  </ul>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>