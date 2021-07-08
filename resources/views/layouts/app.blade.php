<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tienda Sube - Administrador</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}} ">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Tienda Sube - Administrador
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Panel Admin</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/productos/admin">Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/mensajes/admin">Mensajes</a>
                </li>
            </ul>
            @yield('content')
            @yield('adminProductos')
        </main>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>

<!-- Modal agregar un nuevo Producto -->
<div class="modal fade" id="ModalAgregarProducto" tabindex="-1" aria-labelledby="ModalAgregarProductoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title col text-center" id="ModalAgregarProductoLabel">Agregar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form class="p-4 shadow rounded bg-light bg-gradien" class="shadow" action="/productos" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                    <label for="inputNombre" class="col-12 col-form-label">Nombre</label>
                    <div class="col-12">
                      <input required type="text" name="nombre" class="form-control" id="inputNombre">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPrecio" class="col-12 col-form-label">Precio</label>
                    <div class="col-12">
                      <input required type="number" lang="en" name="precio" class="form-control" id="inputPrecio" min="0" value="0" step="0.01">
                    </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputDetalle" class="col-12 col-form-label">Detalle</label>
                      <div class="col-12">
                        <textarea required type="detalle" name="detalle" class="form-control" id="inputDetalle"></textarea>
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputImagen" class="col-12 col-form-label">Imagen</label>
                    <div class="col-12">
                      <input required type="file" name="imagen" class="form-control" id="inputImagen">
                    </div>
                  </div>
                  <div class="row mb-3">
                  <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-light">Guardar</button>
                  </div>
                  </div> 
              </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
