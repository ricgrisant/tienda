<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tienda Sube</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/main.css')}} ">
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <span class="brand-name">Tienda Sube</span> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">
                                <span>Productos</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/mensajes/crear">
                                <span>Contáctanos</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <span>Administrar</span> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main" style="height: 100%">
            @yield('productos')

            @yield('contacto')
        </div>
        

        <footer>
            <div class="container">
                <div class="row redes">
                    <div class="col m-2">
                        <i class="fab fa-instagram fa-lg"></i>
                    </div>
                    <div class="col m-2">
                        <i class="fab fa-facebook fa-lg"></i>
                    </div>
                    <div class="col m-2">
                        <i class="fab fa-twitter fa-lg"></i>
                    </div>
                </div>

                <div class="row">
                    <div class="col m-auto">
                        Copyright 2021
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <script>
            // Recibir la data de manera dinamica con jquery
            $(document).ready(function () {
                $('.btn-detalleProducto').click(function (e) {
                    //Obtenemos el id del producto a mostrar de manera dinamica
                    //Enviado del botón ver detalle 
                    const idProducto = $(this).attr('data-id');

                    $.ajax({
                        type: "GET",
                        url: "/productos/" + idProducto,
                        data: {
                            "id": idProducto
                        },
                        success: function (datos) {
                            $('.modal-title').html(datos.nombre);
                            $('.img-producto').attr("src",'uploads/img/productos/' + datos.url_imagen);
                            $('.precio').html('L.' + datos.precio);
                            $('.descripcion').html(datos.detalle);
                        }
                    });
                });
            });
        </script>
    </body>
</html>

<!-- Modal detalle de Productos -->
<div class="modal fade" id="ModalDetalleProductos" tabindex="-1" aria-labelledby="ModalDetalleProductosLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title col text-center" id="ModalDetalleProductosLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
              <div class="row">
                  <img class="img-producto img-fluid" src="" alt="producto">
              </div>
              <div class="row">
                  <h1 class="precio m-2"></h1>
              </div>
              <div class="row">
                <p class="descripcion m-2"></p>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>