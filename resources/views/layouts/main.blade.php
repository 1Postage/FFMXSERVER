<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FFMX</title>

    <!-- Styles -->
    <!-- Bootstrap core CSS -->
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    @yield('style')

</head>
<body> 

    <div class="">
        <!-- Static navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <!-- Branding Image -->
                  <a class="navbar-brand title" href="{{ url('/') }}">
                    HackITL
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Home</a></li>


                    <!-- DROPDOWN USUARIOS -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('register_usuario')}}">Registrar</a></li>
                            <li><a href="{{route('view_usuario')}}">Ver</a></li>
                        </ul>
                    </li><!-- DROPDOWN USUARIOS -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('view_pedido')}}">Pedidos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('view_articulos')}}">Articulos</a>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          </div>
      </div>
  </nav>
  <br>

  <div class="container">

    <div >

        @yield('content')

    </div>

</div>

</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    Latest compiled and minified JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    @yield('scripts')


    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
</body>
</html>