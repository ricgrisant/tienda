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
                    <span class="brand-name">Tienda Sube<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                      </svg></span> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/restaurants">
                                <span>Contáctanos</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/restaurants/create">
                                <span>Administrar</span> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main" style="height: 100%">
            @yield('productos')
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
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>