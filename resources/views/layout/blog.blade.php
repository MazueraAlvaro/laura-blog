<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog de Laura</title>

  <!-- Bootstrap core CSS -->
<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  @yield('css')
</head>

<body>

  <!-- Navigation -->
  @include('layout.navbar')

  <!-- Page Content -->
  <div class="container">

    @yield("container")

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Blog de Laura 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  @yield('js')
</body>

</html>
